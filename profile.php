<?php
$title = "Profile";
require('parts/header.php');
require('reg_auth/db.php');
global $conn, $userid;

$sql = 'SELECT * FROM users where id='.$userid.' LIMIT 1';
$res = mysqli_query($conn, $sql);
$values = mysqli_fetch_assoc($res);
?>
<div class="container">
    <div id="row">
        <div class="col-12">
            <h5 class="text-center text-uppercase color2 mb-5 mt-5">Дані користувача</h5>
        </div>
        <form action="add_profile_data.php" method="post">
            <input type="email" class="form-control profEmail" name="email" value="<?= $values['email']; ?>" placeholder="введіть email"><br>
<!--            <input type="tel" pattern="[0-9]{2} [0-9]{3}[0-9]{4}" class="form-control profTel" name="phone" value="--><?php //= $values['phone']; ?><!--" placeholder="введіть номер телефону"<small>Format: 038 xxx xxxx</small><br>-->
            <small>Формат набору номера: 38 000 000 0000</small><input onkeydown="phoneNumberFormatter()" id="phone-number" class="form-control profTel" name="phone" value="<?= $values['phone']; ?>" placeholder="введіть номер телефону"<br>
                Зміст:<textarea rows="10" cols="50" name="comments" ><?= $values['comments']; ?></textarea><br>
            <button class="btn btn-success" type="submit">додати/змінити</button>
        </form>
    </div>
</div>

<?php
require('parts/footer.php');


