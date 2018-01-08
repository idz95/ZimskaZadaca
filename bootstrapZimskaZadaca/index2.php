<!doctype html>
<html lang="en">
  <head>
    <?php include_once "template/head.php"; ?>
  </head>
  <body>
    
    
    <div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">FERITIJADA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Naslovnica<span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sportovi
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="nogomet.php">Nogomet</a>
          <a class="dropdown-item" href="#">Košarka</a>
          <a class="dropdown-item" href="#">Rukomet</a>
          <a class="dropdown-item" href="#">Odbojka</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Kros</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kontakt.php">Kontakt</a>
      </li>
    </ul>
    <li class="nav-item my-2 my-lg-0">
      	<a class="nav-link" href="profil.php">Moj profil</a>
      </li>
    <form class="form-inline my-2 my-lg-0">
      
      <button  class="btn btn-outline-success my-2 my-sm-0" type="submit" li><a href="prijava.php">Odjava</button></a>
    </form>
  </div>
</nav>
	<?php include_once "template/slider.php"; ?>
	<?php include_once "template/footer.php"; ?>

	<?php include_once "template/skripta.php"; ?>
	
	</div>
      </body>
</html>