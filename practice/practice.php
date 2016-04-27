<style type="text/css">
    #content{
        width: 80%;
        text-align: center;
    }
    #alphabets1{
        width: 40%;
        height:80%;
        overflow: auto;
        text-align: center;
        align:center;
        letter-spacing: 0px;
    }
    #alphabets{
        width: 40%;
        overflow: auto;
        text-align: center;
        align:center;
        word-spacing: 4px;
    }
    #listalphappage{
        border-collapse: collapse;
        border-top:  1px solid #007ebd;
        border-right:  1px solid #007ebd;
        width: 100%;
        height:80%;
        overflow: auto;
        text-align: center;
        align:center;
        letter-spacing: 0px;
    }
    #listalphappage th,tr{
        border-left:  1px solid #007ebd;
        border-bottom: 1px solid #007ebd;
    }
    #listalphappage td{
        border-left:  1px solid #007ebd;
        border-bottom: 1px solid #007ebd;
    }
</style>
<!DOCTYPE html>
<html>
    <head>
        <title>Paging with Alphabets</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({selector: 'textarea'});</script>
    </head>
    <body>
        <div>
            <table border="0" id="alphabets">
                <tr>
                    <td><a href="practice.php?letter=All&page=<?php echo $pages; ?>"><?php echo strtoupper("All"); ?></a></td>
                    <?php
                    /*
                     * To change this license header, choose License Headers in Project Properties.
                     * To change this template file, choose Tools | Templates
                     * and open the template in the editor.
                     */
                    $letters = range("a", "z");
                    foreach ($letters as $letter) {
                        ?>
                        <td>&nbsp;</td>
                        <td><a href="practice.php?letter=<?php echo urldecode($letter); ?>"><?php echo strtoupper($letter); ?></a></td>
                        <?php
                    }
                    ?>
                </tr>
            </table>
        </div>
        <br />
        <div id="alphabets1">
            <table border="0" id="listalphappage">
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                </tr>
                <?php
                if (isset($_GET['letter'])) {
                    $dbConnect = mysql_connect("localhost", "root", "root");
                    if ($dbConnect) {
                        $dbName = "icampus";
                        $selectDb = mysql_select_db($dbName);
                        $letter = $_GET['letter'];
                        if ($_GET['letter'] == strcmp(All, $letter)) {
                            $letter = '%';
                        }

                        $sNo = 1;
                        $pageSize = 10;
                        $pages = $_GET['page'];
                        if (isset($_GET['page'])) {
                            $offset = $pages * $pageSize;
                            $sNo = $pages * $pageSize + 1;
                        } else {
                            $pages = 1;
                            $sNo = 1;
                            $offset = 1;
                        }
                        if ($_GET['page'] > $pageLimit1) {
                            echo $pageLimit1;
                        }
                        $querySqlCount = "SELECT COUNT(*) FROM students where first_name like '" . $letter . "%';";
                        $resultSqlCount = mysql_query($querySqlCount);
                        $resultCount = mysql_fetch_array($resultSqlCount);
                        $totalRecords = $resultCount['0'] - 1;
                        $pageLimit1 = ceil($totalRecords / $pageSize);
                        $querySql = "SELECT * FROM students where first_name like '" . $letter . "%' ORDER BY first_name LIMIT $offset,$pageSize;";
                        $resultSql = mysql_query($querySql);
                        while ($result = mysql_fetch_array($resultSql)) {
                            ?>
                            <tr>
                                <td><?php echo $sNo; ?></td>
                                <td><?php if ($result['first_name']) echo $result['first_name']; ?></td>
                            </tr>
                            <?php
                            $sNo++;
                        }
                        ?>
                        <a href="practice.php?letter=<?php echo $letter; ?>&page=<?php echo $pages - 1; ?>"><?php echo "PREVIOUS"; ?></a>&nbsp;
                        <a href="practice.php?letter=<?php echo $letter; ?>&page=<?php echo $pages = 0; ?>"><?php echo "FIRST"; ?></a>
                        <?php
                        for ($i = 1; $i < 4; $i++) {
                            ?>
                            &nbsp;<a href="practice.php?letter=<?php echo $letter; ?>&page=<?php echo $i ?>"><?php echo $i; ?></a>&nbsp;
                            <?php
                        }
                        ?>
                        <a href="practice.php?letter=<?php echo $letter; ?>&page=<?php echo $_GET['page'] + 1; ?>"><?php echo "NEXT"; ?></a>
                        <?php
                    }
                } else {
                    ?>
                    }

                    <tr><td colspan="2"><?php
                            echo "<strong>No Records Found</strong>";
                        }
                        ?></td></tr>

            </table>
        </div>
        <table>
            <tr>
                <td><textarea>Default text</textarea>
            </tr>
        </table>
    </body>
</html>