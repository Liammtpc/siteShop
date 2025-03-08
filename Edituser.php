<?php
if (isset($_POST['user'])) {
    $db = mysqli_connect('localhost', 'root', '', 'shop');
    $Id = $_GET['Id'];

    $user = $_POST['user'];
    $tell = $_POST['tell'];
    $email = $_POST['email'];
    $adress = $_POST['adress'];
    $codepost = $_POST['codepost'];
    $sql_infrom = mysqli_query($db, "UPDATE user SET Username='$user',Email='$email', Phone='$tell', Adress='$adress', Codepost='$codepost' where Id='$Id'");
}


?>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Shop</title>
</head>

<body>
    <div class="continer">
        <div class="edituser">
        <form action="" method="post">
            <h2>ویرایش اطلاعات کاربر</h2>
            <input type="text" name="user" placeholder="نام کاربری">
            <input type="tell" name="tell" placeholder="تلفن">
            <input type="text" name="email" placeholder="ایمیل">
            <input type="text" name="adress" placeholder="آدرس">
            <input type="text" name="codepost" placeholder="کد پستی">
            <button>ویرایش</button>
            <a href="paneluser.php">بازگشت به پنل</a>
        </form>
        </div>
    </div>
</body>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>

</html