<?php
$title = "Продукти";
require "parts/header.php";
require "parts/menu.php";
require "api.php";
?>
    <div class="container">
       <div> <h1>Products</h1>
    </div>
    <div class="table">
        <table>
            <tr>
                <th>назва</th>
                <th>код продукта</th>
                <th>кількість</th>
                <!-- th>купить</th -->
            </tr>
<?php
$products = seller();

foreach ($products['data'] as $key=>$value) { ?>
        <tr>
            <td> <?= $value['name'] ?></td>
            <td> <?= $value['product_code'] ?></td>
            <td> <?= $value['units'] ?></td>
<!--            <td> //<?= $value['wallet_price'] ?></td>-->
        </tr>

    <?php  }?>
</table>

    </div>
</div>
<?php
require "parts/footer.php";
?>