<?php 
    session_start();
    $conn = mysqli_connect('localhost','root','','form');
        if(!$conn){
            die("Connect fail:".mysqli_connect_error());
        }
    
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
                            <form id="myForm" class="mt-5" method="POST">
                                <h1 class="py-5">Chọn địa chỉ khi đặt hàng trong website</h1>
                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="province">Tỉnh/Thành phố</label>
                                            <select id="province" name="province" class="form-control">
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
                                            <select id="district" name="district" class="form-control">
                                                <option value="">Chọn một quận/huyện</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="wards">Phường/Xã</label>
                                            <select id="wards" name="wards" class="form-control">
                                                <option value="">Chọn một xã</option>
                                            </select>
                                        </div>
                                        <input type="submit" name="add_sale" class="btn btn-primary w-100 form-input my-3" value="Đặt hàng">
                                    </div>
                                </div>
                            </form>                        
                        </div>
                    </div>    
                </div>
                                
                <div class="sidebar"></div>               
            </div>
        </div>
</body>
</html>