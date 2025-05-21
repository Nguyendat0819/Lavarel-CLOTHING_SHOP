<?php
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $productCode = $_POST['productCode'] ?? '';
            $productName = $_POST['productName'] ?? '';
            $buyPrice = $_POST['buyPrice'] ?? '';
            $qualityStock = $_POST['qualityStock'] ?? '';   
            $fileImage = $_POST['fileImage'] ?? '';
            $type = $_POST['type'] ?? '';     
            if(!empty($productCode) && !empty($productName) && !empty($buyPrice) && !empty($qualityStock) && !empty($fileImage) && !empty($type)){
                $conn = mysqli_connect('localhost','root','','form'); // Kết nối đến cơ sở dữ liệu
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    if (!$conn) {
                    die("Kết nối cơ sở dữ liệu thất bại: " . mysqli_connect_error());
                    }                
                    
                    $stmt = mysqli_prepare($conn, "INSERT INTO products(productCode, productName, buyPrice, qualityStock, fileImage,type) VALUES (?, ?, ?, ?, ?, ?)");// Chuẩn bị câu lệnh SQL        
                    if($stmt){
                        mysqli_stmt_bind_param($stmt,"ssssss", $productCode, $productName, $buyPrice, $qualityStock,$fileImage,$type); // Gán các biến vào câu lệnh đã chuẩn bị
                        if(mysqli_stmt_execute($stmt)){ // Thực thi câu lệnh đã chuẩn bị
                            header("Location: admin.php?msg=success");
                            exit();
                        }else{
                            echo "Thêm sản phẩm thất bại".mysqli_stmt_error($stmt); // In ra lỗi nếu có
                        }
                        mysqli_stmt_close($stmt); // Đóng câu lệnh đã chuẩn bị    
                    }else{ 
                        echo "Lỗi chuẩn bị câu lệnh: ".mysqli_error($conn); // In ra lỗi chuẩn bị câu lệnh
                    }
                }else{
                    echo "Không có dữ liệu để thêm sản phẩm"; // In ra thông báo nếu không có dữ liệu
                }
            }else{
                echo "Vui lòng điền đầy đủ thông tin sản phẩm"; // In ra thông báo nếu không có dữ liệu
            }
        }        
?>