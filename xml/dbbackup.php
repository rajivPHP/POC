<?php 
$host="localhost";
$username="root";
$password="";
$dbname="icampus";
$xml="";
$tab="\t";
$br="\n";
$dbConnection=mysql_connect($host,$username,$password);
$xml="<?xml version='1.0' encoding='UTF-8' ?>";
	$sql= "SHOW TABLES FROM $dbname;";
	$queryTables=mysql_query($sql);
	while($resultTable=mysql_fetch_row($queryTables)){
		foreach ($resultTable as $key => $value) {
			$xml.="<$value>".$br;
			$result=mysql_query("SELECT * FROM $value;");
			while($resultFields=mysql_num_fields($result)){
				$result=mysql_fetch_field($resultFields);
				$xml.="<columns";
				foreach($result as $result){
					$xml.="name=".$result;
					$xml.=">";
				}
				
			}
		}
	}
	

$fileHandle=fopen("dbbackup.xml",'w+');
fwrite($fileHandle,$xml);
fclose($fileHandle);
 ?>