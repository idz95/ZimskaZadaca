<!DOCTYPE HTML>
<html>
	<head>
		<?php include_once "template/head.php"; ?>
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container-wrap">
			<div class="top-menu">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="index.php">FERITijada</a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li><a href="index.php">Naslovnica</a></li>
							<li class="has-dropdown">
								<a href="sportovi.php">Sportovi</a>
								<ul class="dropdown">
									<li><a href="#">Nogomet</a></li>
									<li><a href="#">Rukomet</a></li>
									<li><a href="#">Košarka</a></li>
									<li><a href="#">Odbojka</a></li>
									<li><a href="#">Veslanje</a></li>
									<li><a href="#">Kros</a></li>
								</ul>
							</li>
							
							
							<li><a href="kontakt.php">Kontakt</a></li>
							<li><a href="kontakt.php">Moj profil</a></li>
							<li><a href="prijava.php">ODJAVA</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	<div class="container-wrap">
		<?php include_once "template/indexslider.php"; ?>
		
		<div id="fh5co-counter" class="fh5co-counters">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center animate-box">
					<p>FERITIJADA u sportskom natjecanju krije mnogo zanimljivih brojki!</p>
					</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<div class="row">
						<div class="col-md-3 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="13" data-speed="1" data-refresh-interval="1"></span>
							<span class="fh5co-counter-label">FAKULTETA</span>
						</div>
						<div class="col-md-3 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="6" data-speed="2" data-refresh-interval="2"></span>
							<span class="fh5co-counter-label">Sportova</span>
						</div>
						<div class="col-md-3 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="432" data-speed="2" data-refresh-interval="2"></span>
							<span class="fh5co-counter-label">Sportaša</span>
						</div>
						<div class="col-md-3 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="19" data-speed="2" data-refresh-interval="2"></span>
							<span class="fh5co-counter-label">Sudaca</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		

		<div id="fh5co-blog" class="blog-flex">
			<div class="featured-blog" style="background-image: url(images/blog-1.jpg);">
				<div class="desc-t">
					<div class="desc-tc">
						<span class="featured-head">Prijedlog</span>
						<h3><a href="#">FERITIJADA uskoro otvara prijave za natjecanje!</a></h3>
						<span><a href="#" class="read-button">Pročitaj više</a></span>
					</div>
				</div>
			</div>
			<div class="blog-entry fh5co-light-grey">
				<div class="row animate-box">
					<div class="col-md-12">
						<h2>Zadnje vijesti</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<a href="#" class="blog-post">
							<span class="img" style="background-image: url(images/blog-2.jpg);"></span>
							<div class="desc">
								<h3>FER zagreb brani naslov od prošle godine!</h3>
								<span class="cat">Više ...</span>
							</div>
						</a>
					</div>
					<div class="col-md-12 animate-box">
						<a href="#" class="blog-post">
							<span class="img" style="background-image: url(images/blog-1.jpg);"></span>
							<div class="desc">
								<h3>Ove godine se očekuje više sportaša na FERITIJADI!</h3>
								<span class="cat">Više ...</span>
							</div>
						</a>
					</div>
					<div class="col-md-12 animate-box">
						<a href="#" class="blog-post">
							<span class="img" style="background-image: url(images/blog-3.jpg);"></span>
							<div class="desc">
								<h3>Prijavi se na natječaj za suce!</h3>
								<span class="cat">Više ...</span>
							</div>
						</a>
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

