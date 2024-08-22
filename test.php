<?php
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

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['search'])) {
    $phone = sanitize_input($_GET['search']);
    
    // Prepare and execute SQL statement
    $sql = "SELECT * FROM bangDatPhong WHERE soDienThoai = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $phone);
    $stmt->execute();
    $result = $stmt->get_result();
    
    // Check if any results were returned
    if ($result->num_rows > 0) {
        echo "<h2>Booking History for Phone Number: " . htmlspecialchars($phone) . "</h2>";
        echo "<table border='1'>
                <tr>
                    <th>Booking Reference</th>
                    <th>Full Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Organization Type</th>
                    <th>Number of People</th>
                    <th>Number of Rooms</th>
                    <th>Check-in Date</th>
                    <th>Check-out Date</th>
                    <th>Message</th>
                    <th>Room Type</th>
                </tr>";
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . htmlspecialchars($row['maDatPhong']) . "</td>
                    <td>" . htmlspecialchars($row['hoTen']) . "</td>
                    <td>" . htmlspecialchars($row['soDienThoai']) . "</td>
                    <td>" . htmlspecialchars($row['email']) . "</td>
                    <td>" . htmlspecialchars($row['loaiToChuc']) . "</td>
                    <td>" . htmlspecialchars($row['soNguoi']) . "</td>
                    <td>" . htmlspecialchars($row['soPhong']) . "</td>
                    <td>" . htmlspecialchars($row['ngayCheckIn']) . "</td>
                    <td>" . htmlspecialchars($row['ngayCheckOut']) . "</td>
                    <td>" . htmlspecialchars($row['tinNhan']) . "</td>
                    <td>" . htmlspecialchars($row['loaiPhong']) . "</td>
                </tr>";
        }
        
        echo "</table>";
    } else {
        echo "<p>No bookings found for this phone number.</p>";
    }

    $stmt->close();
}

// Close the connection
$conn->close();
?>
<form action="test.php" method="GET" class="contact-form">
                        <h2>Lịch sử đặt</h2>
                        <br>
                        <label for="search-input">Nhập số điện thoại:</label>
                        <input type="text" name="search" id="search-input" required>
                        <p style="color:red; padding:5px;">Ghi chú: Nếu bạn trên giao diện điện thoại hãy lướt về bên phải để xem thêm
                            <br>
                            Nhập số điện thoại để tìm lịch sử đặt
                        </p>
                        <button type="submit" style="border: none;">TÌM KIẾM</button>
                        <button style="border: none;" type="reset" onclick="hideTable()">LÀM MỚI</button>
                    </form>