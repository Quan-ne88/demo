<?php
function laykhachhang()
{
  $username = setNameForUser();
  $user = db_fetch_row("SELECT * FROM `khachhang` WHERE `ten_dang_nhap` = '{$username}'");
  return $user;
}
function themdh($data)
{
  return db_insert("donhang", $data);
}
function danhsachdonhang()
{
  $list = db_fetch_array("SELECT * FROM `donhang`");
  $end = end($list);
  return $end;
}
function danhsachdh () {
  $list = db_fetch_array("SELECT * FROM `donhang`");
  return $list;
}

function themdonhangchitiet($data)
{
  return db_insert("donhangchitiet", $data);
}
function laysanpham($id)
{
  $item = db_fetch_row("SELECT * FROM `sanpham` WHERE `id` = '{$id}'");
  $item['urlAddToCart'] = "?mod=cart&act=add&id={$id}";
  $item['urlDetail'] = "?mod=products&act=detail&id={$id}";
  return $item;
}
function chitietdonhang($id) {
  $chitiet = db_fetch_row("SELECT *, p.ten, p.gia, p.hinh_anh FROM `donhangchitiet` AS dc INNER JOIN `sanpham` AS p ON dc.ma_san_pham = p.id
  WHERE `ma_don_hang` = '{$id}'");
  return $chitiet;
}