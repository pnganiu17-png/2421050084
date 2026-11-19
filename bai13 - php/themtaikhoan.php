<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            color: white;
        }
        form{
            border: 1px solid black;
            border-radius: 10px;
            width: 200px;
            margin: auto;
            background-color: antiquewhite;
            padding: 10px;
        }
        input{
            margin: 10px;
        }
        button{
            margin: 5px;
        }
    </style>
</head>
<body>
    <h1>Thêm tài khoản</h1>

    <form action="" method= "POST">
        <div class="">
            <input type="text" name="tenDangNhap" id="" placeholder="Tên đăng nhập">
        </div>
        <div class="">
            <input type="password" name="matKhau" id="" placeholder="Mật khẩu">
        </div>
        <div class="">
            <input type="email" name="email" id="" placeholder="Email">
        </div>
        <div class="">
            <input type="text" name="hoTen" id="" placeholder="Họ và tên">
        </div>
        <div class="a">
            <input type="date" name="ngaySinh" id="" placeholder="Ngày sinh">
        </div>
        <div class="">
            <input type="text" name="sdt" id="" placeholder="Số điện thoại">
        </div>
        <div class="">
            <input type="radio" name="gioiTinh" id="" > Nam
            <input type="radio" name="gioiTinh" id="" > Nữ
        </div>
        <button>Thêm</button>
</body>
</html>