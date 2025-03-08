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
                    $db = mysqli_connect('localhost', 'root', '', 'shop');
                    $sql_productCategory = mysqli_query($db, "select*from category_brand where 1");
                    while ($productCategory_row = mysqli_fetch_array($sql_productCategory)) {
                        echo ' <li><a href="">' . $productCategory_row['Category'] . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="brand">
                <label for="">برند</label>
                <ul>
                    <?php
                    $db = mysqli_connect('localhost', 'root', '', 'shop');
                    $sql_brand = mysqli_query($db, "select*from brand where 1");
                    while ($brand_row = mysqli_fetch_array($sql_brand)) {
                        echo ' <li><a href="">' . $brand_row['Brand'] . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="price">
                <?php
                if (isset($_POST['min'])) {
                    $min = $_POST['min'];
                    $max = $_POST['max'];
                    $db = mysqli_connect('localhost', 'root', '', 'shop');
                    $sql_brand = mysqli_query($db, "select*from brand where 1");
                }
                ?>
                <form action="" method="post">
                    <label for=""> قیمت</label>
                    <br>
                    <span>از</span>
                    <input type="number" name="min">
                    <span>تا</span>
                    <input type="number" name="max">
            </div>
            <input type="submit" value="اعمال">
            </form>
        </div>
    </div>
    <div class="continer">
        <div class="productpage">
            <?php
            $db = mysqli_connect('localhost', 'root', '', 'shop');
            $sql_product = mysqli_query($db, "select*from product where 1");
            while ($product_row = mysqli_fetch_array($sql_product)) {
                echo '   
                <div class="productspage">
                <img src="' . $product_row['Img_main'] . '" alt="">
                <span>' . $product_row['Title'] . '</span>
                <ins>' . $product_row['Price'] . ' ریال</ins>
                <a href="landingpage.php?Id=' . $product_row['Id'] . '"><i class="fa-solid fa-basket-shopping"></i></a>
                </div>';
            }

            ?>
            <div class="productspage">
                <img src="uploads/laptopipad.webp" alt="">
                <span>لپ تاپ 13.6 اینچ اپل مدل MacBook Air-MLXY3 M2 2022 LLA</span>
                <ins>569900000 ریال</ins>
                <a href=""><i class="fa-solid fa-basket-shopping"></i></a>
            </div>
            <div class="productspage">
                <img src="uploads/keyboard.webp" alt="">
                <span>کیبورد اپل مدل MK2C3</span>
                <ins>139900000 ریال</ins>
                <a href=""><i class="fa-solid fa-basket-shopping"></i></a>
            </div>
            <div class="productspage">
                <img src="uploads/playstation5.webp" alt="">
                <span>کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا</span>
                <ins>330000000 ریال</ins>
                <a href=""><i class="fa-solid fa-basket-shopping"></i></a>
            </div>
            <div class="productspage">
                <img src="uploads/iphone.webp" alt="">
                <span>گوشی موبایل اپل مدل iPhone 13 Pro CH دو سیم‌ کارت ظرفیت 512 گیگابایت و 6 گیگابایت رم - نات اکتیو</span>
                <ins>1440000000 ریال</ins>
                <a href=""><i class="fa-solid fa-basket-shopping"></i></a>
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

</html>