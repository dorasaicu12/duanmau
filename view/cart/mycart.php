 
                  

             <div class="row mb ">
                      <div class="boxtitle">giỏ hàng của <?=$_SESSION['user']['ten_kh'];?></div>
                      <div class="row mb10 formds">
                        <table>                     
                          <tr>
                              <th>người mua</th>
                              <th>email</th>
                              <th>địa chỉ</th>
                              <th>tổng tiền</th> 
                              <th>phương thức thanh toán</th>
                              <th>ngày chốt</th>
                              <th>trạng thái</th>
                              <th></th>
                          </tr>
                          <?php
                 
                          $username=$_SESSION['user']['ten_kh'];
                          $sql="select * from bill where billname='$username'";
                          $cart2= pdo_query($sql);
                          foreach ($cart2 as $cart){
                          extract($cart);
                          $suasp='index1.php?act=chitiet&id='.$id;
                            
                              echo '    <tr>
                              <td>'.$billname.'</td>
                              <td>'.$billemail.'</td>
                              <td>'.$billaddress.'</td>
                              <td>'.$total.'</td> 
                             <td>'.$billpttt.'</td>
                             <td>'.$date.'</td>
                             ';
                              if($billstatus==0){
                                  echo '<td>đã thanh toán</td>';
                              }elseif ($billstatus==1) {
                                      echo '<td>đang giao</td>';
                              } else {
                                  echo '<td>hủy đơn</td>';
                              }
                              
                              echo '<td> <a href="'.$suasp.'"> <input type="button"  value="chi tiết"> </a> </td> '
                              . '</tr>';   
                            
                          }
                            
                          ?>

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