<h1>Đây là file index.php</h1>

<!-- Đặt nội dung PHP trong <?php?> -->
<?php
    //Nội dung php đặt ở vị trí này
    //In ra màn hình: echo
    echo"Hello World!<br>";


    //BIẾN:
    //Biến: biến bắt đầu bằng kí tự $: $Tên biến = "giá trị"; (số,"chữ")
    $hoTen="Phương Ngân";
    $tuoi=20;
    //In biến ra màn hình
    echo $hoTen;
    echo "<br>";


    //CHUỖI:
    //Nối chuỗi trong php dùng dấu chấm(.)
    echo $hoTen." ".$tuoi;
    echo "<br>";

    //Độ dài của chuỗi: Strlen()
    echo strlen($hoTen)."<br>";

    //Đếm số từ: str_word_count()
    echo str_word_count($hoTen)."<br>";

    //Tìm kiếm kí tự trong chuỗi: strpos()
    echo strpos($hoTen,"n")."<br>";     #

    //Thay thế kí tự trong chuỗi: str_replace()
    echo str_replace("Phương","Khánh",$hoTen)."<br>";   #Đổi Phương thành Khánh


    //PHÉP TOÁN:
    $soThuNhat=10;
    $soThuHai=16;
    //Phép cộng:
    echo $soThuNhat+$soThuHai. "<br>";
    //Phép trừ:
    echo $soThuNhat-$soThuHai. "<br>";
    //Phép nhân:
    echo $soThuNhat*$soThuHai. "<br>";
    //Phép chia:
    echo $soThuNhat/$soThuHai. "<br>";

    //Toán tử gán:+=, -=, *=, /=, %=
    // $soThuNhat += $soThuHai;
    echo $soThuNhat."<br>";

    //Toán tử so sánh: ==, !=, >, <, >=, <=, ===
    echo $soThuNhat === $soThuHai. "<br>";    #Đúng thì không in gì, sai thì in 1
    

    //CÂU ĐIỀU KIỆN:
    // if("Điều kiện"){
    //     logic
    // }
    // elseif("Điều kiện"){
    //     logic
    // }
    // else{
    //     logic
    // }
    //Bài tập: Kiểm tra tổng của số thứ nhất và số thứ 2: nếu <15 thì in ra nhỏ hơn 15, nếu =15 thì in ra tổng =15, 
    //còn lại in ra lớn hơn 15
    $tong= $soThuNhat+$soThuHai;
    if($tong < 15){
        echo"tổng hai số nhỏ hơn 15";
    }elseif($tong == 15){
        echo"tổng = 15";
    }else{
        echo"tổng hai số lớn hơn 15";
    }

    //SWITCH CASE:
    $color="red";
    switch($color){
        case "red";
            echo "<br>";
            echo "IS RED";
            break;
        case "blue";
            echo "<br>";
            echo "IS BLUE";
            break;
        default;
            echo "<br>";
            echo "no color";
            break;
    }


    //FOR:
    echo "<br>";
    for($i = 0; $i < 100; $i++);
        echo $i. "<br>";

    
    //MẢNG:
    $mang = ["Phương Ngân", "Hương Ly", "Minh Hồng"];   #0,1,2
    //Đếm phần tử:
    echo count($mang). "<br>";

    //Đọc phần tử:
    echo $mang[0]. "<br>";

    //Thêm phần tử vào trong mảng: $tên biến[]
    $mang[]= "Bố Thuyên";
    print_r($mang);

    //Xoá phần tử trong mảng: unset
    echo "<br>";
    unset($mang[2]);    #xoá đi phẩn tử thứ 2
    print_r($mang);
    
?>