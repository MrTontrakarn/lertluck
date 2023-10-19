
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-light" style="background-color: #191970;">
  <div class="container-fluid">
  <a class="navbar-brand" href="index.php" style="color: white;">LERTLUCK</a>
    <button class="navbar-toggler"  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" style="color: white;"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">เมนู</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">หน้าแรก</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">โปรไฟล์</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost:8080/crud_pdo/chart1.php">Dashboard</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                การดำเนินการผลิต
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="web.php">1.ออกเอกสาร</a></li>
                <hr class="dropdown-divider">
              <li><a class="dropdown-item" href="#">2.PR</a></li>
                <hr class="dropdown-divider">
              <li><a class="dropdown-item" href="#">3.ผ้าเข้า</a></li>
                <hr class="dropdown-divider">
              <li><a class="dropdown-item" href="#">4.ตรวจผ้า</a></li>
                <hr class="dropdown-divider">
              <li><a class="dropdown-item" href="#">5.Pattern</a></li>
                <hr class="dropdown-divider">
              <li><a class="dropdown-item" href="#">6.มาร์ค</a></li>
                <hr class="dropdown-divider">
              <li><a class="dropdown-item" href="#">7.จ่ายผ้า</a></li>
                <hr class="dropdown-divider">
              <li><a class="dropdown-item" href="#">8.ตัด</a></li>
                <hr class="dropdown-divider">
              <li><a class="dropdown-item" href="#">9.ตกแต่ง</a></li>
                <hr class="dropdown-divider">
              <li><a class="dropdown-item" href="#">10.ขนส่งเย็บ</a></li>
                <hr class="dropdown-divider">
              <li><a class="dropdown-item" href="#">11.เย็บเสร็จ</a></li>
                <hr class="dropdown-divider">
              <li><a class="dropdown-item" href="#">12.QC</a></li>
                <hr class="dropdown-divider">
              <li><a class="dropdown-item" href="#">13.ฟินิซซิ่ง</a></li>
                <hr class="dropdown-divider">
              <li><a class="dropdown-item" href="#">14.ส่งสินค้า</a></li>
                <hr class="dropdown-divider">

            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
  <style>
    
   </style>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</body>
</html>

