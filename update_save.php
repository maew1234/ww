<?php
require_once("connect_db.php");
$name=$_POST['p_name'];
$star=$_POST['p_star'];
$id=$_POST['p_id'];

$sql = "Update Customer Set customer_name='$name',customer_star='$star' Where customer_id='$id'";
mysqli_query($conn,$sql);

echo "บันทึกการแก้ข้อมูลเรียบร้อย ";
echo "<form action='index.php'><input type='submit' value='ดูข้อมูล'></form>";

mysqli_close($conn);
?>