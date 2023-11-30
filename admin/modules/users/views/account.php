<?php
getHeader("layout/header.php");
require "modules/users/controllers/userController.php";
$listRoles = getListRoles();
if (!empty($_SESSION['admin_login'])) {
  $userInfo = getUserInfoByUsername($_SESSION['admin_login']);
}
if (isset($_POST['btn-update-admin'])) {
  updateAdmin($_POST['user_email'], $_POST['user_fullname']);
  $userInfo = getUserInfoByUsername($_SESSION['admin_login']);
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
              <span><i class="bi bi-table me-2"></i></span> Thông tin admin
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <div class="mx-auto container">
                  <form action="" id="edit-form" method="post">
                    <div class="mb-3">
                      <label for="username" class="form-label">Tên đăng nhập</label>
                      <input type="text" class="form-control" value="<?php if (!empty($userInfo)) echo $userInfo['ten_dang_nhap'] ?>" id="username" name="user_name" disabled style="cursor: not-allowed;">
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" value="<?php if (!empty($userInfo)) echo $userInfo['email'] ?>" id="email" name="user_email">
                      <?php echo form_error("email") ?>
                    </div>
                    <div class="mb-3">
                      <label for="fullname" class="form-label">Tên đầy đủ</label>
                      <input type="text" class="form-control" value="<?php if (!empty($userInfo)) echo $userInfo['ho_va_ten'] ?>" id="fullname" name="user_fullname">
                      <?php echo form_error("fullname") ?>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="form2Example1">Vai trò</label>
                      <select name="roles" id="roles" class="form-control" disabled>
                        <?php if (!empty($listRoles)) {
                          foreach ($listRoles as $roles) {
                        ?>
                            <option value="<?php echo $roles['id'] ?>" <?php echo $select = (int)$roles['id'] === (int)$userInfo['ma_vai_tro'] ? "selected" : "" ?>><?php echo $roles['ten'] ?></option>
                        <?php }
                        } ?>
                      </select>
                    </div>
                    <div class="mb-3">
                      <?php echo form_error("update") ?>
                      <?php echo notify("update") ?>
                    </div>
                    <button type="submit" class="btn btn-primary" name="btn-update-admin">Chỉnh sửa</button>
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