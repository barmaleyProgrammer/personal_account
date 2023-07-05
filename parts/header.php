<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="style.css" type="text/css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title><?= $title; ?></title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-info">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Головна</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">Про нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cards.php">Мої картки</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.php">Продукти</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Сервіси</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <?php if (!empty($_COOKIE['user'] ?? '')): ?>
                        <a class="nav-link" href="log_in.php">Вітаємо, <i><?= $_COOKIE['user']; ?></i></a>
                    <?php else: ?>
                        <a class="nav-link" href="log_in.php">Вхід/Вихід</a>
                    <?php endif ?>
                </li>
            </ul>
        </div>
    </div>
</nav>
