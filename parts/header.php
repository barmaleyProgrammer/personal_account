<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="style.css" type="text/css" rel="stylesheet">
    <title><?= $title; ?></title>
</head>
<body>
<div id="header">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <ul id="main-navigation">
                    <li><a href="index.php">Головна</a></li>
                    <li><a href="about.php">Про нас</a></li>
                    <li><a href="cards.php">Мої картки</a></li>
                    <li><a href="product.php">Продукти</a></li>
                    <li><a href="services.php">Сервіси</a></li>
                    <li><?php if(!empty($_COOKIE['user'] ?? '')): ?><a href="log_in.php">Вітаємо, <i><?=$_COOKIE['user']?></i></a><?php endif ?></li>
                    <li><a href="log_in.php">Вхід/Вихід</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
