
<?php 
	require_once('../control/core.php');
	$employees=Model::load("employees");
	$employees->id[0]=$_POST['RECH_FIC'];
	$employees->read('employeeID "#", Title "Titre ", LastName "Nom" , FirstName "Prénom" , Notes "Note" ');
	echo vue::rtv_fiche($employees);
 ?>
	