<?php
$idReservation = isset($_GET["id"]) ? (int)$_GET["id"] : "";
$infoTable = db_fetch_row("SELECT t.*, r.id as `ID` FROM `reservations` AS r INNER JOIN `tables` AS t ON r.table_id = t.id WHERE r.id = '{$idReservation}'");
$data = ['status' => '1'];
db_update("reservations", array("status" => '2'), "`id` = '{$idReservation}'");
db_update("tables", $data, "`id` = '{$infoTable['id']}'");
?>
<h1>Thanh toán thành công, vui lòng đợi trong giây lát để quay trở lại</h1>