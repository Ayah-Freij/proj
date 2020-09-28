<?php //echo "string";?> 
<!DOCTYPE html>
<html lang="en">

 <?php include 'include/head.php';?> 

  <body>
     <?php include 'include/nav.php';?> 

    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="overlay-2"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
            <h1 class="mb-3 bread"> Login </h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index1.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Login <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

   <section class="ftco-section contact-section">
      <div class="container">
       <!--  <div class="row d-flex mb-5 contact-info justify-content-center">
        	<div class="col-md-8">
        		<div class="row mb-5">
		          <div class="col-md-4 text-center py-4">
		          	<div class="icon mb-3 d-flex align-items-center justify-content-center">
		          		<span class="icon-map-o"></span>
		          	</div>
		            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
		          </div>
		          <div class="col-md-4 text-center py-4">
		          	<div class="icon mb-3 d-flex align-items-center justify-content-center">
		          		<span class="icon-mobile-phone"></span>
		          	</div>
		            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
		          </div>
		          <div class="col-md-4 text-center py-4">
		          	<div class="icon mb-3 d-flex align-items-center justify-content-center">
		          		<span class="icon-envelope-o"></span>
		          	</div>
		            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
		          </div>
		        </div>
          </div>
        </div>-->
        <div class="row block-9 justify-content-center mb-5">

           	<div class="col-md-8 align-items-stretch d-flex">
           	<form action="#" class="bg-light p-5 contact-form">
             	<div class="form-group">		
	              	<h1 class=".slider-text .bread">
					Account Login
					</h1>
					
					<span class="txt1 p-b-11">
					Username
					</span>
						<div class="wrap-input100 validate-input m-b-36" data-validate="Username is required">
						<input class="form-control" type="text" name="username" placeholder="Your Name">
						<span class="focus-input100"></span>
						</div>
					
					<span class="txt1 p-b-11">
					Password
					</span>
						<div class="wrap-input100 validate-input m-b-12" data-validate="Password is required">
						<span class="btn-show-pass">
						</span>
						<input class="form-control" type="password" name="pass" placeholder="Your Name">
						<span class="focus-input100"></span>
						</div>
					<div class="flex-sb-m w-full p-b-48">
					<div class="contact100-form-checkbox">
					<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
					<label class="label-checkbox100" for="ckb1">
					Remember me
					</label>
					</div>
				<div class="form-group">
	                <input type="submit" value="LOGIN" class="btn btn-primary py-3 px-5">
	             </div>
				<div>
					<a href="#" class="txt3">
					Forgot Password?
					</a>
				</div>
			</div>	
		</form>
		</div>
  </div>
          <!--<div class="col-md-6 align-items-stretch d-flex">
        		<div id="map" class="bg-white border"></div>
          </div>-->
        </div>
      </div>
    </section>
		

    
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


 <?php include 'include/footer.php';?> 
    
  </body>
</html>