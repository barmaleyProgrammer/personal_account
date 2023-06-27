<?php
require('api.php');

$card = trim($_GET['card']);
//$block = (trim($_GET['block']) === 'true') ? true : false;
$block = (trim($_GET['block']) === 'true');
$data = [
    'card' => $card,
    'block' => $block
];

$res = room('block-event/', $data);

header('location: cards.php');
