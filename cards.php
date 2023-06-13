<?php
$title = "Про нас";
require "parts/header.php";
require "parts/menu.php";
require('reg_auth/db.php');
$login = $_COOKIE['user'];
$result = mysqli_query($conn,"SELECT id FROM users WHERE login = '$login' LIMIT 1");
$userid = $result->fetch_column(0);
$result = mysqli_query($conn,"SELECT id, card FROM cards WHERE user_id = '$userid'");
?>
<div class="container">
    <div class="col-12">
        <h2 class="text-center text-uppercase color2 mb-5">Cards</h2>
    </div>
    <div class="table">
        <table>
            <tr>
                <th>id</th>
                <th>cards</th>
                <th>actions</th>
            </tr>
            <?php

            while($obj=mysqli_fetch_array($result)) { ?>
                <tr>
                    <td> <?= $obj['id'] ?></td>
                    <td> <?= $obj['card'] ?></td>
                    <td></td>
                </tr>

            <?php  }?>
        </table>

    </div>
</div>
<?php
require "parts/footer.php";
?>
