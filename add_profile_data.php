<?php
require('reg_auth/db.php');
global $conn, $userid;

$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$comment = trim($_POST['comment']);


$fields = [];
if (!empty($email)) {
    $fields[] = 'email=\''.$email.'\'';
} else {
    $fields[] = 'email=NULL';
}

if (!empty($phone)) {
    $fields[] = 'phone=\''.$phone.'\'';
} else {
    $fields[] = 'phone=NULL';
}

if (!empty($comment)) {
    $fields[] = 'comments=\''.$comment.'\'';
} else {
    $fields[] = 'comments=NULL';
}


if (count($fields)) {
    $sql = 'UPDATE users SET ';
    $sql .= implode(', ', $fields);
    $sql .= ' WHERE id='.$userid;
    mysqli_query($conn, $sql);
}

header('location: ./profile.php');
