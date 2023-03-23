<?php include('../1connection.php'); ?>
<?php include('1session.php'); ?>
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
                   <!--  <h1>Pending Order</h1> -->
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a href="#">Add New Student</a></div>
                    </div>
                </div>

                <div class="section-body">

                    <h2 class="section-title">Add New Student</h2>
                    <div class="row">
                       
                        <div class="col-12">
                            
                            <div class="card">
                               
                                <form method="POST" action="query.php" enctype="multipart/form-data">
            <div class="card card-primary" style="border: 1px solid black; padding: 20px; ">
              <div class="row m-0">
                <div class="col-12 col-md-12 col-lg-5 p-0" >
                  <div class="card-header text-center"><h4>Register</h4></div>
                  <div class="card-body" style="opacity: 90%;">
                    
                        <div class="form-group floating-addon">
                        <label>Profile Image</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              
                            </div>
                          </div>
                         <input type="file" accept="image/*" name="imageupload"  id="image-upload" />
                        </div>
                      </div> 

                       <div class="form-group floating-addon">
                        <label>Phone Number</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-phone"></i>
                            </div>
                          </div>
                          <input id="" type="tel" class="form-control" name="phone"  required=""  placeholder="09575214954" pattern="[0]{1}[9]{1}[0-9]{9}">
                        </div>
                      </div>

                      <div class="form-group floating-addon">
                        <label>Fullname</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="far fa-user"></i>
                            </div>
                          </div>
                          <input id="" type="text" class="form-control" name="name"  required=""  placeholder="Full Name">
                        </div>
                      </div>
                      <div class="form-group floating-addon">
                        <label>Student ID</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="far fa-user"></i>
                            </div>
                          </div>
                          <input id="" type="text" class="form-control" name="studentid"  required=""  placeholder="Student ID">
                        </div>
                      </div>
                     <div class="form-group">
                                        <label>Course</label>
                                        <select class="form-control" required="" name="course">
<?php
 $item=mysqli_query($con,"SELECT *  from course ")or die(mysqli_error($con));
              while($rowitem=mysqli_fetch_object($item))
              {
               
                   
              
?>
                                            <option value="<?php echo $rowitem->courseID;  ?>"><?php echo $rowitem->courseNAME;  ?></option>
<?php } ?> 
                                        </select>
                                    </div>
                      <div class="form-group floating-addon">
                        <label>Username</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="far fa-user"></i>
                            </div>
                          </div>
                          <input id="" type="text" class="form-control" name="username"  required=""  placeholder="Username">
                        </div>
                      </div>

                      <div class="form-group floating-addon">
                        <label>Password</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-key"></i>
                            </div>
                          </div>
                          <input id="password" type="password" class="form-control" name="password"  required="" placeholder="Password">
                        </div>
                      </div>

                      <label>House No.</label>
                    <input type="text" class="form-control" id=""  name="no"  required="">
                    <div class="form-group">
                        <label>Region</label>
                        <select id="region" class="form-control" name="region" required=""></select>
                     </div>
                     <div class="form-group">
                        <label>Province</label>
                        <select id="province" class="form-control" name="province"  required=""></select>
                     </div>
                     <div class="form-group">
                        <label>City</label>
                        <select id="city" class="form-control" name="city"  required=""></select>
                     </div>
                     <div class="form-group">
                        <label>Barangay</label>
                        <select id="barangay" class="form-control" name="barangay"  required=""></select>
                     </div>
                  
                    <input  type="text" name="region2" hidden  required="">
                    <input  type="text" name="province2"  hidden  required="">
                    <input  type="text" name="city2" hidden>
                    <input  type="text" name="barangay2" hidden  required="">

                  </div>  
                </div>
                <div class="col-12 col-md-12 col-lg-7 p-0"  >
                   <div class="row">
                                    <div class="form-group col-6">
                                        <label>Latitude</label>
                                        <input type="text" id="input-lat" class="form-control" name="lat" readonly="">
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Longitude</label>
                                        <input type="text" id="input-lng" class="form-control" name="lng" readonly="">
                                    </div>
                                </div>
                                <div class="alert alert-info">
                                        You can drag the marker, change the value of longitude and latitude at the above input and click on the desired position on the map to change the position of the marker.
                                    </div>
                                
                                    <div id="map" data-height="400" style="opacity: 100%;"></div>
                                     <div class="form-divider">Terms and Conditions</div>
                                <div class="form-group">
                                    <div class="">
                                        <input type="checkbox" id="myCheck" onclick="myFunction()" required="">
                                        <label class="" for="agree">I agree with the terms and conditions</label>
                                    </div>
                                    <div class="alert alert-success" id="text" style="display:none">
                                        I agree that all info here is valid or true. Any wrong information or misused of the system will be block by tehe admin. I agree that any wrong missused of the system will cost of blocking my account.
                                    </div>
                                </div>
                </div>
              </div>

                      <div class="form-group text-right">
                        <button type="submit" class="btn  btn-lg btn-primary"  style="width:100%;" name="btnregister">
                          Register
                        </button>
                      </div>
                            <div class="text-center" style="margin-top:0;padding-bottom: 10px;">
                                <div class="text-job text-muted">or</div>
                            </div>
                            <div class="text-center">
                        <a  href="login.php"  class="btn btn-lg btn-success" style="width:100%;">Login</a>
                    </div>
                    </form>
            </div>
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
<!-- Page Specific JS File -->

  <!-- Page Specific JS File -->
  <script src="js/page/utilities-contact.js"></script>
  
  <!-- Template JS File -->
  <script src="js/scripts.js"></script>
<script src="js/custom.js"></script>
</body>

<!-- utilities-contact.html  Tue, 07 Jan 2020 03:39:50 GMT -->
</html>

<script type="text/javascript">
  "use strict";

var input_lat = $("#input-lat"), // latitude input text
  input_lng = $("#input-lng"), // longitude input text
  map = new GMaps({ // init map
    div: '#map',
    lat:  14.543068553465336,
    lng: 121.0164794921875
  });

// add marker
var marker = map.addMarker({
  lat: 14.543068553465336,
  lng: 121.0164794921875,
  draggable: true,
});

// when the map is clicked
map.addListener("click", function(e) {
  var lat = e.latLng.lat(), 
    lng = e.latLng.lng();

  // move the marker position
  marker.setPosition({
    lat: lat,
    lng: lng
  });
  update_position();       
});

// when the marker is dragged
marker.addListener('drag', function(e) {
  update_position();
});

// set the value to latitude and longitude input
update_position();
function update_position() {
  var lat = marker.getPosition().lat(), lng = marker.getPosition().lng();
  input_lat.val(lat);
  input_lng.val(lng);
}

// move the marker when the latitude and longitude inputs change in value
$("#input-lat,#input-lng").blur(function() {
  var lat = parseInt(input_lat.val()), 
    lng = parseInt(input_lng.val());

  marker.setPosition({
    lat: lat,
    lng: lng
  });
  map.setCenter({
    lat: lat,
    lng: lng
  });
});
GMaps.geolocate({
  // when geolocation is allowed by user
  success: function(position) {
    // set center map according to user position
    map.setCenter(position.coords.latitude, position.coords.longitude);
   
  },
  // when geolocation is blocked by the user
  error: function(error) {
    toastr.error('Geolocation failed: '+error.message);
  },
  // when the user's browser does not support
  not_supported: function() {
    toastr.error("Your browser does not support geolocation");
  }
});

</script>
<script type="text/javascript">
  function myFunction() {
  // Get the checkbox
  var checkBox = document.getElementById("myCheck");
  // Get the output text
  var text = document.getElementById("text");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
}
</script>

        <script type="text/javascript" src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>



        <script type="text/javascript">
            
            var my_handlers = {

                fill_provinces:  function(){

                    var region_code = $(this).val();
                    $('#province').ph_locations('fetch_list', [{"region_code": region_code}]);
                    
                },

                fill_cities: function(){

                    var province_code = $(this).val();
                    $('#city').ph_locations( 'fetch_list', [{"province_code": province_code}]);
                },


                fill_barangays: function(){

                    var city_code = $(this).val();
                    $('#barangay').ph_locations('fetch_list', [{"city_code": city_code}]);
                }
            };
               
            $(function(){
                $('#region').on('change', my_handlers.fill_provinces);
                $('#province').on('change', my_handlers.fill_cities);
                $('#city').on('change', my_handlers.fill_barangays);

                $('#region').ph_locations({'location_type': 'regions'});
                $('#province').ph_locations({'location_type': 'provinces'});
                $('#city').ph_locations({'location_type': 'cities'});
                $('#barangay').ph_locations({'location_type': 'barangays'});

                $('#region').ph_locations('fetch_list');

                 
                $('#region').on('change', function(){

                       
                       var selected_caption = $("#region option:selected").text();

                     
                       $('input[name=region2]').val(selected_caption);

                 }).ph_locations('fetch_list');
                $('#province').on('change', function(){

                       
                       var selected_province = $("#province option:selected").text();

                     
                       $('input[name=province2]').val(selected_province);

                 }).ph_locations('fetch_list');
                 $('#city').on('change', function(){

                       
                       var selected_city = $("#city option:selected").text();

                     
                       $('input[name=city2]').val(selected_city);

                 }).ph_locations('fetch_list');
                 $('#barangay').on('change', function(){

                       
                       var selected_barangay = $("#barangay option:selected").text();

                     
                       $('input[name=barangay2]').val(selected_barangay);

                 }).ph_locations('fetch_list');
            });
        </script>