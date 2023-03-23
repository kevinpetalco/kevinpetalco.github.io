<?php include('../1connection.php'); ?>
<?php include('1session.php'); 
    $accountID = $_GET['accountID'];
                $account=mysqli_query($con,"SELECT * from account where accountID = '$accountID'")or die(mysqli_error($con));
                $row=mysqli_fetch_object($account);
?>
<!DOCTYPE html>
<html lang="en">

<!-- -->
<?php include('1head.php'); ?>
<link rel="stylesheet" href="assets/modules/datatables/datatables.min.css">
<link rel="stylesheet" href="assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
<body class="layout-4">
<!-- Page Loader -->
<?php include('1loader.php'); ?>
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
                   <!--  <h1>Product List</h1> -->
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a href="#">Message</a></div>
                    </div>
                </div>

                <div class="section-body">

                    <h2 class="section-title">Message</h2>
                    <div class="row">
                       
                        <div class="col-12">
                            <div class="col-12 col-sm-12 col-lg-2">
                        </div>
                        <div class="col-12 col-sm-12 col-lg-8">
                            
                            
                            <div class="card chat-box card-success" id="mychatbox2">
                                <div class="card-header">
                                    <h4><i class="fas fa-circle text-success mr-2" title="Online" data-toggle="tooltip"></i> Chat with <?= $row->name; ?></h4>
                                </div>
                                <div class="card-body chat-content"></div>
                                <div class="card-footer chat-form" style="border: solid black 2px;">
                                    <form id="chat-form" method="post" action="query.php">
                                        <input type="text" name="id" value="<?= $accountID; ?>"  hidden>
                                        <input type="text" class="form-control" placeholder="Type a message" name="message">
                                        <button class="btn btn-primary" type="submit" name="btnchat"><i class="far fa-paper-plane"></i></button>
                                    </form>
                                </div>
                            </div>
                                     </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-lg-2">
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
<script src="assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<script src="assets/modules/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/modules/datatables/datatables.min.js"></script>
<script src="assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
<script src="assets/modules/jquery-ui/jquery-ui.min.js"></script>

<!-- Page Specific JS File -->
<script src="js/page/modules-datatables.js"></script>
<!-- Template JS File -->
<script src="js/scripts.js"></script>
<script src="js/custom.js"></script>
</body>
</html>

<script type="text/javascript">
    "use strict";

var chats = [
<?php 
$chat=mysqli_query($con,"SELECT *  from chat where accountID='$accountID'")or die(mysqli_error($con));
              while($rowchat=mysqli_fetch_object($chat))
              {
                if ($rowchat->accountID==$accountID) {
                    if($rowchat->chatPOS=='right'){ $pos="left";}else{ $pos="right";}
?> 
<?php  echo "{text: '" .$rowchat->chatDES."',position: '".$pos ."',
    date: '12:00'},"; ?>
<?php } } ?>
];
for(var i = 0; i < chats.length; i++) {
  var type = 'text';
  if(chats[i].typing != undefined) type = 'typing';
  $.chatCtrl('#mychatbox2', {
    text: (chats[i].text != undefined ? chats[i].text : ''),
    picture: (chats[i].position == 'left' ? '../img/user/<?= $row->image?>' : '../img/user/images.png'),
    position: 'chat-'+chats[i].position,
    type: type
  });
}


</script>
                          