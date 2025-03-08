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
        <div class="panel">
            <div class="menu_paneladmin">
                <img src="uploads/logo.png" alt="">
                <ul>
                    <li><button onclick="products()">بارگذاری محصول</button></li>
                    <li><button onclick="bloges()">بارگذاری مقاله</button></li>
                    <li><button onclick="opinins()">کنترل نظرات</button></li>
                    <li><button onclick="contacts()">ارتباط با ما</button></li>
                    <li><a href="">خروج</a></li>
                </ul>
            </div>
            <div class="main_panel">
                <div class="uploads-product" id="product">
                    <?php
                    if (isset($_POST['title'])) {
                        $title = $_POST['title'];
                        $execute = $_POST['execute'];
                        $price = $_POST['price'];
                        $category = $_POST['category'];
                        $brand = $_POST['brand'];
                        $texts = $_POST['texts'];
                        $target_dir = "uploads/";
                        $target_file = $target_dir . basename($_FILES["main"]["name"]);
                        echo ($target_file);
                        if (isset($_POST["submit"])) {
                            if (move_uploaded_file($_FILES["main"]["tmp_name"],  $target_file)) {
                                echo "آپلود من با موفقیت انجام شد";
                            } else {
                                echo "آپلود ناموفق";
                            }
                        }
                        $target_dirc = "uploads/";
                        $target_filec = $target_dirc . basename($_FILES["imgone"]["name"]);
                        echo ($target_filec);
                        if (isset($_POST["submit"])) {
                            if (move_uploaded_file($_FILES["imgone"]["tmp_name"],  $target_filec)) {
                                echo "آپلود من با موفقیت انجام شد";
                            } else {
                                echo "آپلود ناموفق";
                            }
                        }
                        $target_dirb = "uploads/";
                        $target_fileb = $target_dirb . basename($_FILES["imgtwo"]["name"]);
                        echo ($target_fileb);
                        if (isset($_POST["submit"])) {
                            if (move_uploaded_file($_FILES["imgtwo"]["tmp_name"],  $target_fileb)) {
                                echo "آپلود من با موفقیت انجام شد";
                            } else {
                                echo "آپلود ناموفق";
                            }
                        }
                        $target_dira = "uploads/";
                        $target_filea = $target_dira . basename($_FILES["img3"]["name"]);
                        echo ($target_filea);
                        if (isset($_POST["submit"])) {
                            if (move_uploaded_file($_FILES["img3"]["tmp_name"],  $target_filea)) {
                                echo "آپلود من با موفقیت انجام شد";
                            } else {
                                echo "آپلود ناموفق";
                            }
                        }
                        $con = mysqli_connect('localhost', 'root', '', 'shop');
                        $sqls = mysqli_query($con, "INSERT INTO product(Category, Brand, Title, Execute, Price, Texts, Img_main, Img1, Img2, Img3)values('$category','$brand','$execute','$price','$texts',' $target_file',' $target_filec',' $target_fileb',' $target_file')");
                    }
                    ?>
                    <h2>بارگذاری محصولات</h2>
                    <form action="paneladmin.php" method="post" enctype="multipart/form-data">
                        <input type="text" name="title" placeholder="نام محصول واد کنید">
                        <input type="text" name="execute" placeholder="خلاصه محصول وارد کنید">
                        <input type="number" name="price" placeholder="قیمت محصول وارد کنید">
                        <input type="text" name="category" placeholder="دسته بندی محصول">
                        <input type="text" name="brand" placeholder="برند محصول">
                        <textarea name="texts" placeholder="مشخصات محصول وارد کنید..."></textarea>
                        <div class="uploads-picture">
                            <input type="file" name="main" id="">
                            <input type="file" name="imgone" id="">
                            <input type="file" name="imgtwo" id="">
                            <input type="file" name="img3" id="">
                        </div>
                        <input type="submit" value="باگذاری" name="submit">
                    </form>
                </div>
                <div class="uploads-bloge" id="bloge">
                    <?php
                    if (isset($_POST['titlebloge'])) {
                        $db = mysqli_connect('localhost', 'root', '', 'shop');
                        $titlebloge = $_POST['titlebloge'];
                        $exebloge = $_POST['exebloge'];
                        $textsbloge = $_POST['textsbloge'];
                        $categoryblog = $_POST['categoryblog'];

                        $target_dirbl = "uploads/";
                        $target_filebl = $target_dirbl . basename($_FILES["blpc"]["name"]);
                        echo ($target_filebl);
                        if (isset($_POST["submit"])) {
                            if (move_uploaded_file($_FILES["blpc"]["tmp_name"],  $target_filebl)) {
                                echo "آپلود من با موفقیت انجام شد";
                            } else {
                                echo "آپلود ناموفق";
                            }
                        }

                        $uploadpro_sql = mysqli_query($db, "INSERT INTO bloge(Category,Title,Execute,Texts,Img)VALUES('$categoryblog','$titlebloge','$exebloge','$textsbloge','$target_filebl','$categoryblog')");
                    }
                    ?>
                    <h2>بارگذاری مقالات</h2>
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="text" name="titlebloge" placeholder="موضوع وارد کنید" id="input">
                        <input type="text" name="exebloge" placeholder="خلاصه مقاله وارد کنید" id="input">
                        <input type="text" name="categoryblog" placeholder="" id="input">
                        <textarea name="textsbloge" id="" placeholder="متم مقاله وارد کنید..."></textarea>
                        <div class="uploads-picture">
                            <input type="file" name="blpc" id="">
                        </div>
                        <button name="submit">بارگذاری</button>
                    </form>
                </div>
                <div class="opinins" id="opinin">
                    <h2>کنترل نظرات</h2>
                    <?php
                    $db = mysqli_connect('localhost', 'root', '', 'shop');
                    $give_opinin = mysqli_query($db, "select*from opinin where 1");
                    while ($give_bloge = mysqli_fetch_array($give_opinin)) {
                        echo '   <div class="opinin">
                        <img src="uploads/logo.png" alt="">
                        <span>' . $give_bloge['Uesrname'] . '</span>
                        <p>' . $give_bloge['Texts'] . '</p>
                        <div class="edit">
                            <a href="paneladmin.php?tik=' . $give_bloge['Id'] . '" id="a1">تایید</a><a href="paneladmin.php?del=' . $give_bloge['Id'] . '" id="a2">حذف</a>
                        </div>
                    </div>';
                    }
                    ?>
                    <?php
                    if (isset($_GET['del'])) {
                        $del = $_GET['del'];
                        $delete = mysqli_query($db, "delete from opinin where Id='$del'");
                    }
                    if (isset($_GET['tik'])) {
                        $tik = $_GET['tik'];
                        $update = mysqli_query($db, "update opinin set Check_message='1' where Id='$tik'");
                    }



                    ?>
                </div>
                <div class="contacts-user" id="contact">
                    <h2>ارتباط با ما</h2>
                    <?php
                    $db = mysqli_connect('localhost', 'root', '', 'shop');
                    $give_contact = mysqli_query($db, "select*from contact where 1");
                    while ($give_contacts = mysqli_fetch_array($give_contact)) {
                        echo '     <div class="contact-user">
                        <img src="uploads/logo.png" alt="">
                        <div class="info_user">
                            <span>' . $give_contacts['Username'] . '</span>
                            <span>' . $give_contacts['Email'] . '</span>
                        </div>
                        <p>' . $give_contacts['Message'] . '</p>
                        <div class="edit">
                            <a href="paneladmin.php?Ids=' . $give_contacts['Id'] . '" id="a2">حذف</a>
                        </div>
                    </div>';
                    }
                    ?>
                    <?php
                    if (isset($_GET['Ids'])) {
                        $Ids = $_GET['Ids'];
                        $delete = mysqli_query($db, "delete from contact where Id='$Ids'");
                    }
                    ?>
                </div>
            </div>
        </div>
</body>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
<script src="js/panel.js"></script>

</html>