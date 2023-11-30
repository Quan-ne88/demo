<?php
require "thuvien/validation.php";
require "modules/checkout/models/checkoutModel.php";
function themdonhang($fullname, $email, $phoneNumber, $address)
{
  global $error;
  if (empty($_SESSION['cart'])) {
    redirect_to("?mod=checkout&act=main");
    return;
  }
  if (!empty($_SESSION['cart']['buy'])) {
    $listOrders = $_SESSION['cart']['buy'];
    $userInfo = laykhachhang();
    $userID = $userInfo['id'];
  }
  if (isset($_POST['placeorder-btn'])) {
    $error = array();
    if (empty($fullname)) {
      $error['fullname'] = "Không được để trống họ tên";
    } else {
      $fullname = $_POST['fullname'];
    }
    if (empty($email)) {
      $error['email'] = "Không được để trống email";
    } else {
      if (!is_email($email)) {
        $error['email'] = "Email không đúng định dạng";
      } else {
        $email = $_POST['email'];
      }
    }
    if (empty($phoneNumber)) {
      $error['phone'] = "Không được để trống số điện thoại";
    } else {
      if (!is_tel($phoneNumber)) {
        $error['phone'] = "Số điện thoại không đúng định dạng";
      } else {
        $phone = $_POST['phone'];
      }
    }
    if (empty($address)) {
      $error['address'] = "Không được để trống địa chỉ";
    } else {
      $address = $_POST['address'];
    }
    # Final
    if (empty($error)) {
      foreach ($listOrders as $item) {
        $data = [
          'ma_khach_hang' => $userID,
          'ho_va_ten' => $fullname,
          'dia_chi' => $address,
          'email' => $email,
          'so_dien_thoai' => $phone,
          'trang_thai' => 1
        ];
      }
      themdh($data);
      function kiemtradonhangtontai($order_ids)
      {
        $query = db_query("SELECT COUNT(*) as `count` FROM `donhangchitiet` WHERE `ma_don_hang` = '{$order_ids}'");
        $result = mysqli_fetch_assoc($query);
        if ($result['count'] > 0) {
          return true;
        }
        return false;
      }
      $danhsachdonhang = danhsachdh();
      foreach ($danhsachdonhang as $id) {
        $order_ids = $id['id'];
        $order_exists = kiemtradonhangtontai($order_ids);
        if (!$order_exists) {
          foreach ($listOrders as $item) {
            $data_order = [
              'ma_don_hang' => $order_ids,
              'ma_san_pham' =>  $item['id'],
              'so_luong' => $item['qty'],
              'don_gia' => $item['price'],
            ];
            themdonhangchitiet($data_order);
          }
        }
      }
      unset($_SESSION['cart']);
      redirect_to("?mod=checkout&act=thank");
    }
  }
}
