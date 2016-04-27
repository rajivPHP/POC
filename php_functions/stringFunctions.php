<?php
function StrCompare($str1, $str2) {
	$strCompareOutput = strcmp($str1, $str2);
	if ($strCompareOutput) {
		return $strCompareOutput;
	} else {
		return false;
	}
}

function mysqlFunctions($host, $username, $password, $dbname) {
	$error = "";
	$connectDB = mysql_connect($host, $username, $password);
	if (empty($connectDB)) {
		$error = mysql_error() . mysql_errno();
	} else {
		$selectDB = mysql_select_db($dbname);
		if ($selectDB) {
			$queryString="SELECT * FROM students;";
			$query = mysql_query($queryString);
			$result = mysql_fetch_array($query);
		}
	}
}
?>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>