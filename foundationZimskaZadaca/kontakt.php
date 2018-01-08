<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "template/head.php"; ?>
  </head>
  <body>
    <div class="grid-container">

		<?php include_once "template/zaglavlje.php"; ?>
		<?php include_once "template/izbornik.php"; ?>
	
	<div class="grid-x grid-padding-x">
        <div class="large-8 cell">
	<form action="kontakt.php" method="post">
    <h3>Prijavite nepošteno suđenje!</h3>
    <div class="row columns">
      <label>Vaše ima i prezime
        <input type="text" name="ime" placeholder="Ime i prezime">
      </label>
    </div>
    <div class="row columns">
      <label>Utakmica kojih fakulteta
        <input type="text" name="utakmica" placeholder="Domacin vs gost">
      </label>
    </div>
    <div class="row columns">
      <label>Sport?
        <select name="status" type="text">
          <option value="Nogomet">Nogomet</option>
          <option value="Rukomet">Rukomet</option>
          <option value="Kosarka">Kosarka</option>
        </select>
      </label>
    </div>
    <div class="row columns">
      <label>Sudac
        <input type="text" name="sudac" placeholder="Ime i prezime">
      </label>
    </div>
    <div class="row">
      <label class="columns small-12">Rezultat</label>
      <div class="columns small-6">
        <input type="number" min="0" name="f1" placeholder="Fakultet 1">
      </div>
      <div class="columns small-6">
        <input type="number" min="0" name="f2" placeholder="Fakultet2">
      </div>
    </div>
    <button onclick="location.href='index2.php'" type="submit" class="primary button expanded search-button" >
      Prijavi
    </button>
    
    <a href="prijavasuca.php"><b>POGLEDAJ PRIJAVU!</b></a>
 </form>
 </div>
 <div class="large-4 cell">
 	<br /><br />
 	<h5>Pozdrav <?php echo $_POST["ime"]; ?>,<br />
 	prijavio si utakmicu između <?php echo $_POST["utakmica"];  ?>,<br />
 	iz sporta <?php echo $_POST["status"];  ?>, <br />
 	koju je sudio <?php echo $_POST["sudac"]  ?>,<br />
 	a utakmica je završila rezultatom <?php echo $_POST["f1"]  ?> : <?php echo $_POST["f2"];  ?>.
 
 </div>
 </div>
 	
 	

    <?php include_once "template/podnozje.php"; ?>
 
    
 	
    <?php include_once "template/skripte.php"; ?>
     </div>
  </body>
</html>
