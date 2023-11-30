<?php
getHeader("layout/header.php");
require "modules/users/controllers/userController.php";
$listRoles = getListRoles();
if (isset($_POST['btn-password-admin'])) {
  changePassword($_POST['change-password'], $_POST['newPassword'], $_POST['confirmPassword']);
}
?>
<div id="wrapper">
  <?php require("layout/sidebar.php"); ?>
  <main id="mainWrapper">
    <div class="d-flex g-10">
      <h2 class="mainWrapper-heading">Thông tin người quản trị</h2>
      <a href="?mod=users&act=reset" style="display: flex; align-items: center; justify-content: center;" class="btn btn-success ms-2">Đổi mật khẩu</a>
    </div>
    <div class="container pt-4" id="main-content">
      <div class="row">
        <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-header">
              <span><i class="bi bi-table me-2"></i></span> Đổi mật khẩu
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <div class="mx-auto container">
                  <form action="" id="edit-form" method="post">
                    <div class="mb-3">
                      <label for="password" class="form-label">Mật khẩu hiện tại</label>
                      <input type="password" class="form-control" value="<?php if (isset($_POST['change-password'])) echo $_POST['change-password'] ?>" id="password" name="change-password">
                      <?php echo form_error("password") ?>
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Mật khẩu mới</label>
                      <input type="password" class="form-control" value="<?php if (isset($_POST['newPassword'])) echo $_POST['newPassword'] ?>" id="password" name="newPassword">
                      <?php echo form_error("newPassword") ?>
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Mật khẩu hiện tại</label>
                      <input type="password" class="form-control" value="<?php if (isset($_POST['confirmPassword'])) echo $_POST['confirmPassword'] ?>" id="password" name="confirmPassword">
                      <?php echo form_error("confirmPassword") ?>
                    </div>
                    <div class="mb-3">
                      <?php echo form_error("update") ?>
                      <?php echo notify("update") ?>
                    </div>
                    <button type="submit" class="btn btn-primary" name="btn-password-admin">Cập nhật</button>
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
<?php
getFooter("layout/footer.php");
?>