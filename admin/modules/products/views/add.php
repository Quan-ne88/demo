<?php
getHeader("layout/header.php");
require "modules/products/controllers/productController.php";
$listCategory = getListCategory();
if (isset($_POST['addProduct'])) {
  addProduct($_POST['name'], $_POST['category'], $_FILES['file'], $_POST['description'], $_POST['price'], $_POST['discount']);
}
?>
<!--Main layout-->
<div id="wrapper">
  <?php require "layout/sidebar.php"; ?>
  <main id="mainWrapper">
    <div class="container pt-4" id="main-content">
      <h2 class="mainWrapper-heading">Thêm sản phẩm</h2>
      <div class="row">
        <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-header">
              <span><i class="bi bi-table me-2"></i></span> Thêm sản phẩm
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <div class="mx-auto container">
                  <form action="" id="edit-form" enctype="multipart/form-data" method="post">
                    <div class="mb-3">
                      <label for="name" class="form-label">Tên sản phẩm</label>
                      <input type="text" class="form-control" value="" id="name" name="name">
                      <?php echo form_error("name") ?>
                    </div>
                    <div class="mb-3">
                      <label for="category">Danh mục</label>
                      <select class="form-select" name="category" id="category">
                        <?php if (!empty($listCategory)) {
                          foreach ($listCategory as $item) {
                        ?>
                            <option value="<?php echo $item['id'] ?>"><?php echo $item['tieu_de'] ?></option>
                        <?php  }
                        } ?>
                      </select>
                      <?php echo form_error("category") ?>
                    </div>
                    <div class="mb-3">
                      <label for="file" class="form-label">Hình ảnh</label>
                      <input type="file" class="form-control" id="file" name="file">
                      <img class="image-item" src="assets/img/products/" alt="Không có ảnh" style="margin-top: 1.5rem;">
                      <?php echo form_error("file") ?>
                    </div>
                    <div class="mb-3">
                      <label for="description" class="form-label">Mô tả</label>
                      <input type="text" class="form-control ckeditor" value="" id="description" name="description"></input>
                      <?php echo form_error("description") ?>
                    </div>
                    <div class="mb-3">
                      <label for="price" class="form-label">Giá gốc</label>
                      <input type="number" class="form-control" value="" id="price" name="price">
                      <?php echo form_error("price") ?>
                    </div>
                    <div class="mb-3">
                      <label for="discount" class="form-label">Giá khuyến mãi</label>
                      <input type="number" class="form-control" value="" id="discount" name="discount">
                      <?php echo form_error("discount") ?>
                    </div>
                    <div class="mb-3">
                      <?php echo form_error("update") ?>
                      <?php echo notify("update") ?>
                    </div>
                    <div class="mb-3">
                      <input type="submit" value="Cập nhật" class="btn btn-primary" name="addProduct">
                    </div>
                  </form>
                </div>
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