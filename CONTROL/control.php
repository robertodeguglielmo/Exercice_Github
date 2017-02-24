<?php 

class Control{
	public static function auth($pUtil,$pCode){
			$utilisateurs=Model::load("utilisateurs");
			$utilisateurs->id[0]=$pUtil;
			$utilisateurs->read();
			if (count($utilisateurs->data)==1 && $utilisateurs->data[0]->code==$pCode && $utilisateurs->data[0]->actif==1){
				return true;
			} else{
				return false;
			}

	}

	public static function user_connected(){
			if (isset($_SESSION['UTILISATEUR']) && $_SESSION['UTILISATEUR'] != ''){
				return true;
			} else{
				return false;
			}

	}

	
}
?>