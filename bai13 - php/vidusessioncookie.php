<?php
    //1. SESSION
    session_start();   //Để bắt đầu session
    $_SESSION['Name']="user";
    echo "Session Name: ". $_SESSION['Name'];


    //2.COOKIE
    echo "<br>";
    $cookieName="user";
    $cookieValue="Ngan";

    setcookie($cookieName, $cookieValue, time()+ 864000, "/");
    if(isset($_COOKIE[$cookieName])){
        echo"Cookie đã tồn tại";
    } else{
        echo"Cookie chưa được thiết lập!";
    }
    // cookieName: Tên cookie	Tên định danh của cookie (ví dụ: "user", "theme").  
    // sẽ dùng tên này để gọi lại cookie bằng lệnh $_COOKIE[$cookieName].
    // $cookieValue: Giá trị cookie	Nội dung dữ liệu  muốn lưu trữ (ví dụ: "JohnDoe", "dark_mode").
    //  Giá trị này được lưu dưới dạng chuỗi (string).
    //  time() + 86400:	Thời gian hết hạn. Xác định thời điểm cookie tự động xóa. 
    // time() lấy thời gian hiện tại tính bằng giây, cộng thêm 86400 giây (tương đương 24 giờ hoặc 1 ngày). 
    // Nếu không đặt tham số này, cookie sẽ mất ngay khi đóng trình duyệt.
    // "/":	Đường dẫn áp dụng	Đường dẫn trên máy chủ mà cookie có hiệu lực. 
    // Dấu gạch chéo / nghĩa là cookie này sẽ có tác dụng trên toàn bộ trang web (tất cả các thư mục và trang con).
?>