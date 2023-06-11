<?php
$title = "services";
require "parts/header.php";
require "parts/menu.php";
require "api.php";
?>


    <h1>Services</h1>
    <div class="table">
        <table>
            <tr>
                <th>назва</th>
                <th>код продукта</th>
                <th>кількість</th>
            </tr>
            <?php
            $services = seller('service/');

            foreach ($services['data'] as $key=>$value) { ?>
                <tr>
                    <td> <?= $value['name'] ?></td>
                    <td> <?= $value['srv_id'] ?></td>
                    <td> <?= $value['wallet_price'] ?></td>
                </tr>

            <?php  }?>
        </table>
</div>
<?php
require "parts/footer.php";
?>