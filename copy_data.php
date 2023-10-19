<?php
$servername = "db";
$username = "root";
$password = "MYSQL_ROOT_PASSWORD";
$dbname = "lertluck";

try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "การเชื่อมต่อล้มเหลว: " . $e->getMessage();
}

// ตรวจสอบการเชื่อมต่อ
if (isset($_POST['copy_id'])) {
    $idToCopy = $_POST['copy_id'];

    // เรียกใช้คำสั่ง SQL เพื่อคัดลอกข้อมูลจากแถวที่มี ID เท่ากับ $idToCopy
                $copySQL = "INSERT INTO db_op (name_op, new_ptc, fn, timeing, 
                    size_v1, size_v2, size_v3, size_v4, size_v5, size_v6, size_v7, size_v8, 
                    on_pdv1, on_pdv2, on_pdv3, on_pdv4, on_pdv5, on_pdv6, on_pdv7, on_pdv8, 
                    od_v1, od_v2, od_v3, od_v4, od_v5, od_v6, od_v7, od_v8, 
                    if_v1, if_v2, if_v3, if_v4, if_v5, if_v6, if_v7, if_v8, 
                    mer_v1, mer_v2, mer_v3, mer_v4, mer_v5, mer_v6, mer_v7, mer_v8, 
                    cut_v1, cut_v2, cut_v3, cut_v4, cut_v5, cut_v6, cut_v7, cut_v8, 
                    cuttrue_v1, cuttrue_v2, cuttrue_v3, cuttrue_v4, cuttrue_v5, cuttrue_v6, cuttrue_v7, cuttrue_v8, 
                    result_v1, result_v2, result_v3, result_v4, result_v5, result_v6, 
                    details, details_v1, details_v2, details_v3, details_v4, details_v5, details_v6, details_v7, details_v8, 
                    detv1, detv2, detv3, detv4, detv5, detv6, detv7, detv8, 
                    pin1, pin2, pack1, pack2, 
                    note, image, 
                    ss1, ss2, ss3, ss4, ss5, ss6, ss7, 
                    s1, s2, s3, s4, s5, s6, s7, 
                    m1, m2, m3, m4, m5, m6, m7, 
                    l1, l2, l3, l4, l5, l6, l7,
                    xl1, xl2, xl3, xl4, xl5, xl6, xl7, 
                    xl21, xl22, xl23, xl24, xl25, xl26, xl27,
                    xl31, xl32, xl33, xl34, xl35, xl36, xl37)
                SELECT name_op, new_ptc, fn, timeing, 
                    size_v1, size_v2, size_v3, size_v4, size_v5, size_v6, size_v7, size_v8, 
                    on_pdv1, on_pdv2, on_pdv3, on_pdv4, on_pdv5, on_pdv6, on_pdv7, on_pdv8, 
                    od_v1, od_v2, od_v3, od_v4, od_v5, od_v6, od_v7, od_v8, 
                    if_v1, if_v2, if_v3, if_v4, if_v5, if_v6, if_v7, if_v8, 
                    mer_v1, mer_v2, mer_v3, mer_v4, mer_v5, mer_v6, mer_v7, mer_v8, 
                    cut_v1, cut_v2, cut_v3, cut_v4, cut_v5, cut_v6, cut_v7, cut_v8, 
                    cuttrue_v1, cuttrue_v2, cuttrue_v3, cuttrue_v4, cuttrue_v5, cuttrue_v6, cuttrue_v7, cuttrue_v8, 
                    result_v1, result_v2, result_v3, result_v4, result_v5, result_v6, 
                    details, details_v1, details_v2, details_v3, details_v4, details_v5, details_v6, details_v7, details_v8, 
                    detv1, detv2, detv3, detv4, detv5, detv6, detv7, detv8, 
                    pin1, pin2, pack1, pack2, 
                    note, image, 
                    ss1, ss2, ss3, ss4, ss5, ss6, ss7, 
                    s1, s2, s3, s4, s5, s6, s7, 
                    m1, m2, m3, m4, m5, m6, m7, 
                    l1, l2, l3, l4, l5, l6, l7,
                    xl1, xl2, xl3, xl4, xl5, xl6, xl7, 
                    xl21, xl22, xl23, xl24, xl25, xl26, xl27,
                    xl31, xl32, xl33, xl34, xl35, xl36, xl37
                FROM db_op
                WHERE id = :idToCopy";
    
    $copyStmt = $db->prepare($copySQL);
    $copyStmt->bindParam(':idToCopy', $idToCopy);
    
    if ($copyStmt->execute()) {
        // คัดลอกข้อมูลสำเร็จ
        header('Location: index.php'); // แสดงหน้ารายการหลักหลังจากคัดลอกข้อมูลเรียบร้อย
    } else {
        // เกิดข้อผิดพลาดในการคัดลอก
        echo "เกิดข้อผิดพลาดในการคัดลอกข้อมูล: " . $db->errorInfo()[2];
    }
}
