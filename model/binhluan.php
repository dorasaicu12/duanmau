<?php

  function loadbinhluan(){
     $sql="select * from binhluan";
     $khachhang= pdo_query($sql);
     return $khachhang;
 }
  function deletebinhluan($ID){  
           $sql="delete from binhluan where ma_bl=$ID";
           pdo_execute($sql);
 }
?>
