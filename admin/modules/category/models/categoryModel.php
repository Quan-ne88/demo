<?php
function getListCategory()
{
  return db_fetch_array("SELECT * FROM `danhmuc`");
}
function getCategoryByID($id)
{
  return db_fetch_row("SELECT * FROM `danhmuc` WHERE `id` = '{$id}'");
}
function updateCategoryById($data, $id)
{
  return db_update("danhmuc", $data, "`id` = '{$id}'");
}
function addCategoryToDB($data)
{
  return db_insert("danhmuc", $data);
}
