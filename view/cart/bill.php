<form action="index1.php?act=billconfirm" method="post" class="row">                                
                    <div class="row mb ">
                      <div class="boxtitle">giỏ hàng</div>
                      <div class="row boxtcontent mb10 formds">
                        <table>
                            <?php if(isset($_SESSION['user'])){
                               $name=$_SESSION['user']['ten_kh'] ;
                               $email=$_SESSION['user']['email'] ;
                               $tel=$_SESSION['user']['sodt'] ;
                            } else {
                               $name="" ;
                               $email="" ;
                               $tel="" ;
                            } 
                                ?>
                          <tr>
                              <td>người đặt hàng</td>
                              <td><input type="text" name="name" id="" value="<?=$name?>"> </td>
                          </tr>
                          
                          <tr>
                              <td>địa chỉ</td>
                              <td> <input type="text" name="address" id="" > </td>
                          </tr>
                          
                          <tr>
                              <td>email</td>
                              <td><input type="text" name="email" id=""value="<?=$email?>">> </td>
                          </tr>
                          
                          <tr>
                              <td>điện thoại</td>
                              <td><input type="text" name="tel" id=""value="<?=$tel?>">> </td>
                          </tr>
        
                       </table>
                     </div>
                   </div>

                 <div class="row mb formds">
                       <div class="boxtitle">phương thức thanh toán</div>
                      <div class="row boxtcontent mb10 formds">
                        <table>                     
                          <tr>
                              
                              <td><input type="radio" name="pttt" id="" checked="" value="0"> trả tiền khi nhận hàng </td>
                              <td><input type="radio" name="pttt" id="" value="1"> chuyển khoản </td> 
                              <td><input type="radio" name="pttt" id="" value="2"> thanhtoan1 online </td>
                          </tr>
                          
                          
 
        
                       </table>
                     </div>
                 </div>
                  

             <div class="row mb ">
                      <div class="boxtitle">giỏ hàng</div>
                      <div class="row mb10 formds">
                        <table>                     
                          <tr>
                              <th>hình</th>
                              <th>sản phẩm</th>
                              <th>đơn giá</th>
                              <th>số lượng</th> 
                              <th>thành tiền</th>
         
                          </tr>
                          <?php
                          $tong=0;
                          $i=0;
                          foreach ($_SESSION['mycart'] as $cart){
                         $imgpath="./upload/".$cart[2];
                          if(is_file($imgpath)){
                              $hinhp="<img src='".$imgpath."' height='80'>";
                          } else {
                              $hinhp="no photo";
                          }
                          settype($cart[3], "int");
                          settype($cart[4], "int");
                              $thanhtien=$cart[3] * $cart[4];
                              $tong=$tong+$thanhtien;
                              $xoadh="<a href='index1.php?act=del&id=".$i." '> <input type='button'  value='xóa'> </a>";
                             $xoaall="<a href='index1.php?act=del&id".$i." '> <input type='button'  value='xóa hết'> </a>";
                              echo '    <tr>
                              <td>'.$hinhp.'</td>
                            
                              <td>'.$cart[1].'</td>
                              <td>'.$cart[3].'</td>
                              <td>'.$cart[4].'</td> 
                              <td>'.$thanhtien.'.VNĐ</td>   
                          </tr>';
                              $i+=1;
                              
                              
                          }
                          echo '<tr>
                              <td colspan="4">tổng đơn hàng</td>
                              <td>'.$tong.'.VNĐ</td>
                                 
                                </tr>';
                          


   

                          ?>
                 <div class="row mb formds">
                     <input type="submit" value="đồng ý đặt hàng" name="sethang"> 
                 </div>
                       </table>

                         
                          <style>
            .formds table{
        width: 100%;
        border-collapse: collapse;
        
    }
    .formds table th{
    
        background-color: #ccc;
    }
    /*
     .formds table th:nth-child(2){
        width: 30%;
        padding: 20px;
        background-color: #ccc;
    }
     .formds table th:nth-child(3){
        width: 50%;
        background-color: #ccc;
    }
     .formds table th:nth-child(4){
        width: 20%;
        background-color: #ccc;
    }
    */
    .formds table td{
     padding: 10px 20px; 
     border: 1px #ccc solid;
    }
                          </style>
                      </div>
                      
                  </div>
             </form>
<?php

?>


                      
                  
