<?php
require_once("connect_db.php");
$id=$_GET['p_id'];

$sql="Select * From customer Where Customer_id='$id'";
$result=mysqli_query($conn,$sql);

echo "<center>";
echo "แบบฟอร์มแก้ไขข้อมูลลูกค้า <br>";
if ($row = mysqli_fetch_assoc($result)){
    echo "<form action='update_save.php' method='POST'>";
    echo "ชื่อลูกค้า <input type='text' value='".$row[customer_name]."' name='p_name'><br>";
    echo "ประเภทลูกค้า <input type='text' value='".$row[customer_star]."' name='p_star'><br>";
    echo "<input type='hidden' value='$id' name='p_id'>";
    echo "<input type='submit' value='บันทึกการแก้ไขข้อมูล'>";
    echo "</form>";
}

?>