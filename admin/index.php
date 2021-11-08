<?php 
include 'header.php';
include '../model/danhmuc.php';
include '../model/sanpham.php';
include '../model/taikhoan.php';
include '../model/binhluan.php';
include 'PDO.php';
if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch ($act){
        case 'adddm':
        include 'danhmuc/add.php';    
        break;
    
        case 'listdm':
        include 'danhmuc/list.php';    
        break;  
        
        case 'xoadm':
           include 'danhmuc/delete.php';
        break;
    
         case 'suadm':
           include 'danhmuc/update.php';
        break;
        /*controler cho sản phẩm*/
            case 'addsp':
        include 'sanpham/add.php';    
        break;
    
        case 'listsp':
        include 'sanpham/list.php';    
        break;  
        
        case 'xoasp':
           include 'sanpham/delete.php';
        break;
    
         case 'updatesp':
             
           include 'sanpham/update.php';
        break;
    
         case 'dskh':
           include 'taikhoan/list.php';
        break;
    
         case 'dsbl':
           include 'binhluan/list.php';
        break;
    
    
         case 'xoabl':
           include 'binhluan/delete.php';
        break;
    
    
          case 'xoadh':
           include 'donhang/delete.php';
        break;
    
          case 'dsdh':
           include 'donhang/list.php';
        break;
    
          case 'thongke':
          $listthongke= load_allthongke();
            
           include 'thongke/list.php';
        break;
    
              case 'updatett':
           include 'donhang/update.php';
        break;
    
        default :
        include 'home.php';
        break;
    }
    
} else {
   include 'home.php'; 
}
include 'footer.php';
?>
