<?php
require('reg_auth/db.php');
require('api.php');
global $conn;

$login = $_COOKIE['user'];
$card = filter_var(trim($_POST['card']));
$pin = filter_var(trim($_POST['pin']));
$result = mysqli_query($conn,"SELECT id FROM users WHERE login = '$login' LIMIT 1");
$userid = $result->fetch_column(0);
$data = [
    'uid' => $userid,
    'card' => $card,
    'pin' => $pin
//   'card' => '2222222222',
//   'pin' => '1111',
];
$res = room('card/link/', $data);

header('location: cards.php');
