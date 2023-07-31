<?php
/*https://www.youtube.com/watch?v=3UtB4QS6EAg*/
require('./../db.php');
require('./../../php-jwt/src/JWT.php');

use Firebase\JWT\JWT;

global $conn;

$login = trim($_POST['login']);
$pass = trim($_POST['pass']);
$pass = md5($pass."rtytryt777");


$result = mysqli_query($conn,"SELECT id FROM users WHERE login = '$login' AND pass = '$pass' LIMIT 1");
$userId = (int)$result->fetch_column(0);

if(!$userId) {
    exit('користувача не знайдено<br /><a href="./../../log_in.php">Перейти обратно</a>');
}
mysqli_query($conn,"UPDATE users SET last_visit_date = NOW() WHERE id = '$userId'");
//setcookie('user', $userName, time() + 360000, "/");
//header('location: ./../../cards.php');

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
