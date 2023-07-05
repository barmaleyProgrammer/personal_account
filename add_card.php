<?php
require('reg_auth/db.php');
require('api.php');
global $conn, $userid;


$card = filter_var(trim($_POST['card']));
$pin = filter_var(trim($_POST['pin']));
$data = [
    'uid' => $userid,
    'card' => $card,
    'pin' => $pin
//   'card' => '2222222222',
//   'pin' => '1111',
];
$res = room('card/link/', $data);

header('location: cards.php');
