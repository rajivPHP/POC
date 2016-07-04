<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
        <link rel="stylesheet" type="text/css" href="../DataTables/css/jquery.dataTables.css">
        <script type="text/javascript" language="javascript" src="../DataTables/js/jquery.js"></script>
        <script type="text/javascript" language="javascript" src="../DataTables/js/jquery.dataTables.js"></script>
        <script type="text/javascript" language="javascript" class="init">
            $(document).ready(function () {
                $("#listing").dataTable({
                    "pagingType": "full_numbers",
                    "paging": true,
                    "ordering": true,
                    "info": true
                });
            });
        </script>
        <title>Data Table</title>
    </head>
    <body>
        <?php
        $connectDB = mysql_connect('localhost', 'root', '');
        if (!$connectDB) {
            die("Connection Error " . mysql_error());
        }
        $selectDb = mysql_select_db('icampus');
        $querySql = "SELECT * FROM students";
        $result = mysql_query($querySql);
        ?>
        <table border="0" width="auto" class="listing" id="listing">
            <thead>
                <tr>
                    <td style="font-weight: bold;">S.No</td>
                    <td style="font-weight: bold;">Name</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $slno = 1;
                while ($row = mysql_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $slno; ?></td>
                        <td><?php echo $row['first_name']; ?></td>
                    </tr>
                    <?php
                    $slno++;
                }
                ?>
            </tbody>
        </table>
    </body>
</html>