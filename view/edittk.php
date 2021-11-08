<style>

    .dangky form input[type="text"],input[type="password"],input[type="email"],input[type="number"]{
        width: 100%;
        height: 40px;
    }
    .reg{
       width: 100%; 
    }
</style>
<div class="row mb">
           <div class="boxtrai mr ">
               <div class="row mb chitiet">
                      <div class="boxtitle">chi tiết sản phẩm</div>
                      <div class="boxtcontent row dangky">
         <?php          if(isset($_SESSION['user'])){
                           extract($_SESSION['user']);
                          
                           ?>
                          <form class="reg" action="index1.php?act=edittk&id=<?=$ma_kh?>"method="post">
                          <div class="row mb10 ">
                              <label>mã khách hàng</label><br> 
                              <input type="text" name="ma_kh" value="<?=$ma_kh?>" disabled><br>
                           </div> 
                              
                           <div class="row mb10 ">
                              <label>tên đang nhập</label><br> 
                              <input type="text" name="user" value="<?=$ten_kh?>"><br>
                           </div> 
                              
                           <div class="row mb10">
                               <label>mật khẩu</label><br> 
                               <input type="password" name="password"value="<?=$mat_khau?>"><br>
                           </div>   
                           <div class="row mb10">
                               <label>email</label><br> 
                               <input type="email" name="email"value="<?=$email?>"><br>
                           </div>
                           <div class="row mb10">
                               <label>số điện thoại</label><br> 
                               <input type="number" name="phone"value="<?=$sodt?>"><br>
                           </div>
                             
                           <div class="row mb10">   
                               <input type="submit" value="cập nhập" name="submit">
                               <input type=reset value="nhập lại" >
                           </div>   
                              <li><a href="#">đăng nhập</a></li>
                        <h2>


                      <?php if(isset($loi)&&$loi!=""){
                            echo $loi;
                      }elseif(isset($thongbao)){
                          echo $thongbao;
                      } ?>
                      </h2>  
                          </form>
         <?php } ?>
                      </div>  
                </div>      

 
           </div>
              
              
              
              <?php 
                         include 'boxright.php';
              ?>
          </div>

                           <?php
     if(isset($_POST['submit'])){
         
         if(isset($_GET['id'])){
      $ma_kh=$_GET['id'];
      $username=$_POST['user'];  
      $password=$_POST['password']; 
      $email=$_POST['email'];
      $sodt=$_POST['phone'];
      $sql="update khach_hang set ten_kh=?,mat_khau=?,email=?,sodt=? where ma_kh=$ma_kh";
      pdo_execute($sql,$username,$password,$email,$sodt);
   
    
         }



 }
?>