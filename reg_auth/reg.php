<!--/*https://www.youtube.com/watch?v=3UtB4QS6EAg*/-->
<!doctype html>
<html lang=ru>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма регистрации</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container mt-4">
    <?php if(($_COOKIE['user'] ?? '') === ''): ?>

            <div class="row">
                <div class="col">
                    <h1>Регистрация</h1>
                    <form action="validation-form/check.php" method="post">
                        <input type="text" class="form-control" name="login" id="login" placeholder="введіть логін"><br>
                         <input type="text" class="form-control" name="name" id="name" placeholder="введіть имʼя"><br>
                         <input type="text" class="form-control" name="name" id="name" placeholder="введите номер карт"><br>
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="введите пароль"><br>
                        <button class="btn btn-success" type="submit">зарегистрировать</button>
                    </form>
                </div>
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
</body>
</html>