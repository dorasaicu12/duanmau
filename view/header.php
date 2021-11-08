<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <title>dự án mẫu</title>
  </head>

  <body>
      <div class="boxcenter">
          <div class="row mb header">
              <h1>SIÊU THỊ TRỰC TUYẾN</h1>>
          </div>
          <div class="row mb menu">
              <ul>
                  <li><a href="index1.php?act=">trang chủ</a></li>
                  <li><a href="index1.php?act=lienhe">liên hệ</a></li>
                  <li><a href="index1.php?act=gioithieu">giới thiệu</a></li>
                  <li><a href="iindex1.php?act=gioithieu">góp ý</a></li>
                  <?php if(isset($_SESSION['user'])){ ?>
                  <li><a href="index1.php?act=mycart">đơn hàng</a></li>
                  <?php }?>
                  <li><a href="index1.php?act=gioithieu">hỏi đáp</a></li>
              </ul>
          </div>
