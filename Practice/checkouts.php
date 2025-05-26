<?php 
    session_start();
	require 'connect.php';

	$sql = "SELECT * FROM province";
    $result = mysqli_query($conn, $sql);

    if (isset($_POST['add_sale'])) {
        echo "<pre>";
        print_r($_POST);
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="root.css">
    <link rel="stylesheet" href="checkout.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script src="js/app.js"></script>
    <title>Document</title>
</head>
<body>
        <div class="container">
            <div class="wrap">
                <div class="main">
                    <div class="main_header">
                        <div class="header_logo" bis_skin_checked="1">
                            <div class="wrap-logo" itemscope="" itemtype="http://schema.org/Organization" bis_skin_checked="1">	
                                <a href="homeuser.php" aria-label="Eva De Eva" itemprop="url">
                                    <img itemprop="logo" width="220" height="70" src="//theme.hstatic.net/200000000133/1001205759/14/logo.png?v=1859" alt="Eva De Eva" class="img-responsive logoimg ls-is-cached lazyloaded">
                                </a>														
                            </div>
                        </div>
                    </div>
                    <div class="main_conttent">
                        <div class="section_header">
                            <h2 class="section_tittle">Thông tin giao hàng</h2>
                        </div>
                        <div class="section_conttent">
                            <form action="" method="post" id="myForm" class="mt-5">
                                <div class="file file_show_name">
                                    <div class="file_input_wrapper">                                        
                                        <input 
                                         type="text"
                                         class="file_input file_input_name "
                                         placeholder="Họ và tên" 
                                         autocomplete="off"
                                         size="30" 
                                         name="username"  
                                         value="<?php echo isset($_SESSION['username']) ?  htmlspecialchars($_SESSION['username']):'';?>">                                        
                                    </div>                                    
                                </div>
                                <div class="file file_show_phone">
                                    <div class="file_input_wrapper">
                                        <input type="text" class="file_input file_input_phone" name="phone" placeholder="Số điện thoại">
                                    </div>
                                </div>
								<div class="selection_address">
									<div class="row_add">
										<div class="col-3">
											<div class="form-group">
												<label for="province">Tỉnh/Thành phố</label>
												<select id="province" name="province_id" class="form-control">
													<option value="">Chọn một tỉnh</option>
													<!-- populate options with data from your database or API -->
													<?php
													while ($row = mysqli_fetch_assoc($result)) {
													?>
														<option value="<?php echo $row['province_id'] ?>"><?php echo $row['name'] ?></option>
													<?php
													}
													?>
												</select>
											</div>
											<div class="form-group">
												<label for="district">Quận/Huyện</label>
												<select id="district" name="district_id" class="form-control">
													<option value="">Chọn một quận/huyện</option>
												</select>
											</div>
											<div class="form-group">
												<label for="wards">Phường/Xã</label>
												<select id="wards" name="wards_id" class="form-control">
													<option value="">Chọn một xã</option>
												</select>
											</div>											
										</div>
									</div>																
								</div>
                                <div class="file file_show_address">
                                    <div class="file_input_wrapper">
                                        <input type="text" class="file_input file_input_address" name="addressHome" placeholder="Địa chỉ">
                                    </div>
                                </div>
                                <div class="file file_submit">
                                    <input type="submit" value="Hoàn tất đơn hàng" class="submit_products">
                                </div>
                            </form>							
                        </div>
                    </div>    
                </div>
            <?php                
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Lấy dữ liệu từ POST trước khi kiểm tra rỗng
                    $customerName = $_POST['username'] ?? '';
                    $phone = $_POST['phone'] ?? '';
                    $addressHome = $_POST['addressHome'] ?? '';
                    $province_id = isset($_POST['province_id']) ? (int)$_POST['province_id'] : 0;
                    $district_id = isset($_POST['district_id']) ? (int)$_POST['district_id'] : 0;
                    $wards_id = isset($_POST['wards_id']) ? (int)$_POST['wards_id'] : 0;

                    // Kiểm tra các trường bắt buộc
                    if ( !empty($phone) && !empty($addressHome) && $province_id > 0 && $district_id > 0 && $wards_id > 0){
                        $conn = mysqli_connect('localhost', 'root', '', 'form');

                        if (!$conn) {
                            die("Kết nối thất bại: " . mysqli_connect_error());
                        }

                        $stmt = mysqli_prepare($conn, "INSERT INTO customer (customerName, phone, addressHome, province_id, district_id, wards_id) VALUES (?, ?, ?, ?, ?, ?)");

                        if ($stmt) {
                            mysqli_stmt_bind_param($stmt, "ssssss", $customerName, $phone, $addressHome, $province_id, $district_id, $wards_id);
                            if (mysqli_stmt_execute($stmt)) {
                                echo "Thêm dữ liệu thành công";
                            } else {
                                echo "Lỗi khi thêm dữ liệu: " . mysqli_stmt_error($stmt);
                            }
                            mysqli_stmt_close($stmt);
                        } else {
                            echo "Lỗi chuẩn bị truy vấn: " . mysqli_error($conn);
                        }

                        mysqli_close($conn);
                    } else {
                        echo "Vui lòng nhập đầy đủ thông tin bắt buộc.";
                        echo "<pre>";
                        echo "customerName: " . $customerName . "\n";
                        echo "phone: " . $phone . "\n";
                        echo "addressHome: " . $addressHome . "\n";
                        echo "province_id: " . $province_id . "\n";
                        echo "district_id: " . $district_id . "\n";
                        echo "wards_id: " . $wards_id . "\n";
                        echo "</pre>";

                    }
                }
            ?>                 
                <div class="sidebar"></div>               
            </div>
        </div>
</body>
</html>