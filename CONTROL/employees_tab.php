<?php
	require_once('../control/core.php');
	require_once('../vue/haut.php');
	require_once('../vue/aside.php');

	$employees=Model::load("employees");

	$employees->read('employeeID "#", Title "Titre ", LastName "Nom" , FirstName "Prénom"');

	require_once('../vue/employees_tab.php');

	require_once('../vue/bas.php');
?>