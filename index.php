
<?php
session_start();

$_SESSION["a"]=3;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
		<title> HOTEL PANORAMA </title>

			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
			<link rel="stylesheet" type="text/css" href="css/datepicker.css">
			<link rel="stylesheet" type="text/css" href="css/styleHotel.css">


			<script src="js/jquery-3.2.1.js"></script>
			<script src="js/bootstrap.js"></script>
			<script src="js/bootstrap-datepicker.js"></script>
      <script src="js/myscript.js"></script>

  </head>

  <body>
		<div class="row">
			<div class="col-md-1">
			<!--vide-->
			</div>
			<div class="col-md-3">
			 	<img class="img-responsive" src="photos/logo1.jpg" width= "250">
			</div>
		</div>
		<div class="container">
		<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="#">Hotel PANORAMA</a>
				</div>
			 				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Accueil</a></li>
						<li><a href="chambres.html">Chambres</a></li>
						<li><a href="map.html">Map</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div>

<div class="container">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
	  <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- For slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img class="img-responsive" src="photos/carousel0.jpg">
      </div>
      <div class="item">
        <img class="img-responsive" src="photos/carousel1.jpg">
      </div>
      <div class="item">
        <img class="img-responsive" src="photos/carousel2.jpg">
      </div>
	  <div class="item">
        <img class="img-responsive" src="photos/carousel3.jpg">
      </div>
	  <div class="item">
        <img class="img-responsive" src="photos/carousel4.jpg">
      </div>
	  <div class="item">
        <img class="img-responsive" src="photos/carousel5.jpg">
      </div>
    </div>


    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<div class="container">
<br>
 <h2><center><p class="soustitle">RESERVATION</p></CENTER></h2>
<FORM method="post" action="formulaireReservation.php">

	<!--<form class="form-inline">
		<div class="col-sm-6 col-md-3">
			<div class="form-group">
				<label for="exampleInputName2">Arrivée</label>
				<input type="date" class="form-control" id="exampleInputName2">
			 </div>
		</div>
		<div class="col-sm-6 col-md-3">
			<div class="form-group">
				<label for="exampleInputEmail2">Départ</label>
				<input type="date" class="form-control" id="exampleInputEmail2">
			</div>
		</div>
		<div class="col-sm-6 col-md-3">
			<div class="form-group">
				<label for="exampleInputEmail2">Type de chambre</label>
					<select class="form-control">
						<option value="Chambre">Simple</option>
						<option value="Chambre">Simple avec balcon</option>
						<option value="Chambre">Double</option>
						<option value="Chambre">Double avec balcon</option>
						<option value="Chambre">Trible</option>
						<option value="Chambre">Triple avec balcon</option>
					</Select>
			</div>
		</div>


		<button type="submit" class="btn btn-default">Rechercher</button>


</form>-->


		 <div class="container">
			<div class="col-sm-6 col-md-3">
				<ul id="menu-accordeon">
					<li><a href="#">Arrivée</a>
						<ul>
							<li><input  class="form-control" type="date" name="Départ"></li>
						</ul>
					</li>
				</ul>
			</div>

			 <div class="col-sm-6 col-md-3">
				 <ul id="menu-accordeon">
					<li><a href="#">Départ</a>
						<ul>
						<li><input  class="form-control" type="date" name="Départ"></li>
						</ul>
					</li>
				</ul>
			</div>


			  <div class="col-sm-6 col-md-3">
					<ul id="menu-accordeon">
						<li><a href="#">Type de chambre</a>
							<ul>
								<li>
								  <select class="form-control">
									<option value="Chambre">Simple</option>
									<option value="Chambre">Simple avec balcon</option>
									<option value="Chambre">Double</option>
									<option value="Chambre">Double avec balcon</option>
									<option value="Chambre">Trible</option>
									<option value="Chambre">Triple avec balcon</option>
								  </Select>
								</li>
							</ul>
						</li>
					</ul>
			  </div>


			<div class="col-sm-6 col-md-3">
				<ul id="menu-accordeon">
					<li><a href="#">Nombre</a>
						<ul>
							<li>Adultes<input type="number" size = 3 /></li>
							<li>Enfant<input type="number" size = 3 /></li>
							<li><input type="submit" value="Recherche" /></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</FORM>




	<div class="container">
	<br>
		<h2> Galleries</h2>

		  <div class="row">
			<div class="col-md-4">
			  <div class="thumbnail">
				<a href="photos/vueS.jpg" target="_blank">
				  <img src="photos/vueS.jpg" alt="Lights" style="width:100%">
				  <div class="caption">
				  <p>Grasse-ville de parfum
				  </div>
				</a>
			  </div>
			</div>

			<div class="col-md-4">
			  <div class="thumbnail">
				<a href="photos/chambreS.jpg" target="_blank">
				  <img src="photos/chambreS.jpg" alt="Nature" style="width:100%">
				  <div class="caption">
					<p>Chambre double</p>
				  </div>
				</a>
			  </div>
			</div>

			<div class="col-md-4">
			  <div class="thumbnail">
				<a href="photos/flaconsS.jpg" target="_blank">
				  <img src="photos/flaconsS.jpg" alt="Fjords" style="width:100%">
				  <div class="caption">
					<p>Culture.info</p>
				  </div>
				</a>
			  </div>
			</div>
		  </div>
		</div>



    <canvas id='mycanvas'></canvas>
		<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
    </body>
</html>.
