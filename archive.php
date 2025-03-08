<?php
$db = mysqli_connect('localhost', 'root', '', 'shop');
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
        <div class="filter">
            <div class="category-pro">
                <label for="">دسته بندی</label>
                <ul>
                    
                <?php
                $sql_category = mysqli_query($db, "select Category from Category where 1");
                while ($archive_shows = mysqli_fetch_array($sql_category)) {
                    echo '<li><a href="">'.$archive_shows['Category'].'</a></li>';
                }
                ?>
                </ul>
            </div>
        </div>
        <div class="continer">
            <div class="bloges">

                <?php
                $sql_archive = mysqli_query($db, "select*from bloge where 1");
                while ($archive_show = mysqli_fetch_array($sql_archive)) {
                    echo ' <div class="bloge">    <img src="' . $archive_show['Img'] . '" alt="">
                         <span>' . $archive_show['Title'] . '</span>
                         <p>' . $archive_show['Execute'] . '</p>
                         <a href="bloge.php?Id='. $archive_show['Id'].'"> <i class="fa-solid fa-down-long"></i></a> </div>';
                }
                ?>
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