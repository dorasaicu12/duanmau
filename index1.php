<?php
session_start();
require 'model/sanpham.php';
require 'model/danhmuc.php';
require 'model/PDO.php';
require 'model/taikhoan.php';
 require 'view/header.php';
 
 if(!isset($_SESSION['mycart'])){
     $_SESSION['mycart']=[];
 }
 if((isset($_GET['act']))){
     $act=$_GET['act'];
     switch ($act){
         case'gioithieu':
           include 'view/gioithieu.php';
             break;
         
          case'lienhe':
           include 'view/lienhe.php';
           break;
       
           case'sanphamchitiet':
           include 'view/sanphamchitiet.php';
           break;
       
           case'sanpham':
           include 'view/sanpham.php';
           break;
       
         case'dangky':
           include 'view/taikhoan.php';
           break;
         
          case'edittk':
           include 'view/edittk.php';
           break;

           case'quenmk':
           include 'view/quenmk.php';
           break;
       
           case'thoat':
           session_unset();
           header("location:index1.php");  
           break;
       
           case'addtocart':
            if(isset($_POST['addtocart'])){
              $id=$_POST['id'];
              $name=$_POST['name'];
              $price=$_POST['price'];
              $img=$_POST['img'];
              $soluong=$_POST['quantity'];
              settype($price, "int");
              settype($soluong, "int");
              $tien=$soluong*$price;
              $spadd=[$id,$name,$img,$price,$soluong,$tien];
              array_push($_SESSION['mycart'],$spadd);
              
          } 
           include 'view/cart/viewcart.php';
           break;
           
           case'del':
               include 'view/cart/delcart.php';
           break;
           
           case'viewcart':
         include 'view/cart/viewcart.php';
           break;
       
        case'bill':
         include 'view/cart/bill.php';
           break;
       
        case'billconfirm':
         include 'view/cart/billconfirm.php';
        break;
    
         case'mycart':
         include 'view/cart/mycart.php';
           break;
       
         case'chitiet':
         include 'view/cart/chitiet.php';
           break;
       
         default :
             include 'view/home.php';
             break;
     }
 } else {
      include 'view/home.php';
}

 include 'view/footer.php';
?>
