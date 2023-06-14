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
                        <a href="cards.php">cards</a>
                    </li>
                    <li>
                        <a href="product.php">products</a>
                    </li>
                    <li>
                        <a href="services.php">services</a>
                    </li>
                    <li>
                        <a href="log_in.php">log in/out</a>
                    </li>
                    <?php if(($_COOKIE['user'] ?? '') === ''): ?>
                     <li> <?php else:?>
                        <a href="log_in.php">
                            Вітаємо, <?=$_COOKIE['user']?></a>
                         <?php endif;?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
