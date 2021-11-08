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
              
                 <div class="row ">
                     <div class="row mb10 formds">
                          <table>
                              <tr>
                                  <th></th>
                                  <th>MÃ LOẠI</th> 
                                  <th>TÊN LOẠI</th>
                                  <th></th>
                              </tr>
                          <?php
                          
                          $danhmuc= loaddanhsach();
                          foreach ($danhmuc as $list)
                          {
                      extract($list);
                          $suadm='index.php?act=suadm&id='.$ma_loai;
                          $xoadm='index.php?act=xoadm&id='.$ma_loai;
                             echo '<tr>
                                  <td><input type="checkbox"></td>
                                  <td>'.$ma_loai.'</td> 
                                  <td>'.$ten_loai.'</td>
                                  <td>
                                  
                                 <a href="'.$suadm.'"> <input type="button"  value="sửa"> </a>
                                  
                                 <a href="'.$xoadm.'"> <input type="button"  value="xóa"> </a>
                                  
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
                         <a href="admin.php">  <input type="button"  value="nhập thêm"> </a>
                      </div>
                 </div>
          </div>
      </div>
  </body>
</html>

