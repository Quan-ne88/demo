<?php
function showArray($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    } else {
        echo "Don't have data to display!";
    }
}
function getHeader($pathStr)
{
    if (file_exists(($pathStr))) {
        require $pathStr;
    }
    return false;
}
function getFooter($pathStr)
{
    if (file_exists(($pathStr))) {
        require $pathStr;
    }
    return false;
}
function redirectTo($path = "?page=home")
{
    if (!empty($path)) {
        header("Location: {$path}");
    } else {
        error_log("Can't redirect another page!");
    }
}
