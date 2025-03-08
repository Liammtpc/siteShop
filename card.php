<?php
$db = mysqli_connect('localhost', 'root', '', 'shop');
$product_id=$_GET['Id'];
$user_ip= $_GET['Ip'];
$add_sql=mysqli_query($db,"insert into buy(Product_id,User_ip)values('$product_id','$user_ip')");
if($add_sql){
    header("Location:buy.php");
}