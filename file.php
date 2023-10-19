<?php
// กำหนดที่ตั้งฐานข้อมูล SQLite
$dbPath = 'mydatabase.sqlite';

// เชื่อมต่อกับฐานข้อมูล SQLite
$db = new SQLite3($dbPath);

// สร้างตาราง db_op ถ้ายังไม่มี
$query = "CREATE TABLE IF NOT EXISTS db_op (id INTEGER PRIMARY KEY, fn TEXT)";
$db->exec($query);

// ดึงค่ารหัส FN ค่าเดิมจากตาราง "db_op" ในฐานข้อมูล SQLite
$query = "SELECT MAX(fn) AS max_fn FROM db_op";
$result = $db->query($query);
if ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    $currentFn = $row['max_fn'];
    if ($currentFn === null) {
        $currentFn = 0; // หากไม่มีค่าในตารางให้ใช้ค่าเริ่มต้น
    }
} else {
    $currentFn = 0;
}

// คำนวณค่ารหัส FN ใหม่โดยเพิ่ม 1 จากค่าเดิม
$newFnValue = $currentFn + 1;

// สร้างรหัส FN ในรูปแบบ 66YYMMX
$year = date('y'); // คำนวณปีในรูปแบบสองหลัก (YY)
$month = date('m'); // คำนวณเดือนในรูปแบบสองหลัก (MM)
$newFn = "66" . $year . $month . $newFnValue;

// บันทึกค่ารหัส FN ใหม่ลงในตาราง "db_op" ในฐานข้อมูล SQLite
$stmt = $db->prepare('INSERT INTO db_op (fn) VALUES (:newFn)');
$stmt->bindValue(':newFn', $newFn, SQLITE3_TEXT);
$stmt->execute();

// ปิดการเชื่อมต่อฐานข้อมูล
$db->close();

// แสดงค่ารหัส FN ใหม่ในฟอร์ม HTML
?>

