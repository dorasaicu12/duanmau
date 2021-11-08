 <div class="row mb">
               <?php 
                                include 'boxright.php';
              ?>
           <div class="boxtrai mr ">
             <div class="row">
                 <div class="banner">
                     <!-- Slideshow container -->
                  <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="https://znews-photo.zadn.vn/w660/Uploaded/mdf_vsxrlu/2021_02_18/air.jpg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="https://kiotgiay.com/wp-content/uploads/2018/04/WMNS-Shattered-Backboard-AJ1-9.jpg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="http://dqshop.vn/wp-content/uploads/2021/08/phoi-do-voi-giay-jordan-1-high-shadow-2-0-3.jpg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
                  </div>
                 
              </div>
               
                <div class="row">    
                        <?php
                      if(isset($_POST['find'])){
                              $tenhang=$_POST['tenhang'];
                              $sql="select * from hang_hoa where ten_hh like '%$tenhang%' ORDER by ma_hh";
                              $danhmuc= pdo_query($sql);
                              } else {
                            $danhmuc= loadsanpham_home();      
                         } 
                              
                          foreach ($danhmuc as $list)
                          {
                         extract($list);
                          $suasp='index.php?act=updatesp&id='.$ma_hh;
                          $xoasp='index.php?act=xoasp&id='.$ma_hh;
                          $imgpath="./upload/".$hinh;
                          if(is_file($imgpath)){
                              $hinhp="<img src='".$imgpath."' height='80'>";
                              
                          } else {
                              $hinhp="no photo";
                          }
                    echo'<div class="boxsp">
                        '.$hinhp.'
                        <p>'.$don_gia.'</p       
                        <a href="#">'.$ten_hh.'</a>
                    <hr>        
                   <div class="row btnaddtocart">    
                    <form action="index1.php?act=addtocart" method="post">
                       <input type="hidden" name="id" value="'.$ma_hh.'"> 
                       <input type="hidden" name="name" value="'.$ten_hh.'"> 
                       <input type="hidden" name="img" value="'.$hinh.'"> 
                       <input type="hidden" name="price" value="'.$don_gia.'"> 
                       <input type="number" name="quantity" value="1" >
                       ';
                    
                    if(isset($_SESSION['user'])){
                        echo '<input type="submit" name="addtocart" value="thêm vào giỏ hàng"> ';
                    }
                       
                       echo '                </form>
                               </div>    
                               </div>';
    

                    
                             } 
                          ?>

               </div>
           </div>
              

              

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