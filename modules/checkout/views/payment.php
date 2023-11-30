<?php
$orderID = isset($_GET['id']) ? (int)$_GET['id'] : "";
db_update("donhang", array('status' => '2'), "`id` = '{$orderID}'");
redirect_to("?mod=users&act=accounts");
