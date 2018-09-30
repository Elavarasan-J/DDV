<?php
	$activeMenu = 'Our Products';
	include_once('includes/header.php'); 
?>

<div class="subpage-banner">
	<div class="table-container">
		<div class="table-cell">
			<div class="container">
				<div class="subpage-head">
					<h3>Leather Jackets</h3>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="subpage-wrapper">
    <div class="container">
		<div class="row mb30">
            <div class="col-md-5">
                <div class="pro-image">
                    <img class="img-fluid" src="images/products/leather-jackets.jpg" alt="Leather Jackets">
                </div>
            </div>
            <div class="col-md-7">
                <div class="pro-detail">
                    <h4>Leather Jackets</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like including versions of Lorem Ipsum.</p>
                    <ul>
                        <li>Manufactured in compliance with industry set standards</li>
                        <li>High grade raw material used</li>
                        <li>Fine finished</li>
                        <li>Completely tested</li>
                        <li>Comfortable to wear</li>
                    </ul>
                </div>
            </div>
        </div>
        
        
        <div class="pro-prev-next-wrapper">
            <div class="d-flex justify-content-between">
                <a class="product-nav prev" href="#"><i data-feather="chevron-left"></i> Sesame Oil</a>
                <a class="product-nav next" href="#">Round Neck T-shirts <i data-feather="chevron-right"></i></a>
            </div>
        </div>
        
        <div class="related-products">
            <h3>You May Also Like</h3>
            <hr class="line50">
            <div class="row justify-content-center">
                <div class="col-md-4 col-lg-3">
                    <div class="product-column">
                        <a href="product-detail.php">
                            <div class="product-image">
                                <img src="images/products/leather-jackets.jpg" class="img-fluid" alt="Leather Jackets">
                                <span class="view-more-link"><img src="images/right-arrow.svg"/></span>
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
                                <span class="view-more-link"><img src="images/right-arrow.svg"/></span>
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
                                <span class="view-more-link"><img src="images/right-arrow.svg"/></span>
                            </div>
                            <h4 class="product-title">Sesame oil</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
<?php include_once('includes/footer.php'); ?>