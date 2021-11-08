
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    
    <title>Sign in & Sign up Form</title>
    <style>
        
    </style>
         <?php 
        session_start();
  
  require 'PDO.php';
  $idpro=$_REQUEST['idpro'];
  if(isset($_SESSION['user'])){
  $iduser=$_SESSION['user']['ma_kh'];
  }
  ?>
    <?php
  if(isset($_POST['find'])){
      $noidung=$_POST['binhluan'];
      $idpro=$_POST['idpro'];
      $iduser=$_POST['iduser'];
    $sql="insert into binhluan(ma_kh,ma_hh,noidung)value(?,?,?)";
    $kq=pdo_execute($sql,$iduser,$idpro,$noidung); 
    header("location:".$_SERVER['HTTP_REFERER']);
  }
  require 'css.php';
?>

 
  </head>
  <body>
                  <div class="row mb formds">
                      <div class="boxtitle">BÌNH LUẬN</div>
                      <div class="boxtcontent2 menudoc">
                          <table>
                                      <?php
                        
                              $idpro=$_REQUEST['idpro'];
                       
                              $sql="select * from binhluan where ma_hh like '%$idpro%'";
                              $danhmuc= pdo_query($sql);     
                          foreach ($danhmuc as $list)
                          {
                              extract($list);
                       $sql="select * from khach_hang where ma_kh like '%$ma_kh%'";
                       $khachhang= pdo_query($sql);
                        foreach ($khachhang as $guest)
                          {
                            extract($guest);
                             echo '<tr>
                                  <td><input type="checkbox"></td>
                                  <td>'.$ten_kh.'</td> 
                                  <td>'.$noidung.'</td>
                                  <td>'.$ngay_bl.'</td>
                         
                                
                                
                          
                                  </tr>'; 
                          }
                         
                             } 
                          ?>
                          </table>
                      </div>
                   <?php if(isset($_SESSION['user'])){
                           extract($_SESSION['user']);
                           ?>
                           <div class="boxfooter searchbox">
                         <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                             <input type="hidden" name="idpro" value="<?=$idpro?>">
                             <input type="hidden" name="iduser" value="<?=$iduser?>">
                             <input type="text" placeholder="bình luận ngay" name="binhluan">
                             <input type="submit" value="bình luận" name="find">
                        </form>   
                     </div>
                   <?php } ?>

                  </div>
  </body>

</html>