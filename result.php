<?php
$name = $_POST['member_name'];
$tel = $_POST['member_tel'];
$email = $_POST['member_email'];
$username = $_POST['member_username'];
$password = $_POST['member_password'];
$gender = $_POST['member_gender'];
$major = $_POST['member_major'];

echo "YOUR name is : ".$name."<br>";
echo "YOUR tel is : ".$tel."<br>";
echo "YOUR email is : ".$email."<br>";
echo "YOUR username is : ".$username."<br>";
echo "YOUR password is : ".$password."<br>";

if($gender=='1'){
    echo "Your gender is : Male<br>";
}
else if($gender=='2'){
    echo "Your gender is : Female<br>";
}

if($major=='1'){
    echo "Major : Computer Science";
}
else if($major=='2'){
    echo "Major : Information Technology";
}
else if($major=='3'){
    echo "Major : Multimedia Technology";
}
?>