<?php
$host="localhost";
$username="root";
$password="";
$dbname="shop";

$link = mysqli_connect($host,$username,$password,$dbname) or die("Could not connect");
$shop_name = $_POST['shop_name'];
$shop_price = $_POST['shop_price'];
$shop_brand = $_POST['shop_brand'];

$sql = "INSERT INTO tb_shop (shop_name,shop_price,shop_brand)
 VALUES ('$shop_name','$shop_price','$shop_brand')";
$result = mysqli_query ($link, $sql);
if($result){
    echo "Regiter Complete";
}
else if($result){
    echo "Regiter Fail";
}
?>