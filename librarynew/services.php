<?php include('1connection.php'); ?>
<?php include('1session.php'); ?>
<!DOCTYPE html>
<html lang="en">

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
                <h2 class="section-title">Services</h2>
                <p class="section-lead">A library is a collection of materials, books or media that are accessible for use and not just for display purposes.</p>
                <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-large-icons">
                                <div class="card-icon bg-primary text-white"><i class="fas fa-cog"></i></div>
                                <div class="card-body">
                                    <h4>Onsite Process</h4>
                                    <img src="assets/img/lbc.jpg" style="height: 200px;">
                                    
                                    <a href="" class="btn btn-info card-cta"><i class="fas fa-chevron-left"></i> Library Borrower's Card </a>
                                    <hr>
                                     <div class="activities">
                                        <div class="activity">
                                            <div class="activity-icon bg-primary text-white shadow-primary">1</div>
                                            <div class="activity-detail">
                                                <p>Visit Library and Ask Librarian</p>
                                            </div>
                                        </div>
                                        <div class="activity">
                                            <div class="activity-icon bg-primary text-white shadow-primary">2</div>
                                            <div class="activity-detail">
                                                <p>Attend the Library Orientation</p>
                                            </div>
                                        </div>
                                        <div class="activity">
                                            <div class="activity-icon bg-primary text-white shadow-primary">3</div>
                                            <div class="activity-detail">
                                                <p>Get Library Borrower's card</p>
                                            </div>
                                        </div>
                                        <div class="activity">
                                            <div class="activity-icon bg-primary text-white shadow-primary">4</div>
                                            <div class="activity-detail">
                                                <p>School ID is required</p>
                                            </div>
                                        </div>
                                        <div class="activity">
                                            <div class="activity-icon bg-primary text-white shadow-primary">5</div>
                                            <div class="activity-detail">
                                                <p>Once you have LBC, You can borrow the available books</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="card card-large-icons">
                                <div class="card-icon bg-primary text-white"><i class="fas fa-book"></i></div>
                                <div class="card-body">
                                    <h4>Loaning Policies and Procedures
                                </h4>
                                                                    GENERAL CIRCULATION & FILIPINIANA MATERIALS, FICTION BOOKS
                                a.Maximum of THREE (3) BOOKS can be borrowed for every student for 1 week<br>
                                b.Renewable for another week unless needed.<br><hr>

                                GENERAL REFERENCE, RESERVED AND PERIODICALS<br>
                                a. For inside reading only. These may be photocopiedd upon request and approval of the librarian in-charge<br><hr>

                                THESIS AND DISSERTATIONS<br>
                                a. For inside reading only. photocopying of these materials are not allowed.<br>
                                     
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card card-large-icons">
                                <div class="card-icon bg-primary text-white"><i class="fas fa-info"></i></div>
                                <div class="card-body">
                                    <h4>Fines and Penalties</h4>
                                     UNRETURNED BOOKS<br>
a. 5.00 Php/ day excluding holidaays and Sundays.<br><hr>

OVERDUE PHOTOCOPIED<br>
a. 5.00 Php/ hour<br><hr>

LOST BOOKS<br>
a.Shoukd be reported immediately to library loan counter to stop accumulation of fines<br>
b.Reported lost books should be:<br>
&nbsp;&nbsp;&nbsp;&nbsp;i. replace with the latest edition of the said lost book.<br>
&nbsp;&nbsp;&nbsp;&nbsp;ii.payment for the lost books is also accepted based on its current value plus 100.00 php of its cost for ordering and processing
c. Found lost book is fined from the due date until the date of return. <br>                              
 <img src="assets/img/ac.jpg" style="height: 300px;">      <a href="" class="btn btn-info card-cta"><i class="fas fa-chevron-left"></i> Library Services</a>                              
                                </div>
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