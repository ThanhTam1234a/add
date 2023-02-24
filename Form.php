<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="Form.css">
    <?php session_start();?>
</head>
<body>
    <div class='container'>
        <div class='a'>
        <form action="" method="post">
            <label for="">Tên </label><br>
            <input type="text" name="ten" ><br>

            <label for="">Giá</label><br>
            <input type="text" name="gia" ><br>

            <label for="">Mô tả</label><br>
            <input type="text" name="mota" ><br>

            <label for="">Ảnh </label><br>
            <input type="text" name="img" ><br>
            <br>
            <input class='btn' type="submit" value="Lưu" name='btn' >
            
        </form>
        </div>  
    </div>
    <?php
        if(isset($_POST['btn'])){
            $_SESSION['arr']=array('Ten'=>$_POST['ten'],'Gia'=>$_POST['gia'],'Mota'=>$_POST['mota'],'Img'=>$_POST['img']);
            header('Location: http://localhost/TamPHP/BTVN20T2/Table.php');
        }   
    ?>
</body>
</html> 