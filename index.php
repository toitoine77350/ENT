<?php
session_start();
include_once('E_P_I/auto/includes.php');

if(isset($_SESSION['pseudo'])){
	header('Location: E_P_I/auto/accueil.php');
	exit;
}

if(!empty($_POST)){
	extract($_POST);
	$valid = true;
	
	
	if($valid){
		
		
	}
	
}	
?>

<!DOCTYPE html>
<html lang="fr">
	<header>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
		
		<title>Accueil</title>
		
		<link href="E_P_I/auto/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
		<link href="E_P_I/auto/bootstrap/js/bootstrap.js" rel="stylesheet" type="text/css"/>
		<link href="E_P_I/auto/style.css" rel="stylesheet" type="text/css" media="screen"/>
		
		
	</header>
	
	<body>
		
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Acceuil de l'Espace Numérique de Travail</a>
		    </div>
		
		    
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right">
		       		        <li><a href="connexion.html">Connexion</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>
		
		<h1 class="index-h1">Espace Numérique de Travail</h1>
		
		<div class="container-fluid jump">
			
<p style="text-align: center;"><span style="text-decoration: underline; font-family: arial, helvetica, sans-serif; font-size: 14pt;"><em><strong>Bienvenue sur le nouvelle Espace num&eacute;rique de Travail</strong></em></span></p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;"><em><span style="font-family: arial, helvetica, sans-serif; font-size: 14pt;">Vous retrouvez pleins de nouvelles choses ainci que les anciennes</span></em></p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;"><em><span style="font-family: arial, helvetica, sans-serif; font-size: 14pt;">Bonne rentr&eacute;e !</span></em></p>

<h3 style="text-align: center;"><span style="text-decoration: underline;"><em><strong><span style="font-size: 13pt; font-family: arial, helvetica, sans-serif;">les informations importantes :</span></strong></em></span></h3>
<h6><span style="font-size: 10pt;">Le 28/03 : Les codes de l'ENT seront bient&ocirc;t distribu&eacute;e<span style="font-family: arial, helvetica, sans-serif;"><br /></span></span></h6>
<h6><span style="font-size: 10pt;">Le 28/03 : L'ensemble des services sont de nouveau accessible</span></h6>
<p>&nbsp;</p>			
			
			
		
		</div>
		
		<footer></footer>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
	
</html>