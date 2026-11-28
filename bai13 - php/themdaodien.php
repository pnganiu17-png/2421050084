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
        }
        .i-text input{
            padding: 5px 0;
            margin: 10px 0;
            width: 100%;
        }
        button{
            padding: 5px 0;
            width: 100%;
        }
        form{
            padding: 10px;
        }
        h1{
            margin: 5px 0;
        }
        .i-text select { 
            padding: 5px 0; 
            margin: 10px 0; 
            width: 100%; 
        }
    </style>
</head>
<body>
    <h1>Thêm đạo diễn</h1>
    <form class="khoi" action="index.php?page_layout=themdaodien" method="POST" enctype="multipart/form-data">
        <div class="i-text">
            <input type="text" name="hoTen" id="" placeholder="Họ tên">
        </div>
        <div class="i-text">
            <input type="text" name="ngaySinh" id="" placeholder="Ngày sinh">
        </div>
        <button>Thêm</button>
    </form>

    <?php
        if(isset($_POST['hoTen']) && 
           isset($_POST['ngaySinh'])
            )
        {
            $hoTen = $_POST['hoTen'];
            $ngaySinh = $_POST['ngaySinh'];
            if(!empty($hoTen) && 
                !empty($ngaySinh) 
                ){
                //người dùng nhập đủ thông tin

                //vào php cop database
                $sql= "INSERT INTO `dao_dien`( `ho_ten`, `ngay_sinh`) 
                VALUES ('$hoTen','$ngaySinh')";

                $result = mysqli_query($conn, $sql);

                if($result){
                    header("Location: index.php?page_layout=daodien");
                }else{
                    echo"Thêm đạo diễn thất bại!";
                }

            }
            else{
                //người dùng nhập thiếu thông tin
                echo "<p style='color: red'>Vui lòng nhập đầy đủ thông tin</p>";
            }
        }
        
    ?>
</body>
</html>