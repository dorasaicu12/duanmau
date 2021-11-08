          <div class="row">
                 <div class="row header">
                     <h1>THÊM MỚI HÀNG HÓA</h1>
                 </div>
              
                 <div class="row formcontent">
                     <form action="index.php?act=adddm" method="post">
                         <div class="row mb10">
                         <label>mã loại</label> <br>   
                         <input type="text" name="maloai" disabled>
                         </div>
                         
                         <div class="row mb10">
                         <label>tên loại</label> <br>    
                         <input type="text" name="tenloai">
                         </div>
                         
                         <div class="row mb10">
                            
                         <input type="submit" name="themmoi" value="thêm mới">
                         <input type="reset"  value="nhập lại">
                         <a href="index.php?act=listdm">  <input type="button"  value="danhsach"> </a>
                         </div>
                     </form>
                 </div>
              <?php
              if(isset($thongbao)){
                  echo ($thongbao);
              }
              ?>
          </div>
<?php

 if(isset($_POST['themmoi'])){
     $tenloai=$_POST['tenloai'];
     $sql="insert into loai(ten_loai) value(?)";
      pdo_execute($sql,$tenloai);
      $thongbao="thêm thành công";
 }
?>

