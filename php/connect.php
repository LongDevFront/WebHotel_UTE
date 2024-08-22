<?php
$servername = "localhost"; // Địa chỉ máy chủ cơ sở dữ liệu
$username = "root";        // Tên người dùng cơ sở dữ liệu
$password = "";            // Mật khẩu cơ sở dữ liệu
$dbname = "HOTEL365";      // Tên cơ sở dữ liệu

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
} 
echo "Kết nối thành công!";

// Đóng kết nối
$conn->close();
?>
