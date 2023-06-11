<?php
$title = "авторизация";
require('../header.php');
?>

<?php
require('../menu.php');
//require "reg_auth/reg.php";
?>
<div class="container mt-4">
    <?php if(($_COOKIE['user'] ?? '') === ''): ?>
    <div class="row">
        <div class="col">
                    <h1>Авторизация</h1>
                    <form action="validation-form/auth.php" method="post">
                        <input type="text" class="form-control" name="login" id="login" placeholder="введите логин"><br>
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="введите пароль"><br>
                        <button class="btn btn-success" type="submit">Авторизоваться</button>
                    </form>
        </div>
                <?php else:?>
                <p>Привет <?=$_COOKIE['user']?>. чтобы выйти нажмите <a href="exit.php">здесь</a>.</p>
                <?php endif;?>
    </div>
</div>
<?php
require('../footer.php');
?>