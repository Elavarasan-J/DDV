<?php
	$activeMenu = 'Enquiry';
	include_once('includes/header.php'); 
?>

<div class="subpage-banner">
	<div class="table-container">
		<div class="table-cell">
			<div class="container">
				<div class="subpage-head">
					<h3>Enquiry</h3>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="subpage-wrapper">
	<div class="container">
		<div class="enquiry-wrapper">
            <div class="section-head">
                <h2>We'd love to hear from you!</h2>
                <p>Please fill out the form to know more about us. We will get back to you immediately</p>
            </div>
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
<?php include_once('includes/footer.php'); ?>