<?php include('1connection.php'); ?>
<?php include('1session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<style>
         
         .content{
             margin-top: 10px;
         }
         .container{
             display: flex;
             flex-wrap: wrap;
             justify-content:center;
         }
         .container .box{
             position: relative;
             width: 350px;
             padding: 30px;
             background: #fff;
             box-shadow: 0 5px 5px green;
             border-radius: 4px;
             margin: 20px;
             box-sizing: border-box;
             overflow: hidden;
             margin-bottom:30px;
             margin-top:30px;
         }
         .container .box .icon{
             position: relative;
             width: 160px;
             height: 80px;
             color: black;
             background: #e7d042;
             display: flex;
             justify-content: center;
             align-items: center;
             margin: 0 auto;
             border-radius: 50%;
             font-size: 35px;
             font-weight: 700;
             transition: 1s;
         }
         
         .container .box .content{
             position: relative;
             z-index: 1;
             transition: 0.5s;
         }
         .container .box .content p{
             margin: 0;
             padding: 0;
             text-align: center;
             text-transform: uppercase;
         }
         .logo{
              width: 90px;
              height: 80px;
              border-radius: 50%;
         }
         .banner-card{
             position: relative;
         }
         .banner-card img{
          max-width: 100%;
          height: auto;
         opacity: 0.9;
         }
         
         .banner-card img:hover {
           opacity: 1.0;
          
         }
         
         .banner-text{
         position: absolute;
         top: 25%;
         color: white;
         padding: 10px;
         
         }
         .banner-text h4{
         font-size: 26px;
         text-transform: uppercase;
         font-weight: bolder;
         margin-bottom: 5px;
         
         }
         .text-contain{
             max-width: 900px;
             margin: 10px auto 10px;
         }
         .text-contain .floating-image{
             max-width: 400px   
         }
         .text-contain .floating-image.right{
             float: right;
             margin-left: 35px;
             
         }
         .text-contain .icon{
              position: relative;
             width: 160px;
             height: 80px;
             color: black;
             background: #e7d042;
             display: flex;
             justify-content: center;
             align-items: center;
             margin: 0 auto;
             border-radius: 50%;
             font-size: 35px;
             font-weight: 700;
             transition: 1s;
         }
         
         .contain .floating-image{
             max-width: 400px 
         
         }
          .floating-image.Left{
             float: left;
             margin-right: 35px;
            
         
         }
         .containers{
             
             width: 80%;
             padding: 0 5%;
             margin-top: 10px;
             margin-bottom: 15px;
         }
         .containers h1{
             position: relative;
             text-transform: uppercase;
             text-align: center;
             margin-bottom: 60px;
             font-weight: bolder;
         }
         .containers h1::after{
             content: '';
             position: absolute;
             left: 50%;
             transform: translateX(-50px);
             width: 110px;
             height: 5px;
             background-color: green;
         }
         .containers .row{
         
             display: grid;
             grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
             grid-gap: 30px;
         }
         .containers .row .service{
           padding: 20px 15px;
           text-align: center;
           border-radius: 5px;
           transition: transform .5s;
           cursor: pointer; 
           background-image: url('./img/banner/yow.png');
           color: white;
         }
         .containers .row .service:hover{
             transform: scale(1.1);
            background:white;
             color: black;
          border: 5px solid #73AD21;
         }
         
             </style>

<!-- layout-top-navigation.html -->
<?php include('1head.php') ?>

<body class="layout-3">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>
<div id="app">
    <div class="main-wrapper container">
        <div class="navbar-bg"></div>

        <!-- Start app top navbar -->
       
<?php include('1nav.php'); ?>
        <!-- Start top menu -->
       

        <!-- Start app main Content -->
        <div class="main-content">

            <section class="section">
              <div class="section-body">
                <h2 class="section-title">About</h2>
                <p class="section-lead">A library is a collection of materials, books or media that are accessible for use and not just for display purposes.</p>

                <div class="container">
        <div class="box">
            <div class="icon">Mission</div>
            <div class="content">
            	<br>
                <p>Our Mission is to provide quality and updated information resources and user-centered services that will sustain the instructional, research and extension programs of academic community.
            </p>
            </div>
        </div>
        <div class="box">
            <div class="icon">Vision</div>
            <div class="content">
            	<br>
                <p>Our Vision is to considered as one of the "BEST ACADEMIC LIBRARIES" in Cagayan de Oro as well as in Mindanao that consistently provide relevant, Quality and resources and services.
                </p>
            </div>
        </div>
    </div>
    </div>
    <div class="banner-card">
      <center>  <img  src="./img/banner/ps1.png"></center>
        <div class="banner-text">
            <h4>PHINMA-COC PUERTO LIBRARY</h4>
            <p style="font-weight: bold;">is located at the 3rd floor of puerto Campus bldg. <br>
            its primarily serves curricular  and research needs<br> of the college student, senior high school students<br> faculty members and  school community.  </p>
        </div>
    </div>
    <div class="img-contain">
        <div class="text-contain">
        <img src="./img/banner/logo-wa.png" class="img-responsive floating-image right">
        <div class="icon">OBJECTIVES</div>
             <p style="color: green;">The Rosauro P. Dongallo Learning Resource Center aims to:<br>Instentsity the acquisition and organization of relevant collections that support the curricular offerings and information needs of the academic community.<br>Automate and use state-of-the-art technology for excellent services and operations
                  <br>Provide a well-organized and information system, easy retrieval, user-friendly and safe environment that foster teaching and Learning for the library clientele.<br>Strengthen staff knowledge and kills and enhance their welfare to ensure the continuous provision quality services.</p>
        </div>    
    </div>
  <center>
    <img src="./img/banner/last.png" style="width: 60%;margin-left: 30px; border-radius: 5px;   box-shadow: 0 5px 5px green;"></center><br>
    
            <center>
        <img src="./img/banner/sta.png" style="width: 90%; height:10%; border-radius: 10px;">
    <br>
    <div class="containers">
            <h1>LIBRARY HOURS</h1>
        <div class="row">
            <div class="service">
                <h2>LIBRARY HOURS</h2>
                <p>MONDAYS-FRIDAYS <br> 8:00AM-5:00pm</p>
            </div>
             <div class="service">
                <h2>ORIENTATION WALK-IN</h2>
                <p>  EVERY TUESDAY<br>(10:00AM-10:30AM)(4:00PM-4:30PM) </p>
            </div>
         </div> 
     </div>
 </center>
                            
                        </div>
                    </div>
                </div>
            </div>              
                               
                         


            </section>
        </div>
        
        <!-- Start app Footer part -->
      <?php include('1footer.php') ?>
    </div>
</div>

<!-- General JS Scripts -->
<script src="assets/bundles/lib.vendor.bundle.js"></script>
<script src="js/CodiePie.js"></script>

<!-- JS Libraies -->

<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="js/scripts.js"></script>
<script src="js/custom.js"></script>
</body>

<!-- layout-top-navigation.html  Tue, 07 Jan 2020 03:35:42 GMT -->
</html>