<?php
$product_name = $_POST['Product_name'];
$product_price = $_POST['Product_price'];
$product_description = $_POST['Product_description'];
$Product_Category = $_POST['Product_Category'];
$Product_Checkbox = $_POST['Product_Checkbox'];
$Product_employee = $_POST['employee'];
$Product_datetime = $_POST['Product_datetime-local'];
echo "Product :" .$product_name."<br>";
echo "Price  :" .$product_price."<br>";
if($Product_Category == '1'){
    echo "Product Category : ขนม";
    }
else if($Product_Category == '2'){
    echo "Product Categoty : น้ำดื่ม";
}
else if($Product_Category == '3'){
    echo "Product Categoty : แปปชี่";
}
else if($Product_Category == '4'){
    echo "Product Categoty : โค้ก";
}
else if($Product_Category == '5'){
    echo "Product Categoty : ข้าว";
}
if($Product_Checkbox == '1'){
    echo "<br>";
    echo "Product Checkbox : Retail";
}
else if($Product_Checkbox == '2'){
    echo "<br>";
    echo "Product Checkbox : wholesale";
}
else if($Product_Checkbox == '3'){
    echo "<br>";
    echo "Product Checkbox : both";
}
if ($Product_employee == '1'){
    echo "<br>";
    echo "Product Employee : boy";
}
else if($Product_employee == '2'){
    echo "<br>";
    echo "Product Employee : nat";
}
else if($Product_employee == '3'){
    echo "<br>";
    echo "Product Employee : dear";
}

echo "Product Datetime :" .date('Y-m-d\TH:i')."<br>";
?>