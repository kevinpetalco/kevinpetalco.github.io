<?php include('../1connection.php'); ?>
<?php include('1session.php'); ?>
<!DOCTYPE html>
<title>Home</title>
<html lang="en">

<!-- -->
<?php include('1head.php'); ?>
<!-- CSS Libraries -->
<link rel="stylesheet" href="assets/modules/datatables/datatables.min.css">
<link rel="stylesheet" href="assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
<body class="layout-4">
<!-- Page Loader -->
<!-- <?php include('1loader.php'); ?> -->
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>

        <!-- Start app top navbar -->
<?php include('1topnav.php'); ?>        

        <!-- Start main left sidebar menu -->
<?php include('1leftnav.php'); ?>         

        <!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                   <!--  <h1>Pending Order</h1> -->
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    </div>
                </div>

                <div class="section-body">

                    <h2 class="section-title">Dashboard</h2>
                   
                    
                    <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-primary">
                               <i class="fa-solid fa-book"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Book</h4>
                                </div>
<?php
$totalitem=0;
 $item=mysqli_query($con,"SELECT *  from book ")or die(mysqli_error($con));
              while($rowitem=mysqli_fetch_object($item))
              {
                
 $totalitem=$totalitem+1;                  
 } ?>   
                                <div class="card-body">
                                   <?=  $totalitem; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                               <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>User's</h4>
                                </div>
<?php
$totalitem=0;
 $acc=mysqli_query($con,"SELECT *  from account ")or die(mysqli_error($con));
              while($rowitem=mysqli_fetch_object($acc))
              {
                
 $totalitem=$totalitem+1;                  
 } ?>   
                                <div class="card-body">
                                   <?=  $totalitem; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="fa-solid fa-bars"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Pending Borrowed Book</h4>
                                </div>
<?php
$pending=0;
 $pending1=mysqli_query($con,"SELECT *  from cart ")or die(mysqli_error($con));
              while($rowpending1=mysqli_fetch_object($pending1))
              {
                if ($rowpending1->orderID != 1 && $rowpending1->cartSTATUS == '2') {
 $pending=$pending+1;                  
 }} ?> 
                                <div class="card-body">
                                      <?=  $pending; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Accepted Borrowed Book</h4>
                                </div>
<?php
$accepted=0;
 $accepted1=mysqli_query($con,"SELECT *  from cart ")or die(mysqli_error($con));
              while($rowaccepted1=mysqli_fetch_object($accepted1))
              {
                if ($rowaccepted1->orderID != 1 && $rowaccepted1->cartSTATUS == '3' ) {
 $accepted=$accepted+1;                  
 }} ?> 
                                <div class="card-body">
                                    <?=  $accepted; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="fa-solid fa-circle"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Missing Borrowed Book</h4>
                                </div>
<?php

 $accepted11=mysqli_query($con,"SELECT *  from missing ")or die(mysqli_error($con));
  $rowaccepted11= mysqli_num_rows( $accepted11 );
?>            
                                <div class="card-body">
                                    <?=  $rowaccepted11; ?>
                                </div>
                            </div>
                        </div>
                    </div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-light">
                                <B>P</B>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Missing Book Ammount Refunded</h4>
                                </div>
<?php
$totalaccepted111=0;
 $accepted111=mysqli_query($con,"SELECT *  from missing ")or die(mysqli_error($con));
while($rowaccepted1111=mysqli_fetch_object($accepted111))
              {
                $totalaccepted111=$totalaccepted111+$rowaccepted1111->missingAMOUNT;
              }
?>            
                                <div class="card-body">
                                    <?=  $totalaccepted111; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="fa-solid fa-undo"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Retured Borrowed Book</h4>
                                </div>
<?php
$delivered=0;
 $delivered1=mysqli_query($con,"SELECT *  from cart ")or die(mysqli_error($con));
              while($rowdelivered1=mysqli_fetch_object($delivered1))
              {
                if ($rowdelivered1->orderID != 1 && $rowdelivered1->cartSTATUS == '5'  ) {
 $delivered=$delivered+1;                  
 }} ?> 
<?php
$pickup=0;
 $pickup1=mysqli_query($con,"SELECT *  from cart ")or die(mysqli_error($con));
              while($rowpickup1=mysqli_fetch_object($pickup1))
              {
                if ($rowpickup1->orderID != 1 && $rowpickup1->cartSTATUS == '7') {
 $pickup=$pickup+1;                  
 }} ?> 


                                <div class="card-body">
                                  <?=  $delivered + $pickup; ?>
                                </div>
                            </div>
                        </div>
                    </div>                  
                </div>
               </div>
               <div class="card-body">
                                <div class="summary">
                                    <div class="summary-info bg-success">
                                        
                                        <div class="">Borrowed Book: <?=  $delivered + $pickup; ?> </div>
                                        <div class="d-block mt-2"><a href="#">View All</a></div>
                                    </div>
                                    <div class="summary-item">
                                        <!-- <h6>Book List <span class="text-muted">(3 Books)</span></h6> -->


<?php
$total=0;
 $dashboard=mysqli_query($con,"SELECT cart.*,book.*  from cart, book where  cart.itemID=book.book_id ")or die(mysqli_error($con));
              while($rowdashboard=mysqli_fetch_object($dashboard))
              {
                


                if ( $rowdashboard->cartSTATUS == '5' || $rowdashboard->cartSTATUS == '7') {
                    
                 

              
                      
?>  

                                        <ul class="list-unstyled list-unstyled-border">
                                            <li class="media">
                                                <a href="#"><img src="../img/product/<?=$rowdashboard->book_image1;?>" class="mr-3 rounded" width="50" src="" alt=" img"></a>
                                                <div class="media-body">
                                                    
                                                    <div class="media-title"><a href="#">

                                               <?=$rowdashboard->book_title;  ?><br>

                                             </a></div>
                                                    <div class="text-muted text-small">by <a href="#">Me</a> <div class="bullet"></div> <?=$rowdashboard->cartRECIEVED;  ?></div>
                                                </div>
                                            </li>
                                           
                                        </ul>

<?php } } ?> 

                                    </div>
                                   
                                </div>
                            </div>
                        </div> 
            </section>
        </div>
        
        <!-- Start app Footer part -->
<?php include('1footer.php'); ?>    
    </div>
</div>

<!-- General JS Scripts -->
<script src="assets/bundles/lib.vendor.bundle.js"></script>
<script src="js/CodiePie.js"></script>

<!-- JS Libraies -->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCnT63XUjqjPgXZ0lFTU_pdpfUX7swzTTM&amp;sensor=true"></script>
<script src="assets/modules/gmaps.js"></script>

<!-- Page Specific JS File -->
<script src="js/page/gmaps-draggable-marker.js"></script>
<!-- JS Libraies -->
<script src="assets/modules/datatables/datatables.min.js"></script>
<script src="assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
<script src="assets/modules/jquery-ui/jquery-ui.min.js"></script>

<!-- Page Specific JS File -->
<script src="js/page/modules-datatables.js"></script>
<!-- JS Libraies -->
<script src="assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<script src="assets/modules/jquery-ui/jquery-ui.min.js"></script>
<!-- JS Libraies -->
<script src="assets/modules/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/modules/jquery.sparkline.min.js"></script>
<script src="assets/modules/chart.min.js"></script>
<script src="assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
<script src="assets/modules/summernote/summernote-bs4.js"></script>
<script src="assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

<!-- Template JS File -->
<script src="js/scripts.js"></script>
<script src="js/custom.js"></script>
</body>
</html>

<script type="text/javascript">
"use strict";

var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["January", "February", "March", "April", "May", "June", "July", "August"],
    datasets: [{
      label: 'Sales',
      data: [3200, 1800, 4305, 3022, 6310, 5120, 5880, 6154],
      borderWidth: 2,
      backgroundColor: 'rgba(63,82,227,.8)',
      borderWidth: 0,
      borderColor: 'transparent',
      pointBorderWidth: 0,
      pointRadius: 3.5,
      pointBackgroundColor: 'transparent',
      pointHoverBackgroundColor: 'rgba(63,82,227,.8)',
    },
    {
      label: 'Budget',
      data: [2207, 3403, 2200, 5025, 2302, 4208, 3880, 4880],
      borderWidth: 2,
      backgroundColor: 'rgba(254,86,83,.7)',
      borderWidth: 0,
      borderColor: 'transparent',
      pointBorderWidth: 0 ,
      pointRadius: 3.5,
      pointBackgroundColor: 'transparent',
      pointHoverBackgroundColor: 'rgba(254,86,83,.8)',
    }]
  },
  options: {
    legend: {
      display: false
    },
    scales: {
      yAxes: [{
        gridLines: {
          // display: false,
          drawBorder: false,
          color: '#f2f2f2',
        },
        ticks: {
          beginAtZero: true,
          stepSize: 1500,
          callback: function(value, index, values) {
            return '$' + value;
          }
        }
      }],
      xAxes: [{
        gridLines: {
          display: false,
          tickMarkLength: 15,
        }
      }]
    },
  }
});

var balance_chart = document.getElementById("balance-chart").getContext('2d');

var balance_chart_bg_color = balance_chart.createLinearGradient(0, 0, 0, 70);
balance_chart_bg_color.addColorStop(0, 'rgba(63,82,227,.2)');
balance_chart_bg_color.addColorStop(1, 'rgba(63,82,227,0)');

var myChart = new Chart(balance_chart, {
  type: 'line',
  data: {
    labels: ['16-07-2018', '17-07-2018', '18-07-2018', '19-07-2018', '20-07-2018', '21-07-2018', '22-07-2018', '23-07-2018', '24-07-2018', '25-07-2018', '26-07-2018', '27-07-2018', '28-07-2018', '29-07-2018', '30-07-2018', '31-07-2018'],
    datasets: [{
      label: 'Balance',
      data: [50, 61, 80, 50, 72, 52, 60, 41, 30, 45, 70, 40, 93, 63, 50, 62],
      backgroundColor: balance_chart_bg_color,
      borderWidth: 3,
      borderColor: 'rgba(63,82,227,1)',
      pointBorderWidth: 0,
      pointBorderColor: 'transparent',
      pointRadius: 3,
      pointBackgroundColor: 'transparent',
      pointHoverBackgroundColor: 'rgba(63,82,227,1)',
    }]
  },
  options: {
    layout: {
      padding: {
        bottom: -1,
        left: -1
      }
    },
    legend: {
      display: false
    },
    scales: {
      yAxes: [{
        gridLines: {
          display: false,
          drawBorder: false,
        },
        ticks: {
          beginAtZero: true,
          display: false
        }
      }],
      xAxes: [{
        gridLines: {
          drawBorder: false,
          display: false,
        },
        ticks: {
          display: false
        }
      }]
    },
  }
});

var sales_chart = document.getElementById("sales-chart").getContext('2d');

var sales_chart_bg_color = sales_chart.createLinearGradient(0, 0, 0, 80);
balance_chart_bg_color.addColorStop(0, 'rgba(63,82,227,.2)');
balance_chart_bg_color.addColorStop(1, 'rgba(63,82,227,0)');

var myChart = new Chart(sales_chart, {
  type: 'line',
  data: {
    labels: ['16-07-2018', '17-07-2018', '18-07-2018', '19-07-2018', '20-07-2018', '21-07-2018', '22-07-2018', '23-07-2018', '24-07-2018', '25-07-2018', '26-07-2018', '27-07-2018', '28-07-2018', '29-07-2018', '30-07-2018', '31-07-2018'],
    datasets: [{
      label: 'Sales',
      data: [70, 62, 44, 40, 21, 63, 82, 52, 50, 31, 70, 50, 91, 63, 51, 60],
      borderWidth: 2,
      backgroundColor: balance_chart_bg_color,
      borderWidth: 3,
      borderColor: 'rgba(63,82,227,1)',
      pointBorderWidth: 0,
      pointBorderColor: 'transparent',
      pointRadius: 3,
      pointBackgroundColor: 'transparent',
      pointHoverBackgroundColor: 'rgba(63,82,227,1)',
    }]
  },
  options: {
    layout: {
      padding: {
        bottom: -1,
        left: -1
      }
    },
    legend: {
      display: false
    },
    scales: {
      yAxes: [{
        gridLines: {
          display: false,
          drawBorder: false,
        },
        ticks: {
          beginAtZero: true,
          display: false
        }
      }],
      xAxes: [{
        gridLines: {
          drawBorder: false,
          display: false,
        },
        ticks: {
          display: false
        }
      }]
    },
  }
});

$("#products-carousel").owlCarousel({
  items: 3,
  margin: 10,
  autoplay: true,
  autoplayTimeout: 5000,
  loop: true,
  responsive: {
    0: {
      items: 2
    },
    768: {
      items: 2
    },
    1200: {
      items: 3
    }
  }
});
</script>