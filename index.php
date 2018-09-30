<?php
	$home_page = true;
	$activeMenu = 'Home';

	include_once('includes/header.php');	
?>

<!--Banner Carousel -->
<div id="slides">
	<ul class="slides-container">
        <li class="slides-item">
			<div class="slides-bg" style="background:url('images/slider1.jpg');" alt=""></div>
		</li>
		<li class="slides-item">
			<div class="slides-bg" style="background:url('images/slider1.jpg');" alt=""></div>
		</li>
		
	</ul>

	<nav class="slides-navigation">
		<a href="#" class="next"></a>
		<a href="#" class="prev"></a>
	</nav>
	
	<!--<div class="scroll-down">
		<span class="scroll-dot"></span>
	</div>-->
</div>
<!--/Banner Carousel -->

<div class="p50 about-section">
    <div class="container">
        <div class="section-head">
            <h3 class="about-title">About DDV Exports</h3>
            <hr class="line50 center-block">
        </div>
        <div class="about-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit voluptate id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate id est laborum.</p>
            <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit voluptate id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate id est laborum.</p>
        </div>
    </div>
</div>

<div class="p50 product-section">
    <div class="container">
        <div class="section-head">
            <h3 class="about-title">Our Products</h3>
            <hr class="line50 center-block">
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-3">
                <div class="product-column">
                    <a href="product-detail.php">
                        <div class="product-image">
                            <img src="images/products/leather-jackets.jpg" class="img-fluid" alt="Leather Jackets">
                            <span class="view-more-link"><img src="images/right-arrow.svg"></span>
                        </div>
                        <h4 class="product-title">Leather Jackets</h4>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="product-column">
                    <a href="product-detail.php">
                        <div class="product-image">
                            <img src="images/products/round-neck-tshirt.jpg" class="img-fluid" alt="Round Neck T-shirts">
                            <span class="view-more-link"><img src="images/right-arrow.svg"></span>
                        </div>
                        <h4 class="product-title">Round Neck T-shirts <span class="view-more-icon"></span></h4>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="product-column">
                    <a href="product-detail.php">
                        <div class="product-image">
                            <img src="images/products/sesame-oil.jpg" class="img-fluid" alt="Sesame oil">
                            <span class="view-more-link"><img src="images/right-arrow.svg"></span>
                        </div>
                        <h4 class="product-title">Sesame oil</h4>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="product-column">
                    <a href="product-detail.php">
                        <div class="product-image">
                            <img src="images/products/coconuts.jpg" class="img-fluid" alt="Coconuts">
                            <span class="view-more-link"><img src="images/right-arrow.svg"></span>
                        </div>
                        <h4 class="product-title">Coconuts</h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="submit-button text-center">
            <a href="#" class="btn btn-success">View All</a>
        </div>
    </div>
</div>

<div class="p50 contact-section">
    <div class="container">
        <div class="section-head">
            <h3 class="about-title">Enquire Us</h3>
            <hr class="line50 center-block">
        </div>
        <div class="enquiry-wrapper">
             
            <form>
                <div class="row form-group">
                    <div class="col-sm">
                        <input type="text" class="form-control form-control-lg" id="fname" placeholder="First Name *">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control form-control-lg" id="lname" placeholder="Last Name *">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm">
                        <input type="text" class="form-control form-control-lg" id="email" placeholder="Email Address *">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control form-control-lg" id="phone" placeholder="Phone Number">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm">
                        <textarea class="form-control form-control-lg" rows="6" id="message" placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="submit-button">
                    <button class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="customer-section">
    <div class="container"> 
        <ul class="customer-list">
            <li><img src="images/customer/sony-pictures_42.png" alt=""></li>
            <li><img src="images/customer/lt-infotech_44.png" alt=""></li>
            <li><img src="images/customer/tcs_45.png" alt=""></li>
            <li><img src="images/customer/umw_46.png" alt=""></li>
        </ul>
    </div>
</div>


<?php include_once('includes/footer.php'); ?>