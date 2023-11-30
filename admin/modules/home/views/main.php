<?php
getHeader("layout/header.php");
require "modules/home/controllers/homeController.php";
if (!setNameForUser()) {
  redirect_to("?mod=users&act=login");
} else {
  $checkRoles = checkRoles(setNameForUser());
  if ((int)$checkRoles['ma_vai_tro'] === 2) {
    redirect_to("?mod=users&act=login");
  } else {
    if (isset($_POST['btn-logout'])) {
      logoutUser();
    }
  }
}
?>
<!--Main layout-->
<div id="wrapper">
  <?php require "layout/sidebar.php"; ?>
  <main id="mainWrapper">
    <h2>Trang quan tri</h2>
  </main>
</div>
<!--Main layout-->
<?php
getFooter("layout/footer.php")
?>