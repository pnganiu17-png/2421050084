<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 100%;
            margin-top: 15px;
        }
        tr, th, td{
            border: 1px solid black;
            padding: 8px;
        }
        .btn-add{
            display: block;
            width: 120px;
            background-color: pink;
            color: white;
            padding: 10px 15px;;
            margin-bottom: 20px;
            border-radius: 5px;
            text-decoration: none;
        }
        .capnhat{
            border-radius: 5px;
            background-color: green;
        }
        .xoa{
            border-radius: 5px;
            background-color: red;
        }
    </style>
</head>
<body>
    <h1>Tài khoản</h1>
    <div>
        <a class="btn-add" href="index.php?page_layout=themtaikhoan">Thêm tài khoản</a>
    </div>
    <?php
        $sql = "select * from nguoi_dung";
        $result = mysqli_query($conn, $sql);
    ?>

    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Tên đăng nhập</th>
                <th>Email</th>
                <th>Họ tên</th>
                <th>Ngày sinh</th>
                <th>Số điện thoại</th>
                <th>Giới tính</th>
                <th>Chức năng</th>
            </tr>

            <?php
                while($row= mysqli_fetch_assoc($result))
                {
            ?>

            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['ten_dang_nhap']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['ho_ten']?></td>
                <td><?php echo $row['ngay_sinh']?></td>
                <td><?php echo $row['so_dien_thoai']?></td>
                <td><?php echo $row['gioi_tinh']==true?"Nam":"Nữ"?></td>
                <td>
                    <a class="capnhat" href="index.php?page_layout=capnhattaikhoan&id=<?php echo $row['id']?>">Cập nhật</a>
                    <a class="xoa" href="index.php?page_layout=xoataikhoan&id=<?php echo $row['id']?>">Xóa</a>
                </td>
            </tr>
            
            <?php
            
                }
            ?>
        </table>
    </div>
</body>
</html>