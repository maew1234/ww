<?php
    require_once("connect_db.php");
    $cus_id = $_GET['p_id'];
    $sql = "Delete From customer Where customer_id = $cus_id";
    mysqli_query($conn,$sql); 
    echo "ลบข้อมูลเรียบร้อย";
    echo "<form action='index.php'><input type='submit' value='ดูข้อมูล'></form>";
?>