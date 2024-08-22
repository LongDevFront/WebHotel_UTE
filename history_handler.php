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
    
    // Output HTML
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Booking History</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f4f4f4;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .container {
                background-color: #ffffff;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                padding: 20px;
                width: 90%;
                max-width: 1200px;
                overflow-x: auto;
            }
            h2 {
                text-align: center;
                color: #333;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin: 20px 0;
            }
            th, td {
                border: 1px solid #ddd;
                padding: 12px;
                text-align: left;
            }
            th {
                background-color: #f4f4f4;
                color: #333;
            }
            tr:nth-child(even) {
                background-color: #f9f9f9;
            }
            tr:hover {
                background-color: #f1f1f1;
            }
            button {
                background-color: #000;
                color: white;
                border: none;
                padding: 10px 20px;
                font-size: 16px;
                
                cursor: pointer;
                margin: 10px;
            }
        
            @media (max-width: 768px) {
                table {
                    font-size: 14px;
                }
                button {
                    font-size: 14px;
                    padding: 8px 16px;
                }
            }
        </style>
    </head>
    <body>
        <div class="container">';
        
    // Check if any results were returned
    if ($result->num_rows > 0) {
        echo "<h2>Booking History for Phone Number: " . htmlspecialchars($phone) . "</h2>";
        echo "<table>
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
        echo "<p style='text-align:center;'>No bookings found for this phone number.</p>";
    }

    $stmt->close();

    echo '<div style="text-align:center;">
            <a href="history.php"><button>Back to History</button></a>
          </div>
        </div>
    </body>
    </html>';

    // Close the connection
    $conn->close();
}
?>
