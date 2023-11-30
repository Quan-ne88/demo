<?php
function is_username($username)
{
  if (empty($username)) return;
  $pattern = "/^[A-Za-z0-9_\.]{3,32}$/";
  if (!preg_match($pattern, $username, $matches)) {
    return false;
  }
  return true;
}
function is_password($password)
{
  if (empty($password)) return;
  $pattern = "/^([\w_\.!@#$%^&*()]+){5,32}$/";
  if (!preg_match($pattern, $password, $matches)) {
    return false;
  }
  return true;
}
function is_match_password($password)
{
  if (empty($password)) return false;
  if ($password !== ($_POST['password'])) return false;
  return true;
}
function is_match_password_client($password, $label)
{
  if (empty($password)) return false;
  if ($password !== ($_POST[$label])) return false;
  return true;
}

function is_tel($phone_number)
{
  if (empty($phone_number)) return;
  $pattern = "/(0[3|5|7|8|9])+([0-9]{8})\b/";
  if (!preg_match($pattern, $phone_number, $matches)) {
    return false;
  }
  return true;
}
function is_email($email)
{
  if (empty($email)) return;
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return false;
  }
  return true;
}
function form_error($label_field)
{
  global $error;
  if (!empty($error[$label_field])) return "<p class='error'>{$error[$label_field]}</p>";
}
function notify($label_field)
{
  global $notify;
  if (!empty($notify[$label_field])) return "<p class='notify'>{$notify[$label_field]}</p>";
}
function set_value($label_field)
{
  global $$label_field;
  if (!empty($$label_field)) return $$label_field;
}
