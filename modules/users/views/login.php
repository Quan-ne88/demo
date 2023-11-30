<?php
getHeader("layout/header.php");
require "modules/users/controllers/userController.php";
if (isset($_POST['btn-login'])) {
  loginUser($_POST['username'], $_POST['password']);
}
?>
<main id="main-site">
  <div class="wrapper-login py-5">
    <h1>Đăng nhập</h1>
    <div class="content">
      <form class="content__form" action="" method="post">
        <div class="input-group mb-3 d-block">
          <input id="username" type="text" placeholder="Tên đăng nhập" name="username" value="<?php if (isset($_POST['username'])) echo $_POST['username'] ?>" class="form-control" />
          <?php echo form_error("username") ?>
        </div>
        <div class="input-group mb-3 d-block">
          <input id="password" type="password" placeholder="Mật khẩu" name="password" value="<?php if (isset($_POST['password'])) echo $_POST['password'] ?>" class="form-control" />
          <?php echo form_error("password") ?>
        </div>
        <div class="input-group mb-3 d-block">
          <?php echo form_error("account") ?>
        </div>
        <button type="submit" class="btn btn-primary" name="btn-login">Đăng nhập</button>
      </form>
    </div>
    <div class="content__or-text">
      <span></span>
      <span>OR</span>
      <span></span>
    </div>
    <div class="signup-link">
      <p>
        Bạn không phải là thành viên? <a href="?mod=users&act=register">Đăng ký ngay</a>
      </p>
    </div>
  </div>
</main>