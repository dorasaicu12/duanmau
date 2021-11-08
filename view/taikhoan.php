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
         
                          <form class="reg" action="index1.php?act=dangky"method="post">
                           <div class="row mb10 ">
                              <label>tên đang nhập</label><br> 
                              <input type="text" name="user"><br>
                           </div> 
                              
                           <div class="row mb10">
                               <label>mật khẩu</label><br> 
                               <input type="password" name="password"><br>
                           </div>
                              
                           <div class="row mb10">
                               <label>nhập lại mật khẩu</label><br> 
                               <input type="password" name="repass"><br>
                           </div>   
                              
                           <div class="row mb10">
                               <label>email</label><br> 
                               <input type="email" name="email"><br>
                           </div>
                           <div class="row mb10">
                               <label>số điện thoại</label><br> 
                               <input type="number" name="phone"><br>
                           </div>
                             
                           <div class="row mb10">   
                               <input type="submit" value="đăng ký" name="submit">
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

                      </div>  
                </div>      

 
           </div>
              
              
              
               <?php 
                                   include 'boxright.php';
              ?>
          </div>

                           <?php
     if(isset($_POST['submit'])){
    $loi="";
    $username=$_POST['user'];  
    $password=$_POST['password']; 
    $repass=$_POST['repass']; 
    $email=$_POST['email'];
    $sodt=$_POST['phone'];
    if($password!==$repass){
         $loi="mật khẩu nhập lại sai";
    }
        if($loi==""){
      $sql="insert into khach_hang(ten_kh,mat_khau,email,sodt) value(?,?,?,?)";
      pdo_execute($sql,$username,$password,$email,$sodt);
      $thongbao="thêm thành công"; 
        }


 }
?>

