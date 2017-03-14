<?php
class employees extends Model{
	var $table = "employees";	
	var $id ;
	var $PK=array("EmployeeID");
	var $Rech=array("LastName", "FirstName");
	var $data ; 
}

?>