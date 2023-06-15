<?php
require('reg_auth/db.php');
global $conn;

$login = $_COOKIE['user'];
$cardid = $_GET['cardid'];
$result = mysqli_query($conn,"SELECT id FROM users WHERE login = '$login' LIMIT 1");
$userid = $result->fetch_column(0);
mysqli_query( $conn,"DELETE FROM cards WHERE id = '$cardid' AND user_id = '$userid' ");

header('location: cards.php');
