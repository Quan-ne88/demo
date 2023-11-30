<?php
getHeader("layout/header.php");
require "modules/users/controllers/userController.php";
if (isset($_POST['btn-reg'])) {
  registerUser($_POST['username'], $_POST['password'], $_POST['email'], $_POST['fullname'], $_POST['cf_password']);
}
?>
<main id="main-site">
  <div class="wrapper-login py-5">
    <h1>Đăng ký tài khoản</h1>
    <div class="content">
      <form class="content__form" action="" method="post">
        <div class="input-group mb-3 d-block">
          <input id="fullname" type="text" placeholder="Họ và tên" name="fullname" value="<?php if (isset($_POST['fullname'])) echo $_POST['fullname'] ?>" class="form-control" />
          <?php echo form_error("fullname") ?>
        </div>
        <div class="input-group mb-3 d-block">
          <input id="username" type="text" placeholder="Tên đăng nhập" name="username" value="<?php if (isset($_POST['username'])) echo $_POST['username'] ?>" class="form-control" />
          <?php echo form_error("username") ?>
        </div>
        <div class="input-group mb-3 d-block">
          <input id="email" type="email" placeholder="Email" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email'] ?>" class="form-control" />
          <?php echo form_error("email") ?>
        </div>
        <div class="input-group mb-3 d-block">
          <input id="password" type="password" placeholder="Mật khẩu" name="password" value="<?php if (isset($_POST['password'])) echo $_POST['password'] ?>" class="form-control" />
          <?php echo form_error("password") ?>
        </div>
        <div class="input-group mb-3 d-block">
          <input id="re-password" type="password" placeholder="Nhập lại mật khẩu" name="cf_password" value="<?php if (isset($_POST['cf_password'])) echo $_POST['cf_password'] ?>" class="form-control" />
          <?php echo form_error("cf_password") ?>
        </div>
        <button type="submit" class="btn btn-primary" name="btn-reg">Đăng ký</button>
      </form>
    </div>
    <div class="content__or-text">
      <span></span>
      <span>OR</span>
      <span></span>
    </div>
    <div class="signup-link">
      <p>
        Bạn là thành viên? <a href="?mod=users&act=login">Đăng nhập ngay</a>
      </p>
    </div>
  </div>
</main>