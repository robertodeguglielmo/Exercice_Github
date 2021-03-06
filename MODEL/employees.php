<?php
class employees extends Model{
	var $table = "employees";	
	var $id ;
	var $PK=array("EmployeeID");
	var $Rech=array("LastName", "FirstName");
	var $data ; 

	public function update($pTB){
		$sql= " update ".$this->table;
		$sql.=" set ";
		$sql.=" Title 		=".$this->connection->quote($pTB["Titre"	]);
		$sql.=", LastName  	=".$this->connection->quote($pTB["Nom" 		]);
		$sql.=", FirstName 	=".$this->connection->quote($pTB["Prénom" 	]);
		$sql.=", Notes 		=".$this->connection->quote($pTB["Note"		]); 
		$sql.=" where ".$this->PK[0]." =  ".$this->connection->quote($pTB["#"]); 
		return $this->connection->query($sql);
	}

	public function insert($pTB){
		$valRetour=false;

		$sql= " insert into ".$this->table;
		$sql.=" (Title, LastName, FirstName, Notes ) ";
		$sql.=" values ( ";
		$sql.=" 	".$this->connection->quote($pTB["Titre"	]);
		$sql.=" 	,".$this->connection->quote($pTB["Nom" 		]);
		$sql.=" 	,".$this->connection->quote($pTB["Prénom" 	]);
		$sql.=" 	,".$this->connection->quote($pTB["Note"		]); 
		$sql.=" ) ";

		$valRetour=$this->connection->query($sql);

		if($valRetour==true){
			$this->id[0]=$this->connection->lastInsertId();
		}else{
			$this->id[0]="";
		}

		return $valRetour;
	}
}

?>