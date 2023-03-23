<?php include('../1connection.php'); ?>
<?php include('1session.php'); 


?>
<!DOCTYPE html>
<html lang="en">

<!-- -->
<?php include('addson/1head.php'); ?>
<!-- CSS Libraries -->
<link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css">
<link rel="stylesheet" href="assets/modules/jquery-selectric/selectric.css">
<link rel="stylesheet" href="assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">

<!-- Page Loader -->
<?php include('addson/1loader.php'); ?>
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
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item"><a href="product.php">Books</a></div>
                        <div class="breadcrumb-item">Add New Books</div>
                    </div>
                </div>

                <div class="section-body">
                    <h2 class="section-title">Add New Books</h2>
                    <p class="section-lead">On this page you can create a new Books and fill in all fields.</p>

                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="background-color: #bcd4ba;">
                                <div class="card-header">
                                    <h4>Write Your Books</h4>
                                </div>
                                <form method="post" action="query.php" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Book Title</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Author</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="author">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Accession Number</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="accession">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Publisher</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="publisher">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Call Number</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="callnumber">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Quantity</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="number" class="form-control" name="quantity">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Price</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="number" class="form-control" name="price">
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
                                            <select class="form-control selectric" name="department" required="">
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
                                            <textarea class="summernote-simple" style="border: solid 1px;" name="abstract"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea class="summernote-simple" style="border: solid 1px;" name="description"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Thumbnail</label>
                                        <div class="col-sm-12 col-md-7">
                                            <div id="image-preview" class="image-preview">
                                                <label for="image-upload" id="image-label">Choose File</label>
                                                <input type="file" name="imageupload" accept="image/*" id="image-upload" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tags</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control inputtags">
                                        </div>
                                    </div> -->
                                    <div class="form-group row mb-4">
                                        
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="sellerID" readonly="" value="<?= $rowseller->sellerID?>" hidden>
                                        </div>
                                    </div>
                                    

                                    
                                    <div class="form-group row mb-4 text-md-right">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                        <div class="col-sm-12 col-md-7">
                                            <a href="product.php" class="btn btn-danger">Cancel</a>
                                            <button type="submit" name="btnitemadds" class="btn btn-primary">Add Book</button>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
        <!-- Start app Footer part -->
<?php include('addson/1footer.php'); ?>    
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
<script src="assets/modules/summernote/summernote-bs4.js"></script>
<script src="assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
<script src="assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js"></script>
<script src="assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>

<!-- Page Specific JS File -->
<script src="js/page/features-post-create.js"></script>
<!-- Page Specific JS File -->
<script src="js/page/modules-datatables.js"></script>
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