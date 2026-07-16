<?php
INCLUDE "connectshop.php";
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_brand = $_POST['product_brand'];

$sql = "INSERT INTO tb_shop (product_name, product_price, product_brand) 
VALUE ('$product_name', '$product_price', '$product_brand');";

$result = mysqli_query ($link, $sql);

if($result)
    {
    echo "Insert data successfully";
    }
else
    {
    echo "Error";
}

?>