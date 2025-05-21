<?php 
     // Kết nối đến file lietke.php
    $conn = mysqli_connect('localhost','root','','form'); // Kết nối đến cơ sở dữ liệu
    if (!$conn) {
        die("Kết nối cơ sở dữ liệu thất bại: " . mysqli_connect_error()); // Kiểm tra kết nối
    }
    $id = isset($_GET['id']) ? (int)$_GET['id'] : 0; // Lấy ID từ URL
    if($id > 0){
        $sql = "SELECT * FROM products WHERE productCode = $id LIMIT 1";
        $result = mysqli_query($conn,$sql); // Thực thi câu lệnh SQL
        if($result && mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result); // Lấy dữ liệu sản phẩm
            echo "<h2>Chi tiết sản phẩm</h2>";
            echo "<img src='images/" . htmlspecialchars($row['fileImage']) . "' width='100'><br>";
            echo "Mã sản phẩm: " . htmlspecialchars($row['productCode']) . "<br>";
            echo "Tên sản phẩm: " . htmlspecialchars($row['productName']) . "<br>";
            echo "Giá sản phẩm: " . htmlspecialchars($row['buyPrice']) . "<br>";
            echo "Số lượng: " . htmlspecialchars($row['qualityStock']) . "<br>";
            echo "Loại sản phẩm: " . htmlspecialchars($row['type']) . "<br>";            
            echo "<a href='admin.php'>Quay lại</a>"; // In ra thông báo thành công
        }else{
            echo "Không tìm thấy sản phẩm.";
        }
    }else{
        echo "ID không hợp lệ.";
    }
    mysqli_close($conn); // Đóng kết nối
?>