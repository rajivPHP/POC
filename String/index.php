<?php error_reporting(0);
if (isset($_COOKIE['raju'])) {
	echo $_COOKIE['raju'];
} else {
	$cookie = setcookie("raju", $array_list, time() + 86400);
}
$array = array();
$word = "There is only one Javascript file to be included, it
contains the main code and canvas functions compatible with Internet Explorer";
if ($word !== NULL) {
	$match = stristr($word, "Javascript", FALSE);
	if (strcmp($word, "Javascript") !== "") {
		echo "compared";
		$array[] = $word;
	} else {
		echo "Not compared";
	}
	echo $match;
} else {
	return false;
}
if ($array) {
	foreach ($array as $array_list) {
		echo $array_list;
	}
}
?>
<html>
	<head>
		<title>String Functions</title>
	</head>
	<body>

		<p id="p1">
			comparedJavascript file to be included, it contains the main code and canvas functions compatible with Internet Explorer
		</p>
		<p id="p2">
			P2: I am a second paragraph
		</p>
		<button onclick="copyToClipboard('#p1')">
			Copy P1
		</button>
		<button onclick="copyToClipboard('#p2')">
			Copy P2
		</button>
		<br/>
		<br/>
		<input type="text" placeholder="Paste here for test" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript">
			function copyToClipboard(element) {
				var $temp = $("<input>");
				$("body").append($temp);
				$temp.val($(element).text()).select();
				document.execCommand("copy");
				$temp.remove();
			}
		</script>
	</body>
</html>