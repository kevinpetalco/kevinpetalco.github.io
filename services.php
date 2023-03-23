<?php include('1connection.php'); ?>
<?php include('1session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<style>
          *{
    margin:0;
    padding: 0;
    box-sizing: border-box;
}
body{
     min-height: 100vh;
}
.logo{
     width: 90px;
     height: 80px;
     border-radius: 50%;
}
  .picture{
   width: 100%;
}
.container{
    
    width: 80%;
    padding: 0 5%;
}
.container h1{
    position: relative;
    text-transform: uppercase;
    text-align: center;
    padding-top: 10%;
    margin-bottom: 60px;
    font-weight: bolder;
}
.container h1::after{
    content: '';
    position: absolute;
    left: 50%;
    bottom: -5px;
    transform: translateX(-50px);
    width: 110px;
    height: 5px;
    background-color: green;
}
.container .row{

    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-gap: 60px;
}
.container .row .service{
  padding: 30px 25px;
  text-align: center;
  border-radius: 5px;
  transition: transform .5s;
  cursor: pointer; 
  background-image: url('./img/banner/yow.png');
  color: white;
}
.container .row .service:hover{
    transform: scale(1.2);
   background:#76B947;
    color: white;
}
p{
    font-weight: bolder;
}
.wrapper{
    padding: 5px;
    width: 100%;
    
}
.columns{
    display: flex;
    flex-flow: row wrap;
    justify-content: center;
    margin: 5px 0;
}
.column{
    flex:1;
    border: 1px solid #666;
    margin:2px;
    padding: 10px;
    background:white;
    transition: 0.3s;
}
h2{
    text-align: center;
}
footer{
    overflow: hidden;
    position: absolute;
    margin-top: 10px;
    background: #111;
    height: auto;
    width: 100%;
    padding-top: 40px;
    color: #fff;
   }
   .footer-content{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
   }
   .footer-content h3 {
     position: relative;
    text-transform: uppercase;
    text-align: center;
  
    font-weight: bolder;
   }
   .footer-content h3::after{
    content: '';
    position: absolute;
    left: 50%;
    bottom: -5px;
    transform: translateX(-50px);
    width: 100px;
    height: 5px;
    background-color: green;
   }
   .footer-content p{
    max-width: 500px;
    margin:10px auto;
    line-height: 20px;

   }
   .socials{
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin:1rem 0 3rem 0;
   }
   .socials li{
    margin:0 10px;
   }
   .socials a{
    text-decoration: none;
    color: #fff;
   }
   .socials a i{
    font-size: 1.1rem;
    transition: color .4s ease;
   }
.socials a:hover i{
  color: aqua;
}
.footer-bottom{
  background-color: #000;
  width: 100vw;
  padding:20px 0;
  text-align: center;
}
.footer-bottom p{
  font-size: 16px;
  word-spacing: 2px;
}
.yah{

}
.yah h3{
  position: relative;
    text-transform: uppercase;
    text-align: center;
    font-weight: bolder;
}
.yah h3::after{
  content: '';
    position: absolute;
    left: 50%;
    bottom: -5px;
    transform: translateX(-50px);
    width: 100px;
    height: 5px;
    background-color: green;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

/* Display the columns below each other instead of side by side on small screens */
@media screen and (max-width: 650px) {
  .column {
    width: 80%;
    display: block;
  }
}

/* Add some shadows to create a card effect */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

/* Some left and right padding inside the container */
.container {
  padding: 0 16px;
}

/* Clear floats */
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}
 .div1{
    background-color: #166634;
    width: 50%;
    float: left;
    color: white;
    text-align: center;
    
   }
   .div2{
    background-color:#cfb02b ;
    width: 50%;
    float: right;
     color: white;
    text-align: center;
    
   }
   .collapse li a:hover{
  background-color: #f0ebd8;
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
                <h3 class="section-title">Services</h3>
                <h6 class="section-lead">A library is a collection of materials, books or media that are accessible for use and not just for display purposes.</h6>

                <h1>PROCESS</h1>
                <div class="row">
            <div class="service">
                <h2>STEP 1</h2>
                <p> Visit Library and Ask Librarian</p>
            </div>
             <div class="service">
                <h2>STEP 2</h2>
                <p> Attend the Library Orientation</p>
            </div>
            <div class="service">
                <h2>STEP 3</h2>
                <p>Once you joined the orientation, Get Library Borrower's card</p>
            </div>
            <div class="service">
                <h2>STEP 4</h2>
                <p> Validated ID/ORF is required upon entering Library</p>
            </div>  
             <div class="service">
                <h2>STEP 5</h2>
                <p> Once you have LBC, Fill in your personal information</p>
            </div>
           <div class="service">
                <h2>STEP 6</h2>
                <p>You can borrow the available books</p>
            </div>
         </div> 
           <h1>OUR SERVICES</h1>  
        </div>

        <div class="wrapper">
            <section class="columns">
                <div class="column">
                   <h2>LIBRARY COLLECTIONS</h2> 
                   <h5>GENERAL CIRCULATION/FILIPINIANA SECTION</h5>
                    <p style="margin-left: 25px;">Students are allowed to borrow three(3) books for one (1) week. </p>
                    <h5>FICTION/NOVEL</h5>
                    <P style="margin-left: 25px;">Can borrow one (1) week renewable for another week, unless waited by another person</P>
                    <p style="font-weight: bolder;">The following collections are for LIBRARY USE & PHOTOCOPY ONLY:</p>
                    <h5>GENERAL REFERENCE</h5>
                    <p style="margin-left: 25px;">Such as Encyclopedias, Dictionaries, Atlases, Handbooks, Yearbooks, etc.</p>
                    <h5>PERIODICALS</h5>
                    <p style="margin-left: 25px;">Such as Newspapers,Magazines,Clippings,Theses and Dissertation,Vertical files.</p>
                </div>
                <div class="column">
                   <h2>LIBRARY SERVICES</h2> 
                   <center>
                  <img class="hrs" src="./img/banner/ac.jpg" style=" width:85%;height:50%;" ></center>
                </div>
                 <div class="column">
                   <h2>FINES AND PENALTIES</h2> 
                   <h5>OVERDUE PHOTOCOPY MATERIALS  OUTSIDE THE LIBRARY</h5>
                    <p style="margin-left: 25px;">Php 5.00 a for books day excluding holidaays and weekends.
                        <br>Php 5.00 per hr for over due photocopied materials(General Reference and Periodicals</p>
                    <h5>LOST BOOKS</h5>
                    <p style="margin-left: 25px;">1.Report to the librarians immediately if the book was lost to stop the accumulation of fines. <br>2. Replaced with the latest edition of the said lost book.<br>Payment for the lost book is also accepted based on its current value plus P100.00 of it cost for ordering and processing <br>3. All library accounts must be settled first before borrowing any other materials and whenever borrower asks for clearance.</p>
                </div>
            </section> 
</div>
<section class="section">
              <div class="section-body">
                <h3 class="section-title">Contact Us</h3>
                <h6 class="section-lead">A library is a collection of materials, books or media that are accessible for use and not just for display purposes.</h6>
<center>
      <img src="./img/banner/madam.png" style="width: 25%; height: 25%;">
        </center>
       


<footer>
  <div class="footer-content">
    <h3>Contact us</h3>
<p><i class="fa-solid fa-phone"></i>09566544778<br>
  <i class="fa-regular fa-envelope"></i>phinmacoclibrary@gmail.com<br>
PHINMA COC Puerto:<br>
            Purok 6, Puerto Cagayan de Oro City, 9000, Misamis Oriental</p>   
    <ul class="socials">
     <li><a href="https://www.facebook.com/PHINMACOCLibrary"><i class="fa-brands fa-facebook-f"></i></a></li>
    <li><a href="#"><i class="fa-regular fa-envelope"></i></a></li>
     <li><a href="https://coc.phinma.edu.ph/coc-phinma_renames.asp?fbclid=IwAR34OmdCVKxM8o8FHtqAm1w0O8SQglYtCYK9uYyW3WrJ39hpJt1IBiGvqk4"><i class="fa-brands fa-linkedin"></i></a></li>
    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
    </ul>
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