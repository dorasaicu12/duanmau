<?php
 function checkuser($user,$password){
                $sql="SELECT * FROM khach_hang WHERE ten_kh='{$user}' AND mat_khau ='{$password}'";
                $khachhang= pdo_query_one($sql);
                return $khachhang;
 }
  function checkemail($email){
                $sql="SELECT * FROM khach_hang WHERE email='{$email}' ";
                $khachhang= pdo_query_one($sql);
                return $khachhang;
 }
  function loadkhachhang(){
     $sql="select * from khach_hang";
     $khachhang= pdo_query($sql);
     return $khachhang;
 }
?>

