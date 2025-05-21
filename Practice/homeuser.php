<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="users.css">
    <link rel="stylesheet" href="root.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="contain">
        <div class="header_container">
            <div class="header_logo" bis_skin_checked="1">
				<div class="wrap-logo" itemscope="" itemtype="http://schema.org/Organization" bis_skin_checked="1">	
					<a href="homeuser.php" aria-label="Eva De Eva" itemprop="url">
							<img itemprop="logo" width="220" height="70" src="//theme.hstatic.net/200000000133/1001205759/14/logo.png?v=1859" alt="Eva De Eva" class="img-responsive logoimg ls-is-cached lazyloaded">
					</a>														
				</div>
			</div>

            <div class="header_menu">
                <ul class="nav_menu">
                    <li class="nav_item">
                        <a href="">HÀNG MỚI VỀ</a>
                    </li>
                    <li class="nav_item has_submenu has_submenu_product">
                        <a href="lietke.php">SẢN PHẦM
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" x="0" y="0" viewBox="0 0 128 128"><g><path d="m64 88c-1.023 0-2.047-.391-2.828-1.172l-40-40c-1.563-1.563-1.563-4.094 0-5.656s4.094-1.563 5.656 0l37.172 37.172 37.172-37.172c1.563-1.563 4.094-1.563 5.656 0s1.563 4.094 0 5.656l-40 40c-.781.781-1.805 1.172-2.828 1.172z"></path></g></svg>
                        </a>
                        <div class="base_product"></div>
                        <div class="menu_list_warapper">
                            <div class="container_wrapper">
                                <div class="product_wrapper">
                                    <div class="product_infor">
                                        <img src="https://file.hstatic.net/200000000133/file/ao.jpg" alt="" class="product_img">
                                        <span>Aó</span>
                                    </div>

                                    <div class="product_infor">
                                        <img src="https://file.hstatic.net/200000000133/file/dam.jpg" alt="" class="product_img">
                                        <span>Đầm</span>
                                    </div>

                                    <div class="product_infor">
                                        <img src="https://file.hstatic.net/200000000133/file/chan_vay.jpg" alt="" class="product_img">
                                        <span>Chân váy</span>
                                    </div>

                                    <div class="product_infor">
                                        <img src="https://file.hstatic.net/200000000133/file/quan.jpg" alt="" class="product_img">
                                        <span>Quần</span>
                                    </div>

                                    <div class="product_infor">
                                        <img src="https://file.hstatic.net/200000000133/file/img_megamenu2_5_a5bce29661434ffdad3e4cbe7e5540ea.jpg" alt="" class="product_img">
                                        <span>Jumpsuit</span>
                                    </div>

                                    <div class="product_infor">
                                        <img src="https://file.hstatic.net/200000000133/file/ao_khaocs.jpg" alt="" class="product_img">
                                        <span>Aó Khoác</span>
                                    </div>

                                    <div class="product_infor">
                                        <img src="https://file.hstatic.net/200000000133/file/phu_kien.jpg" alt="" class="product_img">
                                        <span>Phụ Kiện</span>
                                    </div>
                                </div>
                            </div>
                        </div>
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

                <button class="header_next_link account_inner" id="site_search" aria-label="tài khoản" title="tài khoản">
                    <a href="">
                        <span class="box_icon">
                            <i class="fa-solid fa-user">
                            </i>
                        </span>                       
                        <div class="account_inner_user">
                            <div class="account_conntent">
                                <div class="account_list">
                                    <div class="account_title">
                                        <div class="account_title_header">
                                            <p class="txt_title">THÔNG TIN TÀI KHOẢN</p>
                                        </div>
                                    </div>
                                    
                                    <div class="account_block">
                                        <ul>
                                            <li class="user_name">
                                                <span>
                                                    <?php 
                                                        if(isset($_SESSION['username'])){
                                                            echo htmlspecialchars($_SESSION['username']);
                                                        }
                                                    ?>
                                                </span>
                                            </li>
                                            <li>
                                                <a href="">Tài khoản của tôi</a>
                                            </li>
                                            <li>
                                                <a href="home.php">Đăng xuất</a>
                                            </li>                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </button>

                <button class="header_next_link" id="site_search" aria-label="gio_hang" title="gio_hang">
                    <span class="box_icon">
                        <i class="fa-solid fa-cart-arrow-down"></i>
                    </span>
                </button>
            </div>
            

        </div>
        <div class="boddy">
            <div class="main_wrapper">
                <div class="home_slider">
                    <img src="https://theme.hstatic.net/200000000133/1001205759/14/slide_1_img.jpg?v=1879" alt="">
                </div>
            </div>

            <div class="main_conttent">
                <div class="type_product">
                    <div class="container">
                        <div class="title_product">
                            <h2>Danh mục nổi bật</h2>
                            <div class="swiper_nav">
                                <button id="btnLeft" class="swiper-button-left swiper-button" onclick="moveLeft()">
                                    <i class="fa-solid fa-arrow-left arrow"></i>
                                </button>
                                <button id="btnRight" class="swiper-button-right swiper-button" onclick="moveRight()">
                                    <i class="fa-solid fa-arrow-right arrow"></i>
                                </button>
                            </div>
                        </div>
                        <div class="slider_strack">
                            <div id="productList" class="conttent_product">
                                <div class="describe_product">
                                    <div class="product_img">
                                        <img src="https://theme.hstatic.net/200000000133/1001205759/14/home_category_1_img.jpg?v=1884" alt="">
                                    </div>
                                    <div class="product_infor_img">
                                        <div class="infor_title">
                                            <h3>Đầm</h3>
                                        </div>
                                        <div class="infor_icon">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </div>                                
                                    </div>
                                </div>
    
                                <div class="describe_product">
                                    <div class="product_img">
                                        <img src="https://theme.hstatic.net/200000000133/1001205759/14/home_category_2_img.jpg?v=1889" alt="">
                                    </div>
                                    <div class="product_infor_img">
                                        <div class="infor_title">
                                            <h3>Aó sơ mi</h3>
                                        </div>
                                        <div class="infor_icon">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </div>                                
                                    </div>
                                </div>
    
                                <div class="describe_product">
                                    <div class="product_img">
                                        <img src="https://theme.hstatic.net/200000000133/1001205759/14/home_category_3_img.jpg?v=1889" alt="Aó kiểu">
                                    </div>
                                    <div class="product_infor_img">
                                        <div class="infor_title">
                                            <h3>Aó kiểu</h3>
                                        </div>
                                        <div class="infor_icon">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </div>                                
                                    </div>
                                </div>
    
                                <div class="describe_product">
                                    <div class="product_img">
                                        <img src="https://theme.hstatic.net/200000000133/1001205759/14/home_category_4_img.jpg?v=1889" alt="">
                                    </div>
                                    <div class="product_infor_img">
                                        <div class="infor_title">
                                            <h3>Quần</h3>
                                        </div>
                                        <div class="infor_icon">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </div>                                
                                    </div>
                                </div>
    
                                <div class="describe_product">
                                    <div class="product_img">
                                        <img src="https://theme.hstatic.net/200000000133/1001205759/14/home_category_5_img.jpg?v=1889" alt="">
                                    </div>
                                    <div class="product_infor_img">
                                        <div class="infor_title">
                                            <h3>Chân Váy</h3>
                                        </div>
                                        <div class="infor_icon">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </div>                                
                                    </div>
                                </div>
    
                                <div class="describe_product">
                                    <div class="product_img">
                                        <img src="https://theme.hstatic.net/200000000133/1001205759/14/home_category_6_img.jpg?v=1889" alt="">
                                    </div>
                                    <div class="product_infor_img">
                                        <div class="infor_title">
                                            <h3>Aó khoác</h3>
                                        </div>
                                        <div class="infor_icon">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </div>                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main_policy">
                <div class="container">
                    <div class="list_policy">
                        <div class="list_policy_item">
                            <div class="policy_item_icon">
                                <img src="https://theme.hstatic.net/200000000133/1001205759/14/home_policy_icon_1.png?v=1889" alt="">
                            </div>
                            <div class="policy_item_infor">
                                <h3 class="item_infor_tittle">Miễn phí vận chuyển</h3>
                                <div class="item_infor_des">Miễn phí đơn hàng từ 1.999.000đ</div>
                            </div>
                        </div>
                        <div class="list_policy_item">
                            <div class="policy_item_icon">
                                <img src="https://theme.hstatic.net/200000000133/1001205759/14/home_policy_icon_2.png?v=1889" alt="">
                            </div>
                            <div class="policy_item_infor">
                                <h3 class="item_infor_tittle">Giao mới thu hồi trên 1 lần giao</h3>
                                <div class="item_infor_des">Giao hàng đổi tận nơi và thu hồi không cần đi gửi lại hàng</div>
                
                            </div>
                        </div>
                        <div class="list_policy_item">
                            <div class="policy_item_icon">
                                <img src="https://theme.hstatic.net/200000000133/1001205759/14/home_policy_icon_3.png?v=1889" alt="">
                            </div>
                            <div class="policy_item_infor">
                                <h3 class="item_infor_tittle">Tổng Đài Bán Hàng Miễn Phí</h3>
                                <div class="item_infor_des">Gọi 1800.1732 để được tư vấn</div>
                            </div>
                        </div>
                        <div class="list_policy_item">
                            <div class="policy_item_icon">
                                <img src="https://theme.hstatic.net/200000000133/1001205759/14/home_policy_icon_4.png?v=1889" alt="">
                            </div>
                            <div class="policy_item_infor">
                                <h3 class="item_infor_tittle">Thanh toán đa dạng</h3>
                                <div class="item_infor_des">Phương thức thanh toán đa dạng</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footter">
            <div class="container">
                <div class="row">
                    <div class="row_item">
                        <h2 class="footer_tittle">Văn phòng</h2>
                        <div class="footer_conttent">
                            <div class="conttent_infor">
                                <div class="ft_logo">
                                    <img src="https://theme.hstatic.net/200000000133/1001205759/14/logo-footer.png?v=1889" alt="">
                                </div>
                                <div class="ft_address">
                                    <ul class="ft_list">
                                        <li class="contact_1">
                                            <b>CÔNG TY TNHH HAI THÀNH VIÊN PHỤC HƯNG</b>
                                            <br>
                                            <b>Trụ sở chính: Tòa nhà GP Invest, 170 La ThànhPhường Ô Chợ Dừa,</b>
                                            <br>
                                            <b>Quận Đống Đa, Thành phố Hà Nội</b>
                                            <br>
                                        </li>
                                        <li class="contact_2">
                                            <b>Điện thoại: 1800 1731</b>
                                        </li>
                                        <li class="contact_3">
                                            <b>Email: onlinesale@evadeeva.com.vn</b>
                                        </li>
                                        <li class="contact_4"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row_item">
                        <h2 class="footer_tittle">Thông tin liên hệ</h2>
                        <div class="conttent_infor_contact">
                            <ul class="ft_link">
                                <li class="item">
                                    <a href="/pages/gioi-thieu" title="Về chúng tôi">Về chúng tôi</a>
                                </li>
                                <li class="item">
                                    <a href="/pages/cau-hoi-thuong-gap" title="Câu hỏi thường gặp">Câu hỏi thường gặp</a>
                                </li>
                                <li class="item">
                                    <a href="/blogs/tin-tuc" title="Sự kiện">Sự kiện</a>
                                </li>
                                <li class="item">
                                    <a href="/blogs/bai-viet-noi-bat" title="Tin tức">Tin tức</a>
                                </li>
                                <li class="item">
                                    <a href="/blogs/sao-eva" title="SAO &amp; Eva">SAO &amp; Eva</a>
                                </li>
                                <li class="item">
                                    <a href="/pages/he-thong-cua-hang" title="Hệ thống Showroom">Hệ thống Showroom</a>
                                </li>
                                <li class="item">
                                    <a href="/blogs/tuyen-dung-eva-de-eva" title="Tuyển dụng">Tuyển dụng</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row_item">
                        <h2 class="footer_tittle">Chính sách bán hàng</h2>
                        <div class="conttent_infor_contact">
                            <ul class="ft_link">
                                <li class="item">
                                    <a href="/pages/chinh-sach-thanh-toan" title="Chính sách thanh toán">Chính sách thanh toán</a>
                                </li>
                                <li class="item">
                                    <a href="/pages/chinh-sach-van-chuyen" title="Chính sách vận chuyển">Chính sách vận chuyển</a>
                                </li>
                                <li class="item">
                                    <a href="/pages/chinh-sach-doi-tra" title="Chính sách đổi trả">Chính sách đổi trả</a>
                                </li>
                                <li class="item">
                                    <a href="/pages/chinh-sach-bao-mat" title="Chính sách bảo mật">Chính sách bảo mật</a>
                                </li>
                                <li class="item">
                                    <a href="/pages/chuong-trinh-the-vip" title="Chương trình thẻ VIP">Chương trình thẻ VIP</a>
                                </li>
                                <li class="item">
                                    <a href="/pages/huong-dan-chon-size" title="Hướng dẫn chọn size">Hướng dẫn chọn size</a>
                                </li>                        
                            </ul>
                        </div>
                    </div>
                    <div class="row_item row_item_4">
                        <h2 class="footer_tittle">Đăng ký nhận tin</h2>
                            <div class="conttent_infor">
                                <p>Để cập nhật những sản phẩm mới, nhận thông tin ưu đãi đặc biệt và thông tin giảm giá khác.</p>
                                <div class="ft_social">
                                    <ul class="social_list">
                                        <li>
									        <a href="https://www.facebook.com/evadeeva.com.vn" target="_blank" rel="noopener" title="Facebook" aria-label="Facebook">
										        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 155.139 155.139"><g><g><path d="M89.584,155.139V84.378h23.742l3.562-27.585H89.584V39.184 c0-7.984,2.208-13.425,13.67-13.425l14.595-0.006V1.08C115.325,0.752,106.661,0,96.577,0C75.52,0,61.104,12.853,61.104,36.452 v20.341H37.29v27.585h23.814v70.761H89.584z"></path></g></g></svg>
									        </a>
								        </li>
                                        <li>
									        <a href="https://www.instagram.com/evadeeva.official/" target="_blank" rel="noopener" title="Instagram" aria-label="Instagram">
										        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 512.00096 512.00096"><g><path d="m373.40625 0h-234.8125c-76.421875 0-138.59375 62.171875-138.59375 138.59375v234.816406c0 76.417969 62.171875 138.589844 138.59375 138.589844h234.816406c76.417969 0 138.589844-62.171875 138.589844-138.589844v-234.816406c0-76.421875-62.171875-138.59375-138.59375-138.59375zm108.578125 373.410156c0 59.867188-48.707031 108.574219-108.578125 108.574219h-234.8125c-59.871094 0-108.578125-48.707031-108.578125-108.574219v-234.816406c0-59.871094 48.707031-108.578125 108.578125-108.578125h234.816406c59.867188 0 108.574219 48.707031 108.574219 108.578125zm0 0"></path><path d="m256 116.003906c-77.195312 0-139.996094 62.800782-139.996094 139.996094s62.800782 139.996094 139.996094 139.996094 139.996094-62.800782 139.996094-139.996094-62.800782-139.996094-139.996094-139.996094zm0 249.976563c-60.640625 0-109.980469-49.335938-109.980469-109.980469 0-60.640625 49.339844-109.980469 109.980469-109.980469 60.644531 0 109.980469 49.339844 109.980469 109.980469 0 60.644531-49.335938 109.980469-109.980469 109.980469zm0 0"></path><path d="m399.34375 66.285156c-22.8125 0-41.367188 18.558594-41.367188 41.367188 0 22.8125 18.554688 41.371094 41.367188 41.371094s41.371094-18.558594 41.371094-41.371094-18.558594-41.367188-41.371094-41.367188zm0 52.71875c-6.257812 0-11.351562-5.09375-11.351562-11.351562 0-6.261719 5.09375-11.351563 11.351562-11.351563 6.261719 0 11.355469 5.089844 11.355469 11.351563 0 6.257812-5.09375 11.351562-11.355469 11.351562zm0 0"></path></g></svg>
									        </a>
								        </li>
                                        <li>
									        <a href="https://www.tiktok.com/@evadeeva.official" target="_blank" rel="noopener" title="TikTok" aria-label="TikTok">
										        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 512 512"><g><g><path d="m480.32 128.39c-29.22 0-56.18-9.68-77.83-26.01-24.83-18.72-42.67-46.18-48.97-77.83-1.56-7.82-2.4-15.89-2.48-24.16h-83.47v228.08l-.1 124.93c0 33.4-21.75 61.72-51.9 71.68-8.75 2.89-18.2 4.26-28.04 3.72-12.56-.69-24.33-4.48-34.56-10.6-21.77-13.02-36.53-36.64-36.93-63.66-.63-42.23 33.51-76.66 75.71-76.66 8.33 0 16.33 1.36 23.82 3.83v-62.34-22.41c-7.9-1.17-15.94-1.78-24.07-1.78-46.19 0-89.39 19.2-120.27 53.79-23.34 26.14-37.34 59.49-39.5 94.46-2.83 45.94 13.98 89.61 46.58 121.83 4.79 4.73 9.82 9.12 15.08 13.17 27.95 21.51 62.12 33.17 98.11 33.17 8.13 0 16.17-.6 24.07-1.77 33.62-4.98 64.64-20.37 89.12-44.57 30.08-29.73 46.7-69.2 46.88-111.21l-.43-186.56c14.35 11.07 30.04 20.23 46.88 27.34 26.19 11.05 53.96 16.65 82.54 16.64v-60.61-22.49c.02.02-.22.02-.24.02z"></path></g></g></svg>
									        </a>
								        </li>
                                        <li>
									        <a href="https://www.youtube.com/c/EvadeEvaOfficial" target="_blank" rel="noopener" title="Youtube" aria-label="Youtube">
										        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 409.592 409.592"><g><g><g><path d="M403.882,107.206c-2.15-17.935-19.052-35.133-36.736-37.437c-107.837-13.399-216.883-13.399-324.685,0 C24.762,72.068,7.86,89.271,5.71,107.206c-7.613,65.731-7.613,129.464,0,195.18c2.15,17.935,19.052,35.149,36.751,37.437 c107.802,13.399,216.852,13.399,324.685,0c17.684-2.284,34.586-19.502,36.736-37.437 C411.496,236.676,411.496,172.937,403.882,107.206z M170.661,273.074V136.539l102.4,68.27L170.661,273.074z"></path></g></g></g></svg>
									        </a>
								        </li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sider_search_show show">
            <div class="sitenva_search">
                <div class="container">
                    <div class="row">
                        <div class="colum_search logo">
                            <div class="wrap-logo" itemscope="" itemtype="http://schema.org/Organization" bis_skin_checked="1">	
					            <a href="home.php" aria-label="Eva De Eva" itemprop="url">
							        <img itemprop="logo" width="220" height="70" src="//theme.hstatic.net/200000000133/1001205759/14/logo.png?v=1859" alt="Eva De Eva" class="img-responsive logoimg ls-is-cached lazyloaded">
					            </a>														
				            </div>
                        </div>
                        <div class="colum_search_form ">
                            <form action="/search" class="search_form">
                                <div class="search_inner">
                                    <input type="hidden" name="type" value="product">
                                    <input type="text" name="q" class="input_search" placeholder="Tìm kiếm sản phẩm" maxlength="40" autocomplete="off" size="20" >
                                    <button type="submit" class="btn_search">
                                        <svg version="1.1" class="svg search" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 27" style="enable-background:new 0 0 24 27;" xml:space="preserve"><path d="M10,2C4.5,2,0,6.5,0,12s4.5,10,10,10s10-4.5,10-10S15.5,2,10,2z M10,19c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7S13.9,19,10,19z"></path><rect x="17" y="17" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -9.2844 19.5856)" width="4" height="8"></rect></svg>
                                    </button>
                                </div>
                            </form>
                            <div class="search_resault">
                                <div class="resaults_conttent"></div>
                                <div class="search_suggest">
                                    <ul class="list_suggest">
                                        <li class="item item_suggest">Gợi ý cho bạn</li>
                                        <li class="item">
                                            <a href="">Đầm</a>
                                        </li>
                                        <li class="item">
                                            <a href="">Aó</a>
                                        </li>
                                        <li class="item">
                                            <a href="">Quần</a>
                                        </li>
                                        <li class="item">
                                            <a href="">Chân váy</a>
                                        </li>
                                        <li class="item">
                                            <a href="">Aó kiểu</a>
                                        </li>
                                        <li class="item">
                                            <a href="">Aó khoác</a>
                                        </li>
                                        <li class="item">
                                            <a href="">Phụ kiện</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="colum_search colum_search_action">
                            <div class="btn_close_search" aria-label="close_search" bis_skin_checked="1">
                                <i class="fa-solid fa-xmark"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay"></div>
        </div>    
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        let currentScroll = 0;
        const scrollStep = 352;
        const productList = document.getElementById('productList');

        if (!productList) {
            console.error("Không tìm thấy phần tử có id='productList'");
            return;
        }

        window.moveLeft = function () {
            currentScroll = Math.max(0, currentScroll - scrollStep);
            productList.style.transform = `translateX(-${currentScroll}px)`;
        };

        window.moveRight = function () {
            const maxScroll = productList.scrollWidth - productList.parentElement.offsetWidth;
            currentScroll = Math.min(maxScroll, currentScroll + scrollStep);
            productList.style.transform = `translateX(-${currentScroll}px)`;
        };
        });
    </script>
    

    <script src="scripts.js"></script>
</body>
</html>