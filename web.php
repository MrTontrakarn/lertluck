<?php 
    require_once('connection.php');

    if (isset($_REQUEST['delete_id'])) {
        $id = $_REQUEST['delete_id'];

        $select_stmt = $db->prepare("SELECT * FROM db_op WHERE id = :id");
        $select_stmt->bindParam(':id', $id);
        $select_stmt->execute();
        $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

        // Delete an original record from db
        $delete_stmt = $db->prepare('DELETE FROM db_op WHERE id = :id');
        $delete_stmt->bindParam(':id', $id);
        $delete_stmt->execute();

        header('Location:index.php');
    }
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
    <div class="display-5 text-center" >หน้าจัดการผลิต(เมอร์)</div>
    <a href="add.php" class="btn btn-success mb-3">เพิ่มข้อมูล</a>
    <table id="myTable" class="table table-bordered table-striped">
        <thead>
            <tr>
                                
                                <th>กำหนดส่ง</th>               
                                <th>FN</th>
                                <th>รายละเอียด</th>           
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
                    <td><?php echo $row['id'] ?></td>
                    <td><a href="#myde" data-toggle="modal" class="btn btn-info view-details" data-id="<?php echo $row['id']; ?>">รายละเอียด</a></td>
                    
            
                    </form>
                    </td>
                    
                </tr>

            <?php } ?>
        </tbody>
    </table>
    </div>

      
    <div id="myde" class="modal fade">
    <div class="modal-dialog modal-lg" style="max-width: 65vw; max-height: 90vh; overflow-y: auto;">
        <div class="modal-content">
            <div class="modal-header">
                <!-- ส่วนของหัวของ Modal -->
                <h4> รายละเอียด </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <!-- ส่วนของเนื้อหา Modal -->
            </div>
            <div class="modal-footer">
                <!-- ส่วนท้ายของ Modal -->
            </div>
        </div>
    </div>





                


    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
        } );
    </script>

<script>
$(document).ready(function(){
    // เมื่อคลิกปุ่ม "รายละเอียด"
    $('.view-details').click(function(){
        var id = $(this).data('id'); // รับค่า ID จาก data-id

        // ใช้ AJAX โหลดข้อมูลจากฐานข้อมูล
        $.ajax({
            url: 'get_details.php', // เปลี่ยนเป็นชื่อไฟล์ PHP ที่ใช้ดึงข้อมูล
            method: 'GET',
            data: {id: id},
            success: function(response){
                $('#myde .modal-body').html(response); // แสดงข้อมูลในโมดัล
                $('#myde').modal('show'); // เปิดโมดัล
            }
        });
    });
});
</script>


 
  <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
</body>
</html>