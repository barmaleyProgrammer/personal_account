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
                    <h2 class="text-center text-uppercase color2 mb-5">Картки</h2>
                        <div class="table">
                            <table>
                                <tr>
                                    <th>id</th>
                                    <th>мої картки</th>
                                    <th>Видалити</th>
                                </tr>
                                <?php
                                while($obj=mysqli_fetch_array($result)) { ?>
                                    <tr>
                                        <td> <?= $obj['id'] ?></td>
                                        <td> <?= $obj['card'] ?></td>
                                        <td class="text-center"> <a href="deleted_cards.php?cardid=<?= $obj['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                                </svg></a></td>
                                    </tr>
                                <?php  }?>
                            </table>
                        </div>
                    <form action="add_card.php" method="post">
                        <input type="text" class="form-control" name="card" id="card" placeholder="введіть номер картки"><br>
                        <button class="btn btn-success" type="submit">додати картку</button>
                    </form>

                        <nav class="navbar navbar-expand-sm navbar-light bg-light">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">дії</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="deleted_cards.php?cardid=<?= $obj['id'] ?>">X</a></li>
                                        <li><a class="dropdown-item" href="#">поповнити картку</a></li>
                                        <li><a class="dropdown-item" href="#">видалити картку</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                </div>
            </div>
</div>
<?php
require "parts/footer.php";
?>
