<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <title>dự án mẫu</title>
  </head>
  <body>
      <div class="boxcenter">
          <div class="row mb header">
              <h1>  quản lý danh mục</h1>>
          </div>

          <div class="row">
                 <div class="row header">
                     <h1>DANH SÁCH HÀNG HÓA</h1>
                 </div>
              
              
              <div class="row searchbar">
                  <form  method="post" action="index.php?act=dskh">

                     <input type="text" name="tenkhang" placeholder="nhập tên">          
                     <input type="submit" name="loc" value="tìm hàng">
                         </form>  
              </div>
              
              
                 <div class="row ">
                     <div class="row mb10 formds">
                              
                          <table>
                              <tr>
                                  <th></th>
                                  <th>MÃ Khách Hàng</th> 
                                  <th>TÊN KHÁCH HÀNG</th>
                                  <th>MẬT KHẨU</th>
                                  <th>EMAIL</th>
                                  <th>KICH HOẠT</th>
                                  <th>SỐ ĐIỆN THOẠI</th>
                                  <th></th>
                              </tr>
                             
                          <?php
                       if(isset($_POST['loc'])) {
                              $tenhang=$_POST['tenkhang'];
                              $sql="select * from khach_hang where ten_kh like '%$tenhang%' ORDER by ma_kh";
                              $danhmuc= pdo_query($sql);
                          } else {
                              $danhmuc= loadkhachhang();
                              }
                          foreach ($danhmuc as $list)
                          {
                         extract($list);
                          $suasp='index.php?act=updatekh&id='.$ma_kh;
                          $xoasp='index.php?act=xoakh&id='.$ma_kh;
                             echo '<tr>
                                  <td><input type="checkbox"></td>
                                  <td>'.$ma_kh.'</td> 
                                  <td>'.$ten_kh.'</td>
                                  <td>'.$mat_khau.'</td>
                                  <td>'.$email.'</td>
                                  <td>'.$kichhoat.'</td>
                                  <td>'.$sodt.'</td>
                                  <td>
                                 <a href="'.$suasp.'"> <input type="button"  value="sửa"> </a>
                                 <a href="'.$xoasp.'"> <input type="button"  value="xóa"> </a>
                                  </td>
                                  </tr>';  
                             } 
                          ?>    

               
                          </table>
                     </div>
                     
                         
                      <div class="row mb10">

                      </div>
                     
                         
                      <div class="row mb10">
                            
                         <input type="button"  value="chọn tất cả">
                         <input type="button"  value="bỏ chọn tất cả">
                         <input type="button"  value="xóa cac muc đã chọn">
                         <a href="index.php?act=addsp">  <input type="button"  value="nhập thêm"> </a>
                      </div>
                 </div>
          </div>
      </div>
  </body>
</html>