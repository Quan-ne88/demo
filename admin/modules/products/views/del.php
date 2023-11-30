<?php
$productID = isset($_GET['id']) ? (int)$_GET['id'] : "";
db_delete("sanpham", "`id` = '{$productID}'");
?>
<h1>Xoá thành công sản phẩm, chờ một lát để quay trở lại trang sản phẩm</h1>
<script>
  setTimeout(() => {
    window.history.back()
  }, 1000);
</script>