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
    select{    
        width: 100%;
        padding: 5px 10px;       
        background-color: #fff;
        border: 1px #ccc solid;
        border-radius: 5px;
    }
    .searchbar form{
        width: 100%;
        margin: 20px 20px;
    }
    input[type="text"]{
        width: 100%;
        padding: 5px 10px;       
        background-color: #fff;
        border: 1px #ccc solid;
        border-radius: 5px;
    }
        input[type="number"]{
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
    .formcontent{
        padding: 20px 0px;
        
    }
        .formcontent form{

        width: 100%;
        
    }
    
    .formcontent input[type="text"]{
        width: 100%;
        border: 1px #ccc solid;
        padding:5px 10px;
        border-radius: 5px;
    }
     .formcontent input[type="submit"]{
        border: 1px #ccc solid;
        border-radius: 5px;
        padding:5px 10px;
        background-color: white;
    }
       .mb10 input[type="button"]{
        border: 1px #ccc solid;
        border-radius: 5px;
        padding:5px 10px;
        background-color: white;
        margin-right: 10px;
    }
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
