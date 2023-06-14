<div id="header">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">

                <ul id="main-navigation">

                    <li>
                        <a href="index.php">Головна</a>
                    </li>
                    <li>
                        <a href="about.php">Про нас</a>
                    </li>
                    <li>
                        <a href="contacts.php">контакти</a>
                    </li>
                    <li>
                        <a href="cards.php">Мої картки</a>
                    </li>
                    <li>
                        <a href="product.php">Продукти</a>
                    </li>
                    <li>
                        <a href="services.php">Сервіси</a>
                    </li>
                    <li> <?php if(($_COOKIE['user'] ?? '') === ''):
                          else:?>
                        <a href="log_in.php">
                            Вітаємо, <?=$_COOKIE['user']?></a>
                         <?php endif;?>
                    </li>
                    <li>
                        <a href="log_in.php">Вхід/Вихід</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
