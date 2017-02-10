<?php
	require_once('../control/core.php');
	require_once('../vue/haut.php');
	require_once('../vue/aside.php');

	$employees=Model::load("employees");
	$employees->id[0]=$_POST['id'];
	$employees->read('employeeID "#", Title "Titre ", LastName "Nom" , FirstName "Prénom"');
	echo $employees->rtv_fiche();

	require_once('../vue/bas.php');
?>