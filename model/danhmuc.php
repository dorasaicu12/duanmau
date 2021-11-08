<?php
 function loaddanhsach(){
     $sql="select * from loai";
     $danhmuc= pdo_query($sql);
     return $danhmuc;
 }
 function delete($ID){
     
           $sql="delete from loai where ma_loai=$ID";
           pdo_execute($sql);
 }
 function loadtheoloai($ma_loai){
                $sql="select * from loai where ma_loai=$ma_loai";
                $update= pdo_query_one($sql);
                return $update;
 }
 function updatetheoloai($ma_loai){
      $ten_loai=$_POST['tenloai'];
      $ma_loai=$_GET['id'];
      $sql="update loai set ten_loai='$ten_loai' where ma_loai=$ma_loai";
      pdo_execute($sql);
 }
 function load_allthongke(){
     $sql="select loai.ma_loai as ma,loai.ten_loai as name ,count(hang_hoa.ma_hh) as countsp,min(hang_hoa.don_gia) as minprice,max(hang_hoa.don_gia) as maxprice,avg(hang_hoa.don_gia) as avg from loai join hang_hoa on loai.ma_loai=hang_hoa.ma_loai group by loai.ma_loai and loai.ten_loai";
     $listk= pdo_query($sql);
     return $listk;
 }
 
  function load_allthongke2(){
     $sql="select loai.ma_loai as ma,loai.ten_loai as name ,count(hang_hoa.ma_hh) as countsp,min(hang_hoa.don_gia) as minprice,max(hang_hoa.don_gia) as maxprice,avg(hang_hoa.don_gia) as avg from hang_hoa left join loai on loai.ma_loai=hang_hoa.ma_hh group by loai.ma_loai and loai.ten_loai";
     $listk= pdo_query($sql);
     return $listk;
 }
?>
