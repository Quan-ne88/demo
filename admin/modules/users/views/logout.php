<?php
require "modules/users/controllers/userController.php";
unset($_SESSION['is_login']);
$checkRolesLogout = checkLogoutUser(setNameForUser());
if ($checkRolesLogout) {
  unset($_SESSION['admin_login']);
  redirect_to("?mod=users&act=login");
} else {
  unset($_SESSION['user_login']);
  redirect_to("?mod=users&act=login");
}
