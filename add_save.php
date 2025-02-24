<?php
    require_once("connect_db.php");
    $name=$_POST['p_name'];
    $star=$_POST['p_star'];

    $sql="Insert Into customer(customer_name,customer_star) Values('$name','$star')";
    mysqli_query($conn,$sql);
    echo "<a href='index.php'>บันทึกข้อมูลเรียบร้อย</a>";
?>