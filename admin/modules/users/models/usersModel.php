<?php
function getListUsers()
{
  $list = db_fetch_array("SELECT * FROM `khachhang`");
  foreach ($list as &$item) {
    $item['urlDelete'] = "?mod=users&act=del&del_id={$item['id']}";
    $item['urlAdd'] = "?mod=users&act=add";
    $item['urlEdit'] = "?mod=users&act=edit&edit_id={$item['id']}";
  }
  return $list;
}
function getListRoles()
{
  return db_fetch_array("SELECT * FROM `vaitro`");
}
function getUserInfo($id)
{
  $user = db_fetch_row("SELECT * FROM `khachhang` WHERE `id` = '{$id}'");
  return $user;
}
function getUserInfoByUsername($username)
{
  $user = db_fetch_row("SELECT * FROM `khachhang` WHERE `ten_dang_nhap` = '{$username}'");
  return $user;
}
function checkLogin($username, $password)
{
  $checkUser = db_num_rows("SELECT * FROM `khachhang` WHERE `ten_dang_nhap` = '{$username}' AND `mat_khau` = '{$password}' AND `ma_vai_tro` = '1'");
  if ($checkUser > 0) {
    return true;
  }
  return false;
}
function checkLogoutUser($username)
{
  $item = db_num_rows("SELECT * FROM `khachhang` WHERE `ten_dang_nhap` = '{$username}' AND `ma_vai_tro` = '1'");
  if ($item > 0) {
    return true;
  }
  return false;
}
function infoUserLogin($username, $password)
{
  $user = db_fetch_row("SELECT * FROM `khachhang` WHERE `ten_dang_nhap` = '{$username}' AND `mat_khau` = '{$password}'");
  return $user;
}
function userExists($username, $email)
{
  $checkUser = db_num_rows("SELECT * FROM `khachhang` WHERE `email` = '{$email}' OR `ten_dang_nhap` = '{$username}'");
  if ($checkUser > 0) {
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
