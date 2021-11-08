<?php
 function loadsanpham(){
     $sql="select * from hang_hoa";
     $danhmuc= pdo_query($sql);
     return $danhmuc;
 }
  function loadsanpham_home(){
     $sql="select * from hang_hoa order by ma_hh ASC LIMIT 10";
     $danhmuc= pdo_query($sql);
     return $danhmuc;
 }
   function loadsanpham_home_top10(){
     $sql="select * from hang_hoa order by so_luot_xem desc LIMIT 10";
     $danhmuc= pdo_query($sql);
     return $danhmuc;
 }
 
 function deletesanpham($ID){  
           $sql="delete from hang_hoa where ma_hh=$ID";
           pdo_execute($sql);
 }
 function loadtheosanpham($ma_loai){
                $sql="select * from hang_hoa where ma_hh=$ma_loai";
                $update= pdo_query_one($sql);
                return $update;
 }
 function updatetheosanpham($ma_loai){
   $ten_hh=$_POST['ten_hh'];
   $gia=$_POST['don_gia'];
   $ma_hh=$_GET['id'];
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
   if($filename!=""){
      $sql="update hang_hoa set ten_hh=?,don_gia=?,hinh=?,giam_gia=?,mo_ta=?,ma_loai=? where ma_hh=$ma_hh";
      pdo_execute($sql,$ten_hh,$gia,$filename,$giam_gia,$mo_ta,$ma_loai);
      
  } else {
     $sql="update hang_hoa set ten_hh=?,don_gia=?,giam_gia=?,mo_ta=?,ma_loai=? where ma_hh=$ma_hh";
      pdo_execute($sql,$ten_hh,$gia,$giam_gia,$mo_ta,$ma_loai);
  }
 }
 
 function insert_bill($name,$address,$tel,$email,$pttt,$tongdonhang,$ngaydathang){
      $sql="insert into bill(billname,billaddress,billtel,billemail,billpttt,total,date) value(?,?,?,?,?,?,?)";
      return pdo_execute_lastinsertid($sql,$name,$address,$tel,$email,$pttt,$tongdonhang,$ngaydathang);
 }
   function loadbill($id){  
     $sql="select * from bill where id=".$id;
     $danhmuc= pdo_query($sql);
     return $danhmuc;
 }
    function loadcart($idbill){
     $sql="select * from cart where idbill=".$idbill;
     $danhmuc= pdo_query($sql);
     return $danhmuc;
 }
?>
