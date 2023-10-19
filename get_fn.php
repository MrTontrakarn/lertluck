<?php
// เชื่อมต่อกับฐานข้อมูล MySQL
$servername = "db";
$username = "root";
$password = "MYSQL_ROOT_PASSWORD";
$database = "lertluck";

$conn = new mysqli($servername, $username, $password, $database);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("การเชื่อมต่อฐานข้อมูลล้มเหลว: " . $conn->connect_error);
}

// ตรวจสอบว่ามีการเรียกหน้า add.php หรือไม่
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btn_insert"])) {
    // ทำการเพิ่มข้อมูลลงในฐานข้อมูล ณ ที่นี้

    // ทำการอัปเดตคอลัมน์ fn ในฐานข้อมูล
    $sql = "UPDATE db_op SET fn = fn + 1";
    if ($conn->query($sql) === TRUE) {
        echo "อัปเดตคอลัมน์ fn สำเร็จ";
    } else {
        echo "เกิดข้อผิดพลาดในการอัปเดตคอลัมน์ fn: " . $conn->error;
    }
}

// ปิดการเชื่อมต่อฐานข้อมูล
$conn->close();
?>
