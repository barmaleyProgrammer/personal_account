<?php
require('reg_auth/db.php');
global $conn;
header('Content-Type: application/json; charset=utf-8');
$values = [];

$token = (array_key_exists('HTTP_AUTHTOKEN', $_SERVER) && $_SERVER['HTTP_AUTHTOKEN'] === 'MySecretToket');
if (!$token) {
    header('HTTP/1.1 401 Unauthorized');
    exit();
}

$userid = (isset($_GET) && array_key_exists('userid', $_GET)) ? (int)$_GET['userid'] : 0;


//if (isset($_GET) && array_key_exists('userid', $_GET)){
//    $userid = (int)$_GET['userid'];
//} else {
//    $userid = 0;
//}

$sql = 'SELECT id, login, name, email, phone, comments, DATE_FORMAT(last_visit_date, \'%Y-%m-%dT%h:%i:%s+0000\') AS last_visit_date FROM users';
if ($userid){
    $sql .= ' WHERE id='.$userid.' LIMIT 1';
    $res = mysqli_query($conn, $sql);
    if ($res->num_rows){
        $values = mysqli_fetch_assoc($res);
    }
} else {
    $res = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($res)){
        $values[] = $row;
    }
}


if (!count($values)){
    header('HTTP/1.1 404 Not Found');
}

echo json_encode($values);
