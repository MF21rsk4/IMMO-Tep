 <!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="inc/ankh.png" />	
<!-- 	On inclut les librairies MDB Bootstrap -->
 	<?php include_once ("inc/lib.php"); ?>
	<title>IMMO TEP</title>
	<style type="text/css">
		body {
			font-family: 'Lato', sans-serif;
			font-size: 0.75rem;}
		form {
			font-size: 0.9rem;}
		#message {
			font-size: 1rem;
			font-weight: bold;}			
		/* active */
		.nav-pills .nav-link.active, .nav-pills .show > .nav-link {
		    background-color: #998850!important;}
		/* active en hover */
		.nav-pills .nav-link:hover {
		    background-color: #796050!important;}
		/* active (faded) */
		.nav-pills .nav-link {
		    background-color: #998850!important;
		    color: white;}
		.icon-hover {
		  	color: #998850;
		  	transition: .3s; }
		.icon-hover:hover {
		  	transition: .3s;
		  	color: #998850;
		  	text-shadow: 1px 1px 1px rgba(0,0,0,0.5); 
		  	cursor: pointer;}
		.btn-default-hover{
			color: #fff;
			background-color:  #796050!important;}
		.btn-default-hover:hover{
			color: #fff;
			background-color: #998850!important;
			box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);}
		.no-image {
			color: #998850;		
			text-shadow: 1px 1px 1px rgba(0,0,0,0.2);} 
	</style>
</head>

<body>

<header>
<!-- La barre de navigation -->
	<nav class="navbar navbar-expand-lg navbar-light #998850 grey-3 z-depth-2 mb-5 position-relative">
    	<a class="navbar-brand" href="index.php">
    		<img src="inc/logo.png" width="60" height="70" class="d-inline-block align-top mx-3 text-white" alt="">IMMO Tep agency
    	</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	    </button>

	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	        <ul class="nav nav-pills ml-auto">
				<li class="nav-item button">
					<a class="nav-link button-toggle" href="formulaire.php" id="navbarbuttonMenuLink" role="button" data-toggle="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-plus-circle"></i></i> Ajouter une annonce</a>
					<div class="button-menu blue-grey lighten-2" aria-labelledby="navbarButtonMenuLink">
					</div>
				</li>
				<li class="nav-item button mx-4">
					<a class="nav-link button-toggle" href="#" id="navbarbuttonMenuLink" role="button" data-toggle="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-monument"></i> Pyramides </a>
					<div class="button-menu blue-grey lighten-2" aria-labelledby="navbarButtonMenuLink">
					</div>
				</li>
	            <li class="nav-item mx-4">
	                <a class="nav-link active" href="index.php"><i class="fas fa-dungeon"></i></fas></a>
	            </li>
	        </ul>
	    </div>

	</nav>

</header>
