<?php
require "thuvien/validation.php";
require "modules/products/models/productsModel.php";
function thembinhluan($comment, $id, $productID)
{
  global $error, $notify;
  if (isset($_POST['btn-comment'])) {
    $error = [];
    $notify = [];
    if (empty($comment)) {
      $error['comment'] = "Không được để trống nội dung";
    } else {
      $comment = htmlspecialchars($comment);
    }
    if (empty($error)) {
      $data = [
        'ma_khach_hang' => $id,
        'ma_san_pham' => $productID,
        'noi_dung' => $comment
      ];
      thembl($data);
      $notify['add'] = "Bình luận thành công";
    } else {
      $error['add'] = "Bình luận thất bại";
    }
  }
}
