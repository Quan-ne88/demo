<?php
require "modules/category/models/categoryModel.php";
function updateCategory($title, $id)
{
  global $error, $notify;
  if (isset($_POST['editCategory'])) {
    $error = [];
    $notify = [];
    if (empty($title)) {
      $error['title'] = "Không được để trống trường này";
    } else {
      $title = htmlspecialchars($title);
    }
    if (empty($error)) {
      $data = [
        'tieu_de' => $title,
      ];
      updateCategoryById($data, $id);
      $notify['update'] = "Cập nhật thành công";
    } else {
      $error['update'] = "Cập nhật thất bại";
    }
  }
}
function addCategory($title)
{
  global $error, $notify;
  if (isset($_POST['addCategory'])) {
    $error = [];
    $notify = [];
    if (empty($title)) {
      $error['title'] = "Không được để trống trường này";
    } else {
      $title = htmlspecialchars($title);
    }
    if (empty($error)) {
      $data = [
        'tieu_de' => $title,
      ];
      addCategoryToDB($data);
      $notify['update'] = "Thêm thành công";
    } else {
      $error['update'] = "Thêm thất bại";
    }
  }
}
