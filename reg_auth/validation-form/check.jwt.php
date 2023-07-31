<?php
require('./../db.php');
require('./../../php-jwt/src/JWT.php');
global $conn;
use Firebase\JWT\JWT;

$login = trim($_POST['login']);
$name = trim($_POST['name']);
$pass = trim($_POST['pass']);
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


$mysql = mysqli_query( $conn,"INSERT INTO users (login,name,pass) VALUES ('$login','$name','$pass')");
$userId = mysqli_insert_id($mysql);
$jwtKey = 'sdghsfgnzdfngsaw';
$dt = new \DateTimeImmutable();
$payload = [
    'id' => $userId,
    'iat' => (int)$dt->format('U'),
    'exp' => (int)$dt->modify('+1 month')->format('U')
];
$AccessToken = JWT::encode($payload, $jwtKey, 'HS256');

header('Content-Type: application/json; charset=utf-8');
echo json_encode([
    'AccessToken' => $AccessToken
]);
exit();
