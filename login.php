<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'shop');
$ok = false;
$error = "-";
if (isset($_GET["user"])) {
    $user = $_GET["user"];
    $pass = $_GET["pass"];
    $sql = mysqli_query($db, "select*from user where Username='$user'and Password='$pass'");
    if ($row = mysqli_fetch_all($sql)) {
    } else {
        $error = "رمز عبور یا نام کاربری اشتباه است.";
    }
} else {
    $error = "نام خود را وارد نمایید.";
}

if (isset($_SESSION['moblies']) && strlen($_SESSION['moblies']) == 11) {
    echo '<meta http-equiv="refresh" content="0; url=paneluser.php"> ';
    die('');
} else {
    if (isset($_GET["name"])) {
        $_SESSION['fullname'] = ' ';
        $_SESSION['pass'] = ' ';
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
                    <li><a href=""><i class="fa-solid fa-user"></i></a></li>
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
                    <input type="text" name="user" id="user">
                    <label for="">رمز عبور</label>
                    <input type="text" name="password" id="pass">
                    <button id="sub" onclick="send()">ارسال</button>
                    <a href="singup.php">صفحه ثبت نام</a>
                </form>
            </div>
            <div class="pic-login">
                <img src="uploads/login.png" alt="">
            </div>
        </div>
    </div>

    <?php
    if ($ok == true) {
        echo '<div class=ok>ورود با موفقیت انجام شد.</div>';
        echo '<meta http-equiv="refresh" content="2; url=paneluser.php"> ';
    } else {
    }
    ?>
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
<script>
    function send() {
        var user = document.getElementById("user").value;
        var pass = document.getElementById("pass").value;
        console.log(document.getElementById('sub'));
        document.getElementById("sub").disabled = true;
        document.getElementById("sub").textContent = "در حال پردازش...";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
                let ok = this.responseText;
                console.log(ok);
                if (ok == '1') {
                    window.location.assign("paneluser.php");

                }
                document.getElementById("sub").disabled = false;
                document.getElementById("sub").textContent = "ورود";
            }

        };
        xmlhttp.open("GET", "ajax2.php?user=" + user + "&pass=" + pass, true);
        xmlhttp.send();
    }
</script>

</html>