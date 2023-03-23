<?php include('../1connection.php'); ?>
<?php include('1session.php'); ?>
<?php 
 if(isset($_GET['itemid']) ? $_GET['itemid'] : ''){
    $itemid = $_GET['itemid'];
$itemlist="SELECT * from book where book_id = '$itemid'";
$result = $con->query($itemlist);
$row=$result->fetch_assoc();
$title = $row['book_title'];
      
 }else{
         echo"<script type='text/javascript'>window.location.replace('errors-404.php');</script>";
      }
?>
<!DOCTYPE html>
<html lang="en">

<!-- -->
<?php include('1head.php'); ?>

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
                    <h1>Book Info</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a href="#">Book List</a></div>
                        <div class="breadcrumb-item">Book Info</div>
                    </div>
                </div>

                <div class="section-body">

                    <h2 class="section-title">Book Images & Info</h2>
                    <div class="row"> 
                        <?php 
                                        $itemlist1="SELECT * from book where book_title = '$title'";
                                        $result1 = $con->query($itemlist1);
                                        while($row1=$result1->fetch_assoc()){
                                    ?>
                        <div class="col-12">
                            <div class="card bg-light">
                                <div class="row">
                                
                                <div class="col-6 " style="">
                                   <center>
                                    <div class="chocolat-parent">
                                        
                                        <a href="../img/product/<?php  if($row['book_image1']==NULL){ ?>null.png<?php } else { echo $row['book_image1'];?><?php } ?>" class="chocolat-image" title="Just an example">
                                            <div data-crop-image="">
                                                <img alt="image" src="../img/product/<?=$row['book_image1'];  ?>" style="border:black solid  2px; width: 80%; height: auto;margin-top: 10px;" class="img-fluid" >
                                            </div>
                                        </a>

                                    </div>
                                    </center>
                                    <div class="text-md-right" style="margin-top: 20px; margin-right: 30px;" >
                                      <button data-toggle="modal" data-target="#ImageUp" class="btn btn-primary">Update Featured Image</button>   
                                    </div>
                                   
                                    <hr>
                                           <!--  <div class="gallery " style=" margin:10px;">
                                                 <center>
                                                <div class="gallery-item" data-image="assets/img/example-image.jpg" data-title="Image 1"  style="border:solid black 1px;"></div>
                                                <div class="gallery-item" data-image="assets/img/example-image.jpg" data-title="Image 2" style="border:solid black 1px;"></div>
                                                <div class="gallery-item" data-image="assets/img/example-image.jpg" data-title="Image 3" style="border:solid black 1px;"></div>
                                                <div class="gallery-item" data-image="assets/img/example-image.jpg" data-title="Image 4" style="border:solid black 1px;"></div>
                                                <div class="gallery-item" data-image="assets/img/example-image.jpg" data-title="Image 5" style="border:solid black 1px;"></div>
                                                <div class="gallery-item" data-image="assets/img/example-image.jpg" data-title="Image 6" style="border:solid black 1px;"></div>
                                                <div class="gallery-item" data-image="assets/img/example-image.jpg" data-title="Image 7" style="border:solid black 1px;"></div>
                                                <div class="gallery-item" data-image="assets/img/example-image.jpg" data-title="Image 8"  style="border:solid black 1px;"></div>
                                                 </center>
                                            </div>
                                                 <div class="text-md-right" style="margin-top: 10px; margin-right: 30px; margin-bottom: 10px; " >
                                      <button class="btn btn-primary">Update Other Image</button>   
                                    </div> -->
                                    </div>
                                    
                                    
                                    <div class="col-6">

                                        <h5 style="margin-top: 20px"><?php echo $row1['book_title'];  ?></h5>
                                        <p>

                                             <b>Author:</b> <?php echo $row1['book_author'];  ?><br>
                                            <b>Publisher:</b> <?php echo $row1['book_publisher'];  ?><br>
                                            <b>Accession Number:</b> <?php echo $row1['book_accession'];  ?><br>
                                            <b>Book Callnumber:</b> <?php echo $row1['book_callnumber'];  ?><br>
                                            <b>Available Left:</b> <?php echo $row1['book_available'];  ?><br>
                                            <b>Borrowed Count:</b> <br>
                                            
                                            <b>Description:</b> <?php echo $row1['book_abstract'];  ?><br>


                                        </p>
                                         <div class="text-md-right" style="margin-top: 20px; margin-right: 30px; margin-bottom: 50px;" >
                                         <button class="btn btn-danger" data-toggle="modal" data-target="#Delete<?php echo $row1['book_id'];  ?>">Delete</button>
                                      <button data-toggle="modal" data-target="#Details" class="btn btn-primary">Update Details</button>   
                                    </div>
                                    </div>
                                   
                                </div> 
                            </div>
                        </div>
                        <div class="modal fade" id="Details" tabindex="-1" role="dialog" data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel"></h4>
            </div>
            <form id="" action="query.php" method="post" enctype="multipart/form-data">
            
            <div class="modal-body bg-light" >
                                  
<h2 class="section-title">Update Book Details</h2>
                                 
                                <div class="card-body">
                                	<input type="text" name="id" value="<?php echo $row1['book_id'];  ?>" hidden> 
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Book Name</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="name" value="<?php echo $row1['book_title'];  ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Author</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="author" <?php echo $row1['book_author'];  ?>>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Publisher</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="publisher" value="<?php echo $row1['book_publisher'];  ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Accession Number</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="accession" value="<?php echo $row1['book_accession'];  ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Call Number</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="callnumber" value="<?php echo $row1['book_callnumber'];  ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" value="<?php echo $row1['book_available'];  ?>">Quantity</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="number" class="form-control" name="quantity">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Price</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="number" class="form-control" name="price" value="<?php echo $row1['book_fines'];  ?>">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                        <div class="col-sm-12 col-md-7">
                                            <select class="form-control selectric" name="category">
<?php
 $category=mysqli_query($con,"SELECT *  from category ")or die(mysqli_error($con));
              while($rowcategory=mysqli_fetch_object($category))
              {
?>
                                                <option value="<?php echo $rowcategory->categoryID;?>"><?php echo $rowcategory->categoryNAME;?></option>
<?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                     <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Department</label>
                                        <div class="col-sm-12 col-md-7">
                                            <select class="form-control selectric" name="department">
<?php
 $dep=mysqli_query($con,"SELECT *  from department ")or die(mysqli_error($con));
              while($rowdep=mysqli_fetch_object($dep))
              {
?>
                                                <option value="<?php echo $rowdep->department_id;?>"><?php echo $rowdep->department_name;?></option>
<?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Abstract</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea class="summernote-simple" style="border: solid 1px;" name="abstract"><?php echo $row1['book_abstract'];  ?></textarea>
                                        </div>
                                    </div>
                                    
                                   
                                    <!-- <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tags</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control inputtags">
                                        </div>
                                    </div> -->
                                   
                              
                                  
            					</div>
            </div>
           
            <div class="modal-footer text-center">
               
                    
                <button type="submit" name="btnupdatesproducts" class="btn btn-success btn-lg  waves-effect">Update</button>
                
                <a href=""  class="btn btn-danger btn-lg waves-effect" data-dismiss="modal">No</a>
            </div>
            </form>
        </div>
    </div>
</div>
                        <?php } ?>
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
<!-- <script src="js/page/gmaps-draggable-marker.js"></script> -->

<!-- JS Libraies -->
<script src="assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<script src="assets/modules/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/modules/summernote/summernote-bs4.js"></script>
<!-- Template JS File -->
<script src="js/scripts.js"></script>
<script src="js/custom.js"></script>
</body>
</html>

<script type="text/javascript">
   "use strict";

var input_lat = $("#input-lat"), // latitude input text
  input_lng = $("#input-lng"), // longitude input text
  map = new GMaps({ // init map
    div: '#map',
    lat: <?php echo $rowseller->sellerlatitude;  ?>,
    lng: <?php echo $rowseller->sellerlongitude;  ?>
  });

// add marker
var marker = map.addMarker({
  lat: <?php echo $rowseller->sellerlatitude;  ?>,
  lng: <?php echo $rowseller->sellerlongitude;  ?>,
  draggable: false,
});

// when the map is clicked
// map.addListener("click", function(e) {
//   var lat = e.latLng.lat(), 
//     lng = e.latLng.lng();

//   // move the marker position
//   marker.setPosition({
//     lat: lat,
//     lng: lng
//   });
//   update_position();       
// });

// // when the marker is dragged
// marker.addListener('drag', function(e) {
//   update_position();
// });

// set the value to latitude and longitude input
// update_position();
// function update_position() {
//   var lat = marker.getPosition().lat(), lng = marker.getPosition().lng();
//   input_lat.val(lat);
//   input_lng.val(lng);
// }

// move the marker when the latitude and longitude inputs change in value
// $("#input-lat,#input-lng").blur(function() {
//   var lat = parseInt(input_lat.val()), 
//     lng = parseInt(input_lng.val());

//   marker.setPosition({
//     lat: lat,
//     lng: lng
//   });
//   map.setCenter({
//     lat: lat,
//     lng: lng
//   });
// }); 

</script>
<div class="modal fade" id="ImageUp" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel"></h4>
            </div>
            <form id="" action="query.php" method="post" enctype="multipart/form-data">
            
            <div class="modal-body bg-light" >
                                  
<h2 class="section-title">Update Book Image</h2>
                                 
                                
                                	<input type="text" name="id" value="<?php echo $row1['book_id'];  ?>" hidden> 
                                	<input type="files" accept="image/*" name="iamgedefault" value="<?php echo $row1['book_image1'];  ?>" hidden>
                                   <img alt="image" src="../img/product/<?php echo $row1['book_image1'];  ?>" style="border:black solid  2px; width: 80%; height: auto;margin-top: 10px;" class="img-fluid" >
                                   <hr>
                                    <input type="file" accept="image/*" name="imageupload"  id="image-upload" />
                                    
                                   
                                   
                                    
                              
                                  
            </div>
           
            <div class="modal-footer text-center">
               
                    
                <button type="submit" name="btnupdatesproductsimg" class="btn btn-success btn-lg  waves-effect">Update</button>
                
                <a href=""  class="btn btn-danger btn-lg waves-effect" data-dismiss="modal">No</a>
            </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="Delete<?php echo $row->book_id;  ?>" tabindex="" role="dialog">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="name" id="defaultModalLabel"> Delete <?php echo $row->book_title;  ?>? </h4>
                                                                </div>
                                                                <form method="post" action="query.php">
                                                                <div class="modal-body">
                                                                 Are You Sure To Delete This ? 
                                                                 <input type="text" name="id" value="<?php echo $row->book_id;  ?>" hidden>  
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                 <button type="submit" name="btndeletebook" class="btn btn-success btn-lg  waves-effect">Delete</button>
                                                                <a href="" class="btn btn-danger btn-lg waves-effect" data-dismiss="modal">No</a>
                                                                </div>
                                                            </form>
                                                            </div>
                                                        </div>
                                                    </div>



