<?php
          if(isset($_GET['id'])){     
          $ID=$_GET['id'];
          $sql="delete from bill where id=$ID";
           pdo_execute($sql);
           include 'donhang/list.php';
        } 
?>

