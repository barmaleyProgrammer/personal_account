<?php
$title = "Головна сторінка";
require "parts/header.php";
?>



<?php
require "parts/menu.php";
//require "reg_auth/reg.php";
?>
<div class="container">
    <div class="col-12">
        <div id="row">
            <h1>Реєстрація</h1>
            <form action="reg_auth/validation-form/check.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="введіть логін"><br>
                <input type="text" class="form-control" name="name" id="name" placeholder="введіть имʼя"><br>
                <input type="text" class="form-control" name="card" id="card" placeholder="введіть номер картки"><br>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="введіть пароль"><br>
                <button class="btn btn-success" type="submit">зареєструватися</button>
            </form>
        </div>
    </div>
</div>
<?php
    require "parts/footer.php";
?>
