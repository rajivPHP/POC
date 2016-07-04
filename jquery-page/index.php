<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <meta charset="UTF-8"/>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"
            integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>
</head>
<body>
<?php
include 'config.php';
$connect = mysql_connect($host, $user, $pass);
try {
if ($connect) {
$selectDb = mysql_select_db($db);
if ($selectDb) {
$querySql = "SELECT * FROM students;";
$queryRows = mysql_query($querySql);

if ($queryRows) {
?>
<input type="hidden" value="<?php echo mysql_num_rows($queryRows); ?>" id="count">
<table border="1" id="page">
    <tr>
        <td>#</td>
        <td>First name</td>
        <td>Last name</td>
    </tr>
    <?php
    $i = 0;
    while ($resultRows = mysql_fetch_array($queryRows)) {
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $resultRows['first_name']; ?></td>
            <td><?php echo $resultRows['middle_name']; ?></td>
        </tr>
        <?php
        $i++;
    }
    } else {
        throw new Exception("Error Processing Request " . mysql_error, 1);

    }
    } else {
        throw new Exception("Error Processing Request " . mysql_error, 1);

    }
    } else {
        throw new Exception("Error Processing Request " . mysql_error, 1);
    }
    } catch (exception $e) {
        echo $e->getMessage();
    }
    ?>
</table>
<ul id="pagination" class="pagination-sm"></ul>
<script type="text/javascript">
    $(document).ready(function () {
        $('#pagination').twbsPagination({
            totalPages: 35,
            visiblePages: 7
        });
    });
</script>
</body>
</html>