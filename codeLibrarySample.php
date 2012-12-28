<?php 
//********************************************************************************************************************************
//Page name      :- codeLibrarySample.php
//Author Name    :- Alan Anil
//Purpose        :- File for checking functionality of code library .
//Date           :- DEC-28-12
//Table Refered  :-  N/A.
//*********************************************************************************************************************************
//Chronological Development
//Ref No   Developer Name      Date            Severity        Description
//----------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------- -->
 
class codeLibraryClass
{
 
	public function connection($hostName,$userName,$password,$dbName)
	{
		//connection to the database
		$dbhandle = mysql_connect($hostName, $userName, $password) 
		or die("Unable to connect to MySQL");
		echo "Connected to MySQL<br>";
		//select a database to work with
		$selected = mysql_select_db($dbName,$dbhandle) 
		or die("Could not select examples");
		
	}
	
	public function showAllResults($tableName)
	{
		//connection to the database
		    $query                = "SELECT    * 
                                     FROM      $tableName ";
			$result               = mysql_query($query); 
			$getFinalResult       = mysql_fetch_array($result) ;
			return $getFinalResult;  
		
	}
	 
 
}
?>