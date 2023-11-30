<?php
getHeader("layout/header.php");
require "modules/users/controllers/userController.php";
$userID = isset($_GET['edit_id']) ? (int)$_GET['edit_id'] : "";
$infoUser = getUserInfo($userID);
if (isset($_POST['button-edit-user'])) {
  updateUser($_POST['fullname'], $_POST['username'], $_POST['email'], $_POST['roles'], $_POST['active'], $userID);
  $infoUser = getUserInfo($userID);
}
?>
<div id="wrapper">
  <?php require "layout/sidebar.php"; ?>
  <main id="mainWrapper">
    <h2 class="mainWrapper-heading">Quản lý người dùng</h2>
    <div class="container pt-4" id="main-content">
      <div class="row">
        <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-header"><span><i class="bi bi-table me-2"></i></span>Sửa người dùng</div>
            <div class="card-body">
              <div class="table-responsive">
                <div class="mx-auto container">
                  <?php if (!empty($infoUser)) {
                  ?>
                    <form method="post" action="" id="edit-order-form">
                      <div class="mb-3">
                        <label for="fullname" class="form-label">Họ và tên</label>
                        <input type="text" class="form-control" value="<?php echo $infoUser['ho_va_ten'] ?>" id="fullname" name="fullname">
                        <?php echo form_error("fullname") ?>
                      </div>
                      <div class="mb-3">
                        <label for="username" class="form-label">Tên đăng nhập</label>
                        <input type="text" class="form-control" value="<?php echo $infoUser['ten_dang_nhap'] ?>" id="username" name="username">
                        <?php echo form_error("username") ?>
                      </div>
                      <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" value="<?php echo $infoUser['email'] ?>" id="email" name="email">
                        <?php echo form_error("email") ?>
                      </div>
                      <div class="form-outline mb-4">
                        <label class="form-label" for="roles">Vai trò</label>
                        <select name="roles" id="roles" class="form-control">
                          <option value="1" <?php echo $select = (int)$infoUser['ma_vai_tro'] === 1 ? "selected" : "" ?>>Admin</option>
                          <option value="2" <?php echo $select = (int)$infoUser['ma_vai_tro'] === 2 ? "selected" : "" ?>>User</option>
                        </select>
                      </div>
                      <div class="form-outline mb-4">
                        <label class="form-label" for="active">Trạng thái</label>
                        <select name="active" id="active" class="form-control">
                          <option value="1" <?php echo $select = (int)$infoUser['kich_hoat'] === 1 ? "selected" : "" ?>>Kích hoạt</option>
                          <option value="2" <?php echo $select = (int)$infoUser['kich_hoat'] === 2 ? "selected" : "" ?>>Ngừng kích hoạt</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <?php echo form_error("add") ?>
                        <?php echo notify("add") ?>
                      </div>
                      <button type="submit" class="btn btn-primary btn-block mb-4 w-100" name="button-edit-user">Cập nhật</button>
                    </form>
                  <?php } ?>
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
getFooter("layout/footer.php")
?>