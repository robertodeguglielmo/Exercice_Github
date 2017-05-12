<?php
	require_once('../control/core.php');
	
	

	require_once('../vue/haut.php');
	require_once('../vue/aside.php');
		

	$rech = "";
	if(isset($_POST['ZONE_RECH_EMPLOYEES'])){
		$rech =$_POST['ZONE_RECH_EMPLOYEES'];
	}

	echo vue::rtv_Zone_Rech("../control/employees_tab.php","ZONE_RECH_EMPLOYEES",$rech,"Rechercher un employé");
	
	require_once('../control/employees_tab_ajax.php');

	require_once('../vue/bas.php');
?>