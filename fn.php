<?php
// ฟังก์ชันสำหรับสร้างค่าเลข auto
function autoID($id) {
    $len = strlen($id);
    switch ($len) {
        case 1: $id = "000" . $id;
            break;
        case 2: $id = "00" . $id;
            break;
        case 3: $id = "0" . $id;
            break;
    }
    $year = substr((date("Y") + 543), 2);
    $month = date("m");
    return $year . $month . $id;
}

// ข้อมูลการเชื่อมต่อกับฐานข้อมูล
$db_host = "db";
$db_user = "root";
$db_password = "MYSQL_ROOT_PASSWORD";
$db_name = "lertluck";

try {
    $db = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "การเชื่อมต่อล้มเหลว: " . $e->getMessage();
}

// อ่านค่าปัจจุบันในคอลัมน์ "fn"
$sql_get_current_fn = "SELECT fn FROM db_op ORDER BY fn DESC LIMIT 1";
$statement = $db->prepare($sql_get_current_fn);
$statement->execute();
$row = $statement->fetch(PDO::FETCH_ASSOC);

if ($row) {
    $current_fn = $row["fn"];
    $new_fn = (int)$current_fn + 1;
} else {
    // หากไม่มีค่าในตารางเลย ให้เริ่มที่ 1
    $new_fn = "00001";
}

// เพิ่มค่าเลข auto ลงในคอลัมน์ "fn" ของตาราง SQL
$sql = "INSERT INTO db_op (fn) VALUES (:new_fn)";
$statement = $db->prepare($sql);
$statement->bindParam(":new_fn", $new_fn, PDO::PARAM_STR);
$statement->execute();

echo "บันทึกค่าเลข auto เรียบร้อย: $new_fn";

// ปิดการเชื่อมต่อกับฐานข้อมูล
$db = null;
?>
