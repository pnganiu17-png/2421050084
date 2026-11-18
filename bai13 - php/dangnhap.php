<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .khoi{
            border: 1px solid black;
            border-radius: 10px;
            width: 250px;
            margin: 20vh auto;
            background-color: antiquewhite;
            padding: 10px;
        }
        input{
            padding: 5px 0;
            margin: 10px 0;
        }
        button{
            padding: 5px 0;
            margin-top: 10px;
        }
        .form{
            padding: 10 px;

        }
        h1{
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="khoi"> 
        <div style="width: 80%; margin: auto; text-align: center" class="">
            <h1>Đăng nhập</h1>
            <div class="">
                <!--Dùng ttin đăng nhập dùng POST để an toàn, bảo mật -->
                <form action="dangnhap.php" method="POST">
                    <div class="">
                        <input type ="text" name="tenDangNhap" id="" placeholder="Tên đăng nhập">
                    </div>
                    <div class="">
                        <input type ="password" name="matKhau" id="" placeholder="Mật khẩu">
                    </div>
                    <div class="">
                        <button type="submit">Đăng nhập</button>
                    </div>
                </form>
            </div>
        </div>
    </div> 

    <?php  
        //Sử dụng include để nối 2 file php (nối file connect.php với file dangnhap.php)
        include 'connect.php';
        session_start();
        if(isset($_POST['tenDangNhap']) && isset($_POST['matKhau'])){
            $tenDangNhap= $_POST['tenDangNhap'];
            $matKhau= $_POST['matKhau'];

            $sql= "SELECT * FROM `nguoi_dung` WHERE ten_dang_nhap = '$tenDangNhap' and mat_khau = '$matKhau'";

            $result= mysqli_query($conn, $sql);



            if(mysqli_num_rows($result) > 0){
                //$tenDangNhap == "admin" && $matKhau == "123"){
                //session_start();
                $_SESSION['dangnhap'] = "thanhcong";
                header("Location: index.php");
            } else{
                echo"Tên đăng nhập hoặc mật khẩu không chính xác";
            }
        }
    ?>
</body>
</html>