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
                                  <th>Mã danh mục</th>
                                  <th>LOẠI HÀNG</th> 
                                  <th>SỐ LƯỢNG</th>
                                  <th>GIÁ CAO NHẤT</th>
                                  <th>GIÁ THẤP NHẤT</th>
                                  <th>GIÁ TRUNG BÌNH</th>
                              </tr>
                              
                              <?php
                              foreach ($listthongke as $thongke){
                                  extract($thongke);
                                 //lấy của phần loại hàng 
                         echo '<tr>
                                  <td>'.$name.'</td> 
                                  <td>'.$ma.'</td>
                                  <td>'.$countsp.'</td>
                                  <td>'.$minprice.'</td>   
                                  <td>'.$maxprice.'</td>
                                  <td>'.$avg.'</td>     
                              </tr>    
                              ';
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
