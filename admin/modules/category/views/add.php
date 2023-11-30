<?php
getHeader("layout/header.php");
require "modules/category/controllers/categoryController.php";
if (isset($_POST['addCategory'])) {
  addCategory($_POST['title']);
}
?>
<!--Main layout-->
<div id="wrapper">
  <?php require "layout/sidebar.php"; ?>
  <main id="mainWrapper">
    <h2 class="mainWrapper-heading">Quản lý danh mục</h2>
    <div class="container pt-4" id="main-content">
      <div class="row">
        <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-header">
              <span><i class="bi bi-table me-2"></i></span> Thêm danh mục
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <div class="mx-auto container">
                  <form action="" id="edit-form" method="post">
                    <div class="mb-3">
                      <label for="title" class="form-label">Tên danh mục</label>
                      <input type="text" class="form-control" value="<?php if (isset($_POST['title'])) echo $_POST['title'] ?>" id="title" name="title">
                      <?php echo form_error("title") ?>
                    </div>
                    <div class="mb-3">
                      <?php echo form_error("update") ?>
                      <?php echo notify("update") ?>
                    </div>
                    <div class="mb-3">
                      <input type="submit" value="Cập nhật" class="btn btn-primary" name="addCategory">
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
getFooter("layout/footer.php")
?>