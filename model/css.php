<style>
    *{
        box-sizing: border-box;
        font-family: sans-serif;
        font-size:0.8vw 
    }
    
    .boxcenter{
    width: 70%;
    margin: auto;
}
    .row{
        width: 100%;
        display: flex;
        flex-wrap: wrap;
    }
    .mb{
       margin-bottom: 20px;
    }
    .demo{
        background-color: red;
        min-height: 100px;
    }
    .header{
        background-color: aquamarine;
        border: 1px #090 solid;
        font-size: 1vw;
        color: blue;
        border-radius: 5px;
    }
    .mr{
        margin-right:  2%;
    }
    
    .header h1{
        margin: 20px 20px;
        font-size: 1.2vw;    
    }
    .menu{
       background-color: black;
        color: #ccc;
        border-radius: 5px;
    }
    .boxtrai{
      
        width: 74%;
    }
        .boxphai{
        width: 22%;
  
    }
        .footer{
        background-color: aquamarine;
        border: 1px #090 solid;
        font-size: 0.8vw;
        color: blue;
        border-radius: 5px;
        padding: 20px;
    }
    .boxtitle{
        width: 100%;
        color: #333;
        padding: 10px;
        background-color: #EEE;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        border-left: 1px #ccc solid;
        border-right: 1px #ccc solid;
        border-bottom: 1px #ccc solid;
    }
    .boxtcontent{
       border-left: 1px #ccc solid; 
       border-right: 1px #ccc solid;
       border-bottom: 1px #ccc solid;
       border-bottom-left-radius: 5px;
       border-bottom-right-radius: 5px;
       min-height: 200px;
       width: 100%;
       padding: 20px;       
    }
    
        .boxtcontent2{
       border-left: 1px #ccc solid; 
       border-right: 1px #ccc solid;
       border-bottom: 1px #ccc solid;

       min-height: 200px;
       width: 100%;
       background-color:#eee;
    }
    .boxfooter{
        width: 100%;
        padding: 10px;
        background-color: #EEE;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        border: 1px #ccc solid;
    }
    
    .banner{
        min-height: 300px;
        width: 100%;
        text-align: center
    }
    .banner img{
     height: 300px;
    }
    .boxsp{
        margin-top: 30px;
        margin-right: 2%;
        width: 31%;
        min-height: 300px;
        border: black 1px solid;
    }
        .boxsp img{
        width: 100%;
        height: 60%;
        
    }
    .menu ul{
        padding:0 15px;
    }   
    .menu ul li{
        list-style-type: none;
        display: inline;
        padding: 0px 15px;
    }
      .menu ul li a{
      color: #ccc;
      text-decoration: none;
      transition: 0.5s;
    }
          .menu ul li a:hover{
     color: white;
     font-size: 0.8vw;
    }
    .formtaikhoan{
        line-height: 150%;
    }
    .mb10{
        margin-bottom: 10px;
    }
    
    .formtaikhoan input[type="text"]{
        width: 100%;
        border: 1px #ccc solid;
        padding:5px 10px;
        border-radius: 5px;
    }
     .formtaikhoan input[type="password"]{
        width: 100%;
        border: 1px #ccc solid;
        padding:5px 10px;
        border-radius: 5px;
    }
     .formtaikhoan input[type="checkbox"]{   
        border: 1px #ccc solid;
        border-radius: 5px;
    }
       .formtaikhoan input[type="submit"]{   
        border: 1px #ccc solid;
        border-radius: 5px;
        padding:5px 10px;
        background-color: white;
    }
       .formtaikhoan input[type="submit"]{   
 
        background-color: #ccc;
    }
    .formtaikhoan li a{
        color: blue;
        text-decoration: none;
    }
        .formtaikhoan li a:hover{
        color: #093;
        text-decoration: underline;
    }
    
    
    .menudoc ul{
        margin: 0;
        list-style-type: none;
        padding: 0;
    }
      .menudoc ul li{
       padding: 10px 20px;
       background-color: #fff;
       border-bottom: 1px #ccc solid;
    }
       .menudoc ul li a{
       color: #666;
       text-decoration: none;
       
    }
    .menudoc ul li:hover{
       background-color: #ccc;
    }
    .searchbox input[type="text"]{
        width: 100%;
        padding: 5px 10px;       
        background-color: #fff;
        border: 1px #ccc solid;
        border-radius: 5px;
    }
    
    .top10 img{
       width: 20%;
       height: 50px;
       float: left;
       margin-right: 10px;
    }
    .top10 a{
        color: #666;
        text-decoration: none;
        
    }
    .top10 a:hover{
        color: #000;
        text-decoration: underline;
    }

        
    .slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
</style>

