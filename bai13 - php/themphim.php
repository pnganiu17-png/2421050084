<?php
        // echo $_POST['tenPhim'];
        // echo $_POST['quocGia'];
        // echo $_POST['theLoai'];
        // echo $_POST['daoDien'];
        // echo $_POST['nam']; 
        // echo $_POST['doTuoi'];
        // echo $_POST['trailer'];
        if(isset($_POST['tenPhim']) && 
           isset($_POST['quocGia']) && 
           isset($_POST['theLoai']) && 
           isset($_POST['daoDien']) &&
           isset($_POST['nam']) &&
           isset($_POST['doTuoi']) &&
           isset($_POST['trailer']))
        {
            $tenPhim = $_POST['tenPhim'];
            $quocGia = $_POST['quocGia'];
            $theLoai = $_POST['theLoai'];
            $daoDien = $_POST['daoDien'];
            $nam = $_POST['nam'];
            $doTuoi = $_POST['doTuoi'];
            $trailer = $_POST['trailer'];
        
            if(!empty($tenPhim) && 
                !empty($quocGia) && 
                !empty($theLoai) && 
                !empty($daoDien) &&
                !empty($nam) &&
                !empty($doTuoi) &&
                !empty($trailer)
                ){
                //người dùng nhập đủ thông tin
                #########Bắt đầu xử lý thêm ảnh
                // Xử lý ảnh
                $target_dir = "upload/";
                if (!is_dir($target_dir)) {
                    mkdir($target_dir, 0777, true);
                }
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                // Kiểm tra xem file ảnh có hợp lệ không
                if(isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                    if($check !== false) {
                        $uploadOk = 1;
                    } else {
                        echo "File không phải là ảnh.";
                        $uploadOk = 0;
                    }
                }

                // Kiểm tra nếu file đã tồn tại
                if (file_exists($target_file)) {
                    echo "File này đã tồn tại trên hệ thông";
                    $uploadOk = 2;
                }

                // Kiểm tra kích thước file
                // if ($_FILES["fileToUpload"]["size"] > 500000) {
                //     echo "File quá lớn";
                //     $uploadOk = 0;
                // }

                // Cho phép các định dạng file ảnh nhất định
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                    echo "Chỉ những file JPG, JPEG, PNG & GIF mới được chấp nhận.";
                    $uploadOk = 0;
                }
                
                #########Kết thúc xử lý ảnh
                if($uploadOk == 0){
                    echo "File của bạn chưa được tải lên";
                }
                else{
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        #code cũ
                        $sql = "INSERT INTO `phim`(`ten_phim`, `quoc_gia`, `dao_dien_id`, `nam`, `do_tuoi`, `trailer`, `poster_url`,`mo_ta`) 
                        VALUES ('$tenPhim','$quocGia','$daoDien','$nam','$doTuoi','$trailer','$target_file','')";
                       
                        if(mysqli_query($conn, $sql)){
                            $phim_id = mysqli_insert_id($conn);
                            $sql2 = "INSERT INTO `phim_the_loai`(`phim_id`, `the_loai_id`) VALUES ('$phim_id','$theLoai')";
                            
                            mysqli_query($conn, $sql2);
                            header('location: index.php?page_layout=phim');
                        }
                        else{
                            echo "Thêm phim thất bại!";
                        }
                        #code cũ
                    }
                }
            }
            else{
                //người dùng nhập thiếu thông tin
                echo "<p style='color: red'>Vui lòng nhập đầy đủ thông tin</p>";
            }
        }      
    ?>
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
        select{
            padding: 5px 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Thêm phim</h1>
    <form class="khoi" action="index.php?page_layout=themphim" method="POST" enctype="multipart/form-data">
        <div class="i-text">
            <input type="text" name="tenPhim" id="" placeholder="Tên phim">
        </div>
        <div class="i-text">
            <input type="text" name="quocGia" id="" placeholder="Quốc gia">
        </div>
        <?php
            $sqlTheLoai = "select * from the_loai";
            $result = mysqli_query($conn, $sqlTheLoai);

            $sqlDaoDien = "select * from dao_dien";
            $resultD = mysqli_query($conn, $sqlDaoDien);
        ?>
       
        <div class="i-text">
            <select name="theLoai" id="" >
                <?php 
                    while($row = mysqli_fetch_array($result))
                    {
                ?>
                    <option value="<?php echo $row['id'] ?>"><?php echo $row['ten_the_loai'] ?></option>
                <?php 
                    }
                ?>
            </select>
        </div>

        
        
        <div class="i-text">
            <input type="date" name="nam" id="" placeholder="Năm" value="2026">
        </div>

        <div class="i-text">
            <select name="daoDien" id="" >
                <?php 
                    while($row = mysqli_fetch_array($resultD))
                    {
                ?>
                    <option value="<?php echo $row['id'] ?>"><?php echo $row['ho_ten'] ?></option>
                <?php 
                    }
                ?>
            </select>
        </div>
        <div class="i-text">
            <input type="number" name="doTuoi" id="" placeholder="Độ tuổi">
        </div>
        <div class="i-text">
            <input type="text" name="trailer" id="" placeholder="Trailer">
        </div>
            <div class="i-text">
            <input type="file" name="fileToUpload" id="" placeholder="Poster">
        </div>
        <button type="submit" name="submit">Thêm</button>
   
    </form>

</body>
</html>