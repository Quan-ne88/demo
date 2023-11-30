<?php
getHeader("layout/header.php");
require "modules/products/controllers/productController.php";
$listProduct = getlistProduct();
?>
<!--Main layout-->
<div id="wrapper">
  <?php require "layout/sidebar.php"; ?>
  <main id="mainWrapper">
    <h2 class="mainWrapper-heading">Quản lý sản phẩm</h2>
    <div class="container pt-4" id="main-content">
      <div class="row">
        <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-header">
              <span><i class="bi bi-table me-2"></i></span> Danh sách sản phẩm
            </div>
            <div class="card-body" style="padding: 0;">
              <div class="table-responsive">
                <table id="table" class="table table-striped data-table" style="width: 100%">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Tên sản phẩm</th>
                      <th>Danh mục</th>
                      <th>Hình ảnh</th>
                      <th>Mô tả</th>
                      <th>Giá</th>
                      <th>Giá giảm</th>
                      <th>Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (!empty($listProduct)) {
                      foreach ($listProduct as $item) {
                    ?>
                        <tr>
                          <td><?php echo $item['id'] ?></td>
                          <td><?php echo $item['ten'] ?></td>
                          <td><?php echo getNameCategory($item['ma_danh_muc']); ?></td>
                          <td><img src="assets/img/products/<?php echo $item['hinh_anh'] ?>" style="width: 100px; height: 100px; object-fit: cover;" alt=""></td>
                          <td><?php echo $item['mo_ta'] ?></td>
                          <td><?php echo currency_format($item['gia']) ?></td>
                          <td><?php echo currency_format($item['giam_gia']) ?></td>
                          <td>
                            <a href="<?php echo $item['urlEdit'] ?>" class="btn btn-primary">Chỉnh sửa</a>
                            <a href="<?php echo $item['urlDelete'] ?>" class="btn btn-warning">Xoá</a>
                          </td>
                        </tr>
                    <?php  }
                    } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>
<!--Main layout-->
<?php
getFooter("layout/footer.php");
?>