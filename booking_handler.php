<?php
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "HOTEL365";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Sanitize input function
function sanitize_input($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['send'])) {
    // Sanitize form inputs
    $fullname = sanitize_input($_POST['fullname']);
    $phone = sanitize_input($_POST['phone']);
    $email = sanitize_input($_POST['email']);
    $address = sanitize_input($_POST['address']);
    $room_type = sanitize_input($_POST['room_type']);
    $organization_type = sanitize_input($_POST['Organization_type']);
    $number = sanitize_input($_POST['number']);
    $numberRoom = sanitize_input($_POST['numberRoom']);
    $checkin = sanitize_input($_POST['checkin']);
    $checkout = sanitize_input($_POST['checkout']);
    $message = sanitize_input($_POST['message']);

    // Generate booking reference number
    $maDatPhong = str_pad(rand(1, 99999999), 8, '0', STR_PAD_LEFT);

    // Prepare SQL statement
    $sql = "INSERT INTO bangDatPhong (maDatPhong, hoTen, soDienThoai, email, loaiToChuc, soNguoi, soPhong, ngayCheckIn, ngayCheckOut, tinNhan, loaiPhong)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssss", $maDatPhong, $fullname, $phone, $email, $organization_type, $number, $numberRoom, $checkin, $checkout, $message, $room_type);

    // Execute SQL statement
    $dbMessage = $stmt->execute() ? "Booking successfully added!" : "Database Error: " . $stmt->error;

    $stmt->close();

    // Send email
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

        // Admin email content
        $mail->isHTML(true);
        $mail->setFrom('long.lequang308@gmail.com', 'Hotel365');
        $mail->addAddress('long.lequang308@gmail.com'); // Admin email
        $mail->Subject = 'New Booking Request from ' . htmlspecialchars($fullname);
        $mail->Body = "<p>You have received a new booking request.</p>
                       <p><strong>Full Name:</strong> " . htmlspecialchars($fullname) . "</p>
                       <p><strong>Phone:</strong> " . htmlspecialchars($phone) . "</p>
                       <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
                       <p><strong>Address:</strong> " . htmlspecialchars($address) . "</p>
                       <p><strong>Room Type:</strong> " . htmlspecialchars($room_type) . "</p>
                       <p><strong>Organization Type:</strong> " . htmlspecialchars($organization_type) . "</p>
                       <p><strong>Number of People:</strong> " . htmlspecialchars($number) . "</p>
                       <p><strong>Number of Rooms:</strong> " . htmlspecialchars($numberRoom) . "</p>
                       <p><strong>Check-in Date:</strong> " . htmlspecialchars($checkin) . "</p>
                       <p><strong>Check-out Date:</strong> " . htmlspecialchars($checkout) . "</p>
                       <p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>";
        $mail->send();

        // User confirmation email
        $mail->clearAddresses();
        $mail->addAddress($email); // User email
        $mail->Subject = 'Booking Request Confirmation';
        $mail->Body = "<p>Thank you for your booking request!</p>
                       <p>We have received your request and will contact you shortly to confirm your booking.</p>
                       <p><strong>Your Booking Details:</strong></p>
                       <p><strong>Full Name:</strong> " . htmlspecialchars($fullname) . "</p>
                       <p><strong>Phone:</strong> " . htmlspecialchars($phone) . "</p>
                       <p><strong>Room Type:</strong> " . htmlspecialchars($room_type) . "</p>
                       <p><strong>Check-in Date:</strong> " . htmlspecialchars($checkin) . "</p>
                       <p><strong>Check-out Date:</strong> " . htmlspecialchars($checkout) . "</p>";
        $mail->send();

        // Display success message
        echo "Booking request sent successfully!";
    } catch (Exception $e) {
        echo "Failed to send booking request. Mailer Error: {$mail->ErrorInfo}";
    }

    $conn->close();
} else {
    // Redirect to the form page if the request method is not POST
    header("Location: index.php");
    exit();
}
?>
