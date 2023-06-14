<?php
$title = "картки";
require "parts/header.php";
require "parts/menu.php";
require('reg_auth/db.php');
require "api.php";
$login = $_COOKIE['user'];
$result = mysqli_query($conn,"SELECT id FROM users WHERE login = '$login' LIMIT 1");
$userid = $result->fetch_column(0);
$result = mysqli_query($conn,"SELECT id, card FROM cards WHERE user_id = '$userid'");
?>
<div class="container">
            <div class="col-12">
                <div id="row">
                    <h2 class="text-center text-uppercase color2 mb-5">Cards</h2>

                        <div class="table">
                            <table>
                                <tr>
                                    <th>id</th>
                                    <th>мої картки</th>
                                    <th></th>
                                </tr>
                                <?php
                                while($obj=mysqli_fetch_array($result)) { ?>
                                    <tr>
                                        <td> <?= $obj['id'] ?></td>
                                        <td> <?= $obj['card'] ?></td>
                                        <td> <a href="deleted_cards.php?cardid=<?= $obj['id'] ?>">X</a></td>
                                    </tr>
                                <?php  }?>
                            </table>
                        </div>
                    <form action="add_card.php" method="post">
                        <input type="text" class="form-control" name="card" id="card" placeholder="введіть номер картки"><br>
                        <button class="btn btn-success" type="submit">додати картку</button>
                    </form>
                    <form action="deleted_cards.php" method="post">
                        <input type="text" class="form-control" name="card" id="card" placeholder="введіть номер картки"><br>
                        <button class="btn btn-success" type="submit">видалити картку</button>
                    </form>
<!--                        <nav class="navbar navbar-expand-sm navbar-light bg-light">-->
<!--                            <ul class="navbar-nav">-->
<!--                                <li class="nav-item dropdown">-->
<!--                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">дії</a>-->
<!--                                    <ul class="dropdown-menu">-->
<!--                                        <li><a class="dropdown-item" href="add_card.php">додати картку</a></li>-->
<!--                                        <li><a class="dropdown-item" href="#">поповнити картку</a></li>-->
<!--                                        <li><a class="dropdown-item" href="#">видалити картку</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </nav>-->
                </div>
            </div>
</div>
<?php
require "parts/footer.php";
?>
