<?php
require('api.php');
require('reg_auth/db.php');
global $conn;

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

$result = [];

if ($_REQUEST['action'] === 'auth') {
    if (array_key_exists('login', $_REQUEST)) {
        // зробити перевірку login.passwd

        $x = 1;
    }
    if (array_key_exists('register', $_REQUEST)) {
        // створити нового користувача
    }
}


if ($_REQUEST['action'] === 'card') {
    if (array_key_exists('room', $_REQUEST)) {
        $result = room('card/?room='.$_REQUEST['room']);
    }
    if (array_key_exists('balance', $_REQUEST)) {
        $result = room('card/'.$_REQUEST['balance'].'/balance/');
    }
    if (array_key_exists('payment', $_REQUEST)) {
        $result = room('card/'.$_REQUEST['payment'].'/payment/');
    }
    if (array_key_exists('validation', $_REQUEST)) {
        $result = room('card/'.$_REQUEST['validation'].'/validation/');
    }
}
if ($_REQUEST['action'] === 'seller') {
    if (array_key_exists('product', $_REQUEST)) {
        $result = seller('product/?card_num=' . $_REQUEST['product']);
    }
}


echo json_encode($result);
