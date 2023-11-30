<?php
getHeader("layout/header.php");
require "modules/users/controllers/userController.php";
if (isset($_POST['button-create-user'])) {
  createUser($_POST['username'], $_POST['email'], $_POST['password'], $_POST['fullname'], $_POST['roles']);
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
            <div class="card-header"><span><i class="bi bi-table me-2"></i></span>Thêm người dùng</div>
            <div class="card-body">
              <div class="table-responsive">
                <div class="mx-auto container">
                  <form method="post" action="" id="edit-order-form">
                    <div class="mb-3">
                      <label for="fullname" class="form-label">Họ và tên</label>
                      <input type="text" class="form-control" value="<?php if (isset($_POST['fullname'])) echo $_POST['fullname'] ?>" id="fullname" name="fullname">
                      <?php echo form_error("fullname") ?>
                    </div>
                    <div class="mb-3">
                      <label for="username" class="form-label">Tên đăng nhập</label>
                      <input type="text" class="form-control" value="<?php if (isset($_POST['username'])) echo $_POST['username'] ?>" id="username" name="username">
                      <?php echo form_error("username") ?>
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" value="<?php if (isset($_POST['email'])) echo $_POST['email'] ?>" id="email" name="email">
                      <?php echo form_error("email") ?>
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Mật khẩu</label>
                      <input type="password" class="form-control" value="<?php if (isset($_POST['password'])) echo $_POST['password'] ?>" id="password" name="password">
                      <?php echo form_error("password") ?>
                    </div>
                    <div class="form-outline mb-4">
                      <label class="form-label" for="roles">Vai trò</label>
                      <select name="roles" id="roles" class="form-control">
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <?php echo form_error("add") ?>
                      <?php echo notify("add") ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mb-4 w-100" name="button-create-user">Thêm mới</button>
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
getFooter("layout/footer.php")
?>