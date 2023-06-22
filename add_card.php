<?php
require('reg_auth/db.php');
require('api.php');
global $conn;

$login = $_COOKIE['user'];
$card = filter_var(trim($_POST['card']));
$pin = filter_var(trim($_POST['pin']));
$result = mysqli_query($conn,"SELECT id FROM users WHERE login = '$login' LIMIT 1");
$userid = $result->fetch_column(0);
$data=[
    'card' => $card, 'pin' => $pin, 'uid' => $userid,
];
header('location: cards.php');
