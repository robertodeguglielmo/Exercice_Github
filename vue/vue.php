<?php 

class Vue{
	public static function rtv_Table($pParam){
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
		$out = '<table>'.$titre.$out.'</table>';
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
}
?>