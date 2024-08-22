<?php
session_start(); // Start the session at the beginning of the script

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Kết nối cơ sở dữ liệu
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

// Hàm gửi email
function sendContactMail($name, $email, $message) {
    $mail = new PHPMailer(true);
    
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'long.lequang308@gmail.com'; // Your email address
        $mail->Password = 'tzdaorjlivxbkans'; // Your application password
        $mail->Port = 465; // SMTP port
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Use SSL

        // Email content for the admin
        $mail->isHTML(true);
        $mail->setFrom('long.lequang308@gmail.com', 'Hotel365');
        $mail->addAddress('long.lequang308@gmail.com'); // Admin email
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = '<p>You have received a new message from your website contact form.</p>
                       <p><strong>Name:</strong> ' . htmlspecialchars($name) . '</p>
                       <p><strong>Email:</strong> ' . htmlspecialchars($email) . '</p>
                       <p><strong>Message:</strong><br>' . nl2br(htmlspecialchars($message)) . '</p>';

        $mail->send();

        // Optionally, send a confirmation email to the user
        $mail->clearAddresses(); // Clear previous addresses
        $mail->addAddress($email); // User email
        $mail->Subject = 'Contact Form Submission Confirmation';
        $mail->Body = '<p>Thank you for reaching out to us!</p>
                       <p>Your message has been received, and we will get back to you shortly.</p>';

        $mail->send();
        
        return "Email sent successfully!";
    } catch (Exception $e) {
        return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

// Hàm chèn dữ liệu vào cơ sở dữ liệu
function bangLienHe($hoTen, $email, $tinNhan) {
    global $conn;
    
    // Chuẩn bị câu lệnh SQL để chèn dữ liệu vào bảng bangLienHe
    $sql = "INSERT INTO bangLienHe (hoTen, email, tinNhan) VALUES (?, ?, ?)";
    
    // Sử dụng Prepared Statement để bảo vệ chống SQL Injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $hoTen, $email, $tinNhan);
    
    // Thực thi câu lệnh và kiểm tra kết quả
    if ($stmt->execute()) {
        return "Message successfully saved!";
    } else {
        return "Error: " . $stmt->error;
    }
    
    // Đóng câu lệnh
    $stmt->close();
}

// Biến để lưu thông báo
$message = "";

// Kiểm tra nếu form đã submit
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $hoTen = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $tinNhan = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    // Xác thực email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Gọi hàm để chèn dữ liệu vào cơ sở dữ liệu
        $dbMessage = bangLienHe($hoTen, $email, $tinNhan);
        // Gọi hàm để gửi email
        $emailMessage = sendContactMail($hoTen, $email, $tinNhan);
        $message = $dbMessage . " " . $emailMessage;

        // Store message in session and redirect to contact.php
        $_SESSION['contact_message'] = $message;
        header("Location: contact.php");
        exit(); // Make sure to call exit after redirect
    } else {
        $message = "Invalid email address.";
    }
}

// Đóng kết nối cơ sở dữ liệu
$conn->close();
?>
