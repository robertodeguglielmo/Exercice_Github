<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Montitre</title>
	<link rel="stylesheet" href="../vue/css/page.css">

</head>
<body>
	<header id="header" class="header">
		<H1>
			Collège Technique "Aumôniers du Travail" <br>
			Enseignement de Promotion Sociale<br>
		</H1>
		<?php if(isset($_SESSION['NOM'])){ echo 'Bonjour Mr. '.$_SESSION['NOM'];} ?>
		<ul>
			<li><a href="../control/page1.php" >Acceuil</a></li>
			<li><a href="../control/page2.php" >Contact</a></li>
			<li><a href="../control/destroy.php" >Logout</a></li>
			<li><a href="../control/employees_tab.php" >Employés</a></li>
			<li><a href="../control/customers_tab.php" >Clients</a></li>
		</ul>
		
	</header>
