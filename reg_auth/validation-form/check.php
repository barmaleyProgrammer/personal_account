<?php
global $conn;
$login = filter_var(trim($_POST['login']));
$name = filter_var(trim($_POST['name']));
$card = filter_var(trim($_POST['card']));
$pass = filter_var(trim($_POST['pass']));
if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
    echo "недопустимая длинна логина меньше 5 не больше 90";
    ?>
    <form method="get" action="../../index.php">
        <button type="submit">Перейти обратно</button>
    </form>
<?php
   exit();
}else if(mb_strlen($name) < 3 || mb_strlen($name) > 50) {
    echo "недопустимая длинна имени меньше 3 не больше 50";
    ?>
    <form method="get" action="../../index.php">
        <button type="submit">Перейти обратно</button>
    </form>
    <?php
    exit();
}else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 8) {
    echo "недопустимая длинна пароля от 2 до 8";
    ?>
    <form method="get" action="../../index.php">
        <button type="submit">Перейти обратно</button>
    </form>
    <?php
   exit();
}

$pass = md5($pass."rtytryt777");
require('../db.php');

$mysql = mysqli_query( $conn,"INSERT INTO users (login, name, pass) VALUES ('$login', '$name', '$pass')");
$userid = mysqli_insert_id($conn);
$mysql = mysqli_query( $conn,"INSERT INTO cards (user_id, card) VALUES ('$userid', '$card')");
header('location: ../../log_in.php');
?>