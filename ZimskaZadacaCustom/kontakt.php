<!DOCTYPE HTML>
<html>
	<head>
		<?php include_once "template/head.php"; ?>
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<?php include_once "template/izbornik.php"; ?>
	<div class="container-wrap">
		<aside id="fh5co-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/marac.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 slider-text slider-text-bg">
				   				<div class="slider-text-inner text-center">
				   					<h1>Kontakt</h1>
										<h2>Kontaktiraj nas!</h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>		   	
			  	</ul>
		  	</div>
		</aside>		
		<div id="fh5co-contact">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Prijedlozi i komentari</h2>
					<p>Ukoliko imate ideju kako unaprijediti stranicu, pohvalu, ili bilo kakav drugi komentar vezan uz stranicu, slobodno nam se obratite.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-md-push-1 animate-box">
					<h3>Naša adresa</h3>
					<ul class="contact-info">
						<li><i class="icon-location4"></i>Kneza Trpimira 2b, FERIT, Osijek 31000, IEEE SB OSijek</li>
						<li><i class="icon-phone3"></i>+ 385 95 856 7600</li>
						<li><i class="icon-location3"></i><a href="#">idzambo@etfos.hr</a></li>
						<li><i class="icon-globe2"></i><a href="#">www.ferit.unios.hr/ieee</a></li>
					</ul>
				</div>
				<div class="col-md-7 col-md-push-1 animate-box">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Ime">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Email">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Poruka"></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="submit" value="Pošalji poruku" class="btn btn-primary btn-modify">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- END container-wrap -->

	<?php include_once "template/podnozje.php"; ?>
	
	</div>

	
	
	<?php include_once "template/skripte.php"; ?>

	</body>
</html>

