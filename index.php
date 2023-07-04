<?php
$title = "Головна сторінка";
require('parts/header.php');
?>
<div class="container">
    <div class="col-12">
        <div id="row">
            <h1>Реєстрація</h1>
            <form action="reg_auth/validation-form/check.php" method="post">
                <input type="text" class="form-control" name="login" placeholder="введіть логін" required minlength="5" maxlength="90"><br>
                <input type="text" class="form-control" name="name" placeholder="введіть имʼя" required minlength="3" maxlength="50"><br>
                <div class="pass">
                    <span class="icon-pass" id="icon-pass" onclick="togglePasswordVisibility()">&#128065;</span>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Password"><br>
                </div>
                <button class="btn btn-success" type="submit">зареєструватися</button>
            </form>
        </div>
    </div>
</div>
<?php
require('parts/footer.php');
