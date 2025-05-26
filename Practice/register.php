<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="root.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="contain">
        <div class="header_container">
            <div class="header_logo" bis_skin_checked="1">
				<div class="wrap-logo" itemscope="" itemtype="http://schema.org/Organization" bis_skin_checked="1">	
					<a href="home.php" aria-label="Eva De Eva" itemprop="url">
							<img itemprop="logo" width="220" height="70" src="//theme.hstatic.net/200000000133/1001205759/14/logo.png?v=1859" alt="Eva De Eva" class="img-responsive logoimg ls-is-cached lazyloaded">
					</a>														
				</div>
			</div>

            <div class="header_menu">
                <ul class="nav_menu">
                    <li class="nav_item">
                        <a href="">HÀNG MỚI VỀ</a>
                    </li>
                    <li class="nav_item has_submenu">
                        <a href="">SẢN PHẦM
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" x="0" y="0" viewBox="0 0 128 128"><g><path d="m64 88c-1.023 0-2.047-.391-2.828-1.172l-40-40c-1.563-1.563-1.563-4.094 0-5.656s4.094-1.563 5.656 0l37.172 37.172 37.172-37.172c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656l-40 40c-.781.781-1.805 1.172-2.828 1.172z"></path></g></svg>
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="">BỘ SƯU TẬP</a>
                    </li>
                    <li class="nav_item">
                        <a href="">CASAUL</a>
                    </li>
                    <li class="nav_item">
                        <a href="">LADY ME</a>
                    </li>
                    <li class="nav_item has_submenu">
                        <a href="">SALE
                             <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" x="0" y="0" viewBox="0 0 128 128"><g><path d="m64 88c-1.023 0-2.047-.391-2.828-1.172l-40-40c-1.563-1.563-1.563-4.094 0-5.656s4.094-1.563 5.656 0l37.172 37.172 37.172-37.172c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656l-40 40c-.781.781-1.805 1.172-2.828 1.172z"></path></g></svg>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="header_next">
                <button class="header_next_link" id="site_search" aria-label="tìm kiếm" title="tìm kiếm">
                    <span class="box_icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                </button>

                <button class="header_next_link" id="site_search" aria-label="tài khoản" title="tài khoản">
                    <a href="login.php">
                        <span class="box_icon">
                            <i class="fa-solid fa-user">
                            </i>
                        </span>
                    </a>
                </button>

                <button class="header_next_link" id="site_search" aria-label="gio_hang" title="gio_hang">
                    <span class="box_icon">
                        <i class="fa-solid fa-cart-arrow-down"></i>
                    </span>
                </button>
            </div>            
        </div>
        <div class="register">
            <h1 >
                <a href="register.php" style="text-decoration: none;">REGISTER</a>
            </h1>
            <?php 
                $name = $email = $password = $re_password = $date = "";
                $nameErr = $emailErr = $passwordErr = $re_passwordErr = "";
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    // CHECK TEN
                    if(empty($_POST["name"])){
                        $nameErr = "Yêu cầu nhập tên";
                    }else{
                        $name = test_input($_POST["name"]);
                        if (!preg_match("/^[\p{L}\s'-]+$/u", $name)) {
                            $nameErr = "Chỉ cho phép chữ cái và khoảng trắng";
                        }
                    }
                    // check mk
                    if(empty($_POST["email"])){
                        $emailErr = "Yêu cầu nhập email";
                    }else{
                        $email = test_input($_POST["email"]);
                        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                            $emailErr = "Lỗi format";
                        }
                    }

                    //check mk
                    // if(empty($_POST["password"])){
                    //     $passwordErr = "Xin nhập mật khẩu";
                    // }else{
                    //     $password = test_input($_POST["password"]);
                    //     $passwordErr = validate_password($password);
                    //     if(!empty($passwordErr)){
                    //         $passwordErr = implode("<br>",$passwordErr);
                    //     }
                    // }


                    if(empty($_POST["password"])){
                        $passwordErr = "Xin nhập mật khẩu";
                    } else {
                        $password = test_input($_POST["password"]);
                        $validationErrors = validate_password($password);
                        if(!empty($validationErrors)){
                            $passwordErr = implode("<br>", $validationErrors);
                        } else {
                            $passwordErr = ""; // no error
                        }
                    }
                    
                    
                    // kiểm tra passs
                    // if($_SERVER["REQUEST_METHOD"] === "POST"){
                    //     $password = $_POST['password'] ?? '';
                    //     $re_password = $_POST['re_password'] ?? '';

                    //     if($password !== $re_password){
                    //         $re_password = "Mật khẩu không khớp";
                    //     }
                    // }
                    


                    // kiểm tra pass
                    $re_password = test_input($_POST["re_password"]);

                    if(empty($re_password)){
                        $re_passwordErr = "Vui lòng nhập lại mật khẩu";
                    } elseif($password !== $re_password){
                        $re_passwordErr = "Mật khẩu không khớp";
                    }
                    if(empty($_POST["date"])){
                        $date = "";
                    }else{
                        $date = test_input($_POST["date"]);
                    }           
                }
                function test_input($data){
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
                function validate_password($password){
                    $erros = [];
                    if(strlen(($password) < 8)){
                        $erros[] = "Mật khẩu có ít nhất 8 ký tự";
                    }elseif(!preg_match("/[A-Z]/", $password)){
                        $erros[] ="Mật khẩu phải có chữ in hoa";
                    }elseif(!preg_match("/[a-z]/", $password)){
                        $erros[] ="Mật khẩu ít nhất có chứa 1 chữ thường";
                    }elseif(!preg_match("/[0-9]/", $password)){
                        $erros[] ="Mật khẩu phải chứa số";
                    }elseif(!preg_match("/[\W_]/", $password)){
                        $erros[] ="Mật khẩu phải chứa ký tự đặc biệt";
                    }
                    return $erros;
                }
            ?>
            <form action="" method="post">
                <input type="text" placeholder="Họ và tên:" name="name" class="input_sub" autocomplete="off">
                <span class="error"><?php echo $nameErr;?></span>
                <input type="text" placeholder="Email:" name="email" class="input_sub" autocomplete="off">
                <span class="error"><?php echo $emailErr?></span>
                <div class="input_wrapper">
                    <input type="password" placeholder="Password" name="password" class="input_sub input_pas" id="password">
                    <i class="fa-solid fa-eye eye_on" id="showpassword" ></i>
                    <br>
                    <span class="error"><?php echo $passwordErr ?></span>  
                </div>
                <div class="input_wrapper">
                    <input type="password" placeholder="Reapeat_Password" name="re_password" class="input_sub  input_pas" id="password1">
                    <i class="fa-solid fa-eye eye_on" id="showpassword1" ></i> 
                    <span class="error"><?php echo $re_passwordErr ?></span>
                </div>
                <input type="date" placeholder="Date" name="date" class="input_sub">
                <input type="submit" value="Đăng Ký" class="sub_dki">
            </form>           
        </div>
        <div class="notice_res">
            <?php 
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    if(!empty($name) && !empty($email) && !empty($password) && !empty($re_password) && ($password === $re_password)){
                        $conn = mysqli_connect('localhost','root','','form');
                            if($_SERVER["REQUEST_METHOD"] == "POST"){
                                $name = $_POST['name'] ?? '';
                                $email = $_POST['email'] ?? '';
                                $password = $_POST['password'] ?? '';
                                $date = $_POST['date'] ?? '';
                                $stmt = mysqli_prepare($conn, "INSERT INTO dki(name, email, password, date) VALUES (?, ?, ?, ?)");
                                
                                if($stmt){
                                    mysqli_stmt_bind_param($stmt,"ssss", $name, $email, $password, $date);
                                    if(mysqli_stmt_execute(($stmt))){
                                        echo "Thêm dữ liệu thành công";
                                        $conn -> query("INSERT INTO customer(customerName) VALUES ('$name')"); // THÊM INSERT VÀO CUSTOMER
                                    }else{
                                        echo "Lỗi khi thực hiện câu lệnh". mysqli_stmt_error($stmt);
                                    }
                                    mysqli_stmt_close($stmt);
                                }else{  
                                    echo"Lỗi chuẩn bị truy vấn".mysqli_error($conn);
                                }
                                mysqli_close($conn);
                            }
                        // echo $name;
                        // echo "<br>";
                        // echo $email;
                        // echo "<br>";
                        // echo $password;
                        // echo "<br>";
                        // echo $re_password;
                        // echo "<br>";
                        // echo $date;
                        // echo "<br>";
                    }else{
                        echo "Lỗi dữ liệu: Vui lòng nhập đầy đủ thông tin và xác nhận mật khẩu phải khớp.";
                    }
                }
            ?>
        </div>
    </div>
</body>
<script>
    const showpassword = document.getElementById("showpassword");
    const password = document.getElementById("password");
    showpassword.addEventListener("click",function(){
        const type = password.getAttribute("type") === "password" ? "text" : "password";
        password.setAttribute("type",type);
        // đổi con mắt
        this.classList.toggle("fa-eye");
        this.classList.toggle("fa-eye-slash");
    })

    // password1
    const showpassword1 = document.getElementById("showpassword1");
    const password1 = document.getElementById("password1");
    showpassword1.addEventListener("click",function(){
        const type = password1.getAttribute("type") === "password" ? "text" : "password";
        password1.setAttribute("type",type);

        this.classList.toggle("fa-eye");
        this.classList.toggle("fa-eye-slash");
    })
</script>
</html>