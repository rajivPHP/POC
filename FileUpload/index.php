<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
    <link href="jQuery.filer-master/css/jquery.filer.css" type="text/css" rel="stylesheet"/>
    <link href="jQuery.filer-master/css/themes/jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<form action="fileupload.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td><label>Please Select File</label></td>
            <td>
                <input type="file" name="filename[]" value="SELECT FILE" id="filename" multiple="multiple">
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <input type="submit" name="submit" value="Upload File">
            </td>
        </tr>
    </table>
</form>
<script src="../jquery-1.11.0.min.js"></script>
<script src="jQuery.filer-master/js/jquery.filer.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#filename').filer({
            limit: 7,
            maxSize: 3,
            extensions: ['jpg', 'jpeg', 'png', 'gif', 'pdf', 'csv'],
            changeInput: true,
            showThumbs: true,
            addMore: true
        });
    });
</script>
</body>
</html>
