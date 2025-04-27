<?php session_start();
error_reporting(0);
include('user/include/dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Laundry Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="css/lightbox.css">
 <link type="text/css" rel="stylesheet" href="css/cm-overlay.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Sintony:400,700&amp;subset=latin-ext" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<!-- banner -->
<div class="w3l_banner">

<div class="w3_bandwn">
<div class="container">
<div class="col-md-6 w3_l">
<i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">Laundry Management System</a>
</div>


<div class="clearfix"></div>
</div>
</div>
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <h1><a class="navbar-brand" href="#">LMS</a></h1>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
      <ul class="nav navbar-nav">



        <li><a href="#index.php" class="page-scroll">HOME</a></li>
        <li><a href="#about" class="page-scroll">ABOUT</a></li>
		<li><a href="#services" class="page-scroll">SERVICES</a></li>
		<li><a href="#gallery" class="page-scroll">GALLERY</a></li>
		<li><a href="#contact" class="page-scroll">PRICING</a></li>
        <li><a href="#reviews" class="page-scroll">REVIEWS</a></li> <!-- Updated Link -->
<li><a href="user/" class="page-scroll">User</a></li>
<li><a href="admin/" class="page-scroll">Admin</a></li>
     
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="w3l_bandwn">
 <h2>Welcome to Laundry</h2>
 <div class="about-p text-center">
<span class="sub-title"></span>
<span class="fa fa-star" aria-hidden="true"></span>
<span class="sub-title"></span>
</div>
<h3>Washing Clothes</h3>

 </div>
</div>
<!-- /features -->
<div class="about" id="about">
	<div class="features" id="features">
		<div class="container">
	<h3>About Us</h3>
			<div class="tittle_head_w3layouts">
				<h4>Powerful Features</h4>
				
			</div>
			<div class="inner_sec_info_agileits_w3">
				<!-- <div class="border1"> -->
				<div class="w3_banup">
					<div class="col-md-4 w3_ret">
					<div class="col-md-10 w3_txt">
							<h4>Wash Cycle</h4>
							</div>
							<div class="col-md-2 w3ls_ic">
							<i class="fa fa-comment-o" aria-hidden="true"></i>
							</div>
							
						<div class="clearfix"></div>
					
					<div class="col-md-10 w3_txt">
						
							<h4>Tumble Drying</h4>
							</div>
							<div class="col-md-2 w3ls_ic">
							<i class="fa fa-microphone" aria-hidden="true"></i>
							</div>
						<div class="clearfix"></div>
				
					<div class="col-md-10 w3_txt">
						
							<h4>Customize Quickly</h4>
							</div>
							<div class="col-md-2 w3ls_ic">
								<i class="fa fa-cubes" aria-hidden="true"></i>
							</div>
						<div class="clearfix"></div>
					
					</div>
					<div class="col-md-4 w3l_mid">
					<div class="bulb">
						<img src="images/pic.jpg" alt="" />
					</div>
					</div>
					<div class="col-md-4 wthree_r">
					<div class="col-md-2 w3ls_ic">
							<i class="fa fa-street-view" aria-hidden="true"></i>
							</div>
							<div class="col-md-10 w3_txt">
							<h4>Sorting</h4>
						</div>
						<div class="clearfix"></div>
					
					<div class="col-md-2 w3ls_icr">
							<i class="fa fa-futbol-o" aria-hidden="true"></i>
							</div>
							<div class="col-md-10 w3_txt">
							<h4>Mildew Effect</h4>
						</div>
						<div class="clearfix"></div>
					
					<div class="col-md-2 w3ls_icr">
							<i class="fa fa-laptop" aria-hidden="true"></i>
						</div>
						<div class="col-md-10 w3_txt">
							<h4>Crocking.</h4>
						</div>
						<div class="clearfix"></div>
					</div>
				
				<div class="clearfix"></div>
			</div>
		</div>
				<!-- </div> -->
	</div>
		</div>
	</div>
	<!-- //features -->
</div>
</div>
<!-- Order Form-->
<!-- /Order Form-->
<!-- Services-->
<div class="services" id="services">
<div class="container">
<h3>Services</h3>
<div class="col-md-4 hhh">
<div class="wthree_rt">
<h4>Normal Cloths Washing</h4>
</div>
</div>
<div class="col-md-4 hhh">
<div class="wthree_rt">
<i class="fas fa-tshirt" aria-hidden="true"></i>
<h4>Woolen  Clothes Washing</h4>
</div>
</div>
<div class="col-md-4 hhh">
<div class="wthree_rt">

<h4>
Washing and Ironing</h4>
</div>
</div>
<div class="clearfix"></div>
<div class="w3l_serdwn">
<div class="col-md-4 hhh">
<div class="agile_ser">
<h4>
Bedsheets, Sofa Cover and Quilt Cleaning</h4>
</div>
</div>
<div class="col-md-8 W3ls_serv">
<div class="agile_ser ">
<div class="col-md-6 wthree_l">
<p>FREE CUFF AND
COLLAR CLEANING</p>
</div>
<div class="col-md-6 wthree_rts">
<img src="images/s1.jpg" class="img-responsive" alt="">
</div>
<div class="clearfix"></div>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
<!-- /Services-->
   <!-- gallery -->
   <div class="gallery" id="gallery">
         <div class="container-fluid">
            <h3>Gallery</h3>
          
            <div class="about-bottom  w3ls-team-info">
                <div class="col-md-12">
                    <div id="Carousel" class="carousel slide">
                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/g1.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g1.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/g2.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g2.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/g3.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g3.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/g4.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g4.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/g5.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g5.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/g6.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g6.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/g7.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g7.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/g1.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g1.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/g2.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g2.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/g3.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g3.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/g4.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g4.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/g5.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g5.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                        </div>
                        <!--.carousel-inner-->
                        <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                        <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                    </div>
                    <!--.Carousel-->

                </div>
            </div>
        </div>
    
	</div>
    <!-- //gallery -->


    <!-- Reviews Section -->
<div class="reviews" id="reviews">
    <div class="container">
        <h3>Our Customer Reviews</h3>
        <div id="reviewsCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="review">
                        <img src="images/customer1.png" alt="Customer 1" class="customer-image" height="100px" width="100px">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p>"The service was excellent! My clothes have never looked better."</p>
                        <h4>- Vikas Gupta</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="review">
                        <img src="images/customer2.png" alt="Customer 2" class="customer-image" height="100px" width="100px">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"Very professional and timely service. Highly recommended!"</p>
                        <h4>- Sanket Dhage</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="review">
                        <img src="images/customer3.png" alt="Customer 3" class="customer-image" height="100px" width="100px">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p>"Great experience! The staff is friendly and attentive."</p>
                        <h4>- Satyam Jha</h4>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#reviewsCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#reviewsCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
</div>
<!-- //Reviews Section -->

<!-- Festive Offer Modal -->
<div class="modal fade" id="offerModal" tabindex="-1" role="dialog" aria-labelledby="offerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="offerModalLabel">Festive Offer!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3>Get 10% Off on Your First Order!</h3>
                <p>Celebrate the festive season with us! *checkout*</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- contact -->
	<div class="contact" id="contact">
		<div class="container">
			<div class="agile-contact-grids">
			     <h3>Laundry Price(Per Unit)</h3>
				 	<div class="col-md-12 agile-contact-left">
					<div class="agileits-map">
					
					</div>
					<div class="map-grid">
	

 <?php

$ret=mysqli_query($con,"select * from tblpricelist");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
      
       <table border="1" class="table table-bordered mg-b-0">
<tr>
    <th>Top Wear Laundry Price</th>
    <td><?php  echo $row['TopWear'];?></td>
  </tr>


   <tr>
    <th>Bootom Wear Laundry Price</th>
    <td><?php  echo $row['BottomWear'];?></td>
  </tr>
  
<tr>
    <th>Woolen Cloth Laundry Price</th>
    <td><?php  echo $row['Woolen'];?></td>
  </tr>
  
  <tr>
    <th>Jeans Cloth Laundry Price </th>
    <td><?php  echo $row['Jeans'];?></td>
  </tr>
 
  <tr>
    <th>Curtains Laundry Price </th>
    <td><?php  echo $row['Curtains'];?></td>
  </tr>

  <tr>
    <th>Pillowcovers & Bedsheets Laundry Price </th>
    <td><?php  echo $row['Bedsheets'];?></td>
  </tr>


</table>

<?php } ?>
					</div>
				</div>
					</div>
			
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //contact -->
	
	</div>
	<!-- //footer -->
<div class="copyright">
		<div class="container">
			<p>Laundry Management System</p>
		</div>
	</div>

<script src="js/jquery.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/move-top.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/grayscale.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<!-- flexSlider -->
	<script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items :2,
									itemsDesktop : [800,2],
									itemsDesktopSmall : [414,1],
							        lazyLoad : true,
							        autoPlay : true,
							        navigation :true,
									
							        navigationText :  false,
							        pagination : true,
									
							      });
								  
							    });
							    </script>

<!-- //flexSlider -->
 <!-- /gallery -->
    <script src="js/jquery.tools.min.js"></script>
    <script src="js/jquery.mobile.custom.min.js"></script>
    <script src="js/jquery.cm-overlay.js"></script>

    <script>
        $(document).ready(function () {
            $('.cm-overlay').cmOverlay();
        });
    </script>
    <!-- //gallery -->

        <!-- //review -->
        <script>
        $(document).ready(function(){
            $('#reviewsCarousel').carousel({
                interval: 2000 // Change the interval as needed
            });
        });
    </script>
    <!-- //review -->

    <!-- //offer -->
    <script>
        $(document).ready(function(){
            // Show the festive offer modal on page load
            $('#offerModal').modal('show');
        });
    </script>
    <!-- //offer -->


<!-- Move-to-top-->
<script type="text/javascript">
$(document).ready(function() {
var defaults = {
containerID: 'toTop', // fading element id
containerHoverID: 'toTopHover', // fading element hover id
scrollSpeed: 1200,
easingType: 'linear' 
};
$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<!--/Move-to-top-->


</body>
</html>