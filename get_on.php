<?php
// รับค่า new_ptc ที่ถูกส่งมาจาก JavaScript
$Newnmod = $_GET['nmod'];

// ติดต่อกับฐานข้อมูลของคุณ และดึงข้อมูลโดยใช้ค่า new_ptc
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

// คำสั่ง SQL สำหรับดึงข้อมูลโดยใช้ค่า new_ptc
$sql = "SELECT note ,details ,details_v1, details_v2, details_v3, details_v4, details_v5, details_v6, details_v7, details_v8, details_v9, details_v10,  
    details_v11, details_v12, details_v13, details_v14, details_v15, details_v16, details_v17, details_v18, details_v19, details_v20,
    details_v21, details_v22, details_v23, details_v24, details_v25, details_v26, details_v27, details_v28, details_v29,
    nmdetails1, nmdetails2, nmdetails3, nmdetails4, nmdetails5, nmdetails6, nmdetails7, nmdetails8, nmdetails9, nmdetails10, 
    nmdetails11 , nmdetails12, nmdetails13, nmdetails14, nmdetails15, nmdetails16, nmdetails17, nmdetails18, nmdetails19, nmdetails20,
    nmdetails21, nmdetails22, nmdetails23, nmdetails24, nmdetails25, nmdetails26, nmdetails27, nmdetails28, nmdetails29,
    detv1, detv2, detv3, detv4, detv5, detv6, detv7, detv8, detv9, detv10,  
    detv11, detv12, detv13, detv14, detv15, detv16, detv17, detv18, detv19, detv20,
    detv21, detv22, detv23, detv24, detv25, detv26, detv27, detv28, detv29, 
    size_details1, size_details2, size_details3, size_details4, size_details5, size_details6, size_details7, size_details8, size_details9, size_details10, size_details11, size_details12, size_details13, size_details14, size_details15, 
    ss1, ss2, ss3, ss4, ss5, ss6, ss7, ss8, ss9, ss10, ss11, ss12, ss13, ss14, ss15, 
    s1, s2, s3, s4, s5, s6, s7, s8, s9, s10, s11, s12, s13, s14, s15,  
    m1, m2, m3, m4, m5, m6, m7, m8, m9, m10, m11, m12, m13, m14, m15,  
    l1, l2, l3, l4, l5, l6, l7, l8, l9, l10, l11, l12, l13, l14, l15, 
    xl1, xl2, xl3, xl4, xl5, xl6, xl7, xl8, xl9, xl10, xl11, xl12, xl13, xl14, xl15,  
    xl21, xl22, xl23, xl24, xl25, xl26, xl27, xl28, xl29, xl210, xl211, xl212, xl213, xl214, xl215, 
    xl31, xl32, xl33, xl34, xl35, xl36, xl37, xl38, xl39, xl310, xl311, xl312, xl313, xl314, xl315,  
    xl41, xl42, xl43, xl44, xl45, xl46, xl47, xl48, xl49, xl410, xl411, xl412, xl413, xl414, xl415,  
    xl51, xl52, xl53, xl54, xl55, xl56, xl57, xl58, xl59, xl510, xl511, xl512, xl513, xl514, xl515,  
    xl61, xl62, xl63, xl64, xl65, xl66, xl67, xl68, xl69, xl610, xl611, xl612, xl613, xl614, xl615,  
    xl71, xl72, xl73, xl74, xl75, xl76, xl77, xl78, xl79, xl710, xl711, xl712, xl713, xl714, xl715
    FROM db_op WHERE nmod = '$Newnmod'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
    echo json_encode($data);
} else {
    echo json_encode(array());
}

$conn->close();
?>
