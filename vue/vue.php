<?php 

class Vue{
	public static function rtv_Table($pParam,$pNom='', $pColID='', $pAction= ''){
		$out  = "";
		$titre= '<tr>';
		$titre_trt= false;

		foreach($pParam->data as $key => $element){
			$out .= '<tr class="RECH_FORM">';
			$colForm = '';
			foreach($element as $subkey => $subelement){
				if($titre_trt==false){
					$titre .= '<th>'.$subkey.'</th>' ;	
				}
				if ($pColID != '' && $pAction != '' && $subkey == $pColID){
					$colForm .= '<form action="'.$pAction.'" method="post" accept-charset="utf-8">';
					$colForm .= '<input type="hidden" name="RECH_FIC" value="'.$subelement.'" >';
					$colForm .= '<input type="submit" name="" value="Voir">';
					$colForm .= '</form>';
					$colForm = '<td name="td_form">'.$colForm.'</td>';
				}
				$out .= '<td>'.$subelement.'</td>' ;

			}
			if($titre_trt==false){
				$titre.= '</tr>';
			}
			$titre_trt= true;
			$out .= $colForm."</tr>";
		}
		$out = '<section ID="RESULT_'.$pNom.'"><article><table>'.$titre.$out.'</table></article></section>';
		return $out;
	}
	
	public static function rtv_Fiche($pParam,$pAction="",$pPK=""){
		$out = '<form method="post" action="'.$pAction.'">';
		$out .= '<input type="hidden" name="FormFiche" value="1">';
		$out .= '<input type="hidden" name="FormModeAjax" value="0">';
		foreach($pParam->data as $key => $element){
			foreach($element as $subkey => $subelement){
				$out .= '<p><label for="'.$subkey.'" class="FormFiche">'.$subkey.'</label> : <input type="text" name="'.$subkey.'"  value="'.$subelement.'" /></p>';
			}
		}
		$out .= '<input type="submit" name="" value="Valider">';
		$out .= '</form>';
		return $out;
	}

	public static  function Rtv_Zone_rech($pAction,$pNom,$pRechVal,$pPlaceHolder){
		$ValRetour = '<section>';
		$ValRetour .= '<article>';
		$ValRetour .= '<form action="'.$pAction.'" method="post" accept-charset="utf-8">';
		$ValRetour .= '<input class = "RECH" type="text" name="'.$pNom.'" value="'.$pRechVal.'" placeholder="'.$pPlaceHolder.'">';
		$ValRetour .= '<input type="submit" name="" value="Rechercher">';
		$ValRetour .= '</form>';
		$ValRetour .= '</article>';
		$ValRetour .= '</section>';
		return $ValRetour;
	}
}
?>