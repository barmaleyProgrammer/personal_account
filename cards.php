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
            <div class="accordion mt-5 mb-5" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           <h3 class="text-center">меню</h3>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            </div>
                            <table>
                                <tr>
                                    <th>номер картки</th>
                                    <th>Баланс</th>
                                    <th>список продуктів на карті</th>
                                    <th>Поповнити картку</th>
                                    <th>перелік поїздок</th>
                                    <th>перелік поповнень</th>
                                    <th>статус картки</th>
                                    <th>Видалити картку</th>
                                </tr>
                                <tr>
                                    <td>xxxxxx</td>
                                    <td>грн</td>
                                    <td></td>
                                    <td>ввести сумму</td>
                                    <td><details>
                                            <summary>подивитися</summary>
                                            <pre>
    2021-10-01T14:09:39+03:00,
    "route": "№ 3",
    "ПОЇЗДКА НА ТРОЛЕЙБУСІ",
    "bort_num": "4455"

    2021-10-01T14:52:49+03:00,
    "route": "№ 3",
    "ПОЇЗДКА НА ТРОЛЕЙБУСІ",
    "bort_num": "4455"
                                            </pre>
                                        </details>
                                    </td>
                                    <td><details>
                                            <summary>подивитися</summary>
                                            <pre>
    "agent_name": "Продавец QR",
    "ПОПОВНЕННЯ ТРАНСПОРТНОГО ГАМАНЦЯ",
    "summa": "16.00",
    2021-10-01T11:28:17.313609+03:00"
                                            </pre>
                                        </details></td>
                                    <td>заблокована/заархівірована</td>
                                    <td>xxxxxx</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>



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
