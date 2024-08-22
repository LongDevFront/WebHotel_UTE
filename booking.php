<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Aurora Hotel Plaza Template">
    <meta name="keywords" content="Aurora Hotel Plaza, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aurora Hotel Plaza</title>
    <link rel="shortcut icon" href=" " type="image/x-icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/style_main.css">
</head>



<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="search-icon search-switch">
            <i class="icon_search"></i>
        </div>
        <div class="header-configure-area">
            <!--  -->
            <a href="#" class="bk-btn" onclick="showOverlay()">Đặt phòng ngay</a>
        </div>

        <a href="#"></a>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li><a href="./index.php" id="encryptedLink">Trang Chủ</a></li>
                <li class="active"><a href="./about-us.php">Giới Thiệu</a></li>
               
 
                        <li><a href="./rooms.php">Phòng</a></li>
                        <li><a href="./history.php">Lịch Sử Đặt</a></li>
                        
                

                <li><a href="./contact.php">Liên Hệ</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="https://www.facebook.com/long.lequang308" target="_blank"><i class="fa fa-facebook"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> Số điện thoại : (+84-969) 875.278</li>
            <li><i class="fa fa-envelope"></i>long.lequang308@gmail.com</li>
        </ul>
    </div>
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i> Số điện thoại : (+84-969) 875.278</li>
                            <li><i class="fa fa-envelope"></i>
                                long.lequang308@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="https://www.facebook.com/aurorahotelplaza" target="_blank"><i class="fa
                                            fa-facebook"></i></a>
                            </div>
                            <a href="./booking.php" class="bk-btn" onclick="showOverlay()">Đặt Phòng Ngay</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2" style="padding-left: 0px;">
                        <div class="logo" style="padding: 0px;">
                            <a href="./index.php" style="text-decoration: none;">
                                <span style="font-size: 54px; font-weight: bold; display: block; color: black;">HOTEL365</span>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li><a href="./index.php">Trang Chủ</a></li>
                                    <li class="active"><a href="./about-us.php">Giới Thiệu</a></li>
                                    <li><a href="./rooms.php">Phòng</a></li>
                                    <li><a href="./history.php">Lịch Sử Đặt</a></li>
                                    
                                    <li><a href="./contact.php">Liên Hệ</a></li>
                                </ul>
                            </nav>
                            <div class="nav-right search-switch">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="breadcrumb-text">
                            <h2>ĐẶT PHÒNG</h2>
                            <div class="bt-option">
                                <a href="./index.php">Trang Chủ</a>
                                <span>Đặt Phòng</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="booking_handler.php" action="email.php" method="post" class="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <p>Họ và Tên</p>
                                <input type="text" placeholder="Your Name" name="fullname" required
                                    oninput="validateField(this)">
                            </div>
                            <div class="col-lg-6">
                                <p>Số Điện Thoại</p>
                                <input type="number" placeholder="Phone" name="phone" required
                                    oninput="validateField(this)">
                            </div>
                            <div class="col-lg-6">
                                <p>Email</p>
                                <input type="email" placeholder="Email" name="email" required
                                    oninput="validateField(this)">
                            </div>
                            <div class="col-lg-6">
                                <p>Địa Chỉ</p>
                                <input type="text" placeholder="Address" name="address" required
                                    oninput="validateField(this)">
                            </div>
                            <div class="col-lg-6">
                                <p>Loại Phòng</p>

                                <select name="room_type" required oninput="validateField(this); calculateTotal();"
                                    id="comboBox">
                                    <option value="" selected disabled>-- Chọn Phòng --</option>
                                    <option value="DELUXE">DELUXE</option>
                                    <option value="FAMILY APARTMENT">FAMILY APARTMENT</option>
                                    <option value="PREMIUM APARTMENT">PREMIUM APARTMENT</option>
                                    <option value="PREMIUM DELUXE_TWIN">PREMIUM DELUXE TWIN</option>
                                    <option value="STUDIO APARTMENT">STUDIO APARTMENT</option>
                                    <option value="AURORA VIP_STUDIO">AURORA VIP STUDIO</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <p>Tổ Chức</p>
                                <select name="Organization_type" required oninput="validateField(this)">
                                    <option value="" selected disabled>-- Chọn Loại --</option>
                                    <!--<option value="COMPANY">COMPANY</option>-->
                                    <option value="PERSONALLY">PERSONALLY</option>

                                </select>
                            </div>
                            <div class="col-lg-6">
                                <p>Số Người</p>
                                <div class="input-group" style="width:300px;">
                                    <button type="button" class="btn"
                                        onclick="updateField(this.nextElementSibling, 'subtract'); calculateTotal();">-</button>
                                    <input type="text" class="form-control" placeholder="0" name="number" required
                                        oninput="validateField(this); calculateTotal();"
                                        style="width: 40px; margin:0px 10px 0px 10px ;">
                                    <button type="button" class="btn"
                                        onclick="updateField(this.previousElementSibling, 'add'); calculateTotal();">+</button>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <p>Số Phòng</p>
                                <div class="input-group" style="width:300px;">
                                    <button type="button" class="btn"
                                        onclick="updateField(this.nextElementSibling, 'subtract')">-</button>
                                    <input type="text" class="form-control" placeholder="" name="numberRoom" required
                                        oninput="validateField(this)" style="width: 40px; margin:0px 10px 0px 10px ;">
                                    <button type="button" class="btn"
                                        onclick="updateField(this.previousElementSibling, 'add')">+</button>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <p>Ngày Đến</p>
                                <input type="date" placeholder="Check in" name="checkin" required
                                    oninput="validateDates(this)" style="color:black;">
                            </div>
                            <div class="col-lg-6">
                                <p>Ngày Đi</p>
                                <input type="date" placeholder="Check out" name="checkout" required
                                    oninput="validateDates(this)" style="color:black;">
                            </div>

                            <div class="col-lg-12">
                                <p>Tin Nhắn</p>
                                <textarea placeholder="Your Message" name="message"></textarea>
                                <!-- Element to show error message -->
                                <button type="submit" name="send" id="bookingBtn">
                                   Đặt Phòng
                                </button>
                                <br>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section" style="background-color: black; color: white;">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                                <a href="#" style="text-decoration: none;">
                                    <h3 style="color: white;">Hotel365</h3>
                                </a>
                            </div>
                            <p style="color: white;">Rất hân hạnh được phục vụ các bạn</p>
                            <div class="fa-social">
                                <a href="https://www.facebook.com/aurorahotelplaza" target="_blank"
                                    style="color: white;"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/aurorahotelBH" target="_blank" style="color: white;"><i
                                        class="fa fa-twitter"></i></a>
                                <a href="https://www.youtube.com/watch?v=e13L4DHae6Q" target="_blank"
                                    style="color: white;"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-contact">
                            <h6 style="color: white;">Thông Tin Liên Hệ</h6>
                            <ul style="color: white;">
                                <li>Số điện thoại: (+84-969) 875.278</li>
                                <li>Email: long.lequang308@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-newslatter">
                            <h6 style="color: white;">Nhận ưu đãi</h6>
                            <p style="color: white;">Nhận ưu đãi bằng cách gửi cho chúng tôi</p>
                            <form action="db_offer.php" method="POST" class="fn-form">
                                <input type="text" placeholder="Email" name="mail_getoffer"
                                    style="border-radius: 0; border: 1px solid white;">
                                <button type="submit" name="send"
                                    style="background-color: white; color: black; border-radius: 0;"><i
                                        class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="tel:+0969875278" class="call-button" style="color: white;">
            <div class="fa fa-phone"></div>
        </a>
        <div class="copyright-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul style="color: white;">
                            <li><a href="#" style="color: white;">Liên hệ</a></li>
                            <li><a href="#" style="color: white;">Điều kiện</a></li>
                            <li><a href="#" style="color: white;">Bảo mật</a></li>
                            <li><a href="#" style="color: white;">Điều khoản</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->

    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Tìm kiếm....">
            </form>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>