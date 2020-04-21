<!--================ Start banner Area =================-->
	<section class="banner-area relative">
		<div class="banner-img">
			<img class="img-fluid" src="<?php echo base_url(); ?>assets/img/banner/banner-bg.jpg" alt="">
			<div class="overlay overlay-bg"></div>
		</div>
		<div class="banner-content text-center">
			<div class="breadcrmb">
				<p>
					<a href="Home">home</a>
					<span class="lnr lnr-arrow-right"></span>
					<a href="Contact">Contact</a>
				</p>
			</div>
			<h1>Contact Us</h1>
		</div>
	</section>
	<!--================ End banner Area =================-->

	<!-- Start contact-page Area -->
				<div class="col-lg-8">
					<form class="form-area contact-form text-right" id="myForm" action="mail.php" method="post">
						<div class="row">
							<div class="col-lg-6 form-group">
								<h5 style="float: left">NAMA</h5><br>
								<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
								 class="common-input mb-20 form-control" required="" type="text">

								<h5 style="float: left">EMAIL</h5><br> 
								 <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
								 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control"
								 required="" type="email">

								<h5 style="float: left">PASSWORD</h5><br>  
								 <input name="name" placeholder="Enter your password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your password'"
								 class="common-input mb-20 form-control" required="" type="password">

								<h5 style="float: left">No HP</h5><br> 
								 <input name="name" placeholder="Enter your phone number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
								 class="common-input mb-20 form-control" required="" type="text">
								 <div class="col-lg-12">
								<div class="alert-msg" style="text-align: left;"></div>
									<button class="primary-btn text-uppercase" style="float: right;">DAFTAR</button>
								</div>
							</div>
							<div class="col-lg-6 form-group">
								<h5 style="float: left">USERNAME</h5><br>								 
								<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
								 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control"
								 required="" type="email">

								<h5 style="float: left">PASSWORD</h5><br>
								<input name="subject" placeholder="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'"
								 class="common-input mb-20 form-control" required="" type="text">

								 <div class="alert-msg" style="text-align: left;"></div>
									<button class="primary-btn text-uppercase" style="float: right;">LOGIN</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- End contact-page Area -->
