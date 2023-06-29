<?php
$title = "картки";
require('parts/header.php');
require('reg_auth/db.php');
require('api.php');
global $conn;


if (!array_key_exists('user', $_COOKIE) || empty($_COOKIE['user'])) {
 exit('для просмотру вмісту будь ласка <a href="log_in.php">увійдіть</a> або <a href="index.php">зареєструйтеся</a>');
}


$login = $_COOKIE['user'];
$result = mysqli_query($conn,"SELECT id FROM users WHERE login = '$login' LIMIT 1");
$userid = $result->fetch_column(0);
$products = seller();
$cards = room('card/?room='.$userid);
foreach ($cards as $key => $card) {
    $balance_res = room('card/'.$card['card_num'].'/balance/');
    $balance_nums = array_column($balance_res['data']['results'], 'wallet_sum');
    $cards[$key]['balance'] = array_sum($balance_nums);

    $cards[$key]['payments'] = room('card/'.$card['card_num'].'/payment/');
    $cards[$key]['validations'] = room('card/'.$card['card_num'].'/validation/');
    $cards[$key]['products'] = seller('product/?card_num='.$card['card_num']);
}
$del = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16"><path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/></svg>';
?>
<div class="container">
    <div class="col-12">
        <div id="row">
            <?php foreach ($cards as $key => $card) { ?>
            <div class="accordion mt-5 mb-5 accordionExample" id="accordionExample<?= $key; ?>">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?= $key; ?>" aria-expanded="true" aria-controls="collapseOne<?= $key; ?>">
                           <h6 class="text-center">Номер картки: <?= $card['card_num']; ?></h6>
                        </button>
                    </h2>
                    <div id="collapseOne<?= $key; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample<?= $key; ?>">
                        <div class="accordion-body">
                            <div id="collapseOne<?= $key; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample<?= $key; ?>">
                                <ul class="nav nav-tabs" id="myTab<?= $key; ?>" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab<?= $key; ?>" data-bs-toggle="tab" data-bs-target="#home-tab-pane<?= $key; ?>" type="button" role="tab" aria-controls="home-tab-pane<?= $key; ?>" aria-selected="true">Загальна інформація</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab<?= $key; ?>" data-bs-toggle="tab" data-bs-target="#profile-tab-pane<?= $key; ?>" type="button" role="tab" aria-controls="profile-tab-pane<?= $key; ?>" aria-selected="false">Перелік поповнень</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="contact-tab<?= $key; ?>" data-bs-toggle="tab" data-bs-target="#contact-tab-pane<?= $key; ?>" type="button" role="tab" aria-controls="contact-tab-pane<?= $key; ?>" aria-selected="false">Перелік поїздок</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="disabled-tab<?= $key; ?>" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane<?= $key; ?>" type="button" role="tab" aria-controls="disabled-tab-pane<?= $key; ?>" aria-selected="false">список продуктів</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="charge-tab<?= $key; ?>" data-bs-toggle="tab" data-bs-target="#charge-tab-pane<?= $key; ?>" type="button" role="tab" aria-controls="charge-tab-pane<?= $key; ?>" aria-selected="false">поповнити</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent<?= $key; ?>">
                                    <div class="tab-pane fade show active" id="home-tab-pane<?= $key; ?>" role="tabpanel" aria-labelledby="home-tab<?= $key; ?>" tabindex="0">
                                        <table>
                                            <tr>
                                                <th>Баланс</th>
<!--                                                <th>NFC</th>-->
                                                <th>заблокована</th>
                                                <th>заархівована</th>
                                            </tr>
                                            <tr>
                                                <td><?= $card['balance'] ?>грн</td>
<!--                                                <td>--><?php //= $card['nfc_id'] ?><!--</td>-->
                                                <!-- td><a href="block_card.php?block=<?= $card['blocked'] ? 'false' : 'true'; ?>&card=<?= $card['card_num']; ?>" title="<?= $card['blocked'] ? 'розблокувати' : 'блокувати'; ?>"><?= $card['blocked'] ? 'так' : 'ні'; ?></a></td -->
                                                <td><a
                                                        href="javascript:void(0)"
                                                        onclick="blockcard(event)"
                                                        data-blocked="<?= $card['blocked'] ? 'false' : 'true'; ?>"
                                                        data-card-num="<?= $card['card_num']; ?>"
                                                        title="<?= $card['blocked'] ? 'розблокувати' : 'блокувати'; ?>">
                                                        <?= $card['blocked'] ? 'так' : 'ні'; ?>
                                                    </a></td>
                                                <td><?= $card['archived'] ? 'так' : 'ні'; ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="profile-tab-pane<?= $key; ?>" role="tabpanel" aria-labelledby="profile-tab<?= $key; ?>" tabindex="0">
                                        <table>
                                            <tr>
                                                <th>id</th>
                                                <th>Назва агента</th>
                                                <th>Продукт</th>
                                                <th>Сума</th>
                                                <th>Створено</th>
                                            </tr>
                                            <?php foreach ($card['payments'] as $payment) { ?>
                                            <tr>
                                                <td><?= $payment['id']; ?></td>
                                                <td><?= $payment['agent_name']; ?></td>
                                                <td><?= $payment['product_name']; ?></td>
                                                <td><?= $payment['summa']; ?></td>
                                                <td><?= $payment['received_at']; ?></td>
                                            </tr>
                                            <?php } ?>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="contact-tab-pane<?= $key; ?>" role="tabpanel" aria-labelledby="contact-tab<?= $key; ?>" tabindex="0">
                                        <table>
                                            <tr>
                                                <th>дата поїздки</th>
                                                <th>маршрут</th>
                                                <th>сервіс</th>
                                                <th>борт номер</th>
                                            </tr>
                                            <?php foreach ($card['validations'] as $validation) { ?>
                                            <tr>
                                                <td><?= $validation['timestamp']; ?></td>
                                                <td><?= $validation['route']; ?></td>
                                                <td><?= $validation['service']; ?></td>
                                                <td><?= $validation['bort_num']; ?></td>
                                            </tr>
                                            <?php } ?>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="disabled-tab-pane<?= $key; ?>" role="tabpanel" aria-labelledby="disabled-tab<?= $key; ?>" tabindex="0">
                                        <table>
                                            <tr>
                                                <th>id</th>
                                                <th>код продукта</th>
                                                <th>назва продукта</th>
                                                <th>вартість</th>
                                            </tr>
                                            <?php foreach ($card['products']['data'] as $product) { ?>
                                            <tr>
                                                <td><?= $product['id']; ?></td>
                                                <td><?= $product['product_code']; ?></td>
                                                <td><?= $product['name']; ?></td>
                                                <td><?= $product['price']; ?></td>
                                            </tr>
                                            <?php } ?>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="charge-tab-pane<?= $key; ?>" role="tabpanel" aria-labelledby="charge-tab<?= $key; ?>" tabindex="0">
                                        <!-- form action="#" onsubmit="charge(event)" method="post" -->
                                        <form action="card_charge.php" method="post">
                                            <input type="hidden" name="card_code" value="<?= $card['nfc_id'] ?>"><br>
                                            <input type="number" class="form-control" name="summa" placeholder="введіть суму" required><br>
                                            <select class="form-control" name="product_code" required>
                                                <option value="">оберiть продукт</option>
                                                <?php foreach ($card['products']['data'] as $product) { ?>
                                                    <option id="product_code" value="<?= $product['product_code']; ?>"><?= $product['name']; ?></option>
                                                <?php } ?>
                                            </select><br>

                                            <button class="btn btn-success" type="submit">поповнити</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="mt-5">
            <form action="add_card.php" method="post">
                <input type="text" class="form-control" name="card" id="card" placeholder="введіть номер картки"><br>
                <input type="text" class="form-control" name="pin" id="pin" placeholder="введіть pin"><br>
                <button class="btn btn-success" type="submit">додати картку</button>
            </form>
            </div>
        </div>
    </div>
</div>
<?php
require('parts/footer.php');
