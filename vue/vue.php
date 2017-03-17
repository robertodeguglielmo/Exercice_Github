<?php 

class Vue{
	public static function rtv_Table($pParam,$pNom=''){
		$out  = "";
		$titre= '<tr>';
		$titre_trt= false;

		foreach($pParam->data as $key => $element){
			$out .= "<tr>";
			foreach($element as $subkey => $subelement){
				if($titre_trt==false){
					$titre .= '<th>'.$subkey.'</th>' ;	
				}

				$out .= '<td>'.$subelement.'</td>' ;
			}
			if($titre_trt==false){
				$titre.= '</tr>';
			}
			$titre_trt= true;
			$out .= "</tr>";
		}
		$out = '<section ID="RESULT_'.$pNom.'"><article><table>'.$titre.$out.'</table></article></section>';
		return $out;
	}
	
	public static function rtv_Fiche($pParam){
		$out  = "";
		foreach($pParam->data as $key => $element){
			foreach($element as $subkey => $subelement){
				$out .= "<tr>";
				$out .= '<th>'.$subkey.'</th>' ;
				$out .= '<td>'.$subelement.'</td>' ;
				$out .= "</tr>";
			}
		}
		$out = '<table>'.$out.'</table>';
		return $out;
	}

	public static  function Rtv_Zone_rech($pAction,$pNom,$pRechVal,$pPlaceHolder){
		$ValRetour = '<section>';
		$ValRetour .= '<article>';
		$ValRetour .= '<form action="'.$pAction.'" method="post" accept-charset="utf-8">';
		$ValRetour .= '<input type="text" name="'.$pNom.'" value="'.$pRechVal.'" placeholder="'.$pPlaceHolder.'">';
		$ValRetour .= '<input type="submit" name="" value="Rechercher">';
		$ValRetour .= '</form>';
		$ValRetour .= '</article>';
		$ValRetour .= '</section>';
		return $ValRetour;
	}
}
?>