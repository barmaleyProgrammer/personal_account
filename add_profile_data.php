<?php
require('reg_auth/db.php');
global $conn, $userid;

$email = filter_var(trim($_POST['email']));
$phone = filter_var(trim($_POST['phone']));
$comment = filter_var(trim($_POST['comment']));


$mysql = mysqli_query( $conn,"UPDATE users SET phone='$phone', email='$email', comments='$comment' WHERE id=$userid");
header('location: ./profile.php');
