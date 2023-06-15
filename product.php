<?php
$title = "Продукти";
require('parts/header.php');
require('api.php');
$products = seller();
?>
<div class="container">
    <div class="col-12">
        <h2 class="text-center text-uppercase color2 mb-5">Products</h2>
    </div>
    <div class="table">
        <table>
            <tr>
                <th>назва</th>
                <th>код продукта</th>
                <th>кількість</th>
                <th>price</th>
            </tr>
            <?php foreach ($products['data'] as $key=>$value) { ?>
            <tr>
                <td><?= $value['name']; ?></td>
                <td><?= $value['product_code']; ?></td>
                <td><?= $value['units']; ?></td>
                <td><?= $value['price']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>
<?php
require('parts/footer.php');
