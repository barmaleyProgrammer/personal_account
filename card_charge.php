<?php
require('api.php');

$card_code = trim($_POST['card_code']);
$product_code = trim($_POST['product_code']);
$summa = (float) trim($_POST['summa']);
$data = [
    'request_id' => time(),
     'card_code' => $card_code,
//    'card_code' => '043B5F126C5787',
    'card_code_type' => 'nfc',
     'product_code' => $product_code,
//    'product_code' => 'w1/0-8',
     'summa' => $summa,
//    'summa' => 15,
    'name_bank' => 'Топ',
    'name_kass' => '1',
    'addr_kass' => 'угловая'
];

$res = seller('payment/', $data);

header('location: cards.php');
// header('Content-Type: application/json; charset=utf-8');
// echo json_encode($res);
