            <div class="row">
                 <div class="row header">
                     <h1>THÊM MỚI HÀNG HÓA</h1>
                 </div>
              <?php 
              if(isset($_GET['id'])){
                  $ma_loai=$_GET['id'];
                $update= loadtheosanpham($ma_loai);
                extract($update) ;
              }
              ?>
          <div class="row">
                 <div class="row header">
                     <h1>THÊM MỚI sản phẩm</h1>
                 </div>
              
                 <div class="row formcontent">
                     <form action="index.php?act=updatesp&id=<?=$ma_hh?>" method="post" enctype="multipart/form-data">
                         <div class="row mb10">
                         <label>mã hàng hóa</label> <br>   
                         <input type="text" name="ma_hh" value="<?=$ma_hh?>" disabled>
                         </div>
                         
                         <div class="row mb10">
                         <label>tên hàng hóa</label> <br>    
                         <input type="text" name="ten_hh" value="<?=$ten_hh?>">
                         </div>
                         
                         <div class="row mb10">
                         <label>giá</label> <br>    
                         <input type="number" name="don_gia" value="<?=$don_gia?>">
                         </div>
                         
                         <div class="row mb10">
                         <label>hình ảnh</label> <br>    
                         <input type="file" name="hinh">
                         </div>
                         
                         <div class="row mb10">
                         <label>giam_gia</label> <br>    
                         <input type="text" name="giam_gia" value="<?=$giam_gia?>">
                         </div>
                         
                         <div class="row mb10">
                         <label>mô tả</label> <br>    
                         <input type="text" name="mo_ta" value="<?=$mo_ta?>">
                         </div>
                        <label>mã danh mục </label> <br>   
                         <select name="madm">
                         <option value="<?=$ma_loai?>"><?=$ma_loai?></option>    
                       <?php
                          $danhmuc= loaddanhsach();
                          foreach ($danhmuc as $list)
                          {
                      extract($list);
                      echo '<option value="'.$ma_loai.'">'.$ten_loai.'('.$ma_loai.')</option>';
                             } 
                         ?> 
                         </select>
                         
                         <div class="row mb10">
                            
                         <input type="submit" name="capnhap" value="cập nhập">
                         <input type="reset"  value="nhập lại">
                         <a href="index.php?act=listsp">  <input type="button"  value="danhsach"> </a>
                         </div>
                     </form>
                 </div>

          </div>
<?php
 if(isset($_POST['capnhap'])&&$_POST['capnhap']){
   $ten_hh=$_POST['ten_hh'];
   $gia=$_POST['don_gia'];
   $giam_gia=$_POST['giam_gia'];
   $giam_gia=$_POST['giam_gia'];
   $mo_ta=$_POST['mo_ta'];
   $ma_loai=$_POST['madm'];
   $filename=$_FILES['hinh']['name'];
   $target_dir = "../upload/";
   $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
   if (move_uploaded_file($_FILES["hinh"]["name"], $target_file)) {
    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    //echo "Sorry, there was an error uploading your file.";
  }
  $ma_hh=$_POST['ma_hh'];
  updatetheosanpham($ma_loai);

 }
?>


