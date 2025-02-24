<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
<?php
require_once("connect_db.php");

$sql = "Select * From customer";

$result = mysqli_query($conn,$sql);
echo "<center>";
echo "<h2>โปรแกรมจัดการฐานข้อมูลลูกค้า</h2>";
echo "<table class='table table-striped' border=1><tr><td>รหัสลูกค้า</td><td>ชื่อลูกค้า</td><td>ระดับลูกค้า(ดาว)</td><td>ลบข้อมูล</td><td>แก้ไขข้อมูล</td></tr>";
while($row=mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td><center>".$row["customer_id"]."</center></td>";
    echo "<td>".$row["customer_name"]."</td>";
    echo "<td><center>".$row["customer_star"]."</center></td>";
    echo "<td><a href='delete_data.php?p_id=".$row["customer_id"]."'>ลบ</a></td>";
    echo "<td><a href='update_form.php?p_id=".$row["customer_id"]."'>แก้ไข</a></td>";
    echo "<tr>";
}
//echo "<tr><td colspan=5><a href='add_form.php'>เพิ่มข้อมูล</a></td></tr>";
echo "<form action='add_form.php'><input type='submit' class='btn btn-primary' value='เพิ่มข้อมูล'></form>";
echo "</center>";
echo "</table>";
mysqli_close($conn);
?>
</div>
</body>
</html>

