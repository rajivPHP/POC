<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2>Username</h2>
    <form role="form" method="POST">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
        </div>
        <input type="submit" class="btn btn-default" name="submit" value="Submit">
    </form>
    <div id="result"></div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var username= $("input:text").val();
        alert(username);
        $.ajax({
            url: 'checkuser.php',
            type: 'POST',
            data: username,
            beforeSend: function () {
                $('#result').addClass('loading');
            },
            success: function (response) {
                $('#result').removeClass('loading');
                $('#result').html(response);
            }
        });
    });
</script>
</body>
</html>