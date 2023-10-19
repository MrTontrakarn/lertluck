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
   
?>
      <table class="table">
        <thead>
                <tr>
                <th class="text-center" style="font-size: 18px;" colspan="3">
                    ชื่องาน : <?php echo $row['name_op']; ?>
                </th>
                </tr>
                <tr>
                    <th class="text-center" style="width: 50%; font-size: 18px; text-align: center;">NEW PTC :&nbsp;<?php echo $row['new_ptc']; ?></th>
                    <th class="text-center" style="width: 50%; font-size: 18px; text-align: center;">กำหนดส่ง :&nbsp;<?php echo $row['timeing']; ?></th>
                    <th class="text-center" style="width: 18%; text-align: center; text-align: center;" rowspan="2">
                    <img src="upload/<?php echo $row['image']; ?>" alt="รูปภาพ" style="max-width: 200px; max-height: 200px; float: center;"></th>
                </tr>
                <tr>
                    <th class="text-center" style="width: 50%; font-size: 18px; text-align: center;">FN :&nbsp;<?php echo $row['fn']; ?></th>
                    <th class="text-center" style="width: 50%; font-size: 18px; text-align: center;">สข :&nbsp;<?php echo $row['ks']; ?></th>
                    
                </tr>
                <tr>
                <th class="text-center" style="width: 50%; font-size: 18px; text-align: center;">รหัสสินค้า :&nbsp;<?php echo $row['nmod']; ?></th>
                </tr>
        </thead>
    </table>
    
    
    <div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <td class="text-center" style="font-size: larger; color: black;">Size</td>
                <td class="text-center" style="font-size: larger; color: black;"><?php echo $row['od_j1']; ?></td>
                <td class="text-center" style="font-size: larger;"><?php echo $row['od_j2']; ?></td>
                <td class="text-center" style="font-size: larger;"><?php echo $row['od_j3']; ?></td>
                <td class="text-center" style="font-size: larger; color: black;"><?php echo $row['od_j4']; ?></td>
                <td class="text-center" style="font-size: larger; color: black;"><?php echo $row['od_j5']; ?></td>
                <td class="text-center" style="font-size: larger; color: black;"><?php echo $row['od_j6']; ?></td>
                <td class="text-center" style="font-size: larger; color: black;"><?php echo $row['od_j7']; ?></td>
                <td style="width: 30px; text-align: center;"><?php echo $row['if_v0']; ?></td>
                <td class="text-center" style="font-size: larger; color: black;">รวมส่งผลิต</td>
                <td class="text-center" style="font-size: larger; color: black;">ตัดได้จริง</td>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 1; $i <= 10; $i++) : ?>
                <?php if (!empty($row['size_v' . $i])) : ?>
                    <tr style="height: 30px;">
                        <td style="width: 30px; text-align: center;"><?php echo $row['size_v' . $i]; ?></td>
                        <td style="width: 30px; text-align: center;"><?php echo $row['od_v' . $i]; ?></td>
                        <td style="width: 30px; text-align: center;"><?php echo $row['od_a' . $i]; ?></td>
                        <td style="width: 30px; text-align: center;"><?php echo $row['od_s' . $i]; ?></td>
                        <td style="width: 30px; text-align: center;"><?php echo $row['od_d' . $i]; ?></td>
                        <td style="width: 30px; text-align: center;"><?php echo $row['od_f' . $i]; ?></td>
                        <td style="width: 30px; text-align: center;"><?php echo $row['od_g' . $i]; ?></td>
                        <td style="width: 30px; text-align: center;"><?php echo $row['od_h' . $i]; ?></td>
                        <td style="width: 30px; text-align: center;"><?php echo $row['if_v' . $i]; ?></td>
                        <td style="width: 30px; text-align: center;"><?php echo $row['cut_v' . $i]; ?></td>
                        <td style="width: 80px; text-align: center;"><?php echo $row['cuttrue_v' . $i]; ?></td>
                    </tr>
                <?php endif; ?>
            <?php endfor; ?>

            <tr>
                <td style="width: 80px; text-align: center;">รวม</td>
                <?php for ($i = 1; $i <= 10; $i++) : ?>
                    <td style="width: 80px; text-align: center;"><?php echo $row['result_v' . $i]; ?></td>
                <?php endfor; ?>
            </tr>
        </tbody>
    </table>
</div>


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
                    <table class="table table-striped">
                        <tbody>
                            <tr style="height: 50px;">
                                <th style="width: 130px; text-align: center;" scope="col" class="text-nowrap">อุปกรณ์</th>
                                <th style="width: 100px; text-align: center;" scope="col" class="text-nowrap">รหัสอุปกรณ์</th>
                                <th style="width: 5px; text-align: center;" scope="col" class="text-nowrap">จำนวน</th>
                            </tr>

                            <?php for ($i = 1; $i <= 15; $i++) : ?>
                                <?php
                                $details = $row['details_v' . $i];
                                $nmdetails = $row['nmdetails' . $i];
                                $detv = $row['detv' . $i];

                                if (!empty($details) && !empty($nmdetails) && !empty($detv)) :
                                ?>
                                    <tr style="height: 50px;">
                                        <td style="width: 130px; text-align: center;"><?php echo $details; ?></td>
                                        <td style="width: 30px; text-align: center;"><?php echo $nmdetails; ?></td>
                                        <td style="width: 20px; text-align: center;"><?php echo $detv; ?></td>
                                    </tr>
                                <?php endif; ?>
                            <?php endfor; ?>

                        </tbody>
                    </table>
                </div>
            </div>

            <?php if (!empty($row['pin0'])) : ?>
                <table class="table">
                    <thead>
                        <tr>
                            <td colspan="2" class="text-center" style="width: 100px; height: 50px;"><?php echo $row['pin0']; ?></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 1; $i <= 5; $i++) : ?>
                            <?php
                            $pin = $row['pin' . $i];
                            $image = $row['image' . ($i + 1)]; // ใช้ ($i + 1) เนื่องจากมีการใช้ตัวแปร image2, image3, ...
                            
                            if (!empty($pin)) :
                            ?>
                                <tr>
                                    <td class="text-center" style="width: 100%; height: 50px;"><?php echo $pin; ?></td>
                                    <td scope="col" class="text-nowrap" style="width: 25%; text-align: center;">
                                        <img src="upload/<?php echo $image; ?>" alt="รูปภาพ" style="max-width: 200px; max-height: 200px; float: center;">
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </tbody>
                </table>
            <?php endif; ?>

            

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
                for ($i = 1; $i <= 15; $i++) {
                    // ตรวจสอบว่ามีข้อมูลสำหรับแถวนี้หรือไม่
                    if (!empty($row['size_details' . $i])) {
                        echo '<tr>';
                        echo '<td class="text-center" style="width: 150px;">' . $row['size_details' . $i] . '</td>';
                        echo '<td class="text-center" style="width: 50px; height: 50px;">' . $row['ss' . $i] . '</td>';
                        echo '<td class="text-center" style="width: 50px; height: 50px;">' . $row['s' . $i] . '</td>';
                        echo '<td class="text-center" style="width: 50px; height: 50px;">' . $row['m' . $i] . '</td>';
                        echo '<td class="text-center" style="width: 50px; height: 50px;">' . $row['l' . $i] . '</td>';
                        echo '<td class="text-center" style="width: 50px; height: 50px;">' . $row['xl' . $i] . '</td>';
                        echo '<td class="text-center" style="width: 50px; height: 50px;">' . $row['xl2' . $i] . '</td>';
                        echo '<td class="text-center" style="width: 50px; height: 50px;">' . $row['xl3' . $i] . '</td>';
                        echo '<td class="text-center" style="width: 50px; height: 50px;">' . $row['xl4' . $i] . '</td>';
                        echo '<td class="text-center" style="width: 50px; height: 50px;">' . $row['xl5' . $i] . '</td>';
                        echo '<td class="text-center" style="width: 50px; height: 50px;">' . $row['xl6' . $i] . '</td>';
                        echo '<td class="text-center" style="width: 50px; height: 50px;">' . $row['xl7' . $i] . '</td>';
                        echo '</tr>';
                    }
                }

                echo '</table>'; // ปิดตาราง
            }
            ?>


    <div style="margin-bottom: 20px;"></div>  

    <table class="table">
    <thead>
        <?php if (!empty($row['details'])) : ?>
        <tr>
            <td><label class="form-label d-block text-center">รายละเอียดการเย็บ</label></td>
        </tr>
        <tr>
            <th class="text-center" style="width: 50px; height: 50px;"><?php echo $row['details']; ?></th>
        </tr>
        <?php endif; ?>
    </thead>
    <tbody>
        <?php if (!empty($row['details0'])) : ?>
        <tr>
            <td><label class="form-label d-block text-center">ข้อควรระวัง</label></td>
        </tr>
        <tr>
            <th class="text-center" style="width: 50px; height: 50px;"><?php echo $row['details0']; ?></th>
        </tr>
        <?php endif; ?>
    </tbody>
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