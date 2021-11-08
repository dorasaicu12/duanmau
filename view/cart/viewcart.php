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
                              <th>thao tác</th>    
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
                              <td>'.$cart[0].'</td>
                              <td>'.$cart[4].'</td> 
                              <td>'.$thanhtien.'.VNĐ</td>
                              <td> '.$xoadh.' </td>    
                          </tr>';
                              $i+=1;
                          }
                          echo '<tr>
                              <td colspan="4">tổng đơn hàng</td>
                              <td>'.$tong.'.VNĐ</td>
                                 
                                </tr>';
                          if(isset($xoaall)){
                              echo ' <td>'.$xoaall.'</td>';
                          }
                                 echo '

                                </tr>';
                          ?>
                       </table>
                 <div class="row mb formds">
                     <a href="index1.php?act=bill" ><input type="submit" value="đồng ý đặt hàng"> </a>
                 </div>     
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
