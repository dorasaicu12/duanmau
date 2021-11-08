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
                      <div class="boxtitle">quên mật khẩu</div>
                      <div class="boxtcontent row dangky">
         
                          <form class="reg" action="index1.php?act=quenmk"method="post">
      
                              
                         <?php
                        if(isset($_POST['submit'])){

                   $email=$_POST['email'];
                    $check= checkemail($email);
                   if(is_array($check)){
                  $thongbao="mat khẩu bạn là".$check['mat_khau'];
                 } else {
                     $thongbao="email ko ton tai";
                 }
             }
             ?>
                              
                           <div class="row mb10">
                               <label>email</label><br> 
                               <input type="email" name="email"><br>
                           </div>

                             
                           <div class="row mb10">   
                               <input type="submit" value="gửi email" name="submit">
                               <input type=reset value="nhập lại" >
                           </div>   
                              <li><a href="#">đăng nhập</a></li>
                         <h2>
                           <?php             if(isset($thongbao)){
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
