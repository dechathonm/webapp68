<?php
$product_name = $_POST['Product_name'];
$product_price = $_POST['Product_price'];
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

?>