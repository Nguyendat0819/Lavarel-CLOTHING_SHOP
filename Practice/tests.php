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
                

                $customerNumber= $_SESSION['customerNumber'] ?? null;

                $addressHome = $_POST['addressHome'] ?? '';
                $province_id = $_POST['province_id'] ?? 0;
                $district_id = $_POST['district_id'] ?? 0;
                $wards_id = $_POST['wards_id'] ?? 0;

                // Kiểm tra đầu vào
                $errors = [];

                if (!$customerNumber) {
                    $errors[] = "Bạn chưa đăng nhập.";
                }
                if (empty($addressHome)) {
                    $errors[] = "Vui lòng nhập địa chỉ chi tiết.";
                }
                if ($province_id == 0 || $district_id == 0 || $wards_id == 0) {
                    $errors[] = "Vui lòng chọn đầy đủ tỉnh/thành, quận/huyện, phường/xã.";
                }

                if (empty($errors)) {
                    $sql = "INSERT INTO customer_address (customerNumber, addressHome, province_id, district_id, wards_id) 
                            VALUES (?, ?, ?, ?, ?)";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("isiii",$customerNumber, $addressHome, $province_id, $district_id, $wards_id);

                    if ($stmt->execute()) {
                        echo "Đã thêm địa chỉ thành công!";
                    } else {
                        echo "Lỗi khi thêm địa chỉ: " . $conn->error;
                    }
                } else {
                    foreach ($errors as $err) {
                        echo "<p style='color:red;'>$err</p>";
                    }
                }
            ?>


            <?php


                $customerNumber = $_SESSION['customerNumber'] ?? null;

                if (!$customerNumber) {
                    echo "Bạn chưa đăng nhập.";
                    exit;
                }

                $sql = "SELECT ca.*, 
                            p.name AS province_name, 
                            d.name AS district_name, 
                            w.name AS ward_name
                        FROM customer_address ca
                        JOIN province p ON ca.province_id = p.province_id
                        JOIN district d ON ca.district_id = d.district_id
                        JOIN wards w ON ca.wards_id = w.wards_id
                        WHERE ca.customerNumber = ?
                        ORDER BY ca.address_id DESC";

                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $customerNumber);
                $stmt->execute();
                $result = $stmt->get_result();

                echo "<h3>Danh sách địa chỉ của bạn:</h3>";
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div style='margin-bottom:10px; padding:8px; border:1px solid #ccc;'>";
                        echo "<strong>Địa chỉ:</strong> " . htmlspecialchars($row['addressHome']) . "<br>";
                        echo "<strong>Phường/Xã:</strong> " . htmlspecialchars($row['ward_name']) . "<br>";
                        echo "<strong>Quận/Huyện:</strong> " . htmlspecialchars($row['district_name']) . "<br>";
                        echo "<strong>Tỉnh/Thành phố:</strong> " . htmlspecialchars($row['province_name']) . "<br>";
                        echo "</div>";
                    }
                } else {
                    echo "Bạn chưa có địa chỉ nào.";
                }
            ?>

                                        
                <div class="sidebar"></div>               
            </div>
        </div>
</body>
</html>