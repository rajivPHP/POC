<style type="text/css">
    #login{
        width: 20px;
        text-align: center;
        height: 50px;
    }
</style>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    </head>
    <body>
        <div id="login">
            <form method="POST" id="form" action="login_verification.php">
                <table>
                    <tr>
                        <td><label>Username:</label></td>
                        <td><input type="text" name="username" id="username"/></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><label>Password:</label></td>
                        <td><input type="password" name="password" id="password"/></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="submit" value="Submit" id="submit"/></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
<script type="text/javascript">
    $('#form').submit(function () {
        var username = $("#username").val();
        var password = $("#password").val();
        if (username == "" && password == "") {
            alert("Enter Username or Password");
            return false;
        }
        else if (username !== "" && password == "") {
            alert("Enter Password");
            return false;
        }
        else if (username == "" && password == !"") {
            alert("Enter Username");
            return false;
        }
        else {
            return true;
            $.ajax({
                url: 'practice/login_verification.php',
                type: 'POST',
                data: $(this).serialize(),
                success: function (data) {
                    //$('#login').html(data);
                }
            });
        }
    });
</script>
