<?php
ob_start();
session_start();
require "thuvien/database.php";
require "thuvien/functions.php";
require "thuvien/validation.php";
require "thuvien/users.php";
require "thuvien/format.php";
require "thuvien/url.php";
?>
<?php
$mod = !empty($_GET['mod']) ? $_GET['mod'] : "home";
$act = !empty($_GET['act']) ? $_GET['act'] : "main";
$path = "modules/{$mod}/views/{$act}.php";
if (file_exists($path)) {
  require $path;
} else {
  require "layout/404.php";
}
?>