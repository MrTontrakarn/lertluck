<?php
// ติดต่อกับฐานข้อมูลของคุณ และดึงข้อมูล SQL จากตาราง nmod
$servername = "db";
$username = "root";
$password = "MYSQL_ROOT_PASSWORD";
$dbname = "lertluck";

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
}

// คำสั่ง SQL สำหรับดึงข้อมูล nmod จากฐานข้อมูล
$sql = "SELECT nmod FROM db_op"; // เปลี่ยน your_table_name เป็นชื่อตารางที่เก็บข้อมูล nmod
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
} else {
    echo json_encode(array()); // ไม่พบข้อมูล
}

$conn->close();
?>
