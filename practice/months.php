<!DOCTYPE HTML>
<html>
	<head>
		<title>Months Listing</title>
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
		<style type="text/css">
			.month {
				height: 194px;
				width: 200px;
			}
		</style>
		<script type="text/javascript">
			$(document).ready(function() {
				$("#addrow").click(function() {
					$("#list").prepend('<tr><td><input type="textbox" name="username[]"></td><td>&nbsp;</td><td>&nbsp;</td></tr>');
					//console.log("log", $("#list").prepend('<tr><td><input type="textbox" name="Username" value="Username"></td><td>&nbsp;</td><td>&nbsp;</td></tr>'));
				});
			});
		</script>
	</head>
	<body>
		<?php
		$months = array();
		if (isset($_POST['month'])) {
			$month = $_POST['month'];
			$months = implode(',', $_POST['month']);
			echo "<pre>";
			print_r($_POST);
		}
		$month = array(1 => "January", 2 => "February", 3 => "March", 4 => "April", 5 => "May", 6 => "June", 7 => "July", 8 => "August", 9 => "September", 10 => "October", 11 => "November", 12 => "December");
		//echo "<pre>";
		//print_r($month);
		//echo date("F");
		?>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<table border="0" id="list">
				<tr>
					<td>
					<select name="month[]" size="3" multiple="multiple" tabindex="1" class="month" id="list">
						<optgroup label="Choose the Month">
							<?php
							foreach ($month as $value => $key) {
								$currentmonth = date("F");
								if ($currentmonth == $key) {
									echo "<option value=$key selected=selected>" . $key . "</option>";
								} else {
									echo "<option value=$key>" . $key . "</option>";
								}

							}
							?>
						</optgroup>
					</select></td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
			</table>
			<table>
				<tr>
					<td></td>
					<td>
					<input type="submit" value="Set Month">
					</td>
					<td>&nbsp;</td>
				</tr>
			</table>
		</form>
		</div>
		<a  href="javascript:void(0);" id="addrow">Add Row</a>
	</body>
</html>