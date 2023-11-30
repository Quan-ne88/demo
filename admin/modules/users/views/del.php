<?php
$userID = isset($_GET['del_id']) ? (int)$_GET['del_id'] : "";
$roles = db_fetch_row("SELECT * FROM `khachhang` WHERE `id` = '{$userID}'");
if ((int)$roles['ma_vai_tro'] === 1) {
  echo "<script>";
  echo "alert('Đây là admin, không thể ngưng hoạt động')";
  echo "</script>";
} else {
  db_update("khachhang", array("kich_hoat" => '2'), "`id` = '{$userID}'");
  echo "<script>";
  echo "alert('Ngưng hoạt động tài khoản thành công')";
  echo "</script>";
}
