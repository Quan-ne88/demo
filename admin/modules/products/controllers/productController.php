<?php
require "modules/products/models/productsModel.php";
function updateProduct($productName, $productCategory, $productImage, $productDesc,  $productPrice, $productDiscount, $id)
{
  $productInfo = getProductInfo($id);
  $productImg =  $productInfo['hinh_anh'];
  global $error, $notify, $thumb;
  if (isset($_POST['updateProduct'])) {
    $error = array();
    if (empty($productName)) {
      $error['name'] = "Không được để trống tên sản phẩm";
    } else {
      $productName = htmlspecialchars($productName);
    }
    if (empty($productCategory)) {
      $error['category'] = "Không được để trống tên danh mục";
    } else {
      $productCategory = htmlspecialchars($productCategory);
    }
    if (isset($productImage) && !empty($productImage['full_path'])) {
      $dir = "assets/img/products/";
      $fileName = $dir . $productImage['name'];
      $tmpName = $productImage['tmp_name'];
      $thumb = $productImage['full_path'];
      if (move_uploaded_file($tmpName, $fileName)) {
        $notify['file'] = "Upload thành công";
      } else {
        $error['file'] = "Upload thất bại";
      }
    } else {
      $thumb = $productImg;
    }
    if (empty($productDesc)) {
      $error['desc'] = "Không được để trống mô tả sản phẩm";
    } else {
      $productDesc = htmlspecialchars($productDesc);
    }
    if (empty($productPrice)) {
      $error['code'] = "Không được để trống giá sản phẩm";
    } else {
      $productPrice = htmlspecialchars($productPrice);
    }
    if (empty($productDiscount)) {
      $error['quantity'] = "Không được để trống giá khuyến mãi";
    } else {
      $productDiscount = htmlspecialchars($productDiscount);
    }
    # Final 
    if (empty($error)) {
      $data = [
        'ten' => $productName,
        'ma_danh_muc' => $productCategory,
        'mo_ta' => $productDesc,
        'gia' => $productPrice,
        'giam_gia' => $productDiscount,
        'hinh_anh' => $thumb,
      ];
      updateProductToDB($data, $id);
      $notify['update'] = "Cập nhật thành công";
    } else {
      $error['update'] = "Cập nhật thất bại";
    }
  }
}
function addProduct($productName, $productCategory, $productImage, $productDesc,  $productPrice, $productDiscount)
{
  global $error, $notify, $thumb;
  if (isset($_POST['addProduct'])) {
    $error = array();
    if (empty($productName)) {
      $error['name'] = "Không được để trống tên sản phẩm";
    } else {
      $productName = htmlspecialchars($productName);
    }
    if (empty($productCategory)) {
      $error['category'] = "Không được để trống tên danh mục";
    } else {
      $productCategory = htmlspecialchars($productCategory);
    }
    if (isset($productImage) && !empty($productImage['full_path'])) {
      $dir = "assets/img/products/";
      $fileName = $dir . $productImage['name'];
      $tmpName = $productImage['tmp_name'];
      $thumb = $productImage['full_path'];
      if (move_uploaded_file($tmpName, $fileName)) {
        $notify['file'] = "Upload thành công";
      } else {
        $error['file'] = "Upload thất bại";
      }
    } else {
      $error['file'] = "Phải chọn 1 file ảnh";
    }
    if (empty($productDesc)) {
      $error['description'] = "Không được để trống mô tả sản phẩm";
    } else {
      $productDesc = htmlspecialchars($productDesc);
    }
    if (empty($productPrice)) {
      $error['price'] = "Không được để trống giá sản phẩm";
    } else {
      $productPrice = htmlspecialchars($productPrice);
    }
    if (empty($productDiscount)) {
      $productDiscount = 0;
    } else {
      $productDiscount = htmlspecialchars($productDiscount);
    }
    # Final 
    if (empty($error)) {
      $data = [
        'ten' => $productName,
        'ma_danh_muc' => $productCategory,
        'mo_ta' => $productDesc,
        'gia' => $productPrice,
        'giam_gia' => $productDiscount,
        'hinh_anh' => $thumb,
      ];
      addProductToDB($data);
      $notify['update'] = "Thêm thành công";
    } else {
      $error['update'] = "Thêm thất bại";
    }
  }
}
function getNameCategory($catID)
{
  $catID = (int)$catID;
  $str = "";
  switch ($catID) {
    case 1:
      $str = 'Điện thoại';
      break;
    case 2:
      $str = 'Laptop';
      break;
    default:
      $str = 'Không danh mục';
      break;
  }
  return $str;
}
