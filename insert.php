<?php
include 'connection.php';
// ตรวจสอบว่ามีการส่งไฟล์รูปภาพมาหรือไม่
if(isset($_FILES['image'])){
    $file_name = $_FILES['image']['name']; // ชื่อไฟล์ที่อัพโหลด
    $file_temp = $_FILES['image']['tmp_name']; // ชื่อไฟล์ชั่วคราวที่อัพโหลด
    $file_size = $_FILES['image']['size']; // ขนาดของไฟล์

    // ตรวจสอบว่าไฟล์ที่อัพโหลดเป็นรูปภาพหรือไม่
    $file_type = pathinfo($file_name, PATHINFO_EXTENSION);
    $allowed_types = array("jpg", "jpeg", "png", "gif");

    if(!in_array($file_type, $allowed_types)){
        echo "เฉพาะไฟล์รูปภาพเท่านั้นที่อนุญาตให้อัพโหลด";
    } else {
        // กำหนดโฟลเดอร์ที่จะบันทึกรูปภาพ
        $upload_directory = "uploaded_img/";
        // สร้างชื่อไฟล์ใหม่เพื่อป้องกันชื่อซ้ำ
        $new_file_name = uniqid() . "." . $file_type;
        // กำหนดพาธเต็มของไฟล์ที่จะบันทึก
        $upload_path = $upload_directory . $new_file_name;
        // อัพโหลดไฟล์ไปยังโฟลเดอร์ที่กำหนด
        if(move_uploaded_file($file_temp, $upload_path)){
            echo "อัพโหลดรูปภาพสำเร็จ";
        } else {
            echo "เกิดข้อผิดพลาดในการอัพโหลดรูปภาพ";
        }
    }
}
?>
