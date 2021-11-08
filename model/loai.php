<?php
function loai_selectall(){
    $sql="select * from loai order by ma_loai";
    return pdo_query($sql);
}
function themoiloai($ten_loai){
    $sql="insert into loai(ten_loai)value(?)";
    pdo_execute($sql,$ten_loai);
}
//xoa
function xoaloai($ma_loai){
    $sql="delete from loai where ma_loai=?";
    pdo_execute($sql,$ma_loai);        
}

 function get_by_maloai($ma_loai){
     $sql="select * from loai where ma_loai=?";
     return pdo_query_one($sql,$ma_loai);
 }
 function sualoai($ma_loai,$ten_loai){
     $sql="update loai set ten_loai=? where ma_loai=?";
     pdo_execute($sql,$ten_loai,$ma_loai);
 }
?>
