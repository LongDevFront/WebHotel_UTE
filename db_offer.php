<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "HOTEL365";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendMail($userEmail) {
    $mail = new PHPMailer(true);
    
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'long.lequang308@gmail.com'; // Your email address
        $mail->Password = 'tzdaorjlivxbkans'; // Your application password
        $mail->Port = 465;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

        // Email content for the admin
        $mail->isHTML(true);
        $mail->setFrom('long.lequang308@gmail.com', 'Hotel365');
        $mail->addAddress('long.lequang308@gmail.com'); // Admin email
        $mail->Subject = 'New Offer Subscription';
        $mail->Body = '<p>A new user has subscribed to the offer.</p>
                       <p>User Email: ' . htmlspecialchars($userEmail) . '</p>';

        $mail->send();

        // Email content for the user
        $mail->clearAddresses();
        $mail->addAddress($userEmail);
        $mail->Subject = 'Offer Subscription Confirmation';
        $mail->Body = '<p>Thank you for subscribing to our offers!</p>
                       <p>You have successfully subscribed to receive offers from us.</p>';

        $mail->send();
        
        return '<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông báo gửi email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
            background: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #4CAF50;
        }
        p {
            color: #555;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            font-size: 16px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thông báo</h1>
        <p>Bạn đã đăng ký thành công</p>
        <a href="index.php" class="btn">Quay lại trang chính</a>
    </div>
</body>
</html>
';
    } catch (Exception $e) {
        return "Email sending failed. Mailer Error: {$mail->ErrorInfo}";
    }
}

// Hàm chèn email vào cơ sở dữ liệu
function bangDauGia($email) {
    global $conn;
    
    // Chuẩn bị câu lệnh SQL để chèn email vào bảng offers
    $sql = "INSERT INTO bangDauGia (email) VALUES (?)";
    
    // Sử dụng Prepared Statement để bảo vệ chống SQL Injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    
    // Thực thi câu lệnh và kiểm tra kết quả
    if ($stmt->execute()) {
        return sendMail($email);
    } else {
        return "Lỗi: " . $stmt->error;
    }
    
    // Đóng câu lệnh
    $stmt->close();
}

// Kiểm tra nếu form đã submit
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['send'])) {
    $email = filter_var($_POST['mail_getoffer'], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = bangDauGia($email);
        echo $message;
    } else {
        echo "Địa chỉ email không hợp lệ.";
    }
}

// Đóng kết nối cơ sở dữ liệu
$conn->close();
?>
