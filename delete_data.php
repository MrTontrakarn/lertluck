<?php
require_once('connection.php');

$id = $_POST['id'];

// ตรวจสอบและลบข้อมูลจากฐานข้อมูล
$sql = "DELETE FROM db_op WHERE id = :id";
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

if ($stmt->execute()) {
    // ส่งการตอบรับกลับไปยัง JavaScript
    echo "ลบข้อมูลเรียบร้อย";
} else {
    echo "เกิดข้อผิดพลาดในการลบข้อมูล";
}
?>
