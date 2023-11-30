<?php
function redirect_to($url = "")
{
  $baseURL = "http://localhost/assignment_PHP_4/";
  $path = $baseURL .  $url;
  header("Location: {$path}");
}
