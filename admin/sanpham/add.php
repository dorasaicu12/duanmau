          <div class="row">
                 <div class="row header">
                     <h1>THÊM MỚI sản phẩm</h1>
                 </div>
              
                 <div class="row formcontent">
                     <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                         <div class="row mb10">
                         <label>mã danh mục </label> <br>   
                         <select name="madm">
                       <?php
                          $danhmuc= loaddanhsach();
                          foreach ($danhmuc as $list)
                          {
                      extract($list);
                      echo '<option value="'.$ma_loai.'">'.$ten_loai.'</option>';
                             } 
                         ?> 
                         </select>

                         </div>
                         
                         <div class="row mb10">
                         <label>tên hàng hóa</label> <br>    
                         <input type="text" name="ten_hh">
                         </div>
                         
                         <div class="row mb10">
                         <label>giá</label> <br>    
                         <input type="number" name="don_gia">
                         </div>
                         
                         <div class="row mb10">
                         <label>hình ảnh</label> <br>    
                         <input type="file" name="hinh">
                         </div>
                         
                         <div class="row mb10">
                         <label>mô tả</label> <br>    
                         <input type="text" name="mo_ta">
                         </div>
                         
                         <div class="row mb10">
                            
                         <input type="submit" name="themmoi" value="thêm mới">
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

    if(isset($_POST['themmoi'])){
        $ma_loai=$_POST['madm'];
       $tensp=$_POST['ten_hh'];
       $gia=$_POST['don_gia'];
       $filename=$_FILES['hinh']['name'];
       $target_dir = "../upload/";
       $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
   if (move_uploaded_file($_FILES["hinh"]["name"], $target_file)) {
    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    //echo "Sorry, there was an error uploading your file.";
  }
       $mota=$_POST['mo_ta'];
       $sql="insert into hang_hoa(ten_hh,don_gia,hinh,mo_ta,ma_loai) value(?,?,?,?,?)";
      pdo_execute($sql,$tensp,$gia,$filename,$mota,$ma_loai);
      $thongbao="thêm thành công";
 }
?>