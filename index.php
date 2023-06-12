<?php
$title = "Главная страница";
require "parts/header.php";
?>



<?php
require "parts/menu.php";
//require "reg_auth/reg.php";
?>
<div class="container">
    <div class="col-12">
        <div id="row">
            <h1>Регистрация</h1>
            <form action="reg_auth/validation-form/check.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="введите логин"><br>
                <input type="text" class="form-control" name="name" id="name" placeholder="введите имя"><br>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="введите пароль"><br>
                <button class="btn btn-success" type="submit">зарегистрировать</button>
            </form>
        </div>
    </div>
</div>
<?php
    require "parts/footer.php";
?>
