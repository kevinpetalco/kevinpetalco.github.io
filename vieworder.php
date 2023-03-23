<?php include('1connection.php'); ?>
<?php include('1sessionrequired.php'); 

if(isset($_GET['orderid']) ? $_GET['orderid'] : '') {
 
    $orderid = $_GET['orderid'];

 }else{
         echo"<script type='text/javascript'>window.location.replace('errors-404.php');</script>";
      }
$accountID2=$row->accountID;
date_default_timezone_set('Asia/Manila');
$date = date('F d, Y', time());
$compare=date('F d, Y', time());
?>


<!DOCTYPE html>
<html lang="en">

<!--  -->
<?php include('1head.php') ?>
<style>
.multi-steps > li.is-active ~ li {
    color: #6c757d;
}

.multi-steps > li {
    counter-increment: stepNum;
    text-align: center;
    display: table-cell;
    position: relative;
    color: #727cf5;
}
li {
    list-style: none;
    padding-right: 25px;
    padding-left: 25px;
    margin-right: 0px;
}
* {
    outline: none;
    box-sizing: inherit;
    margin: 0;
    padding: 0;
}
*, *::before, *::after {
    box-sizing: border-box;
}
user agent stylesheet
li {
    display: list-item;
    text-align: -webkit-match-parent;
}
.list-unstyled {
    padding-left: 0;
    list-style: none;
}
user agent stylesheet
ul {
    list-style-type: disc;
}


.multi-steps > li:before {
    content: '\2713';
    display: block;
    margin: 0 auto 4px;
    background-color: #fff;
    width: 25px;
    height: 25px;
    line-height: 22px;
    text-align: center;
    font-weight: bold;
    position: relative;
    z-index: 1;
    border-width: 2px;
    border-style: solid;
    border-color: #05ffa1;
    border-radius: 5px;
}
*::before {
    margin: 0;
    padding: 0;
}
*, *::before, *::after {
    box-sizing: border-box;
}
.multi-steps > li.is-active:after, .multi-steps > li.is-active ~ li:after {
    background-color: red;
}
.multi-steps > li:last-child:after {
    display: none;
}
.multi-steps > li:after {
    content: '';
    height: 2px;
    width: 100%;
    background-color: #05ffa1;
    position: absolute;
    top: 12px;
    left: 50%;
}
*::after {
    margin: 0;
    padding: 0;
}
*, *::before, *::after {
    box-sizing: border-box;
}5.98px)
.multi-steps > li {
    font-size: 0.75rem;
}
.multi-steps > li {
    counter-increment: stepNum;
    text-align: center;
    display: table-cell;
    position: relative;
    color: #727cf5;
}
li {
    list-style: none;
}
* {
    outline: none;
    box-sizing: inherit;
    margin: 0;
    padding: 0;
}
*, *::before, *::after {
    box-sizing: border-box;
}
user agent stylesheet
li {
    display: list-item;
    text-align: -webkit-match-parent;
}
.list-unstyled {
    padding-left: 0;
    list-style: none;
}
user agent stylesheet
ul {
    list-style-type: disc;
}


.multi-steps > li.is-active ~ li:before {
    background-color: #ffbaba;
    border-color: #e3eaef;
}
.multi-steps > li.is-active:before, .multi-steps > li.is-active ~ li:before {
    content: counter(stepNum);
    font-family: inherit;
    font-weight: 400;
}
@media (max-width: 575.98px)
.multi-steps > li:before {
    width: 25px;
    height: 25px;
    line-height: 21px;
}



</style>
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

            <section class="section" id="printableArea">
                            
             <h2 class="section-title" style="margin-top: 50PX;">View Transaction</h2>                 
                <div class="section-body">


                      
  <?php

$slide12=mysqli_query($con,"SELECT cart.*,
CASE
WHEN (DATEDIFF(curdate(), DATE_ADD(STR_TO_DATE(REPLACE(cartACCEPTED,',', ''), '%M %d %Y'), INTERVAL 7 DAY)) >= 1) THEN (DATEDIFF(curdate(), DATE_ADD(STR_TO_DATE(REPLACE(cartACCEPTED,',', ''), '%M %d %Y'), INTERVAL 7 DAY)) * 5)
ELSE 0
END as fines,
book.*,account.* from cart,book,account where cart.itemID = book.book_id and cart.accountID = account.accountID  order by cart.cartID desc ")or die(mysqli_error($con));
              while($rowslide12=mysqli_fetch_object($slide12))
              {
                if ( $rowslide12->orderID==$orderid) {
                  
                $od=$rowslide12->orderID;
$ad=$rowslide12->name; 
$as=$rowslide12->accountID;             

?>
                       <div class="invoice">
                    <div class="invoice-print">
                                             <div class="row">
                <div class="col-12 ">


                    
                                        
                                            <div class="card-body" style="overflow: auto;">

                         <?php if($rowslide12->cartSTATUS==1){ ?>
     
            <div class="steps" style="width: 100%; ">
                            <ul class="list-unstyled multi-steps">
                                <li style="color: black;" class="is-active ">Selected<br><span>________________</span><br><span><?php echo $rowslide12->cartDATE; ?></span>
                                <li style="color: black; ">Pending<br><span>________________</span><br><span><?php echo $rowslide12->cartDATE; ?></span>
                                <li style="color: black; ">Accepted<br><span>________________</span><br><span><?php echo $rowslide12->cartACCEPTED; ?></span>
                                <li style="color: black;" >Borrowed<br><span>________________</span><br><span><?php echo $rowslide12->cartDELIVERY; ?></span>
                                <li style="color: black;"  >Returned<br><span>________________</span><br><span><?php echo $rowslide12->cartRECIEVED; ?>
                            </ul>
                        </div> 
    <?php } else if($rowslide12->cartSTATUS==2){ ?>
      <div class="steps" style="width: 100%;">
                            <ul class="list-unstyled multi-steps">
                                <li style="color: black;" >Selected<br><span>________________</span><br><span><?php echo $rowslide12->cartDATE; ?></span>
                                <li style="color: black; "class="is-active ">Pending<br><span>________________</span><br><span><?php echo $rowslide12->cartDATE; ?></span>
                                <li style="color: black; ">Accepted<br><span>________________</span><br><span><?php echo $rowslide12->cartACCEPTED; ?></span>
                                <li style="color: black;" >Borrowed<br><span>________________</span><br><span><?php echo $rowslide12->cartDELIVERY; ?>
                                <li style="color: black;"  >Returned<br><span>________________</span><br><span><?php echo $rowslide12->cartRECIEVED; ?>
                            </ul>
                        </div> 
    <?php } else if($rowslide12->cartSTATUS==3){  ?>
      <div class="steps" style="width: 100%;">
                            <ul class="list-unstyled multi-steps">
                                <li style="color: black;" >Selected<br><span>________________</span><br><span><?php echo $rowslide12->cartDATE; ?></span>
                                <li style="color: black; ">Pending<br><span>________________</span><br><span><?php echo $rowslide12->cartDATE; ?></span>
                                <li style="color: black; "class="is-active ">Accepted<br><span>________________</span><br><span><?php echo $rowslide12->cartACCEPTED; ?></span>
                                <li style="color: black;" >Borrowed<br><span>________________</span><br><span><?php echo $rowslide12->cartDELIVERY; ?>
                                <li style="color: black;"  >Returned<br><span>________________</span><br><span><?php echo $rowslide12->cartRECIEVED; ?>
                            </ul>
                        </div> 
    <?php } else if($rowslide12->cartSTATUS==4){  ?>
      <div class="steps" style="width: 100%;">
                            <ul class="list-unstyled multi-steps">
                                <li style="color: black;" >Selected<br><span>________________</span><br><span><?php echo $rowslide12->cartDATE; ?></span>
                                <li style="color: black; ">Pending<br><span>________________</span><br><span><?php echo $rowslide12->cartDATE; ?></span>
                                <li style="color: black; ">Accepted<br><span>________________</span><br><span><?php echo $rowslide12->cartACCEPTED; ?></span>
                                <li style="color: black;" class="is-active ">Borrowed<br><span>________________</span><br><span><?php echo $rowslide12->cartDELIVERY; ?>
                                <li style="color: black;"  >Returned<br><span>________________</span><br><span><?php echo $rowslide12->cartRECIEVED; ?>
                            </ul>
                        </div> 
    <?php } else if($rowslide12->cartSTATUS==5){  ?>
      <div class="steps" style="width: 100%;">
                            <ul class="list-unstyled multi-steps">
                                <li style="color: black;" >Selected<br><span>________________</span><br><span><?php echo $rowslide12->cartDATE; ?></span>
                                <li style="color: black; ">Pending<br><span>________________</span><br><span><?php echo $rowslide12->cartDATE; ?></span>
                                <li style="color: black; ">Accepted<br><span>________________</span><br><span><?php echo $rowslide12->cartACCEPTED; ?></span>
                                <li style="color: black;" >Borrowed<br><span>________________</span><br><span><?php echo $rowslide12->cartDELIVERY; ?>
                                <li style="color: black;"  class="is-active ">Returned<br><span>________________</span><br><span><?php echo $rowslide12->cartRECIEVED; ?>
                            </ul>
                        </div> 
    <?php } else if($rowslide12->cartSTATUS==6){  ?>
      <div class="steps" style="width: 100%;">
                            <ul class="list-unstyled multi-steps">
                                <li style="color: black;" >Selected<br><span>________________</span><br><span><?php echo $rowslide12->cartDATE; ?></span>
                                <li style="color: black; ">Pending<br><span>________________</span><br><span><?php echo $rowslide12->cartDATE; ?></span>
                                <li style="color: black; " class="is-active ">Accepted<br><span>________________</span><br><span><?php echo $rowslide12->cartACCEPTED; ?></span>
                                <li style="color: black;" >Cancelled<br><span>________________</span><br><span><?php echo $rowslide12->cartDELIVERY; ?>
                                
                            </ul>
                        </div> 
    <?php } ?>
                                        </div>
                                  
                                        </div>
                                  
 
   

                   
                        
 
                </div>
                </div>
            </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="invoice-title">
                                    <h2>Invoice</h2>
                                    <div class="invoice-number">Transaction #: <?php echo $od; ?></div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <address>
                                            <i><b>Borrowed By:</b></i><br>
                                           
                                       <b><?php echo $rowslide12->name; ?></b><br>
                                            <?php echo $rowslide12->addresshead; ?><br>
                                            <?php echo $rowslide12->mobilenumber; ?><br>
                                            
                                        </address>
                                    </div>
                                    <div class="col-md-6 text-md-right">
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                   
                                    </div>
                                    <div class="col-md-6 text-md-right">
                                        <address>
                                            <strong>Borrowed Date:</strong><br>
                                             <?php echo $rowslide12->cartACCEPTED; ?> <b></b><br><br>
                                             <?php if (!empty($rowslide12->cartACCEPTED)) {
                                             ?>


                                              <strong>Due Date:</strong><br>
                                            <?php  echo $duedate= date('F d,Y H:i:s', strtotime($rowslide12->cartACCEPTED . ' +7 day')); ?> <b></b><br><br>
                                             <strong>Fines:</strong><br>
                                            <?php 
                                                  if (!empty($duedate )) {
                                                   $compare=$duedate;
                                                  }
                                                // if($compare<=$date ){
                                                // echo "0";
                                                //   }
                                                //   else{
                                                // echo "<b style='color:red;'>Late Returned: </b>";
                                                // echo $rowslide12->fines;
                                                //   }
                                                echo "<b style='color:red;'>Late Returned: </b>";
                                                echo $rowslide12->fines;
                                                ?>
                                             <?php   
                                             } ?>
                                             <p class="mb-0"><strong>Book Status: </strong> <br>
                                                <?php  if( $rowslide12->cartSTATUS ==1 ){?>
                                                        <span class="badge badge-default">Selected</span>
                                            <?php }elseif( $rowslide12->cartSTATUS ==2 ){  ?>
                                                        <span class="badge badge-primary">Pending</span>
                                            <?php }elseif( $rowslide12->cartSTATUS ==3 ){   ?>
                                                        <span class="badge badge-info">Accepted</span>
                                            <?php }elseif( $rowslide12->cartSTATUS ==4 ){  ?>
                                                        <span class="badge badge-warning">Borrowed</span>
                                            <?php }elseif( $rowslide12->cartSTATUS ==5 ){  ?>
                                                        <span class="badge badge-success">Returned</span>
                                            <?php }elseif( $rowslide12->cartSTATUS ==6 ){  ?>
                                                        <span class="badge badge-danger">Cancelled</span>
                                             <?php }elseif( $rowslide12->cartSTATUS ==7 ){  ?>
                                                        <span class="badge badge-success">Returned</span>            
                                            <?php } ?></p>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="section-title">Borrowed Summary</div>
                                <p class="section-lead">All book here cannot be deleted.</p>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover table-md">
                                        <tr>
                                            <th data-width="40">#</th>
                                            <th>Book Title</th>
                                            <th class="text-center">Quantity</th>
                                        </tr>
                                      <?php

$i=0;
$slide1=mysqli_query($con,"SELECT cart.*,book.* from cart,book where cart.itemID = book.book_id and cart.accountID='$accountID2' and  cart.orderID ='$od' ")or die(mysqli_error($con));
              while($rowslide1=mysqli_fetch_object($slide1))
              {
                
                
              

?>
                                            <tr>
                                            <td><?php echo $i; ?></td>
                                              <td ><?php echo $rowslide1->book_title ; ?></td>
                                              <td  class="text-center">x<?php echo $rowslide1->cartCOUNT; ?></td>
                                              
                                            </tr>
 <?php
}
?>                                            
                                   
                                    </table>
                                     <div style="background-color:gray; padding: 30px;"><h5>Rules:</h5>
                                    <p>■ If After Due Date Reach Student will pay 5 Pesos Per Book.</p>
                                    <p>■ Student Will Pay Corresponding Ammount If They Lost The Borrowed Book. </p>
                                </div>
                                </div>
                                
                            </div>
                        </div>
                         <hr>
                 <?php  if ($rowslide12->cartSTATUS ==4) {?>
                                            <button class="btn btn-success" data-toggle="modal" data-target="#Recieved" style="float:right;"></button>
                <?php }  ?>     
                <?php  if ($rowslide12->cartSTATUS ==2 || $rowslide12->cartSTATUS ==3) {?>
                                            <button class="btn btn-danger" data-toggle="modal" data-target="#Cancel" style="float:right;">Cancel</button>
                <?php }  ?>
                </div>
                    </div>
                   
<?php
} }
?> 
                      
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
<!-- JS Libraies -->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCnT63XUjqjPgXZ0lFTU_pdpfUX7swzTTM&amp;sensor=true"></script>
<script src="assets/modules/gmaps.js"></script>
<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="js/scripts.js"></script>
<script src="js/custom.js"></script>
</body>

<!-- layout-top-navigation.html  Tue, 07 Jan 2020 03:35:42 GMT -->
</html>
<div class="modal fade" id="Recieved" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel"></h4>
            </div>
            <div class="modal-body"> Do You Want To Change Status This Transaction To Returned? </div>
            <div class="modal-footer text-center">
              <form method="post" action="query.php">
                    <input type="" name="orderID" value="<?= $orderid; ?>" hidden>
                    <input type="" name="accountID" value="<?= $accountID2; ?>" hidden>
                <button type="submit" name="btnrecieved" class="btn btn-success btn-lg  waves-effect">Returned</button>
                </form>
                <a href=""  class="btn btn-danger btn-lg waves-effect" data-dismiss="modal">No</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Cancel" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel"></h4>
            </div>
            <div class="modal-body"> Do You Want To Change Status This Order To Cancelled? </div>
            <div class="modal-footer text-center">
              <form method="post" action="query.php">
                    <input type="" name="orderID" value="<?= $orderid; ?>" hidden>
                    <input type="" name="accountID" value="<?= $accountID2; ?>" hidden>
                <button type="submit" name="btncancel" class="btn btn-danger btn-lg  waves-effect">Cancelled</button>
                </form>
                <a href=""  class="btn btn-success btn-lg waves-effect" data-dismiss="modal">No</a>
            </div>
        </div>
    </div>
</div>