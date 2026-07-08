<html>
    <form name="frm-register" action="product_result.php" method="POST">
        Product :<input type="text" name="Product_name"><br>
        Product Price :<input type="text" name="Product_price"><br>
        description :<textarea name="Product_description"> </textarea><br>
    <input type="radio" name="Product_Category" value="1">ขนม
    <input type="radio" name="Product_Category" value="2">น้ำดื่ม
    <input type="radio" name="Product_Category" value="3">แปปชี่
    <input type="radio" name="Product_Category" value="4">โค้ก
    <input type="radio" name="Product_Category" value="5">ข้าว<br>

    <input type=checkbox name="Product_Checkbox" value="1">
       <label for="Product_Checkbox">Retail</label>
    <input type=checkbox name="Product_Checkbox" value="2">
       <label for="Product_Checkbox">wholesale</label>
    <input type=checkbox name="Product_Checkbox" value="3">
       <label for="Product_Checkbox">both</label><br>

       <input type="radio" name="employee" value="1">boy
    <input type="radio" name="employee" value="2">nat
    <input type="radio" name="employee" value="3">dear<br>

    <input type="hidden" type="datetime-local" name="Product_datetime-local">

   <input type="submit" name="submit" value="OK">
        <input type="reset" name="reset" value="CANCEL">

   </form>
</html>