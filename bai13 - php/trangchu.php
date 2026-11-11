<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Trang chủ</h1>
    <?php
        //Để không cho vào trang chủ, bbuoc phải đăng nhập
        session_start();
        if(!isset($_SESSION['dangnhap']) && $_SESSION['dangnhap']== "thanhcong"){
            header("Location: dangnhap.php");
        }
    ?>
</body>
</html>