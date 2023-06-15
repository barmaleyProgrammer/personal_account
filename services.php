<?php
$title = "services";
require('parts/header.php');
require('api.php');
$services = seller('service');
?>
<div class="container">
    <h1>Services</h1>
    <div class="table">
        <table>
            <tr>
                <th>назва</th>
                <th>код продукта</th>
                <th>кількість</th>
            </tr>
            <?php foreach ($services['data'] as $key=>$value) { ?>
            <tr>
                <td><?= $value['name']; ?></td>
                <td><?= $value['srv_id']; ?></td>
                <td><?= $value['wallet_price']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>
<?php
require('parts/footer.php');
