     <?php if(isset($_GET['id'])) {?>       
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
                          $id=$_GET['id'];
                          $sql="select * from cart where idbill=$id";
                          $cart2= pdo_query($sql);
                          foreach ($cart2 as $cart){
                              extract($cart);
                         $imgpath="./upload/".$img;
                          if(is_file($imgpath)){
                              $hinhp="<img src='".$imgpath."' height='80'>";
                          } else {
                              $hinhp="no photo";
                          }
              
                              echo '    <tr>
                              <td>'.$hinhp.'</td>
                            
                              <td>'.$name.'</td>
                              <td>'.$price.'</td>
                              <td>'.$soluong.'</td> 
                              <td>'.$idbill.'.VNĐ</td>
                               
                          </tr>';
                          
                          }
                
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
     <?php } ?>