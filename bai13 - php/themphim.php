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
    </style>
</head>
<body>
    <h1>Thêm phim</h1>
    <form class="khoi" action="index.php?page_layout=themphim" method="POST">
        <div class="i-text">
            <input type="text" name="tenPhim" id="" placeholder="Tên phim">
        </div>
        <div class="i-text">
            <input type="text" name="quocGia" id="" placeholder="Quốc gia">
        </div>
        <div class="i-text">
            <input type="text" name="idDaoDien" id="" placeholder="ID đạo diễn">
        </div>
        <div class="i-text">
            <input type="date" name="nam" id="" placeholder="Năm">
        </div>
        <div class="i-text">
            <input type="text" name="doTuoi" id="" placeholder="Độ tuổi">
        </div>
        <div class="i-text">
            <input type="text" name="moTa" id="" placeholder="Mô tả">
        </div>
        <button>Thêm</button>
    </form>

    <?php
        if(isset($_POST['tenPhim']) && 
           isset($_POST['quocGia']) && 
           isset($_POST['idDaoDien']) && 
           isset($_POST['nam']) &&
           isset($_POST['doTuoi']) &&
           isset($_POST['moTa']))
        {
            $tenPhim = $_POST['tenPhim'];
            $quocGia = $_POST['quocGia'];
            $idDaoDien = $_POST['idDaoDien'];
            $nam = $_POST['nam'];
            $doTuoi = $_POST['doTuoi'];
            $moTa = $_POST['moTa'];
            if(!empty($tenPhim) && 
                !empty($quocGia) && 
                !empty($idDaoDien) && 
                !empty($nam) &&
                !empty($doTuoi) &&
                !empty($moTa) ){
                //người dùng nhập đủ thông tin

                //vào php cop database
                $sql= "INSERT INTO `phim`(`ten_phim`, `quoc_gia`, `dao_dien_id`, `nam`, `do_tuoi`, `mo_ta`) 
                VALUES ('$tenPhim','$quocGia','$idDaoDien','$nam','$doTuoi','$moTa')";

                $result = mysqli_query($conn, $sql);

                if($result){
                    header("Location: index.php?page_layout=phim");
                }else{
                    echo"Thêm phim thất bại!";
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