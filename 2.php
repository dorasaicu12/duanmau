<?php
session_start();
if(isset($_SESSION['mycart'])){
    foreach ($_SESSION['mycart'] as $cart){
        echo 'ma sp:'.$cart[0]."<br>";
        echo 'ten sp:'.$cart[1]."<br>";
        echo 'gia sp:'.$cart[2]."<br>";
        echo 'sl sp:'.$cart[3]."<br>";
    }
}

echo '<h1>session d9a4 show</h1>';
echo '<a href=1.php">chuyen qua khoi tao</a>';
echo '<a href=3.php">chuyen qua xoa</a>';
?>