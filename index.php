<?php 
$requiredPHP = 7.3;
$currentPHP = explode('.', PHP_VERSION)[0] . '.' . explode('.', PHP_VERSION)[1];
if ($requiredPHP >  $currentPHP) {
    echo "The minimum required PHP version is $requiredPHP, but your current PHP version is $currentPHP.";
    die;
}
require "./routes.php";