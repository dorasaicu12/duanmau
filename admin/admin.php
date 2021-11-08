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
 <?php 
  include 'admincss.php';
 ?>
  <body>
      <div class="boxcenter">
          <div class="row mb header">
              <h1>ADMIN</h1>>
          </div>
          <div class="row mb menu">
              <ul>
                  <li><a href="#">trang chủ</a></li>
                  <li><a href="#">DANH MỤC</a></li>
                  <li><a href="#">QUẢN LÝ DANH MỤC</a></li>
                  <li><a href="#">hàng hóa</a></li>
                  <li><a href="#">khách hàng</a></li>
                  <li><a href="#">bình luận</a></li>
                  <li><a href="#">thống kê</a></li>
              </ul>
          </div>
          <div class="row">
                 <div class="row header">
                     <h1>THÊM MỚI HÀNG HÓA</h1>
                 </div>
              
                 <div class="row formcontent">
                     <form method="post">
                         <div class="row mb10">
                         <label>mã loại</label> <br>   
                         <input type="text" name="maloai" disabled>
                         </div>
                         
                         <div class="row mb10">
                         <label>tên loại</label> <br>    
                         <input type="text" name="tenloai">
                         </div>
                         
                         <div class="row mb10">
                            
                         <input type="submit" name="btn" value="thêm mới">
                         <input type="reset"  value="nhập lại">
                         <a href="danhsachloai.php">  <input type="button"  value="danhsach"> </a>
                         </div>
                     </form>
                 </div>
          </div>
      </div>
  </body>
</html>
