<?php
session_start();
$error = "-";
$ok = false;
if (isset($_POST['user'])) {
    $user = $_POST['user'];
    $pass = $_POST['password'];
    $rpass = $_POST['re-password'];
    $phone = $_POST['phone'];
    $_SESSION['moblies'] = $phone;
    $_SESSION['fullname'] = $user;
    $_SESSION['pass'] = $pass;
    $_SESSION['rpass'] = $rpass;
    if (strlen($user) < 6 || strlen($user) > 20) {
        $error = "نام کاربری کمتر از حد نصاب است";
    }
    if (strlen($phone) > 11 || strlen($phone) < 11) {
        $error = " فرمت شماره تلفن اشتباه است.";
    }
    if (substr($phone, 0, 2) != "09") {
        $error = "فرمت شماره تلفن اشتباه است.";
    }
    if (strlen($pass) > 8 || strlen($pass) < 8) {
        $error = "تعداد ارقام رمز وارد شده بیش از حد مجاز است.";
    }
    if ($_SESSION['pass'] != $_SESSION['rpass']) {
        $error = "رمز تکرار شده با رمز وارده متفاوت است.";
    }
    if($error=="-"){
        $db = mysqli_connect('localhost', 'root', '', 'shop');
        $sql_user = mysqli_query($db, "insert into user(Username,Phone,Password)values('$user','$phone','$pass')");
        $ok=true;
    }
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
        <div class="header">
            <div class="sub_menu">
                <img src="uploads/logo.png" alt="">
                <form action="" method="post">
                    <input type="text" placeholder="جستجو">
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <ul>
                    <li><a href="login.php"><i class="fa-solid fa-user"></i></a></li>
                    <li><a href=""><i class="fa-solid fa-cart-shopping"></i></a></li>
                </ul>
            </div>
            <div class="main_menu" id="header">
                <nav>
                    <ul>
                        <li><a href="#">خانه</a></li>
                        <li><a href="#">لب تاپ</a></li>
                        <li><a href="#">موبایل</a></li>
                        <li><a href="#">کنسول</a></li>
                        <li><a href="#">تبلت</a></li>
                    </ul>
                </nav>
                <a href=""><i class="fa-solid fa-phone"></i></a>
            </div>
        </div>
    </div>
    <div class="content"></div>
    <div class="continer">
        <div class="signup">
            <div class="sign">
                <form action="" method="post">
                    <h2>به فروشگاه خوش آمدید.</h2>
                    <label for="">نام کاربر</label>
                    <input type="text" id="user" name="user">
                    <label for="">تلفن</label>
                    <input type="tell" name="phone" maxlength="11">
                    <label for="">رمز</label>
                    <input type="text" id="pass" name="password">
                    <label for="">تکرار رمز</label>
                    <input type="text" name="re-password">
                    <input type="submit" value="ثبت نام" id="sub">
                    <a href="login.php">صفحه ورود</a>
                </form>
            </div>
            <div class="pic-login">
                <img src="uploads/login.png" alt="">
            </div>
        </div>
    </div>
    <div class="continer">
        <?php
     
        if ($ok==true) {
            echo '<div class="ok">ثبت نام با موفقیت انجام شد.</div>';
            echo '<meta http-equiv="refresh" content="2; url=login.php">';
   
        } else {
            if ($error <> "-") {
                echo '<div class="error">' . $error . '</div>';
            }
        }
        ?>
    </div>
    <footer>
        <div class="continer">
            <div class="logo">
                <img src="uploads/logo.png" alt="">
            </div>
            <div class="footer">
                <div class="up">
                    <a href="#" class="a"><i class="fa-solid fa-plane-up"></i></a>
                </div>
                <div class="footer_menu">
                    <nav>
                        <ul>
                            <li><a href="#">خانه</a></li>
                            <li><a href="#">لب تاپ</a></li>
                            <li><a href="#">موبایل</a></li>
                            <li><a href="#">کنسول</a></li>
                            <li><a href="#">تبلت</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="contacts">
                    <span>شماره تلفن:</span><span>09182689364</span>
                    <span>ایمیل:</span><span>heshmatianmehran@gmail.com</span>
                    <span>آدرس:</span><span>کرمانشاه-سنقر-خیابان پاسداران</span>
                </div>
                <div class="social">
                    <a href=""><i class="fa-brands fa-telegram"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                </div>
                <div class="valid">
                    <form action="" method="post">
                        <input type="text" placeholder="برای تخفیف با خبر شوید...">
                        <button>ارسال</button>
                    </form>
                    <div class="namad">
                        <img src="uploads/etemad.png" alt="">
                        <img src="uploads/rezi.webp" alt="">
                        <img src="uploads/kasbokar.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>

</html>