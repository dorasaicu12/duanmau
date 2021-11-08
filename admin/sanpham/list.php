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
                  <form  method="post" action="index.php?act=listsp">
                          <select name="madm">
                       <?php
                          $danhmuc= loaddanhsach();
                          foreach ($danhmuc as $list)
                          {
                      extract($list);
                      echo '<option value="'.$ma_loai.'">'.$ten_loai.'('.$ma_loai.')</option>';
                             } 
                         ?> 
                         <input type="submit" name="chon" value="lọc hàng">
                         </select>
                     
                     
                     
                     <input type="text" name="tenhang" placeholder="nhập tên">          
                     <input type="submit" name="loc" value="tìm hàng">
                         </form>  
              </div>
              
              
                 <div class="row ">
                     <div class="row mb10 formds">
                              
                          <table>
                              <tr>
                                  <th></th>
                                  <th>MÃ HÀNG</th> 
                                  <th>TÊN SẢN PHẨM</th>
                                  <th>HÌNH</th>
                                  <th>GIÁ</th>
                                  <th>GIẢM GIÁ</th>
                                  <th>LƯỢT XEM</th>
                                  <th>NGÀY NHẬP</th>
                                  <th>MÔ TẢ</th>
                                  <th>MÃ LOẠI</th>
                                  <th></th>
                              </tr>
                             
                          <?php
                          if(isset($_POST['chon'])){
                             $madm= $_POST['madm'];
                             $sql="select * from hang_hoa where ma_loai like '%$madm%'";
                              $danhmuc= pdo_query($sql);
                          }elseif(isset($_POST['loc'])) {
                              $tenhang=$_POST['tenhang'];
                              $sql="select * from hang_hoa where ten_hh like '%$tenhang%' ORDER by ma_hh";
                              $danhmuc= pdo_query($sql);
                          } else {
                              $danhmuc= loadsanpham();
                              }
                          foreach ($danhmuc as $list)
                          {
                         extract($list);
                          $suasp='index.php?act=updatesp&id='.$ma_hh;
                          $xoasp='index.php?act=xoasp&id='.$ma_hh;
                          $imgpath="../upload/".$hinh;
                          if(is_file($imgpath)){
                              $hinhp="<img src='".$imgpath."' height='80'>";
                              
                          } else {
                              $hinhp="no photo";
                          }
                             echo '<tr>
                                  <td><input type="checkbox"></td>
                                  <td>'.$ma_hh.'</td> 
                                  <td>'.$ten_hh.'</td>
                                  <td>'.$hinhp.'</td>
                                  <td>'.$don_gia.'</td>
                                  <td>'.$giam_gia.'</td>
                                  <td>'.$so_luot_xem.'</td>
                                  <td>'.$ngay_nhap.'</td>   
                                  <td>'.$mo_ta.'</td>
                                  <td>'.$ma_loai.'</td>     
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

