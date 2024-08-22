<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Aurora Hotel Plaza Template">
    <meta name="keywords" content="Aurora Hotel Plaza, unica, creative,
            html">
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
</head>

<body>
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
            <a href="./booking.php" class="bk-btn" onclick="showOverlay()">Đặt Phòng Ngay</a>
        </div>
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
            <a href="https://www.facebook.com/aurorahotelplaza" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/aurorahotelBH" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://www.youtube.com/watch?v=e13L4DHae6Q" target="_blank"><i class="fa fa-youtube-play"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> Phone : (+84-251) 391.8888</li>
            <!-- <li><i class="fa fa-phone"></i> Phone : (+84-251) 391.8300</li> -->
            <li><i class="fa fa-envelope"></i> info@aurorahotelplaza.com</li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
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
                                <span
                                    style="font-size: 54px; font-weight: bold; display: block; color: black;">HOTEL365</span>
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

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Loại Phòng</h2>
                        <div class="bt-option">
                            <a href="./index.php">Trang Chủ</a>
                            <span>Phòng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="rooms-section spad">
        <div class="container">
            <!-- DELUXE -->
            <div class="row" id="DELUXE">
                <!-- Room Deluxe -->
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <a href="room-deluxe.php">
                            <img src="./img/room/Deluxe/Del2.jpg" alt="" style="height:218px;">
                            <div class="ri-text">
                                <h4>Room Deluxe</h4>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td>32m²</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>Max person 2</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed:</td>
                                            <td>King Bed</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>Wifi, Television, Bathroom,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="room-buttons">
                                    <a href="booking-page.php" class="btn btn-primary" style="border-radius:0px; background-color:black; border: black;">Book Now</a>
                                    <a href="room-deluxe-details.php" class="btn btn-secondary"style="border-radius:0px; background-color:black; border: black;">View Details</a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Additional Room 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <a href="room-deluxe-1.php">
                            <img src="./img/room/Deluxe/Del3.jpg" alt="" style="height:218px;">
                            <div class="ri-text">
                                <h4>Room Deluxe 1</h4>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td>32m²</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>Max person 2</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed:</td>
                                            <td>King Bed</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>Wifi, Television, Bathroom,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="room-buttons">
                                    <a href="booking-page.php" class="btn btn-primary" style="border-radius:0px; background-color:black; border: black;">Book Now</a>
                                    <a href="room-deluxe-details.php" class="btn btn-secondary"style="border-radius:0px; background-color:black; border: black;">View Details</a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Additional Room 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <a href="room-deluxe-2.php">
                            <img src="./img/room/Deluxe/Del4.jpg" alt="" style="height:218px;">
                            <div class="ri-text">
                                <h4>Room Deluxe 2</h4>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td>32m²</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>Max person 2</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed:</td>
                                            <td>King Bed</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>Wifi, Television, Bathroom,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="room-buttons">
                                    <a href="booking-page.php" class="btn btn-primary" style="border-radius:0px; background-color:black; border: black;">Book Now</a>
                                    <a href="room-deluxe-details.php" class="btn btn-secondary"style="border-radius:0px; background-color:black; border: black;">View Details</a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Additional Row 1 -->
            <div class="row">
                <!-- Additional Room 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <a href="room-deluxe-3.php">
                            <img src="./img/room/Deluxe/Del5.jpg" alt="" style="height:218px;">
                            <div class="ri-text">
                                <h4>Room Deluxe 3</h4>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td>32m²</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>Max person 2</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed:</td>
                                            <td>King Bed</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>Wifi, Television, Bathroom,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="room-buttons">
                                    <a href="booking-page.php" class="btn btn-primary" style="border-radius:0px; background-color:black; border: black;">Book Now</a>
                                    <a href="room-deluxe-details.php" class="btn btn-secondary"style="border-radius:0px; background-color:black; border: black;">View Details</a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Additional Room 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <a href="room-deluxe-4.php">
                            <img src="./img/room/Deluxe/Del6.jpg" alt="" style="height:218px;">
                            <div class="ri-text">
                                <h4>Room Deluxe 4</h4>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td>32m²</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>Max person 2</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed:</td>
                                            <td>King Bed</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>Wifi, Television, Bathroom,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="room-buttons">
                                    <a href="booking-page.php" class="btn btn-primary" style="border-radius:0px; background-color:black; border: black;">Book Now</a>
                                    <a href="room-deluxe-details.php" class="btn btn-secondary"style="border-radius:0px; background-color:black; border: black;">View Details</a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>


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
                                    style="background-color: white; color: black; border-radius: 0;">
                                    <i class="fa fa-send"></i>
                                </button>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <a href="tel:+ 0987654321" class="call-button" style="color: white;">
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
        <div class="h-100 d-flex align-items-center
                    justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Tìm
                            kiếm....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <script>

    </script>
</body>

</html>