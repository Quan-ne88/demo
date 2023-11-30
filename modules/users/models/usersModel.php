<?php
function getListOrdersForUser($id)
{
  $list = db_fetch_array("SELECT o.*, od.don_gia, od.so_luong, p.hinh_anh FROM `donhang` AS o INNER JOIN `donhangchitiet` AS od ON o.id = od.ma_don_hang INNER JOIN `sanpham` AS p WHERE `ma_khach_hang` = '{$id}';");
  foreach ($list as &$item) {
    $item['urlPayment'] = "?mod=checkout&act=payment&id={$item['id']}";
  }
  return $list;
}
function getUserByUsername()
{
  $username = setNameForUser();
  $user = db_fetch_row("SELECT * FROM `khachhang` WHERE `ten_dang_nhap` = '{$username}'");
  return $user;
}
function addUser($data)
{
  return db_insert("khachhang", $data);
}
function userExists($username, $email)
{
  $checkUser = db_num_rows("SELECT * FROM `khachhang` WHERE `email` = '{$email}' OR `ten_dang_nhap` = '{$username}'");
  if ($checkUser > 0) {
    return true;
  }
  return false;
}
function checkLogin($username, $password)
{
  $checkUser = db_num_rows("SELECT * FROM `khachhang` WHERE `ten_dang_nhap` = '{$username}' AND `mat_khau` = '{$password}' AND `ma_vai_tro` = '2' AND `kich_hoat` = '1'");
  if ($checkUser > 0) {
    return true;
  }
  return false;
}
function checkAdminLogin($username, $password)
{
  $checkUser = db_num_rows("SELECT * FROM `khachhang` WHERE `ten_dang_nhap` = '{$username}' AND `mat_khau` = '{$password}' AND `ma_vai_tro` = '1' AND `kich_hoat` = '1'");
  if ($checkUser > 0) {
    return true;
  }
  return false;
}
function checkLogoutUser($username)
{
  $item = db_num_rows("SELECT * FROM `khachhang` WHERE `ten_dang_nhap` = '{$username}' AND `ma_vai_tro` = 2 AND `kich_hoat` = 1");
  if ($item > 0) {
    return true;
  }
  return false;
}
function isExistPassword($username, $password)
{
  $check = db_num_rows("SELECT * FROM `khachhang` WHERE `ten_dang_nhap` = '{$username}' AND `mat_khau` = '{$password}'");
  if ($check > 0) return true;
  return false;
}
function updatePassword($username, $data)
{
  return db_update("khachhang", $data, "`ten_dang_nhap` = '{$username}'");
}
function updateInfoUser($username, $data)
{
  return db_update("khachhang", $data, "`ten_dang_nhap` = '{$username}'");
}
