<?php
$db = mysqli_connect('localhost', 'root', '', 'shop');
if (isset($_POST['username'])) {
    $user = $_POST['username'];
    $phone =$_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $spl_contact=mysqli_query($db,"insert into contact(Username,Email,Phone,Message)values('$user','$phone','$email','$message')");
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
        <div class="contact_us">
            <div class="form">
                <h2>ارتباط با ما</h2>
                <div class="social">
                    <a href=""><i class="fa-brands fa-telegram"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                </div>
                <div class="adressandphone">
                    <i class="fa-solid fa-phone"><span> 0918000000</span></i>
                    <i class="fa-regular fa-envelope"><span>mtkiabasv@gmail.com</span></i>
                    <i class="fa-solid fa-location-dot"><span>کرج-شاهین‌ویلا دور میدان باهر پلاک 32</span></i>
                </div>
                <form action="" method="post">
                    <div class="texts">
                        <label for="text-c">پیام</label>
                        <textarea name="message" id="text-c" placeholder="پیام خود را وارد نمائید..."></textarea>
                    </div>
                    <div class="enp">
                        <label for="">نام کاربری</label>
                        <input type="text" placeholder="نام کاربری" name="username">
                        <i class="fa-solid fa-user" id="i1"></i>
                        <label for="">تلفن</label>
                        <input type="tell" placeholder="تلفن" name="phone">
                        <i class="fa-solid fa-phone" id="i2"></i>
                        <label for="">ایمیل</label>
                        <input type="text" placeholder="ایمیل" name="email">
                        <i class="fa-regular fa-envelope" id="i3"></i>
                        <input type="submit" value="ارسال" id="btn">
                    </div>
                </form>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3233.643699274562!2d50.9460580753063!3d35.85773932025855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzXCsDUxJzI3LjkiTiA1MMKwNTYnNTUuMSJF!5e0!3m2!1sen!2s!4v1721648406488!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
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