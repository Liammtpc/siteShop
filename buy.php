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
        <div class="buy">
            <div class="bag" id="bag">
                <?php
                $user_ip = $_SERVER['REMOTE_ADDR'];
                $db = mysqli_connect('localhost', 'root', '', 'shop');
                $sql_bag = mysqli_query($db, "SELECT*FROM buy LEFT JOIN product ON buy.Product_id=product.Id WHERE User_ip='$user_ip'");
                while ($bag_row = mysqli_fetch_array($sql_bag)) {
                    echo '    <div class="pro-buy">
                    <img src="' . $bag_row['Img_main'] . '" alt="">
                    <span>' . $bag_row['Title'] . '</span>
                   <div class="incers">
                    <button onclick="minis()" id="bt2"><i class="fa-solid fa-minus"></i></button>
                    <input type="text" value="1" id="number">
                    <button onclick="pluse()" id="bt1"><i class="fa-solid fa-plus"></i></button></div>
                    <span id="price">' . $bag_row['Price'] . ' ریال</span>
                </div>';
                }
                ?>
            </div>
            <div class="factor">
                <label for="sp1">تعداد محصول</label>
                <span id="sp1"></span>
                <label for="">قیمت محصولات</label>
                <?php
                $sql_bags = mysqli_query($db, "SELECT sum(price) FROM buy LEFT JOIN product ON buy.Product_id=product.Id WHERE User_ip='$user_ip'");
                while ($bag_rows = mysqli_fetch_array($sql_bags)) {
                    echo ' <span id="sp2">' . $bag_rows['sum(price)'] . ' ریال</span>';
                }
                ?>

                <label for="">قیمت محصولات با تخفیف</label>
                <span id="sp3">0 ریال</span>
                <label for="">هزینه ارسال</label>
                <span id="sp4">500000 ریال</span>
                <div class="total">
                    <label for="">قیمت نهایی</label>
                    <?php
                    $post = 500000;
                    $sqls_bags = mysqli_query($db, "SELECT sum(price) FROM buy LEFT JOIN product ON buy.Product_id=product.Id WHERE User_ip='$user_ip'");
                    while ($bags_sum = mysqli_fetch_array($sqls_bags)) {
                        $sum_pro = $bags_sum['sum(price)'];
                        $sums = $sum_pro + $post;
                        echo '<span id="sp5">' . $sums . ' ریال</span>';
                    }
                    ?>

                </div>
                <a href="cart_to_profile.php">ثبت سفارش</a>
            </div>
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
<script src="js/script.js"></script>

</html>