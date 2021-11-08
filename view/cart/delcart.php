<?php
               if(isset($_GET['id'])){
                  unset($_SESSION['mycart'][$_GET['id']]);
                   
               } else {
                   $_SESSION['mycart']=[];
               }
            header("location:index1.php?act=viewcart");
?>