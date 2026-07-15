<?php
$host="localhost";
$username="root";
$password="";
$dbname="csbd";

$link = mysqli_connect($host,$username,$password,$dbname) or die("Could not connect");
$membre_name = $_POST['membre_name'];
$membre_email = $_POST['membre_email'];
$membre_phone = $_POST['membre_phone'];

$sql = "INSERT INTO tb_member (membre_name,membre_email,membre_phone)
 VALUES ('$membre_name','$membre_email','$membre_phone')";
$result = mysqli_query ($link, $sql);
if($result){
    echo "Regiter Complete";
}
else if($result){
    echo "Regiter Fail";
}
?>