          <div class="row">
                 <div class="row header">
                     <h1>THÊM MỚI HÀNG HÓA</h1>
                 </div>
              <?php 
              if(isset($_GET['id'])){
                $ma_loai=$_GET['id'];
                  $sql="select * from bill where id=$ma_loai";
                $update= pdo_query_one($sql);
                extract($update) ;
              }
              ?>
          <div class="row">
                 <div class="row header">
                     <h1>THÊM MỚI sản phẩm</h1>
                 </div>
              
                 <div class="row formcontent">
                     <form action="index.php?act=updatett&id=<?=$_GET['id']?>" method="post" enctype="multipart/form-data">
                         <div class="row mb10">
                         <label>trạng thái hiện tại</label> <br>   
                         <input type="text" name="ma_loai" value="<?php if($billstatus==0){echo 'đã thanh toán';}elseif ($billstatus==1){echo 'đang giao';} else {
    echo 'đã hủy đơn';
}  ?>" disabled>
                         </div>
                         
                         <div class="row mb10">
                       <label>mã danh mục </label> <br>   
                         <select name="madm">
                         <option value="0">đã thanh toán</option>
                         <option value="1">đã giao</option>   
                         <option value="2">đã hủy đơn hàng</option>
                         </select>
                         </div>
                         
                         <div class="row mb10">
                            
                         <input type="submit" name="sualoai" value="cập nhập">
                         <input type="reset"  value="nhập lại">
                         <a href="index.php?act=listsp">  <input type="button"  value="danhsach"> </a>
                         </div>
                     </form>
                 </div>
         
         
              
              
              
              

          </div>
<?php
 echo ''.$_GET['id'];
 if(isset($_POST['sualoai'])){
      $ma_loai=$_GET['id'];
      $trangthai=$_POST['madm'];
      $sql="update bill set billstatus=$trangthai where id=$ma_loai";
      pdo_execute($sql);
      header("location:index.php?act=dsdh");
 }
?>