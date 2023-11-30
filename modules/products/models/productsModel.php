<?php
function tatcasanpham()
{
  $listProduct = db_fetch_array("SELECT * FROM `sanpham`");
  foreach ($listProduct as &$item) {
    $item['urlDetail'] = "?mod=products&act=detail&id={$item['id']}";
    $item['urlBuynow'] = "?mod=checkout&act=add&id={$item['id']}";
    $item['urlAddToCart'] = "?mod=cart&act=add&id={$item['id']}";
  }
  return $listProduct;
}
function sanphamtheoid($id)
{
  $product = db_fetch_row("SELECT * FROM `sanpham` WHERE `id` = '{$id}'");
  $product['addCart'] = "?mod=cart&act=add&id={$product['id']}";
  $product['productPage'] = "?mod=products&act=main";
  $product['currentProduct'] = "?mod=products&act=detail&id={$product['id']}";
  $product['urlAddToCart'] = "?mod=cart&act=add&id={$product['id']}";
  $product['urlBuynow'] = "?mod=checkout&act=add&id={$product['id']}";
  return $product;
}
function sanphamtheodanhmuc($id)
{
  $listProduct = db_fetch_array("SELECT * FROM `sanpham` WHERE `ma_danh_muc` = '{$id}'");
  foreach ($listProduct as &$item) {
    $item['urlDetail'] = "?mod=products&act=detail&id={$item['id']}";
    $item['urlBuynow'] = "?mod=checkout&act=add&id={$item['id']}";
    $item['urlAddToCart'] = "?mod=add&act=add&id={$item['id']}";
  }
  return $listProduct;
}
function thongtinnguoidung($username)
{
  return db_fetch_row("SELECT * FROM `khachhang` WHERE `ten_dang_nhap` = '{$username}'");
}
function thembl($data)
{
  return db_insert("binhluan", $data);
}
function danhsachbinhluan()
{
  return db_fetch_array("SELECT c.*, u.ten_dang_nhap FROM `binhluan` as c INNER JOIN `khachhang` as u ON c.ma_khach_hang = u.id");
}
function danhsachdanhmuc()
{
  return db_fetch_array("SELECT * FROM `danhmuc`");
}
