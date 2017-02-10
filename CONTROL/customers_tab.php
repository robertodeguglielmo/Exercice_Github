<?php
	require_once('../control/core.php');
	require_once('../vue/haut.php');
	require_once('../vue/aside.php');

	$customers=Model::load("customers");

	$customers->read();

	require_once('../vue/customers_tab.php');

	require_once('../vue/bas.php');
?>