<?php
// การเชื่อมต่อฐานข้อมูล
try {
    $db = new PDO('mysql:host=localhost;dbname=lertluck', 'root', 'MYSQL_ROOT_PASSWORD');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'เกิดข้อผิดพลาดในการเชื่อมต่อฐานข้อมูล: ' . $e->getMessage();
}


// การรับค่าที่ส่งมาจาก AJAX
$selectedValue = $_POST['selectedValue'];

// สร้างและประมวลผลข้อมูลตามค่าที่รับมาจาก AJAX
// ตัวอย่างการเรียกข้อมูลจากฐานข้อมูลแล้วส่งออกมาเป็น HTML
$query = "SELECT * FROM db_op WHERE new_ptc = :selectedValue";
$stmt = $db->prepare($query);
$stmt->bindParam(':selectedValue', $selectedValue);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $result) {
    echo '<div>' . $result['new_ptc'] . '</div>';
}
?>
