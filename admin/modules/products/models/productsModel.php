<?php
function getlistProduct()
{
  $list = db_fetch_array("SELECT * FROM `sanpham`");
  foreach ($list as &$item) {
    $item['urlDelete'] = "?mod=products&act=del&id={$item['id']}";
    $item['urlEdit'] = "?mod=products&act=edit&edit_id={$item['id']}";
  }
  return $list;
}
function getProductInfo($id)
{
  $productInfo = db_fetch_row("SELECT * FROM `sanpham` WHERE `id` = '{$id}'");
  return $productInfo;
}
function getListCategory()
{
  return db_fetch_array("SELECT * FROM `danhmuc`");
}
function updateProductToDB($data, $id)
{
  return db_update("sanpham", $data, "`id` = '{$id}'");
}
function addProductToDB($data)
{
  return db_insert("sanpham", $data);
}
