
<?php 
	require_once('../control/core.php');
	$employees=Model::load("employees");
	if(isset($_POST['FormFiche'])&&isset($_POST['MODE'])){
		if($_POST['MODE']=="MODIF"){
			if($employees->update($_POST)){
				echo "Modification effectuée";
			}
			$_POST['RECH_FIC']=$_POST['#'];

		}else{
			if($employees->insert($_POST)){
				echo "Ajout effectué";
			}
			require_once('../control/employees_tab.php');
		}
	}

	if(isset($_POST['FormFicheAjout'])){
		$_POST['RECH_FIC']='';
		$employees->data[0]['Titre'	]='';
		$employees->data[0]['Nom'	]='';
		$employees->data[0]['Prénom']='';
		$employees->data[0]['Note'	]='';
		echo vue::rtv_fiche($employees,"../control/employees_fic.php","#","AJOUT");
	}else{
			if(!(isset($_POST['FormModeAjax']) && $_POST['FormModeAjax'] == "1")){
				$employees->id[0]=$_POST['RECH_FIC'];
				$employees->read('employeeID "#", Title "Titre", LastName "Nom" , FirstName "Prénom" , Notes "Note" ');
				echo vue::rtv_fiche($employees,"../control/employees_fic.php","#");
			}
	}
	

 ?>