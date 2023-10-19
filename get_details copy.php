<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<?php
require_once('connection.php'); // เรียกใช้งานไฟล์เชื่อมต่อฐานข้อมูล

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // ดึงข้อมูลจากฐานข้อมูลตาม ID
    $stmt = $db->prepare("SELECT * FROM db_op WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // สร้าง HTML สำหรับแสดงในโมดัล
    $sizeCombined = $row['size_v1'] . ' ' . $row['size_v2'] . ' ' . $row['size_v3'] . ' ' . $row['size_v4'] . ' ' . $row['size_v5'] . ' ' . $row['size_v6'] . ' ' . $row['size_v7'] . ' ' . $row['size_v8'];
    $productCombined = $row['on_pdv1'] . ' ' . $row['on_pdv2'] . ' ' . $row['on_pdv3'] . ' ' . $row['on_pdv4'] . ' ' . $row['on_pdv5'] . ' ' . $row['on_pdv6'] . ' ' . $row['on_pdv7'] . ' ' . $row['on_pdv8'];
    $orderCombined = $row['od_v1'] . ' ' . $row['od_v2'] . ' ' . $row['od_v3'] . ' ' . $row['od_v4'] . ' ' . $row['od_v5'] . ' ' . $row['od_v6'] . ' ' . $row['od_v7'] . ' ' . $row['od_v8'];
    $ifCombined = $row['if_v1'] . ' ' . $row['if_v2'] . ' ' . $row['if_v3'] . ' ' . $row['if_v4'] . ' ' . $row['if_v5'] . ' ' . $row['if_v6'] . ' ' . $row['if_v7'] . ' ' . $row['if_v8'];
    $merCombined = $row['mer_v1'] . ' ' . $row['mer_v2'] . ' ' . $row['mer_v3'] . ' ' . $row['mer_v4'] . ' ' . $row['mer_v5'] . ' ' . $row['mer_v6'] . ' ' . $row['mer_v7'] . ' ' . $row['mer_v8'];
    $cutCombined = $row['cut_v1'] . ' ' . $row['cut_v2'] . ' ' . $row['cut_v3'] . ' ' . $row['cut_v4'] . ' ' . $row['cut_v5'] . ' ' . $row['cut_v6'] . ' ' . $row['cut_v7'] . ' ' . $row['cut_v8'];
    $ctCombined = $row['cuttrue_v1'] . ' ' . $row['cuttrue_v2'] . ' ' . $row['cuttrue_v3'] . ' ' . $row['cuttrue_v4'] . ' ' . $row['cuttrue_v5'] . ' ' . $row['cuttrue_v6'] . ' ' . $row['cuttrue_v7'] . ' ' . $row['cuttrue_v8'];
?>
    <table class="table">
        <thead>
                <tr>
                    <th scope="col" class="text-nowrap" style="width: 50%; font-size: 18px;">ชื่องาน :&nbsp;<?php echo $row['name_op']; ?></th>
                    <th scope="col" class="text-nowrap" style="width: 25%; font-size: 18px;">FN :&nbsp;<?php echo $row['fn']; ?></th>
                    <th scope="col" class="text-nowrap" style="width: 25%; text-align: center;" rowspan="2">
                    <img src="upload/<?php echo $row['image']; ?>" alt="รูปภาพ" style="max-width: 200px; max-height: 200px; float: center;"></th>
                </tr>
                <tr>
                    <th scope="col" class="text-nowrap" style="width: 50%; font-size: 18px;">NEW PTC ::&nbsp;<?php echo $row['new_ptc']; ?></th>
                    <th scope="col" class="text-nowrap" style="width: 25%; font-size: 18px;">กำหนดส่ง ::&nbsp;<?php echo $row['timeing']; ?></th>
                </tr>
        </thead>
    </table>
    
    <div class="container">
        <h2>ORDER</h2>
        <div class="table-responsive">
            <table class="table table-striped">  
                <thead>
                    <tr>
                        <td class="text-center" style="font-size: larger; color: black;">Size</td>
                        <td class="text-center" style="font-size: larger; color: black; width: 20%;">รหัสสินค้า</td>
                        <td class="text-center" style="font-size: larger; color: black;">ORDER</td>
                        <td class="text-center" style="font-size: larger; color: black;">เผื่อ</td>
                        <td class="text-center" style="font-size: larger; color: black;">เมอร์เก็บ</td>
                        <td class="text-center" style="font-size: larger; color: black;">รวมส่งผลิต</td>
                        <td class="text-center" style="font-size: larger; color: black;">ตัดได้จริง</td>
                    </tr>
                </thead>

                <tbody>
                <tr style="height: 30px;">
                    <td style="width: 30px; text-align: center;"><?php echo $row['size_v1']; ?></td>
                    <td style="width: 30px; text-align: center;"><?php echo $row['on_pdv1']; ?></td>
                    <td style="width: 30px; text-align: center;"><?php echo $row['od_v1']; ?></td>
                    <td style="width: 30px; text-align: center;"><?php echo $row['if_v1']; ?></td>
                    <td style="width: 30px; text-align: center;"><?php echo $row['mer_v1']; ?></td>
                    <td style="width: 30px; text-align: center;"><?php echo $row['cut_v1']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v1']; ?></td>
                    
                </tr>

                <tr style="height: 50px;">
                    <td style="width: 80px; text-align: center;"><?php echo $row['size_v2']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['on_pdv2']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['od_v2']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['if_v2']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['mer_v2']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cut_v2']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v2']; ?></td>
                </tr>

                <!-- ตั้งแต่ v3 ถึง v8 ให้ทำการคัดลอกแบบนี้และแก้ไขค่าตามลำดับ -->
                <tr style="height: 50px;">
                    <td style="width: 80px; text-align: center;"><?php echo $row['size_v3']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['on_pdv3']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['od_v3']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['if_v3']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['mer_v3']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cut_v3']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v3']; ?></td>
                     
                </tr>

                <tr style="height: 50px;">
                    <td style="width: 80px; text-align: center;"><?php echo $row['size_v4']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['on_pdv4']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['od_v4']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['if_v4']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['mer_v4']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cut_v4']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v4']; ?></td>
                </tr>

                <tr style="height: 50px;">
                    <td style="width: 80px; text-align: center;"><?php echo $row['size_v5']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['on_pdv5']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['od_v5']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['if_v5']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['mer_v5']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cut_v5']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v5']; ?></td>
                </tr>

                <tr style="height: 50px;">
                    <td style="width: 80px; text-align: center;"><?php echo $row['size_v6']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['on_pdv6']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['od_v6']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['if_v6']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['mer_v6']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cut_v6']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v6']; ?></td>
                </tr>

                <tr style="height: 50px;">
                    <td style="width: 80px; text-align: center;"><?php echo $row['size_v7']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['on_pdv7']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['od_v7']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['if_v7']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['mer_v7']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cut_v7']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v7']; ?></td>
                </tr>

                <tr style="height: 50px;">
                    <td style="width: 80px; text-align: center;"><?php echo $row['size_v8']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['on_pdv8']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['od_v8']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['if_v8']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['mer_v8']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cut_v8']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v8']; ?></td>
                </tr>

                <tr style="height: 50px;">
                    <td style="width: 80px; text-align: center;"><?php echo $row['size_v9']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['on_pdv9']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['od_v9']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['if_v9']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['mer_v9']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cut_v9']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v9']; ?></td>
                </tr>
                <tr style="height: 50px;">
                    <td style="width: 80px; text-align: center;"><?php echo $row['size_v10']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['on_pdv10']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['od_v10']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['if_v10']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['mer_v10']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cut_v10']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v10']; ?></td>
                </tr>
                <tr style="height: 50px;">
                    <td style="width: 80px; text-align: center;"><?php echo $row['size_v11']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['on_pdv11']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['od_v11']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['if_v11']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['mer_v11']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cut_v11']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v11']; ?></td>
                </tr>
                <tr style="height: 50px;">
                    <td style="width: 80px; text-align: center;"><?php echo $row['size_v12']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['on_pdv12']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['od_v12']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['if_v12']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['mer_v12']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cut_v12']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v12']; ?></td>
                </tr>
                <tr style="height: 50px;">
                    <td style="width: 80px; text-align: center;"><?php echo $row['size_v13']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['on_pdv13']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['od_v13']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['if_v13']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['mer_v13']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cut_v13']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v13']; ?></td>
                </tr>
                <tr style="height: 50px;">
                    <td style="width: 80px; text-align: center;"><?php echo $row['size_v14']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['on_pdv14']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['od_v14']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['if_v14']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['mer_v14']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cut_v14']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v14']; ?></td>
                </tr>
                <tr style="height: 50px;">
                    <td style="width: 80px; text-align: center;"><?php echo $row['size_v15']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['on_pdv15']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['od_v15']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['if_v15']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['mer_v15']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cut_v15']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v15']; ?></td>
                </tr>
                <tr style="height: 50px;">
                    <td style="width: 80px; text-align: center;"><?php echo $row['size_v16']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['on_pdv16']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['od_v16']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['if_v16']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['mer_v16']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cut_v16']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v16']; ?></td>
                </tr>
                <tr style="height: 50px;">
                    <td style="width: 80px; text-align: center;"><?php echo $row['size_v17']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['on_pdv17']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['od_v17']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['if_v17']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['mer_v17']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cut_v17']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v17']; ?></td>
                </tr>
                <tr style="height: 50px;">
                    <td style="width: 80px; text-align: center;"><?php echo $row['size_v18']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['on_pdv18']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['od_v18']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['if_v18']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['mer_v18']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cut_v18']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v18']; ?></td>
                </tr>
                <tr style="height: 50px;">
                    <td style="width: 80px; text-align: center;"><?php echo $row['size_v19']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['on_pdv19']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['od_v19']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['if_v19']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['mer_v19']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cut_v19']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v19']; ?></td>
                </tr>
                <tr style="height: 50px;">
                    <td style="width: 80px; text-align: center;"><?php echo $row['size_v20']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['on_pdv20']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['od_v20']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['if_v20']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['mer_v20']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cut_v20']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v20']; ?></td>
                </tr>
                
                <tr>
                    <td style="width: 80px; text-align: center;">รวม</td>
                    <td style="width: 80px; text-align: center;"></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['result_v1']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['result_v2']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['result_v3']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['result_v4']; ?></td>
                    <td style="width: 80px; text-align: center;"><?php echo $row['result_v5']; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
    <table class="table">
                <thead>
                    <tr>
                        <td colspan="3">
                            <label class="form-label d-block text-center">วัตถุดิบ(ผ้า)</label>
                            <p class="another-paragraph"><?php echo $row['note']; ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="form-label d-block text-center">Sale</label>
                            <p><?php echo $row['nes']; ?></p>
                            <p><?php echo $row['timess']; ?></p>
                        </td>
                        <td>
                            <label class="form-label d-block text-center">Mer</label>
                            <p><?php echo $row['nem']; ?></p>
                            <p><?php echo $row['timem']; ?></p>
                        </td>
                        <td>
                            <label class="form-label d-block text-center">Manager</label>
                            <p><?php echo $row['nemg']; ?></p>
                            <p><?php echo $row['timemg']; ?></p>
                        </td>
                    </tr>
                </thead>
            </table>


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
                    <tr style="height: 50px;">
                        <td style="width: 130px; text-align: center;"><?php echo $row['details_v9']; ?></td>
                        <td style="width: 30px; text-align: center;"><?php echo $row['nmdetails9']; ?></td>
                        <td style="width: 20px; text-align: center;"><?php echo $row['detv9']; ?></td>
                    </tr>
                    <tr style="height: 50px;">
                        <td style="width: 130px; text-align: center;"><?php echo $row['details_v10']; ?></td>
                        <td style="width: 30px; text-align: center;"><?php echo $row['nmdetails10']; ?></td>
                        <td style="width: 20px; text-align: center;"><?php echo $row['detv10']; ?></td>
                    </tr>
            </tbody>
        </table>
    </div>

    <div style="display: flex;">
                <table class="table  text-center" style="flex: 1; margin-right: 20px;">
                    <thead>
                        <tr>
                        <td class="text-center"><label class="form-label">อุปกรณ์แพค</label></td>
                        <td class="text-center"><label class="form-label">จำนวน</label></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $row['pack1']; ?></td>
                            <th class="text-center" style="width: 100px;"><?php echo $row['nmpack1']; ?></th>
                        </tr>
                        <tr>
                            <td><?php echo $row['pack2']; ?></td>
                            <th class="text-center" style="width: 100px;"><?php echo $row['nmpack2']; ?></th>
                        </tr>
                        <tr>
                            <td><?php echo $row['pack3']; ?></td>
                            <th class="text-center" style="width: 100px;"><?php echo $row['nmpack3']; ?></th>
                        </tr>
                        <tr>
                            <td><?php echo $row['pack4']; ?></td>
                            <th class="text-center" style="width: 100px;"><?php echo $row['nmpack4']; ?></th>
                        </tr>
                        <tr>
                            <td><?php echo $row['pack5']; ?></td>
                            <th class="text-center" style="width: 100px;"><?php echo $row['nmpack5']; ?></th>
                        </tr>
                    </tbody>
                </table>

                <table class="table" style="flex: 1;">
                    <thead>
                    <tr>
                        <td  colspan="2" class="text-center" style="width: 100px; height: 50px;"><?php echo $row['pin']; ?></td>
                    </tr>

                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center" style="width: 100px; height: 50px;" ><?php echo $row['pin1']; ?></td>
                            <td scope="col" class="text-nowrap" style="width: 25%; text-align: center;" rowspan="5">
                            <img src="upload/<?php echo $row['image2']; ?>" alt="รูปภาพ" style="max-width: 200px; max-height: 200px; float: center;"></td>
                        </tr>
                        <tr>
                            <td class="text-center" style="width: 100px; height: 50px;" ><?php echo $row['pin2']; ?></td>
                        </tr>
                        <tr>
                            <td class="text-center" style="width: 100px; height: 50px;" ><?php echo $row['pin3']; ?></td>
                        </tr>
                        <tr>
                            <td class="text-center" style="width: 100px; height: 50px;" ><?php echo $row['pin4']; ?></td>
                        </tr>
                        <tr>
                            <td class="text-center" style="width: 100px; height: 50px;" ><?php echo $row['pin5']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>  
            

            <div style="margin-top: 20px;"></div>
        <table class="table">
            <tr>
                <th style="width: 150px; text-align: center;">ไซส์/สเปค</th>
                <th style="width: 50px; text-align: center;">SS</th>
                <th style="width: 50px; text-align: center;">S</th>
                <th style="width: 50px; text-align: center;">M</th>
                <th style="width: 50px; text-align: center;">L</th>
                <th style="width: 50px; text-align: center;">XL</th>
                <th style="width: 50px; text-align: center;">2XL</th>
                <th style="width: 50px; text-align: center;">3XL</th>
                <th style="width: 50px; text-align: center;">4XL</th>
                <th style="width: 50px; text-align: center;">5XL</th>
                <th style="width: 50px; text-align: center;">6XL</th>
                <th style="width: 50px; text-align: center;">7XL</th>
            </tr>
            <tr>
                <td class="text-center" style="width: 100px; height: 50px;" ><?php echo $row['size_details1']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['ss1']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['s1']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['m1']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['l1']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl1']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl21']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl31']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl41']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl51']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl61']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl71']; ?></td>
            </tr>
            <tr>
                <td class="text-center" style="width: 100px; height: 50px;" ><?php echo $row['size_details2']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['ss2']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['s2']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['m2']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['l2']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl2']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl22']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl32']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl42']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl52']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl62']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl72']; ?></td>
            </tr>
            <tr>
                <td class="text-center" style="width: 100px; height: 50px;" ><?php echo $row['size_details3']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['ss3']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['s3']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['m3']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['l3']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl3']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl23']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl33']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl43']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl53']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl63']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl73']; ?></td>
            </tr>
            <tr>
                <td class="text-center" style="width: 100px; height: 50px;" ><?php echo $row['size_details4']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['ss4']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['s4']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['m4']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['l4']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl4']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl24']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl34']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl44']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl54']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl64']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl74']; ?></td>
            </tr>
            <tr>
                <td class="text-center" style="width: 100px; height: 50px;" ><?php echo $row['size_details5']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['ss5']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['s5']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['m5']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['l5']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl5']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl25']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl35']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl45']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl55']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl65']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl75']; ?></td>
            </tr>
            <tr>
                <td class="text-center" style="width: 100px; height: 50px;" ><?php echo $row['size_details6']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['ss6']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['s6']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['m6']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['l6']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl6']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl26']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl36']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl46']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl56']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl66']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl76']; ?></td>
            </tr>
            <tr>
                <td class="text-center" style="width: 100px; height: 50px;" ><?php echo $row['size_details7']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['ss7']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['s7']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['m7']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['l7']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl7']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl27']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl37']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl47']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl57']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl67']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl77']; ?></td>
            </tr>
            <tr>
                <td class="text-center" style="width: 100px; height: 50px;" ><?php echo $row['size_details8']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['ss8']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['s8']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['m8']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['l8']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl8']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl28']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl38']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl48']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl58']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl68']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl78']; ?></td>
            </tr>
            <tr>
                <td class="text-center" style="width: 100px; height: 50px;" ><?php echo $row['size_details9']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['ss9']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['s9']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['m9']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['l9']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl9']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl29']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl39']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl49']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl59']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl69']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl79']; ?></td>
            </tr>
            <tr>
                <td class="text-center" style="width: 100px; height: 50px;" ><?php echo $row['size_details10']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['ss10']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['s10']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['m10']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['l10']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl10']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl210']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl310']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl410']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl510']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl610']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl710']; ?></td>
            </tr>
            <tr>
                <td class="text-center" style="width: 100px; height: 50px;" ><?php echo $row['size_details11']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['ss11']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['s11']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['m11']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['l11']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl11']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl211']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl311']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl411']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl511']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl611']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl711']; ?></td>
            </tr>
            <tr>
                <td class="text-center" style="width: 100px; height: 50px;" ><?php echo $row['size_details12']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['ss12']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['s12']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['m12']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['l12']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl12']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl212']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl312']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl412']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl512']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl612']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl712']; ?></td>
            </tr>
            <tr>
                <td class="text-center" style="width: 100px; height: 50px;" ><?php echo $row['size_details13']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['ss13']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['s13']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['m13']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['l13']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl13']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl213']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl313']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl413']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl513']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl613']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl713']; ?></td>
            </tr>
            <tr>
                <td class="text-center" style="width: 100px; height: 50px;" ><?php echo $row['size_details14']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['ss14']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['s14']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['m14']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['l14']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl14']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl214']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl314']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl414']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl514']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl614']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl714']; ?></td>
            </tr>
            <tr>
                <td class="text-center" style="width: 100px; height: 50px;" ><?php echo $row['size_details15']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['ss15']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['s15']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['m15']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['l15']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl15']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl215']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl315']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl415']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl515']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl615']; ?></td>
                <td class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['xl715']; ?></td>
            </tr>
        </table>
    <div style="margin-bottom: 20px;"></div>  

    <table class="table">
        <tr>
            <td><label class="form-label d-block text-center">รายละเอียดการเย็บ</label></td>
        </tr>
        <tr>
            <th class="text-center" style="width: 50px; height: 50px;" ><?php echo $row['details']; ?></th>
        </tr>
    </table>


<?php
}
?>
<style>
    p {
        font-size: 16px; /* ขนาดตัวอักษร */
        color: #333; /* สีข้อความ */
        font-family: Arial, sans-serif; /* แบบอักษร */
        margin: 10px 0; /* ระยะห่างด้านบนและด้านล่าง */
        padding: 10px; /* ระยะห่างภายใน */
        background-color: #f0f0f0; /* สีพื้นหลัง */
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
        background-color: #f0f0f0; /* สีพื้นหลัง */
        border: 1px solid #ccc; /* เส้นขอบ */
        border-radius: 5px; /* มุมขอบโค้ง */
        width: 100%; /* ความกว้าง 200 พิกเซล */
        height: 200%; /* ความยาว 100 พิกเซล */
    }
    
</style>


</body>

</body>
</html>