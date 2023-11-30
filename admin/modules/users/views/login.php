<?php
getHeader("layout/header-basic.php");
require "modules/users/controllers/userController.php";
if (isset($_POST['adminLoginButton'])) {
  loginUser($_POST['username'], $_POST['password']);
}
?>
<div class="wrapper-login">
  <h2 class="text-center">Đăng nhập</h2>
  <form method="post" action="">
    <!-- Email input -->
    <div class="input-group mb-3 d-block">
      <label class="form-label" for="username">Tên đăng nhập</label>
      <input type="text" id="username" name="username" value="<?php if (isset($_POST['username'])) echo $_POST['username'] ?>" class="form-control w-100" />
      <?php echo form_error("username") ?>
    </div>
    <!-- Password input -->
    <div class="input-group mb-3 d-block">
      <label class="form-label" for="password">Mật khẩu</label>
      <input type="password" id="password" class="form-control w-100" name="password" value="<?php if (isset($_POST['password'])) echo $_POST['password'] ?>" />
      <?php echo form_error("password") ?>
    </div>
    <?php echo form_error("account") ?>
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-3 w-100" name="adminLoginButton">Đăng nhập</button>
    <a class="btn btn-primary btn-block mb-3 w-100" href="http://localhost/assignment_PHP_4/">Thoát</a>
  </form>
</div>
<?php
getFooter("layout/footer.php");
?>