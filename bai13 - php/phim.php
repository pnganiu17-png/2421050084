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
    <h1>Phim</h1>
    <div>
        <a class="btn-add" href="index.php?page_layout=themphim">Thêm phim</a>
    </div>
    <?php
        $sql = "select * from phim";
        $result = mysqli_query($conn, $sql);
    ?>

    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Tên phim</th>
                <th>Quốc gia</th>
                <th>ID đạo diễn</th>
                <th>Năm</th>
                <th>Độ tuổi</th>
                <th>Mô tả</th>
                <th>Chức năng</th>
            </tr>

            <?php
                while($row= mysqli_fetch_assoc($result))
                {
            ?>

            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['ten_phim']?></td>
                <td><?php echo $row['quoc_gia']?></td>
                <td><?php echo $row['dao_dien_id']?></td>
                <td><?php echo $row['nam']?></td>
                <td><?php echo $row['do_tuoi']?></td>
                <td><?php echo $row['mo_ta']?></td>
                <td>
                    <a class="capnhat" href="index.php?page_layout=capnhatphim&id=<?php echo $row['id']?>">Cập nhật</a>
                    <a class="xoa" href="xoaphim.php&id=<?php echo $row['id']?>">Xóa</a>
                </td>
            </tr>
            
            <?php
            
                }
            ?>
        </table>
    </div>
</body>
</html>