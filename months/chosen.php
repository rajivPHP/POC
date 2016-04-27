<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <link rel="stylesheet" href="chosen_v1.5.0/docsupport/style.css">
  <link rel="stylesheet" href="chosen_v1.5.0/docsupport/prism.css">
  <link rel="stylesheet" href="chosen_v1.5.0/chosen.css">
  <style type="text/css">
	.chosenSelect {
		padding: 10px;
		width: 100px;
	}
  </style>
</head>
<body>
<div class="container">
<div class="row">
	<div class="col-sm-6">
		<textarea id="copyandpasteevents"></textarea>
	</div>
<div class="col-sm-6">
<select name="student" class="chosenSelect" data-placeholder="Choose a Students..." style="width:350px;" tabindex="1" multiple="multiple">
<option value=""></option>
<?php
$connect=mysql_connect("localhost","root",'');
if($connect){
	$db=mysql_select_db('icampus_sjhs_live');
$query="SELECT * FROM students LIMIT 1,100";
$result=mysql_query($query);
?>

<?php
while($resultStudent=mysql_fetch_object($result)){
	?>
<option value="<?php echo $resultStudent -> id; ?>"><?php echo $resultStudent -> first_name; ?></option>
<?php
}
}
?>
</select>
</div>
</div>
</div>
<script src="chosen_v1.5.0/chosen.jquery.js" type="text/javascript"></script>
  <script src="chosen_v1.5.0/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	$('.chosenSelect').chosen();
	$("#copyandpasteevents").on("paste", function() {
		$('#copyandpasteevents').val("");
	}); 
</script>
</body>
</html>

