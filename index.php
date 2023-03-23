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
                            
                                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="img/banner/clipart-image-library-6.png" alt="First slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5><a href="shop.php" class="btn btn-success">Borrow Now</a></h5>
                                                
                                            </div>
                                        </div>
                                        
                                       
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                         

                             <h2 class="section-title">Available Books</h2>


                            <div class="row">
<?php
 $item=mysqli_query($con,"SELECT *  from book  GROUP BY book_title LIMIT 4")or die(mysqli_error($con));
              while($rowitem=mysqli_fetch_object($item))
              {
                if ($rowitem->book_available>0) {
                    # code...
                
?>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                    <article class="article article-style-b">
                                        <div class="article-header">
                                            <div class="article-image" data-background="img/product/<?= $rowitem->book_image1;?>">
                                            </div>
                                            <div class="article-badge">
                                                <div class="article-badge-item bg-danger"><i class="fas fa-fire"></i> Available: <?= $rowitem->book_available; ?> left</div>
                                            </div>
                                        </div>
                                        <div class="article-details">
                                            <div class="article-title">
                                                <h2><a href="#"><?= $rowitem->book_title;?></a></h2>
                                            </div>
                                            <p><B>Author: </B><?= $rowitem->book_author;?> </p>
                                            <div class="article-cta">
                                                <a href="viewproduct.php?itemid=<?= $rowitem->book_id;?>" class="btn btn-success">View Book <i class="fas fa-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
<?php }} ?>    
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