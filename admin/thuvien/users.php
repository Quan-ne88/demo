<?php
function setNameForUser()
{
  $baseURL = "http://localhost/assignment_PHP_4/admin";
  if (empty($_SESSION['user_login']) && empty($_SESSION['admin_login'])) {
    return false;
  } else {
    if (!empty($_SESSION['user_login']) && !empty($_SESSION['admin_login'])) {
      if (strpos($baseURL, "admin") === false) {
        return $_SESSION['user_login'];
      } else {
        return $_SESSION['admin_login'];
      }
    } else {
      if (empty($_SESSION['user_login']) && strpos($baseURL, "admin") !== false) {
        return $_SESSION['admin_login'];
      } else {
        return $_SESSION['user_login'];
      }
    }
  }
}
