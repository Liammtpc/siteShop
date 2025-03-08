<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'shop');
$ok = false;
$error = "-";
if (isset($_GET["user"])) {
    $user = $_GET["user"];
    $pass = $_GET["pass"];
    $_SESSION['user']=$user;
    $sql = mysqli_query($db, "select*from user where Username='$user'and Password='$pass'");
    if ($row = mysqli_fetch_all($sql)) {
        $ok = true;
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

if ($ok == true) {
    echo '1';
} else {

    echo '0';
}