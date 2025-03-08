<?php
session_start();

if (isset($_SESSION['fullname']) and isset($_SESSION['pass']) and isset($_SESSION['moblies'])) {
    header("Location:paneluser.php");
} else {
    header("Location:login.php");
}
