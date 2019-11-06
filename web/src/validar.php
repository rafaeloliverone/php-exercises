<?php 
require_once('./database/class-host.php');

session_start();
$handler = new Handler();

$login = $_POST['email'];
$password = $_POST['password'];

if ($handler->validate($login, $password)) {
    header('location:site.php');
} else {
    header('location:index.php');
};