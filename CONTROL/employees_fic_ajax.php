
<?php 
	require_once('../control/core.php');
	$employees=Model::load("employees");
	if(isset($_POST['FormFiche'])){
		if($employees->update($_POST)){
			echo "Modification effectuée";
		}
		$_POST['RECH_FIC']=$_POST['#'];
	}
	$employees->id[0]=$_POST['RECH_FIC'];
	$employees->read('employeeID "#", Title "Titre", LastName "Nom" , FirstName "Prénom" , Notes "Note" ');
	echo vue::rtv_fiche($employees,"../control/employees_fic.php","#");
 ?>
	