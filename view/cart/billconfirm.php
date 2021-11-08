<?php
          $tong=0;
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
                
                          }
                          
if(isset($_POST['sethang'])){
    $name=$_POST['name'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $tel=$_POST['tel'];
    $pttt=$_POST['pttt'];
    $ngaydathang=date('h:i:sa d/m/y');
    $tongdonhang=$tong;
    
  $idbill= insert_bill($name,$address,$tel,$email,$pttt,$tongdonhang,$ngaydathang);
  //inset into cart
  foreach ($_SESSION['mycart'] as $cart){
     $idcart=$_SESSION['user']['ma_kh'];
     $idpro=$cart[0];
     $namepro=$cart[1];
     $imgpro=$cart[2];
     $pricepro=$cart[3];
     $soluong=$cart[4];
     $thanhtien=$cart[5];
     $sql="insert into cart(iduser,idpro,name,img,price,soluong,thanhtien,idbill) value(?,?,?,?,?,?,?,?)";
     pdo_execute($sql,$idcart,$idpro,$namepro,$imgpro,$pricepro,$soluong,$thanhtien,$idbill);
  }

  $_SESSION['mycart']=[];
}



?>
<?php 

$id=$idbill;
     $sql="select * from bill where id=$id";
     $danhmuc= pdo_query_one($sql);
$listbill= $danhmuc;
if(isset($listbill)){
    extract($listbill);
}
?>
                    <div class="row mb ">
                      <div class="boxtitle">thông tin đặt hàng</div>
                      <div class="row boxtcontent mb10 formds">
                          <li>MÃ ĐƠN HÀNG:<?=$listbill['id'] ?> --</li> <li>NGÀY ĐƠN HÀNG:<?=$listbill['date'] ?> </li>--
                          <li>PHƯƠNG THỨC THANH TOÁN:<?php if($listbill['billpttt']==0){echo'trả tiền khi nhận hành';}elseif ($listbill['billpttt']==1) {
    echo'thanh toán thẻ';
} else {
    echo'thoanh toán onl';
} ?> </li>
                     </div>
                   </div>

                    <div class="row mb ">
                      <div class="boxtitle">thông tin đặt hàng</div>
                      <div class="row boxtcontent mb10 formds">
                        <table>
                          <tr>
                              <td>người đặt hàng</td>
                              <td><?=$listbill['billname']?> </td>
                          </tr>
                          
                          <tr>
                              <td>địa chỉ</td>
                              <td><?=$listbill['billaddress']?> </td>
                          </tr>
                          
                          <tr>
                              <td>email</td>
                              <td><?= $listbill['billemail']?> </td>
                          </tr>
                          
                          <tr>
                              <td>điện thoại</td>
                              <td><?=$listbill['billtel']?> </td>
                          </tr>
        
                       </table>
                     </div>
                   </div>

                 <div class="row mb formds">
                       <div class="boxtitle">phương thức thanh toán</div>
                      <div class="row boxtcontent mb10 formds">
                        <table>                     
                          <tr>
                              <td><input type="radio" name="pttt" id="" checked=""> trả tiền khi nhận hàng </td>
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
                             
                          </tr>';
                              $i+=1;  
                          }
                          echo '<tr>
                              <td colspan="4">tổng đơn hàng</td>
                              <td>'.$thanhtien.'.VNĐ</td>
                                 
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

