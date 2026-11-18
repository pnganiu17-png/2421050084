<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul{
            list-style: none;
            display: flex;
            gap: 10px;
            background-color: #2B9FD9;
            padding: 10px;
        }
        a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <!-- <h1>Trang chủ</h1> -->
    <?php
        //Để không cho vào trang chủ, bbuoc phải đăng nhập
        session_start();
        if(!isset($_SESSION['dangnhap']) && $_SESSION['dangnhap']== "thanhcong"){
            header("Location: dangnhap.php");
        }
        include 'connect.php';
    ?>
    <header>
        <nav>
            <ul>
                <li><a href="index.php?page_layout=trangchu">Trang chủ</a></li>
                <li><a href="index.php?page_layout=taikhoan">Tài khoản</a></li>
                <li><a href="index.php?page_layout=danhmuc">Danh mục</a></li>
                <li><a href="index.php?page_layout=phim">Phim</a></li>
            </ul>
        </nav>
    </header>
    <?php
        // echo get để mở 1 thư mục trên thanh
        //echo $_GET['page_layout'];
    if(isset($_GET['page_layout']));
        $page= $_GET['page_layout'];
        switch($page){
            case'trangchu':
                include 'trangchu.php';
                break;
            case'taikhoan':
                include 'taikhoan.php';
                break;
            case'danhmuc':
                include 'danhmuc.php';
                break;
            case'phim':
                include 'phim.php';
                break;
            case'themtaikhoan':
                include 'themtaikhoan.php';
                break;
        }

    ?>
</body>
</html>