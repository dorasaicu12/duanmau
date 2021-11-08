              <div class="boxphai mr ">
                  <div class="row mb10 ">
                      <div class="boxtitle">tài khoản</div>
                      <div class="boxtcontent formtaikhoan">
                       <?php
                            if(isset($_POST['dangnhap'])){
                            $user=$_POST['user'];
                            $password=$_POST['password'];
                            $check= checkuser($user,$password);
                            if(is_array($check)){
                              $_SESSION['user']=$check;
                              header("location:index1.php");
                              $thongbao="dang nhập thành công";
                              
                             } else {
                              $thongbao="tài khooan3 ko có";
                                 }
                           }
                       if(isset($_SESSION['user'])){
                           extract($_SESSION['user']);
                           ?>
                             <div class="row mb10">
                              xin chào<br> 
                              <?=$ten_kh?>

                           </div>
                      <div class="row mb10">
                        <li><a href="#">quên mật khẩu</a></li>
                      </div>
                          
                       <div class="row mb10">
                        <li><a href="index1.php?act=edittk&id=<?=$ma_kh?>">cập nhập tài khoản</a></li>
                      </div>    
     
                       <div class="row mb10">
                           <li><a href="index1.php?act=dangky">đăng ký</a></li>
                      </div>
                          <?php if($kichhoat==0) {?>
                       <div class="row mb10">
                           <li><a href="index1.php?act=quenmk">quên mật khẩu</a></li>
                      </div>  
                       <div class="row mb10">
                           <li><a href="index1.php?act=thoat">đăng xuất</a></li>
                      </div>
                          
                          <?php } else {?>
                      <div class="row mb10">
                           <li><a href="index1.php?act=quenmk">quên mật khẩu</a></li>
                      </div>  
                      <div class="row mb10">
                           <li><a href="admin/index.php">quản lý admin</a></li>
                      </div>
                       <div class="row mb10">
                           <li><a href="index1.php?act=thoat">đăng xuất</a></li>
                      </div>
                          
                        <?php   }?>
                      <?php } else {?>
                          <form action="index1.php"method="post">
                           <div class="row mb10">
                              <label>tên đang nhập</label><br> 
                              <input type="text" name="user"><br>
                           </div> 
                              
                           <div class="row mb10">
                               <label>mật khẩu</label><br> 
                               <input type="password" name="password"><br>
                           </div>
                              
                           <div class="row mb10">   
                              <input type="checkbox" >ghi nhớ tài khoản<br>
                           </div>
                              
                           <div class="row mb10">   
                              <input type="submit" name="dangnhap" value="đăng nhập">
                           </div>   
                              <li><a href="#">quên mật khẩu</a></li>
                              <li><a href="index1.php?act=dangky">đăng ký</a></li>
                          </form>
                       <?php } ?>
                        <?php 
                        
                        if(isset($thongbao)){
                          echo $thongbao;
                      } ?>
                      </div>
                  </div>
                  
                        
                  
                  <div class="row mb ">
                      <div class="boxtitle">danh mục</div>
                      <div class="boxtcontent2 menudoc">
                          <ul>
                          <?php
                          $danhmuc= loaddanhsach();
                          foreach ($danhmuc as $list)
                          {
                      extract($list);
                              $link="index1.php?act=sanpham&id=$ma_loai";
                             echo '<li><a href="'.$link.'">'.$ten_loai.'</a></li>';  
                             } 
                          ?> 
                          </ul>
                      </div>
                     <div class="boxfooter searchbox">
                         <form action="index1.php" method="post">
                             <input type="text" placeholder="tìm kiếm từ khóa" name="tenhang">
                             <input type="submit" value="tìm kiếm" name="find">
                        </form>   
                     </div>
                  </div>
                  
                  
                  
                 
                 <div class="row mb ">
                      <div class="boxtitle">top 10 yêu thích</div>
                      <div class="boxtcontent row">
                              <?php
   
                              $danhmuc= loadsanpham_home_top10(); 
                          foreach ($danhmuc as $list)
                          {
                         extract($list);
                          $suasp='index.php?act=updatesp&id='.$ma_hh;
                          $xoasp='index.php?act=xoasp&id='.$ma_hh;
                          $imgpath="./upload/".$hinh;
                          $link="index1.php?act=sanphamchitiet&id=$ma_hh&idloai=$ma_loai";
                          if(is_file($imgpath)){
                              $hinhp="<img src='".$imgpath."' height='80'>";
                              
                          } else {
                              $hinhp="no photo";
                          }
                        echo '<div class="row mb10 top10">
                              '.$hinhp.'
                              <a href="'.$link.'">'.$ten_hh.'</a>
                              <p>số lượt xem:'.$so_luot_xem.'</p>
                              </div>';  
                             } 
                          ?> 
                      </div>
                 </div>
              </div>
