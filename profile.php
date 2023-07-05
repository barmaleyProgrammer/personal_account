<?php
$title = "Profile";
require('parts/header.php');
require('reg_auth/db.php');
global $conn, $userid;

//$sql = 'SELECT * FROM users where id='.$userid.' LIMIT 1';
?>
<div class="container">
    <div id="row">
        <div class="col-12">
            <h5 class="text-center text-uppercase color2 mb-5 mt-5">Дані користувача</h5>
        </div>
        <form action="add_profile_data.php" method="post">
            <input type="text" class="form-control" name="email"  id="profEmail" placeholder="введіть email"><br>
            <input type="text" class="form-control" name="phone" id="profTel" placeholder="введіть номер телефону"><br>
            <label for="content">
                Зміст:<textarea rows="10" cols="50" name="comment" id="content"></textarea>
            <button class="btn btn-success" type="submit">додати</button>
        </form>
    </div>
</div>
<?php
require('parts/footer.php');

