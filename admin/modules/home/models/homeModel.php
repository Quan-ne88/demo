<?php
function checkRoles($username)
{
  $check = db_fetch_row("SELECT * FROM `khachhang` WHERE `ten_dang_nhap` = '{$username}'");
  return $check;
}
function checkLogoutUser($username)
{
  $item = db_num_rows("SELECT * FROM `khachhang` WHERE `ten_dang_nhap` = '{$username}' AND `ma_vai_tro` = '1'");
  if ($item > 0) {
    return true;
  }
  return false;
}
