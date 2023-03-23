<?php include('../1connection.php'); ?>
<?php include('1session.php'); ?>
<!DOCTYPE html>
<title>Category</title>
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
                        <div class="breadcrumb-item active"><a href="#">Category List</a></div>
                    </div>
                </div>

                <div class="section-body">

                    <h2 class="section-title">Category List</h2>
                    <div class="row">
                        <div class="col-12" style="padding-bottom: 50px;">
                            
                          

                               <button class="btn btn-success" data-toggle="modal" data-target="#Recieved">Add Category Book</button>

                            
                        </div>
                        <div class="col-12">
                            
                            <div class="card">
                                <div class="card-header">
                                    <h4></h4>
                                    <div class="card-header-form">
                                        <form>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                

                                
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-striped v_center">
                                            <tr>
                                                <th>ID</th>
                                                <th>Category</th>
                                                <th>Action</th>
                                                
                                            </tr>
<?php
 $item=mysqli_query($con,"SELECT *  from category ")or die(mysqli_error($con));
              while($rowitem=mysqli_fetch_object($item))
              {
               
                   
              
?>
                                            <tr>
                                                <td><?php echo $rowitem->categoryID;  ?></td>
                                                <td><?php echo $rowitem->categoryNAME;  ?></td>
                                                <td>
                                                     <button class="btn btn-success" data-toggle="modal" data-target="#Edit<?php echo $rowitem->categoryID;  ?>">Edit</button>
                                                     <button class="btn btn-danger" data-toggle="modal" data-target="#Delete<?php echo $rowitem->categoryID;  ?>">Delete</button>
                                                 </td>
                                            </tr>
                                            
<?php } ?>   
                                        </table>
                                    </div>
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
                            <div class="modal fade" id="Recieved" tabindex="" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="title" id="defaultModalLabel">Add New Category?</h4>
                                        </div>
                                         <form method="post" action="query.php">
                                        <div class="modal-body">  
                                            <label>Category Name</label>
                                            <input type="text" class="form-control" value="" name="cat" required="">
                                        </div>
                                        <div class="modal-footer text-center">
                                          
                                            <button type="submit" name="btnaddcategory" class="btn btn-success btn-lg  waves-effect">Add</button>
                                          
                                            <a href="" class="btn btn-danger btn-lg waves-effect" data-dismiss="modal">No</a>
                                        </div>
                                          </form>
                                    </div>
                                </div>
                            </div>
<?php
 $item2=mysqli_query($con,"SELECT *  from category ")or die(mysqli_error($con));
              while($rowitem2=mysqli_fetch_object($item2))
              {
               
                   
              
?>
                                                    <div class="modal fade" id="Edit<?php echo $rowitem2->categoryID;  ?>" tabindex="" role="dialog">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="title" id="defaultModalLabel"> Edit <?php echo $rowitem2->categoryNAME;  ?>? </h4>
                                                                </div>
                                                                <form method="post" action="query.php">
                                                                <div class="modal-body">
                                                                 <div class="form-group">
                                                                    <label>Category Name</label>
                                                                    <input type="text" class="form-control" value="<?php echo $rowitem2->categoryNAME;  ?>" name="cat">
                                                                    <input type="text" name="id" value="<?php echo $rowitem2->categoryID;  ?>" hidden>
                                                                </div>   
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                 <button type="submit" name="btneditcategory" class="btn btn-success btn-lg  waves-effect">Update</button>
                                                                <a href="" class="btn btn-danger btn-lg waves-effect" data-dismiss="modal">No</a>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal fade" id="Delete<?php echo $rowitem2->categoryID;  ?>" tabindex="" role="dialog">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="title" id="defaultModalLabel"> Delete <?php echo $rowitem2->categoryNAME;  ?>? </h4>
                                                                </div>
                                                                <form method="post" action="query.php">
                                                                <div class="modal-body">
                                                                 Are You Sure To Delete This ? 
                                                                 <input type="text" name="id" value="<?php echo $rowitem2->categoryID;  ?>" hidden>  
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                 <button type="submit" name="btndeletecategory" class="btn btn-success btn-lg  waves-effect">Delete</button>
                                                                <a href="" class="btn btn-danger btn-lg waves-effect" data-dismiss="modal">No</a>
                                                                </div>
                                                            </form>
                                                            </div>
                                                        </div>
                                                    </div>
<?php } ?>   