<?php
require "modules/home/models/homeModel.php";
function logoutUser()
{
  unset($_SESSION['is_login']);
  $checkRolesLogout = checkLogoutUser(setNameForUser());
  if ($checkRolesLogout) {
    unset($_SESSION['user_login']);
    redirect_to("?mod=users&act=login");
  } else {
    unset($_SESSION['admin_login']);
    redirect_to("?mod=users&act=login");
  }
}
