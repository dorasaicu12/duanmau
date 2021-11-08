<?php
          if(isset($_GET['id'])){     
          $ID=$_GET['id'];
          deletesanpham($ID);
           include 'sanpham/list.php';
        } 
?>

