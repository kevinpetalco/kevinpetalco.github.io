
<?php include('1connection.php'); ?>
<?php include('1sessionrequired.php'); ?>
<!DOCTYPE html>
<html lang="en">

<!--  -->
<?php include('1head.php') ?>
<link rel="stylesheet" href="assets/css/components.min.css">

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

            <section class="section" >
                            
             <div class="section-body">
                    <h2 class="section-title">Messages</h2>
                   

                    <div class="row">
                       <!--  <div class="col-12 col-sm-12 col-lg-4">
                            <div class="card author-box card-primary">
                                <div class="card-body">
                                 
                                </div>
                            </div>
                            <div class="card card-danger">
                                
                               
                            </div>
                        </div> -->

                        <div class="col-12 col-sm-12 col-lg-2">
                        </div>
                        <div class="col-12 col-sm-12 col-lg-8">
                            
                            
                            <div class="card chat-box card-success" id="mychatbox2">
                                <div class="card-header">
                                    <h4><i class="fas fa-circle text-success mr-2" title="Online" data-toggle="tooltip"></i> Chat with Librarian</h4>
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
<script src="js/page/components-user.js"></script>
<!-- Template JS File -->
<script src="js/scripts.js"></script>
<script src="js/custom.js"></script>
</body>

<!-- layout-top-navigation.html  Tue, 07 Jan 2020 03:35:42 GMT -->
</html>
<script type="text/javascript">
    "use strict";

var chats = [
<?php 
$chat=mysqli_query($con,"SELECT *  from chat ")or die(mysqli_error($con));
              while($rowchat=mysqli_fetch_object($chat))
              {
                if ($rowchat->accountID==$accountID) {
?> 
<?php  echo "{text: '" .$rowchat->chatDES."',position: '".$rowchat->chatPOS."',
    date: '12:00'},"; ?>
<?php } } ?>
];
for(var i = 0; i < chats.length; i++) {
  var type = 'text';
  if(chats[i].typing != undefined) type = 'typing';
  $.chatCtrl('#mychatbox2', {
    text: (chats[i].text != undefined ? chats[i].text : ''),
    picture: (chats[i].position == 'left' ? 'img/user/images.png' : 'img/user/<?= $row->image;?>'),
    position: 'chat-'+chats[i].position,
    type: type
  });
}


</script>

