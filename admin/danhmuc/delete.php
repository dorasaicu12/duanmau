<?php
          if(isset($_GET['id'])){     
          $ID=$_GET['id'];
          delete($ID);
           include 'danhmuc/list.php';
        } 
?>

