<?php
$myXMLData = "<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend!</body>
</note>";
$xml = simplexml_load_string($myXMLData);

echo "Reading from string as XML"."<br />";
echo "TO " . $xml -> to . "<br />";
echo "from " . $xml -> from . "<br />";
echo "heading " . $xml -> heading . "<br />";
echo "<br />";

echo "Reading from file as XML"."<br />";
//load from the file xml data for reading
$loadFile=simplexml_load_file("library.xml");
$result=$loadFile->xpath("book");
foreach($result as $results=>$key){
	echo $key;
}
//echo "<pre>";print_r($result);
foreach($loadFile->children() as $file){
	//echo $file->author. "<br />";
	//echo $file->ISBN. "<br />";
}


?>
