<?php
require "modules/checkout/models/checkoutModel.php";
if (isset($_GET['id'])) {
  $productID = (int)$_GET['id'];
  $productInfo = laysanpham($productID);
  $qty = 1;
  if (isset($_SESSION['cart']['buy']) && array_key_exists($productID, $_SESSION['cart']['buy'])) {
    $qty = $_SESSION['cart']['buy'][$productID]['qty'] + 1;
  }
  $_SESSION['cart']['buy'][$productID] = array(
    'id' => $productID,
    'name' => $productInfo['name'],
    'product_category' => $productInfo['category_id'],
    'description' =>  $productInfo['description'],
    'price' =>  $productInfo['price'],
    'image' =>  $productInfo['image'],
    'qty' => $qty,
    'sub_total' => $qty * $productInfo['price'],
  );
  foreach ($_SESSION['cart']['buy'] as &$item) {
    $item['deleteCart'] = "?mod=cart&act=delete&id={$item['product_id']}";
  }
  updateInfoCart();
}
updateInfoCart();
function updateInfoCart()
{
  if (empty($_SESSION['cart'])) return false;
  $num_order = 0;
  $total = 0;
  foreach ($_SESSION['cart']['buy'] as $item) {
    $num_order += $item['qty'];
    $total += $item['sub_total'];
  };
  $_SESSION['cart']['info'] = array(
    'num_order' => $num_order,
    'total' => $total
  );
}
redirect_to("?mod=checkout&act=main");
