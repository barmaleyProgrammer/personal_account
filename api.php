<?php

$url = 'https://hub2-box-asop.gerc.ua/api/v1/seller/product/';

$auth = 'Token 3f178260cd89da0f8b2158115d7fbf1b373f0093'; //API Key


// curl init
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
//    'Content-Type: application/json; charset=utf-8',
    'Authorization: ' . $auth
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$res = curl_exec($ch);
curl_close($ch);

$data = json_decode($res, 1);
$currentTime = time();

?>