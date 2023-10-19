<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        #status {
            font-size: 24px;
            margin: 100px auto;
        }
    </style>
</head>
<body>
    <div id="status">กำลังประมวลผล...</div>

    <script>
        // ใช้ JavaScript เพื่อเปลี่ยนข้อความสถานะ
        setTimeout(function () {
            document.getElementById("status").textContent = "เสร็จสิ้น";
        }, 5000); // ให้เปลี่ยนเป็น "เสร็จสิ้น" หลังจาก 5 วินาที
    </script>
</body>
</html>
