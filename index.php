<?php
ob_start();
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
require "thuvien/database.php";
require "thuvien/functions.php";
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
<!-- 
    Logic: $path = "modules/{$mod}/views/{$act}.php";
    Ví dụ: ?mod=users&act=account
    biến $mod có tên là gì -> thư mục sẽ là tên đó. Ví dụ trên, biến mod có giá trị là users -> sẽ đi từ modules/users
    biến $act có tên là gì -> thư mục sẽ là tên đó. Ví dụ trên, biến act có giá trị là account -> sẽ đi từ modules/users/views/account.php
    Trong mỗi folder ở trong `modules` sẽ có 3 folder con là models, views, controllers. Các file con trong folder views nếu có xử lý gì (thêm, xoá, sửa) thì sẽ require theo đường dẫn modules/$mod/controllers/tênFile.php. Trong file ở folder controllers, muốn làm việc với database thì require theo định dạng modules/$mod/models/tênFile.php. Áp dụng cho tất cả.
    Trong folder `thuvien`, là nơi chưa các file hỗ trợ cho việc xử lý. Khi cần chỉ việc require nó vào.
    Trong folder `layout`, là nơi chưa các file như header, footer. Giúp tái sử dụng.
    Trong folder `assets`, là nơi chưa các file style css, js,...
    Trong folder `admin`, nó cũng có các folder như ở user. Nên mình không giải thích gì thêm
 -->