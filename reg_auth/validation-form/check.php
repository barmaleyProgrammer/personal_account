<?php
$login = filter_var(trim($_POST['login']));
$name = filter_var(trim($_POST['name']));
$pass = filter_var(trim($_POST['pass']));
$error = '';

if (mb_strlen($login) < 5 || mb_strlen($login) > 90) {
    $error = "недопустимая длинна логина меньше 5 не больше 90";
}
if (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
    $error = "недопустимая длинна имени меньше 3 не больше 50";
}
if (mb_strlen($pass) < 2 || mb_strlen($pass) > 8) {
    $error = "недопустимая длинна пароля от 2 до 8";
}

if (!empty($error)) {
    exit($error.'<br><a href="./../../index.php">Перейти обратно</a>');
}

$pass = md5($pass."rtytryt777");
require('./../db.php');
global $conn;

$mysql = mysqli_query( $conn,"INSERT INTO users (login,name,pass) VALUES ('$login','$name','$pass')");
//$userid = mysqli_insert_id($conn);
//$mysql = mysqli_query( $conn,"INSERT INTO cards (user_id) VALUES ('$userid')");
header('location: ./../../log_in.php');
