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
                     <h1>DANH SÁCH ĐƠN HÀNG</h1>
                 </div>
              
              
              <div class="row searchbar">
                  <form  method="post" action="index.php?act=dsdh">
                          <select name="madm">
                       <?php
               $sql="SELECT * FROM khach_hang order by ma_kh ";
                $khachhang= pdo_query($sql);
                          foreach ($khachhang as $list)
                          {
                      extract($list);
                      echo '<option value="'.$ten_kh.'">'.$ten_kh.'</option>';
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
                              <th>người mua</th>
                              <th>email</th>
                              <th>địa chỉ</th>
                              <th>tổng tiền</th> 
                              <th>trạng thái</th>
                              <th>ngày chốt</th>
                              <th></th>
                              <th>thao tác</th>
                            </tr>
                             
                          <?php
                          if(isset($_POST['chon'])){
                             $madm= $_POST['madm'];
                             $sql="select * from bill where billname like '%$madm%'";
                              $danhmuc= pdo_query($sql);
                          }elseif(isset($_POST['loc'])) {
                              $tenhang=$_POST['tenhang'];
                              $sql="select * from bill where billname like '%$tenhang%' ORDER by ma_hh";
                              $danhmuc= pdo_query($sql);
                          } else {
                          $sql="select * from bill  ORDER by id";
                          $danhmuc= pdo_query($sql);
                              }
                          foreach ($danhmuc as $list)
                          {
                         extract($list);
                          $suasp='index.php?act=updatett&id='.$id;   
                          $imgpath="../upload/".$hinh;
                          if(is_file($imgpath)){
                              $hinhp="<img src='".$imgpath."' height='80'>";
                              
                          } else {
                              $hinhp="no photo";
                          }
                             echo '<tr>
                             <td>'.$billname.'</td>
                              <td>'.$billemail.'</td>
                              <td>'.$billaddress.'</td>
                              <td>'.$total.'</td>'; 
                             
          if($billstatus==0){echo '<td>đã thanh toán</td>';}elseif ($billstatus==1){echo '<td>đang giao</td>';} else {
                              echo '<td>đã hủy đơn</td>';
}
                             echo ';<td>'.$date.'</td>
                             <td> <a href="'.$suasp.'"> <input type="button"  value="chi tiết"> </a> </td>   
                                  <td>
                                  
                                 <a href="'.$suasp.'"> <input type="button"  value="sửa trạng thái"> </a>
    
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

