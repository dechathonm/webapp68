<?php
include 'connect.php';

$sql ="SELECT * FROM tb_member;";
$result = mysqli_query($link,$sql);
?>
<html>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>E-MAIL</td>
            <td>PHONE</td>
        </rt>
        <?php
        while($arr = mysqli_fetch_array($result))
            {
        ?>
       <tr>
            <td><?php echo $arr['member_id']; ?></td>
            <td><?php echo $arr['membre_name']; ?></td>
            <td><?php echo $arr['membre_email']; ?></td>
            <td><?php echo $arr['membre_phone']; ?></td>
        </tr>
        <?php
}
?>
    </table>

<html>