<?php
require('reg_auth/db.php');


$login = $_COOKIE['user'];
$card = filter_var(trim($_POST['card']));
$result = mysqli_query($conn,"SELECT id FROM users WHERE login = '$login' LIMIT 1");
$userid = $result->fetch_column(0);
//$mysql = mysqli_query( $conn,"INSERT INTO cards (card) VALUES ('$card')");
//$mysql = mysqli_query( $conn,"INSERT INTO users (login, name, pass) VALUES ('$login', '$name', '$pass')");
//$userid = mysqli_insert_id($conn);
$mysql = mysqli_query( $conn,"INSERT INTO cards (user_id, card) VALUES ('$userid', '$card')");
header('location: cards.php');
?>

