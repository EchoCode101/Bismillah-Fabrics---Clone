<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bismillah Fabrics</title>
	<?php include_once'inc/head.php' ?>
</head>
<body>
	<!----------- Navigation-Bar ----------->
	<?php include_once 'inc/nav.php'; ?>
	<!---------- Navigation-Bar ---------->
	<!---------- Slider ---------->
	<section>
				<div id="slider">
					<div id="headerSlider" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					    <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
					    <li data-target="#headerSlider" data-slide-to="1"></li>
					    <li data-target="#headerSlider" data-slide-to="2"></li>
					  </ol>
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img src="img/001.jpg" class="d-block img-fluid" alt="..."><!-- <div class="carousel-caption">
					      	<h5>How To Make A Website</h5>
					      </div> -->
					    </div>
					    <div class="carousel-item">
					      <img src="img/002.jpg" class="d-block img-fluid" alt="..."><!-- <div class="carousel-caption">
					      	<h5>Create A Responsive Website</h5>
					      </div> -->
					    </div>
					    <div class="carousel-item">
					      <img src="img/003.jpg" class="d-block img-fluid" alt="..."><!-- <div class="carousel-caption">
					      	<h5>Design A Business Site</h5>
					      </div> -->
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
					    <span class="carousel-control-next-icon"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
	</section>
	<!----------  Slider ---------->
	<!----------  ABOUT SECTION ---------->
	<section id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<img src="img/ceo.jpg" alt="Chief Executive">
						<a href="about.php"><h2>Chief Executive</h2></a>
					</div>
					<div class="col-md-7">
						<h1>ABOUT US</h1>
						<p>Bismillah Fabrics is Manufacturer and Exporter in textile fabrics, our aim is to ensure high quality with customer satisfaction, our strategy lies in effective and efficient execution of client’s orders</p>	
						<a href="about.php">Read More...</a>					
					</div>
				</div>
			</div>
	</section>
	<!----------  ABOUT SECTION ---------->
	<!----------- BG-IMG ----------->
	<section id="bg-img">
			<div class="bg">
				<div class="container text-center">
					<h1>WHY BISMILLAH FABRICS?</h1>
					<p>At Bismillah Fabrics, We are committed to offer better social conditions to our employees. We believe that a healthy and safe work results yields a good output. Here at Bismillah Fabrics we pride ourselves on our quality checking procedure in department of Weaving.
					<br><br>
					Bismillah Fabrics is Manufacturer and Exporter in textile fabrics, our aim is to ensure high quality with customer satisfaction, our strategy lies in effective and efficient execution of client’s orders</p>
					<a href="#contact"><button class="btn btn-primary">CONTACT</button></a>
				</div>
			</div>
	</section>
	<!----------- BG-IMG ----------->
	<!---------- OUR MANUFACTURING ---------->
	<section id="manufacturing">
			<div class="container text-center">
				<h1>OUR MANUFACTURING</h1>
				<div class="row">
					
					<div class="col-md-4 mr-auto">
						<div class="bx-1">
							<img src="img/weaving.jpg" height="300px" width="300px" class="sulzer img img-responsive img-fluid" alt="SULZER LOOMS">
							<h3>SULZER LOOMS</h3>
						</div>
					</div>
					
					<div class="col-md-4 mr-auto">
						<div class="bx-2">
							<img src="img/dropper.png" height="300px" width="300px" class="img img-responsive img-fluid" alt="SULZER LOOMS">
							<h3>AUTO POWER,<br> AUTO DROPER</h3>
						</div>
					</div>
					
					<div class="col-md-4 mr-auto">
						<div class="bx-3">
							<img src="img/frames.png" height="300px" width="300px" class="img img-responsive img-fluid" alt="SULZER LOOMS">
							<h3>INSPECTION FRAMES</h3>
						</div>
					</div>
					
					
					<a href="manufacturing.php"><button class="btn btn-primary" id="btn">READ MORE</button></a>
					
				</div> 
			</div>
	</section>
	<!---------- OUR MANUFACTURING ---------->
	<!----------- CALLBACK SECTION ----------->
	<section id="callback">
			<div class="cntainer">
				<div class="quote">
					<h1>REQUEST A CALLBACK</h1>
					<h4>We know you are busy so let one of our friendly staff call you back</h4>
					<center>
						<a href="contact-page.php"><button class="btn btn-success" id="org">ORGANIZE A TIME</button></a>
					</center>
				</div>

			</div>
	</section>
	<!----------- CALLBACK SECTION ----------->
	<!---------- CONTACT FORM SECTION ---------->
	<div id="contact">
		<?php include_once'inc/contact-form.php' ?>
	</div>
	<!---------- CONTACT FORM SECTION ---------->
	<!------------- FOOTER ------------->
	<?php include_once'inc/footer.php' ?>
	<!------------- FOOTER ------------->
	<!--------- SCRIPT SECTION --------->
	<?php include_once'inc/script-tags.php' ?>
</body>
</html>