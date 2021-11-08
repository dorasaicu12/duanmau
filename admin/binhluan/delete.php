<?php
          if(isset($_GET['id'])){     
          $ID=$_GET['id'];
          deletebinhluan($ID);
           header("location:index.php?act=dsbl");
        } 
?>

