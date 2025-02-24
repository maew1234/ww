<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
    <form action="add_save.php" method="POST">
    <center>แบบฟอร์มเพิ่มรายการลูกค้า </center>
    <table class="table table-striped">
    <tr><td>ชื่อ - นามสกุล </td><td><input type="text" name="p_name"></td></tr>
    <tr><td>ระดับลูกค้า(ดาว)</td><td> <input type="text" name="p_star"></td>   </tr>
    <tr><td colspan=2><center><input type="submit" class="btn btn-primary" value="บันทึก"></center></td></tr>

    </form>
</div>
<div class="col-sm-3"></div>
</div>
</div>
</body>
</html>