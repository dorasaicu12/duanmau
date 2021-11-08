<style>
    .chitiet img{
        width: 100%;
        height: 300px;
    }
    .mota{
        font-size: 30px;
        
    }
    .chitiet ul li{
      font-size: 20px;
        font-weight: bold;
    }
</style>

<div class="row mb">
           <div class="boxtrai mr ">
               <div class="row mb chitiet">
                      <div class="boxtitle">chi tiết sản phẩm</div>
                      <div class="boxtcontent row ">
               <?php
              if(isset($_GET['id'])){
               $ma_loai=$_GET['id'];
               $sql="update hang_hoa set so_luot_xem=so_luot_xem+1 where ma_hh=$ma_loai";
                pdo_execute($sql);
                $update= loadtheosanpham($ma_loai);
                extract($update) ;
              }
               ?>           
                          <img src="./upload/<?=$hinh?>">
               <ul>
                  <li><?=$ten_hh?></li>
                  <li><?=$don_gia?></li>
                  <li><?=$so_luot_xem?></li>
                  <li><?=$giam_gia?></li>
              </ul>
                          <div class="row">
                              <p class="mota"><?=$mo_ta?> </p><br>
                          </div>
                      </div>
                </div>      
                      
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
               <script>
                $(document).ready(function(){

                $("#binhluan").load("view/binhluan/binhluanform.php",{idpro:<?=$ma_hh?>});

                      });
               </script>
               
               
               <div class="row mb" id="binhluan">
               
                </div>
               
               
               <div class="row mb">
                      <div class="boxtitle">sản phẩm cùng loại</div>
                      <div class="boxtcontent row">
                               <?php
              if(isset($_GET['idloai'])){
              $ma_loai=$_GET['idloai'];  
             $sql="select * from hang_hoa where ma_loai =$ma_loai";
             $danhmuc= pdo_query($sql);
             foreach ($danhmuc as $update)
             
             {
                  extract($update) ;
            $link="index1.php?act=sanphamchitiet&id=$ma_hh&idloai=$ma_loai";
              echo '
                  <div class="row">
                  <ul>
              <li><a href="'.$link.'">'.$ten_hh.'</a></li>
              </ul>
              </div>
              '; 
             }
              }
               
               ?>           

                      </div>
                </div>
           </div>
              
              
              
                <?php 
                                   include 'boxright.php';
              ?>
          </div>
<script>
    var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>