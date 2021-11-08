          <div class="row">
                 <div class="row header">
                     <h1>THÊM MỚI HÀNG HÓA</h1>
                 </div>
              <?php 
              if(isset($_GET['id'])){
                $ma_loai=$_GET['id'];
                $update= loadtheoloai($ma_loai);
                extract($update) ;
              }
              ?>
          <div class="row">
                 <div class="row header">
                     <h1>THÊM MỚI sản phẩm</h1>
                 </div>
              
                 <div class="row formcontent">
                     <form action="index.php?act=suadm&id=<?=$ma_loai?>" method="post" enctype="multipart/form-data">
                         <div class="row mb10">
                         <label>mã loại</label> <br>   
                         <input type="text" name="ma_loai" value="<?=$ma_loai?>" disabled>
                         </div>
                         
                         <div class="row mb10">
                         <label>tên loại</label> <br>    
                         <input type="text" name="tenloai"value="<?=$ten_loai?>">
                         </div>
                         
                         <div class="row mb10">
                            
                         <input type="submit" name="sualoai" value="cập nhập">
                         <input type="reset"  value="nhập lại">
                         <a href="index.php?act=listsp">  <input type="button"  value="danhsach"> </a>
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

 if(isset($_POST['sualoai'])){
  $ten_loai=$_POST['tenloai'];
  updatetheoloai($ma_loai);
 }
?>
