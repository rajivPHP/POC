<?php
/**
 * Created by PhpStorm.
 * User: rajeev
 * Date: 22/9/15
 * Time: 7:10 PM
 */
?>

<html>
<head>
    <script type="text/javascript" src="bootbox.min.js"></script>
    <script src="jquery-1.11.0.min.js"></script>
    <title>BootBox</title>
</head>
<body>
<a href="#" id="select" class="btn btn-primary btn-lg alert3">Select</a>
<script type="text/javascript">
    $("#select").click(function (e) {
        bootbox.alert("Are you sure?", function (result) {
            console.log("Alert Callback");
        });
    });
</script>
</body>
</html>

