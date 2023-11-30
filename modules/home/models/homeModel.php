<?php
function sanphamhot()
{
  $listProduct = db_fetch_array("SELECT * FROM `sanpham` LIMIT 0, 6");
  foreach ($listProduct as &$item) {
    $item['urlDetail'] = "?mod=products&act=detail&id={$item['id']}";
    $item['urlBuynow'] = "?mod=checkout&act=add&id={$item['id']}";
    $item['urlAddCart'] = "?mod=cart&act=add&id={$item['id']}";
  }
  return $listProduct;
}
function sanphammoi()
{
  $listProduct = db_fetch_array("SELECT * FROM `sanpham` LIMIT 0, 4");
  foreach ($listProduct as &$item) {
    $item['urlDetail'] = "?mod=products&act=detail&id={$item['id']}";
    $item['urlBuynow'] = "?mod=checkout&act=add&id={$item['id']}";
    $item['urlAddCart'] = "?mod=cart&act=add&id={$item['id']}";
  }
  return $listProduct;
}
function getUserInfo($username)
{
  return db_fetch_row("SELECT * FROM `khachhang` WHERE `ten_dang_nhap` = '{$username}'");
}
function sanphamdanhmuc($id)
{
  $listProduct =  db_fetch_array("SELECT * FROM `sanpham` WHERE `ma_danh_muc` = '{$id}'");
  foreach ($listProduct as &$item) {
    $item['urlDetail'] = "?mod=products&act=detail&id={$item['id']}";
    $item['urlBuynow'] = "?mod=checkout&act=add&id={$item['id']}";
    $item['urlAddCart'] = "?mod=cart&act=add&id={$item['id']}";
  }
  return $listProduct;
}
