<?php
    $id= $_GET['id'];
    $sql="DELETE FROM* `nguoi_dung` WHERE id='$id'"
    my_sqli_query($conn, $sql);
    header("Location: index.php?page_layout=taikhoan");
?>