<?php

require_once __DIR__ . '/vendor/autoload.php';


// การเชื่อมต่อฐานข้อมูล MySQL
$host = 'db';
$username = 'root';
$password = 'MYSQL_ROOT_PASSWORD';
$database = 'lertluck';

$mysqli = new mysqli($host, $username, $password, $database);



// ตรวจสอบการเชื่อมต่อฐานข้อมูล
if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

// รับไอดีที่คุณต้องการดึงข้อมูล
$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($id !== null) {
    $sql = "SELECT * FROM db_op WHERE id = $id";

    $result = $mysqli->query($sql);
    $defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
    $fontDirs = $defaultConfig['fontDir'];

    $defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
    $fontData = $defaultFontConfig['fontdata'];

    $mpdf = new \Mpdf\Mpdf([
        'fontDir' => array_merge($fontDirs, [
            __DIR__ . '/tmp',
        ]),
        'fontdata' => $fontData + [
            'sarabun' => [
                'R' => 'THSarabunNew.ttf',
                'I' => 'THSarabunNew Italic.ttf',
                'B' => 'THSarabunNew Bold.ttf',
                'BI'=> 'THSarabunNew BoldItalic.ttf'
            ]
        ],
        'default_font' => 'sarabun'
    ]);



    // ตรวจสอบว่ามีข้อมูลหรือไม่
    if ($result->num_rows > 0) {
        // รับข้อมูลแถวเดียว
        $row = $result->fetch_assoc();


        // เริ่มการสร้างเอกสาร HTML
        ob_start();
        ?>

        <!DOCTYPE html>
        <html lang="th">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>ใบสั่งผลิต</title>
            <link rel="stylesheet" href="styletwo.css">
            <!-- ส่วนของ CSS หรือสไตล์ -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">
            <style>
                body{
                    font-family: 'Sarabun', sans-serif;
                }
            </style>
        </head>
        <body>

        <table class="table" style="background-color: black;">
        <thead>
                <tr>
                <th class="text-center" style="font-size: 25px;" colspan="3">
                    ชื่องาน : <?php echo $row['name_op']; ?>
                </th>
                </tr>
                <tr>
                    <th class="text-center" style="width: 50%; font-size: 25px; text-align: center;">NEW PTC :&nbsp;<?php echo $row['new_ptc']; ?></th>
                    <th class="text-center" style="width: 50%; font-size: 25px; text-align: center;">กำหนดส่ง :&nbsp;<?php echo $row['timeing']; ?></th>
                    <th class="text-center" style="width: 25%; text-align: center; text-align: center;" rowspan="2">
                    <img src="upload/<?php echo $row['image']; ?>" alt="รูปภาพ" style="max-width: 200px; max-height: 200px; float: center;"></th>
                </tr>
                <tr>
                    <th class="text-center" style="width: 50%; font-size: 25px; text-align: center;">FN :&nbsp;<?php echo $row['fn']; ?></th>
                    <th class="text-center" style="width: 50%; font-size: 25px; text-align: center;">KS :&nbsp;<?php echo $row['ks']; ?></th>
                </tr>
        </thead>
    </table>
    
    <div class="container">
        <div class="table-responsive">
        <h3>ORDER</h3>
            <table class="table table-striped">  
                <thead>
                    <tr>
                        <td class="text-center" style="font-size: larger; color: black; text-align: center;">Size</td>
                        <td class="text-center" style="font-size: larger; color: black; width: 20%; text-align: center;">รหัสสินค้า</td>
                        <td class="text-center" style="font-size: larger; color: black; text-align: center;">ORDER</td>
                        <td class="text-center" style="font-size: larger; color: black; text-align: center;">เผื่อ</td>
                        <td class="text-center" style="font-size: larger; color: black; text-align: center;">รวมส่งผลิต</td>
                        <td class="text-center" style="font-size: larger; color: black; text-align: center;">ตัดได้จริง</td>
                    </tr>
                </thead>
                

                <tbody>
                <tr style="height: 30px;">
                    <td style="width: 30px; text-align: center;"><?php echo $row['size_v1']; ?></td>
                    <td style="width: 30px; text-align: center;"><?php echo $row['on_pdv1']; ?></td>
                    <td style="width: 30px; text-align: center;"><?php echo $row['od_v1']; ?></td>
                    <td style="width: 30px; text-align: center;"><?php echo $row['if_v1']; ?></td>
                    <td style="width: 30px; text-align: center;"><?php echo $row['cut_v1']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v1']; ?></td>
                    
                </tr>

                <tr style="height: 50px;">
                    <td style="width: 80px; text-align: center;"><?php echo $row['size_v2']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['on_pdv2']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['od_v2']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['if_v2']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cut_v2']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v2']; ?></td>
                </tr>

                <!-- ตั้งแต่ v3 ถึง v8 ให้ทำการคัดลอกแบบนี้และแก้ไขค่าตามลำดับ -->
                <tr style="height: 50px;">
                    <td style="width: 80px; text-align: center;"><?php echo $row['size_v3']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['on_pdv3']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['od_v3']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['if_v3']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cut_v3']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v3']; ?></td>
                     
                </tr>

                <tr style="height: 50px;">
                    <td style="width: 80px; text-align: center;"><?php echo $row['size_v4']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['on_pdv4']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['od_v4']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['if_v4']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cut_v4']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v4']; ?></td>
                </tr>

                <tr style="height: 50px;">
                    <td style="width: 80px; text-align: center;"><?php echo $row['size_v5']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['on_pdv5']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['od_v5']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['if_v5']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cut_v5']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v5']; ?></td>
                </tr>

                <tr style="height: 50px;">
                    <td style="width: 80px; text-align: center;"><?php echo $row['size_v6']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['on_pdv6']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['od_v6']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['if_v6']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cut_v6']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v6']; ?></td>
                </tr>

                <tr style="height: 50px;">
                    <td style="width: 80px; text-align: center;"><?php echo $row['size_v7']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['on_pdv7']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['od_v7']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['if_v7']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cut_v7']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v7']; ?></td>
                </tr>

                <tr style="height: 50px;">
                    <td style="width: 80px; text-align: center;"><?php echo $row['size_v8']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['on_pdv8']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['od_v8']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['if_v8']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cut_v8']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v8']; ?></td>
                </tr>

                <tr style="height: 50px;">
                    <td style="width: 80px; text-align: center;"><?php echo $row['size_v9']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['on_pdv9']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['od_v9']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['if_v9']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cut_v9']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v9']; ?></td>
                </tr>
                <tr style="height: 50px;">
                    <td style="width: 80px; text-align: center;"><?php echo $row['size_v10']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['on_pdv10']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['od_v10']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['if_v10']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cut_v10']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v10']; ?></td>
                </tr>
                <tr>
                    <td style="width: 80px; text-align: center;">รวม</td>
                    <td style="width: 80px; text-align: center;"></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['result_v2']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['result_v1']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['result_v4']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['result_v5']; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<br>
    <table class="table">
                <thead>
                <tr>
    <td class="form-label d-block text-center" colspan="9">วัตถุดิบ(ผ้า) <?php echo $row['note']; ?></td>
</tr>

                    <tr>
                        <td>
                            <label class="form-label d-block text-center">Sale</label>
                            <th><?php echo $row['nes']; ?></th>
                            <th><?php echo $row['timess']; ?></th>
                        </td>
                        <td>
                            <label class="form-label d-block text-center">Mer</label>
                            <th><?php echo $row['nem']; ?></th>
                            <th><?php echo $row['timem']; ?></th>
                        </td>
                        <td>
                            <label class="form-label d-block text-center">Manager</label>
                            <th><?php echo $row['nemg']; ?></th>
                            <th><?php echo $row['timemg']; ?></th>
                        </td>
                    </tr>
                </thead>
            </table>
<br>

<div class="container">
    <div class="table-responsive">
        <table class="table  table-striped">
            <tbody>
                    <tr style="height: 50px;">
                        <th style="width: 130px; text-align: center;" scope="col" class="text-nowrap;">อุปกรณ์</th>
                        <th style="width: 100px; text-align: center;" scope="col" class="text-nowrap;">รหัสอุปกรณ์</th>
                        <th style="width: 5px; text-align: center;" scope="col" class="text-nowrap;">จำนวน</th>
                    </tr>
                    <tr style="height: 50px;">
                        <td style="width: 130px; text-align: center;"><?php echo $row['details_v1']; ?></td>
                        <td style="width: 30px; text-align: center;"><?php echo $row['nmdetails1']; ?></td>
                        <td style="width: 20px; text-align: center;"><?php echo $row['detv1']; ?></td>
                    </tr>
                    <tr style="height: 50px;">
                        <td style="width: 130px; text-align: center;"><?php echo $row['details_v2']; ?></td>
                        <td style="width: 30px; text-align: center;"><?php echo $row['nmdetails2']; ?></td>
                        <td style="width: 20px; text-align: center;"><?php echo $row['detv2']; ?></td>
                    </tr>
                    <tr style="height: 50px;">
                        <td style="width: 130px; text-align: center;"><?php echo $row['details_v3']; ?></td>
                        <td style="width: 30px; text-align: center;"><?php echo $row['nmdetails3']; ?></td>
                        <td style="width: 20px; text-align: center;"><?php echo $row['detv3']; ?></td>
                    </tr>
                    <tr style="height: 50px;">
                        <td style="width: 130px; text-align: center;"><?php echo $row['details_v4']; ?></td>
                        <td style="width: 30px; text-align: center;"><?php echo $row['nmdetails4']; ?></td>
                        <td style="width: 20px; text-align: center;"><?php echo $row['detv4']; ?></td>
                    </tr>
                    <tr style="height: 50px;">
                        <td style="width: 130px; text-align: center;"><?php echo $row['details_v5']; ?></td>
                        <td style="width: 30px; text-align: center;"><?php echo $row['nmdetails5']; ?></td>
                        <td style="width: 20px; text-align: center;"><?php echo $row['detv5']; ?></td>
                    </tr>
                    <tr style="height: 50px;">
                        <td style="width: 130px; text-align: center;"><?php echo $row['details_v6']; ?></td>
                        <td style="width: 30px; text-align: center;"><?php echo $row['nmdetails6']; ?></td>
                        <td style="width: 20px; text-align: center;"><?php echo $row['detv6']; ?></td>
                    </tr>
                    <tr style="height: 50px;">
                        <td style="width: 130px; text-align: center;"><?php echo $row['details_v7']; ?></td>
                        <td style="width: 30px; text-align: center;"><?php echo $row['nmdetails7']; ?></td>
                        <td style="width: 20px; text-align: center;"><?php echo $row['detv7']; ?></td>
                    </tr>
                    <tr style="height: 50px;">
                        <td style="width: 130px; text-align: center;"><?php echo $row['details_v8']; ?></td>
                        <td style="width: 30px; text-align: center;"><?php echo $row['nmdetails8']; ?></td>
                        <td style="width: 20px; text-align: center;"><?php echo $row['detv8']; ?></td>
                    </tr>
                   
            </tbody>
        </table>
    </div>
<br>
        <div class="table-responsive">
        <table class="table  table-striped">
            <thead>
                 <tr>
                 <td class="text-center">
                    <label class="text-center" style="width: 70px; height: 50px;">อุปกรณ์แพค</label>
                </td>
                <td class="text-center" style="width: 70px; height: 50px;">
                    <label class="text-center">จำนวน</label>
                </td>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td style="width: 70px; height: 40px;"><?php echo $row['pack1']; ?></td>
                        <th class="text-center" style="width: 50px; height: 40px;"><?php echo $row['nmpack1']; ?></th>
                    </tr>
                    <tr>
                        <td style="width: 100px; height: 40px;"><?php echo $row['pack2']; ?></td>
                        <th class="text-center" style="width: 100px; height: 40px;"><?php echo $row['nmpack2']; ?></th>
                    </tr>
                    <tr>
                        <td style="width: 70px; height: 40px;"><?php echo $row['pack3']; ?></td>
                        <th class="text-center" style="width: 70px; height: 40px;"><?php echo $row['nmpack3']; ?></th>
                    </tr>
                    <tr>
                        <td style="width: 70px; height: 40px;"><?php echo $row['pack4']; ?></td>
                        <th class="text-center" style="width: 70px; height: 40px;"><?php echo $row['nmpack4']; ?></th>
                    </tr>
                    <tr>
                        <td style="width: 70px; height: 40px;"><?php echo $row['pack5']; ?></td>
                        <th class="text-center" style="width: 70px; height: 40px;"><?php echo $row['nmpack5']; ?></th>
                    </tr>
            </tbody>
        </table>
    </div>
<br>
        <table style="flex: 1;">
            <thead>
                    <tr>
                        <td  colspan="2" class="text-center" style="width: 100px; height: 50px;"><?php echo $row['pin0']; ?></td>
                </tr>
            </thead>
                <tbody>
                        <tr>
                            <td class="text-center" style="width: 70px; height: 40px;" ><?php echo $row['pin1']; ?></td>
                            <td scope="col" class="text-nowrap" style="width: 5px; text-align: center;" rowspan="5">
                            <img src="upload/<?php echo $row['image2']; ?>" alt="รูปภาพ" style="max-width: 180px; max-height: 180px; float: center;"></td>
                        </tr>
                        <tr>
                            <td class="text-center" style="width: 400px; height: 40px;" ><?php echo $row['pin2']; ?></td>
                        </tr>
                        <tr>
                            <td class="text-center" style="width: 400px; height: 40px;" ><?php echo $row['pin3']; ?></td>
                        </tr>
                        <tr>
                            <td class="text-center" style="width: 400px; height: 40px;" ><?php echo $row['pin4']; ?></td>
                        </tr>
                        <tr>
                            <td class="text-center" style="width: 400px; height: 40px;" ><?php echo $row['pin5']; ?></td>
                        </tr>
                </tbody>
            </table>
     </div>  
     <br>
     <br>
     <br>
     <br>
            <div style="margin-top: 20px;"></div>
        
            <?php
// ตรวจสอบว่า $row ไม่ว่างหรือมีข้อมูลอยู่
if (!empty($row)) {
    echo '<table class="table">';
    echo '<tr>';
    echo '<th style="width: 150px; text-align: center;">ไซส์/สเปค</th>';
    echo '<th style="text-align: center;">SS</th>';
    echo '<th style="text-align: center;">S</th>';
    echo '<th style="text-align: center;">M</th>';
    echo '<th style="text-align: center;">L</th>';
    echo '<th style="text-align: center;">XL</th>';
    echo '<th style="text-align: center;">2XL</th>';
    echo '<th style="text-align: center;">3XL</th>';
    echo '<th style="text-align: center;">4XL</th>';
    echo '<th style="text-align: center;">5XL</th>';
    echo '<th style="text-align: center;">6XL</th>';
    echo '<th style="text-align: center;">7XL</th>';
    echo '</tr>';

    // สร้างแถวและแสดงข้อมูลขนาดและจำนวนของสินค้า
    for ($i = 1; $i <= 5; $i++) {
        // ตรวจสอบว่ามีข้อมูลสำหรับแถวนี้หรือไม่
        if (!empty($row['size_details' . $i])) {
            echo '<tr>';
            echo '<td class="text-center" style="width: 150px;">' . $row['size_details' . $i] . '</td>';
            echo '<td class="text-center" style="width: 50px; height: 50px;">' . $row['ss' . $i] . '</td>';
            echo '<td class="text-center" style="width: 50px; height: 50px;">' . $row['s' . $i] . '</td>';
            echo '<td class="text-center" style="width: 50px; height: 50px;">' . $row['m' . $i] . '</td>';
            echo '<td class="text-center" style="width: 50px; height: 50px;">' . $row['l' . $i] . '</td>';
            for ($j = 1; $j <= 7; $j++) {
                echo '<td class="text-center" style="width: 50px;">' . $row['xl' . $j . $i] . '</td>';
            }
            echo '</tr>';
        }
    }

    echo '</table>'; // ปิดตาราง
}
?>
            </div>
                <div style="margin-bottom: 20px;"></div>  

                <table class="table">
            <tr>
                <td><label class="form-label d-block text-center">รายละเอียดการเย็บ</label></td>
            </tr>
            <tr>
                <th class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['details']; ?></th>
            </tr>
            <tr>
                <td><label class="form-label d-block text-center">ข้อควรระวัง</label></td>
            </tr>
            <tr>
                <th class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['details0']; ?></th>
            </tr>
        </table>



<style>
    p {
        font-size: 16px; /* ขนาดตัวอักษร */
        color: #333; /* สีข้อความ */
        font-family: Arial, sans-serif; /* แบบอักษร */
        margin: 10px 0; /* ระยะห่างด้านบนและด้านล่าง */
        padding: 10px; /* ระยะห่างภายใน */
        border: 1px solid #ccc; /* เส้นขอบ */
        border-radius: 5px; /* มุมขอบโค้ง */
        width: 300px; /* ความกว้าง 200 พิกเซล */
        height: 50px; /* ความยาว 100 พิกเซล */
    }
    p.another-paragraph {
        font-size: 16px; /* ขนาดตัวอักษร */
        color: #333; /* สีข้อความ */
        font-family: Arial, sans-serif; /* แบบอักษร */
        margin: 10px 0; /* ระยะห่างด้านบนและด้านล่าง */
        padding: 10px; /* ระยะห่างภายใน */
        border: 1px solid #ccc; /* เส้นขอบ */
        border-radius: 5px; /* มุมขอบโค้ง */
        width: 100%; /* ความกว้าง 200 พิกเซล */
        height: 200%; /* ความยาว 100 พิกเซล */
    }
    
</style>
<br>
  

        <?php
        $html = ob_get_contents();
        ob_end_clean();

        $mpdf->WriteHTML($html);

        // กำหนดชื่อไฟล์ PDF ที่จะบันทึก
        $pdfFileName = "MyReport.pdf";

        // สร้างไฟล์ PDF
        $mpdf->Output($pdfFileName);
        

        // กำหนดหัว Response Header เพื่อให้เบราว์เซอร์แสดงได้ถูกต้อง
        header("Content-Type: application/pdf");
        header("Content-Disposition: inline; filename=$pdfFileName");

        // อ่านไฟล์ PDF และส่งไปยังเบราว์เซอร์
        readfile($pdfFileName);
        exit();
    } else {
        echo "ไม่พบข้อมูลสำหรับไอดีที่ระบุ";
    }
}

?>
