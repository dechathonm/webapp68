<?php
include 'connectshop.php';

$sql ="SELECT * FROM tb_shop;";
$result = mysqli_query($link,$sql);
?>
<html>
    <table border="2">
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>PRICE</td>
            <td>BRANd</td>
        </rt>
        <?php
        while($arr = mysqli_fetch_array($result))
            {
        ?>
       <tr>
            <td><?php echo $arr['product_id']; ?></td>
            <td><?php echo $arr['product_name']; ?></td>
            <td><?php echo $arr['product_price']; ?></td>
            <td><?php echo $arr['product_brand']; ?></td>
        </tr>
        <?php
}
?>
    </table>

<html>