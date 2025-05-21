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
     <?php

        session_start();
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $conn = mysqli_connect('localhost','root','','form'); // connect
            if($conn ->connect_error){
                die("Connection failed: ".$conn->connect_error);
            }
            $name = $_POST['name'];
            $password = $_POST['password'];

            // lấy thông tin người dùng 
            $sql = "SELECT * FROM dki WHERE name = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s",$name);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if($result->num_rows == 1){
                $user = $result->fetch_assoc();
                // kiểm tra mk
                if($password == $user['password']){
                    $_SESSION['logged_in'] = true;
                    $_SESSION['username'] = $user['name'];
                    if($user['name'] == 'admin' && $user['password'] == 'Admin123@'){
                        header("Location: admin.php");                
                    }else{
                        header("Location: homeuser.php");
                    }
                    exit();
                }else{
                    echo"Sai mật khẩu";
                }
            }else{
                echo"Tài khoản không tồn tại";
            }
        }
     ?>
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
        <div class="login">
            <div class="active_head">
               <h4 class="active">
                    <a href="login.php">Đăng Nhập</a>
               </h4> 
               <h4 class="active_l">
                    <a href="register.php">Đăng Ký</a>
               </h4>
            </div>
            <form action="" method="post">
                <input type="text" name="name" placeholder="Tên đăng nhập" class="input_sub" autocomplete="off">
                <br>
                <div class="input_wrapper">
                    <input type="password" name="password" placeholder="Password" class="input_sub input_pas" id="password">
                    <i class="fa-solid fa-eye eye_on" id="showpassword2"></i>
                </div>
                <input type="submit" value="Đăng Nhập" class="sub_dki">
                <br>
            </form>
        </div>
    </div>

    <!-- xử lý php.login -->
    
</body>
<script>
    const password = document.getElementById("password");
    const showpassword2 = document.getElementById("showpassword2");

    showpassword2.addEventListener("click", function(){
        const type = password.getAttribute("type") === "password" ? "text" : "password";
        password.setAttribute("type",type);

        this.classList.toggle("fa-eye");
        this.classList.toggle("fa-eye-slash");
    })
</script>
</html>