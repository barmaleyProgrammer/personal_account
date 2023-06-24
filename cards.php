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
$cards = [];
$cards = room('card/?room='.$userid);
foreach ($cards as $key => $card) {
    $balance_res = room('card/'.$card['card_num'].'/balance/');
    $balance_nums = array_column($balance_res['data']['results'], 'wallet_sum');
    $cards[$key]['balance'] = array_sum($balance_nums);

    $cards[$key]['payments'] = room('card/'.$card['card_num'].'/payment/');
}
$del = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16"><path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/></svg>';
?>
<div class="container">
    <div class="col-12">
        <div id="row">
            <?php foreach ($cards as $key => $card) { ?>
            <div class="accordion mt-5 mb-5" id="accordionExample<?= $key; ?>">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           <h3 class="text-center"><?= $card['card_num']; ?></h3>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample<?= $key; ?>">
                        <div class="accordion-body">
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample<?= $key; ?>">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Загальна інформація</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Перелік поповнень</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Перелік поїздок</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">список продуктів</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                        <table>
                                            <tr>
                                                <th>Баланс</th>
                                                <th>Поповнити картку</th>
                                                <th>статус картки</th>
                                                <th>Видалити картку</th>
                                            </tr>
                                            <tr>
                                                <td>56грн</td>
                                                <td></td>
                                                <td>заблокована/заархівірована</td>
                                                <td>Х</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                        <table>
                                            <tr>
                                                <th>id</th>
                                                <th>Назва агента</th>
                                                <th>Продукт</th>
                                                <th>Сума</th>
                                                <th>Створено</th>
                                            </tr>
                                            <tr>
                                                <td>33</td>
                                                <td>Privat</td>
                                                <td>ПОПОВНЕННЯ ТРАНСПОРТНОГО ГАМАНЦЯ</td>
                                                <td>44</td>
                                                <td>2021-10-01T11:28:17.313609+03:00</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                                        <table>
                                            <tr>
                                                <th>дата поїздки</th>
                                                <th>маршрут</th>
                                                <th>сервіс</th>
                                                <th>борт номер</th>
                                            </tr>
                                            <tr>
                                                <td>2021-10-07T12:55:34+03:00</td>
                                                <td>№ 6</td>
                                                <td>ПОЇЗДКА НА ТРОЛЕЙБУСІ</td>
                                                <td>4455</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
                                        <table>
                                            <tr>
                                                <th>id</th>
                                                <th>код продукта</th>
                                                <th>назва продукта</th>
                                                <th>вартість</th>
                                            </tr>
                                            <tr>
                                                <td>а</td>
                                                <td>аап-5отот</td>
                                                <td>Две  поездки на автобусе для студента</td>
                                                <td>5 грн</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>


            <form action="add_card.php" method="post">
                <input type="text" class="form-control" name="card" id="card" placeholder="введіть номер картки"><br>
                <input type="text" class="form-control" name="pin" id="pin" placeholder="введіть pin"><br>
                <button class="btn btn-success" type="submit">додати картку</button>
            </form>
        </div>
    </div>
</div>
<?php
require('parts/footer.php');
