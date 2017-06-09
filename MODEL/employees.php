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
}

?>