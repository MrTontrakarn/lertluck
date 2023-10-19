<?php
require_once('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require_once 'nav.php'; ?>
</head>
<br>
<br>
<body>
<div class="container">
    <div class="display-5 text-center">หน้าจัดการใบสั่งผลิตเสื้อ</div>
    <a href="add1.php" class="btn btn-success mb-3">เพิ่มข้อมูล</a>
    <table id="myTable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>กำหนดส่ง</th>
                <th>ชื่องาน</th>
                <th>NEW PTC</th>
                <th>FN</th>
                <th>รายละเอียด</th>
                <th>แก้ไข</th>
                <th>คัดลอก</th>
                <th>ดาวโหลด</th>
                <th>ลบ</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $select_stmt = $db->prepare("SELECT * FROM db_op");
                $select_stmt->execute();

                while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <tr>
                    <td><?php echo $row['timeing'] ?></td>
                    <td><?php echo $row['name_op'] ?></td>
                    <td><?php echo $row['new_ptc'] ?></td>
                    <td><?php echo $row['fn'] ?></td>
                    <td><a href="#myde" data-toggle="modal" class="btn btn-info view-details" data-id="<?php echo $row['id']; ?>">รายละเอียด</a></td>
                    <td><a href="edit_copy.php?update_id=<?php echo $row["id"]; ?>" class="btn btn-warning">แก้ไข</a></td>
                    <td>
                        <form method="post" action="copy_data.php">
                            <input type="hidden" name="copy_id" value="<?php echo $row["id"]; ?>">
                            <button type="submit" class="btn btn-success">คัดลอกข้อมูล</button>
                        </form>
                    </td>
                    <td><a href="pdf_details.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">ดาวน์โหลด</a></td>
                    <td>
                        <a href="javascript:void(0);" onclick="openDeleteConfirmation(<?php echo $row["id"]; ?>)" class="btn btn-danger">ลบ</a>
                    </td>
                </tr>

                <!-- สร้าง popup สำหรับการลบข้อมูล -->
                <div class="popup" id="deletePopup<?php echo $row["id"]; ?>">
                    <div class="popup-content">
                        <p>คุณต้องการลบรายการนี้หรือไม่?</p>
                        <button class="btn btn-danger" onclick="confirmDelete(<?php echo $row["id"]; ?>)">ลบ</button>
                        <button class="btn btn-secondary" onclick="closeDeleteConfirmation(<?php echo $row["id"]; ?>)">ยกเลิก</button>
                    </div>
                </div>
            <?php } ?>
        </tbody>
    </table>
</div>

<style>
    .popup {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
    }

    .popup-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border: 1px solid #ccc; /* เพิ่มเส้นขอบสีเทา */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        border-radius: 5px; /* เพิ่มขอบโค้งเหลือง */
        text-align: center;
    }
    
    
</style>


<!-- โมดัลสำหรับรายละเอียด -->
<div id="myde" class="modal fade">
    <div class="modal-dialog modal-lg" style="max-width: 65vw; max-height: 90vh;">
        <div class="modal-content">
            <div class="modal-header">
                <!-- ส่วนของหัวของ Modal -->
                <h4> รายละเอียด </h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- ส่วนของเนื้อหา Modal -->
            </div>
            <div class="modal-footer">
                <!-- ส่วนท้ายของ Modal -->
            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>


<script>
  // แจ้งเตือนการลบข้อมูล
function openDeleteConfirmation(id) {
    var popup = document.getElementById("deletePopup" + id);
    popup.style.display = "block";
}

// ยืนยันการลบและส่งคำขอไปยังเซิร์ฟเวอร์
function confirmDelete(id) {
    // ส่งคำขอลบไปยังเซิร์ฟเวอร์
    $.ajax({
        type: "POST",
        url: "delete_data.php", // เปลี่ยนเป็นชื่อไฟล์ PHP ที่จะใช้ในการลบข้อมูล
        data: { id: id },
        success: function (response) {
            // ทำอะไรสักอย่างหลังจากลบข้อมูลเรียบร้อย
            // ยกเลิกการแสดง Popup
            closeDeleteConfirmation(id);

            // อัพเดตหน้าเว็บ (ตารางหรือส่วนอื่น ๆ)
            // ตามความต้องการ
            location.reload(); // อัพเดตหน้าเว็บ
        },
        error: function () {
            alert("เกิดข้อผิดพลาดในการลบข้อมูล");
        }
    });
}

// ปิด Popup
function closeDeleteConfirmation(id) {
    var popup = document.getElementById("deletePopup" + id);
    popup.style.display = "none";
}

</script>

<script>
   $(document).ready(function () {
    // เมื่อคลิกปุ่ม "รายละเอียด"
    $('.view-details').click(function () {
        var id = $(this).data('id');

        // เปิดโมดัล
        $('#myde').modal('show');

        // ใช้ AJAX โหลดข้อมูลจากฐานข้อมูลและแสดงในโมดัล
        $.ajax({
            url: 'get_details.php',
            method: 'GET',
            data: { id: id },
            success: function (response) {
                $('#myde .modal-body').html(response);
            }
        });
    });

    // เมื่อคลิกปุ่ม "Close" ในโมดัล
         $('#myde .modal-header button').click(function () {
        // ปิดโมดัล
        $('#myde').modal('hide');
    });
});

</script>

<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
