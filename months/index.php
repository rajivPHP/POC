<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<table border="1" class="table table-bordered">
						<?php
						$monthNew = '';
						$months = array();
						$monthKey = '';
						if (isset($_REQUEST['monthsNext'])) {
							$months = array("1" => "Januaray", "2" => "Febuary", "3" => "March", "4" => "April", "5" => "May", "6" => "June", "7" => "July", "8" => "August", "9" => "September", "10" => "October", "11" => "Novemeber", "12" => "December");
							//$currentMonth = date("n");
							//echo $currentMonth;exit;
							foreach ($months as $value => $key) {
								if ($value == $_REQUEST['monthsNext']) {
									$monthKey = $_REQUEST['monthsNext'];
									$monthNew = $key;
								}
							}
							$currentYear = date("Y");
							//foreach ($currentMonth as $month) {
							$days = cal_days_in_month(CAL_GREGORIAN, $_REQUEST['monthsNext'], $currentYear);
							$nextMonth = $monthKey + 1;
							$previousMonth = $monthKey - 1;
							echo "<tr align=center><td>" . "<a href=index.php?monthsPre=$previousMonth>" . "Previous" . "</a>&nbsp;" . $monthNew . "&nbsp;<a href=index.php?monthsNext=$nextMonth>" . "Next" . "</a>";
							echo "<table class='table table-bordered'>";
							echo "<tr>";
							for ($i = 1; $i <= $days; $i++) {
								//$weekDay = '';
								//$timeStamp = '';
								//$timeStamp = $currentYear - $nextMonth - $i;
								//$weekDay = date("D", strtotime($timeStamp));
								echo "<td>";
								echo "<a href=index.php?Days=$i>" . $i  . "&nbsp;</a>";
								echo "</td>";
							}
							echo "</tr>";
							echo "</table>";
							echo "</td>";
							echo "</tr>";
						} else if (isset($_REQUEST['monthsPre'])) {
							$months = array("1" => "Januaray", "2" => "Febuary", "3" => "March", "4" => "April", "5" => "May", "6" => "June", "7" => "July", "8" => "August", "9" => "September", "10" => "October", "11" => "Novemeber", "12" => "December");
							//$currentMonth = date("n");
							//echo $currentMonth;exit;
							foreach ($months as $value => $key) {
								if ($value == $_REQUEST['monthsPre']) {
									$monthKey = $_REQUEST['monthsPre'];
									$monthNew = $key;
								}
							}
							$currentYear = date("Y");
							$days = cal_days_in_month(CAL_GREGORIAN, $_REQUEST['monthsPre'], $currentYear);
							$nextMonth = $monthKey + 1;
							$previousMonth = $monthKey - 1;
							echo "<tr align=center><td>" . "<a href=index.php?monthsPre=$previousMonth>" . "Previous" . "</a>&nbsp;" . $monthNew . "&nbsp;<a href=index.php?monthsNext=$nextMonth>" . "Next" . "</a>";
							echo "<table class='table table-bordered'>";
							echo "<tr>";
							for ($i = 1; $i <= $days; $i++) {
								echo "<td>";
								echo "<a href=index.php?Days=$i>" . $i . "&nbsp;</a>";
								echo "</td>";
							}
							echo "</tr>";
							echo "</table>";
							echo "</td>";
							echo "</tr>";
						} else {
							$months = array("1" => "Januaray", "2" => "Febuary", "3" => "March", "4" => "April", "5" => "May", "6" => "June", "7" => "July", "8" => "August", "9" => "September", "10" => "October", "11" => "Novemeber", "12" => "December");
							$currentMonth = date("n");
							foreach ($months as $value => $key) {
								if ($value == $currentMonth) {
									$monthKey = $currentMonth;
									$monthNew = $key;
								}
							}
							$currentYear = date("Y");
							$days = cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear);
							//$weekdays=array("sunday","monday","wednesday","thurday","friday","saturday");
							$nextMonth = $monthKey + 1;
							$previousMonth = $monthKey - 1;
							echo "<tr align=center><td>" . "<a href=index.php?monthsPre=$previousMonth>" . "Previous" . "</a>&nbsp;" . $monthNew . "&nbsp;<a href=index.php?monthsNext=$nextMonth>" . "Next" . "</a>";
							echo "<table class='table table-bordered'>";
							echo "<tr>";
							for ($i = 1; $i <= $days; $i++) {
								//$current = date("w", $currentYear."/".$currentMonth."/".$i);
								echo "<td>";
								echo "<a href=index.php?Days=$i>" . $i . "&nbsp;</a>";
								echo "</td>";
							}
							echo "</tr>";
							echo "</table>";
							echo "</td>";
							echo "</tr>";
						}
						?>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>

