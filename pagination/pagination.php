<?php
error_reporting(0);
?>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <title>Pagination Example</title>
        <style>
            #pagination {
                border-left: 1px solid #aaaaaa;
                border-right: 1px solid #aaaaaa;
                border-top: 1px solid #aaaaaa;
                border-bottom: 1px solid #aaaaaa;
                width: 80%;
                height: auto;
                text-align: center;
                padding-top: 10px;
                font-family: Verdana;
                font-size: 12px;
            }

            #pagination1 {
                border-left: 1px solid #aaaaaa;
                border-right: 1px solid #aaaaaa;
                border-top: 1px solid #aaaaaa;
                border-bottom: 1px solid #aaaaaa;
                width: 80%;
                height: auto;
                text-align: center;
                padding-top: 10px;
                font-family: Verdana;
                font-size: 12px;
            }

            .pagination {
                border-collapse: collapse;
                border-top: 1px solid #aaaaaa;
                border-right: 1px solid #aaaaaa;
                border-style: solid;
                font-family: Verdana, Arial;
                text-align: center;
                font-size: 12px;
                width: 80%;
                height: 70%;
            }

            .pagination tr, th {
                border-left: 1px solid #aaaaaa;
                border-bottom: 1px solid #aaaaaa;
                font-family: Verdana, Arial;
                text-align: center;
                font-size: 12px;
            }

            .pagination td {
                border-left: 1px solid #aaaaaa;
                border-bottom: 1px solid #aaaaaa;
                font-family: "Bitstream Vera Sans";
                width: 40%;
                height: auto;
            }

            a:visited {
                color: #ff281f;
                word-spacing: 10px;
                font-family: Verdana, Arial;
                font-weight: bold;
            }

            a:active {
                color: #e6b900;
                word-spacing: 10px;
                text-decoration: #ff281f;
                font-family: Verdana, Arial;
            }

            a:hover {
                font-family: Verdana, Arial;
                word-spacing: 10px;
            }

            a:shadow {
                color: #2293f7;
                word-spacing: 10px;
                text-decoration: #ff281f;
                font-family: Verdana, Arial;
            }

            a:link {
                color: #be7429;
                font-weight: normal;
                text-decoration: none;
            }

            a:link:hover {
                color: #be7429;
                font-weight: normal;
                text-decoration: underline;
            }
        </style>
    <body>
    <?php
    /**
     * Created by Sublime.
     * User: rajeev
     * Date: 23/11/15
     * Time: 11:01 AM
     */
    $totalPages = 1;
    $pageSize = 10;
    $offset = 0;
    $slno = 1;
    $pageLimit = 10;
    $pages = trim($_GET['page']) ? trim($_GET['page']) : trim($_POST['pageno']);
    if (isset($pages) && $pages > 1) {
        $slno = ($pages * $pageSize) - 9;
        $offset = ($pages - 1) * $pageSize;
    } else if (isset($_POST['submit'])) {
        $postPage = trim($_POST['pageno']);
        $slno = $postPage * $pageSize + 1;

        $offset = $postPage * $pageSize;
    } else if ($pages > $pageLimit) {
        $pages = 1;
    } else {
        $offset = 0;
        $slno = 1;
        $pages = 1;
    }

    $connectDb = mysql_connect('localhost', 'root', '');
    if (!$connectDb) {
        die("Connection Error " . mysql_error());
    }
    $selectDb = mysql_select_db('icampus');
    $countSql = "SELECT COUNT(*) FROM students";
    $resultCount = mysql_query($countSql);
    $result = mysql_fetch_array($resultCount);
    $totalPages = $result['0'];

    $sqlPagination = "SELECT * FROM students LIMIT $offset,$pageSize;";
    $resultPagination = mysql_query($sqlPagination);
    $sqlPagination1 = "SELECT * FROM students;";
    $result = mysql_query($sqlPagination1);
    $resultNumRows = mysql_num_rows($result);
    $pageLimit1 = ceil($resultNumRows / $pageSize);
    ?>
    <div id="pagination">
        <?php
        if (trim($_GET['page']) >= $pageLimit1 - 1) {
            ?>
            <script type=text/javascript>
                //alert("Reached LastPage");
            </script>
        <?php } ?>
        <table class="table-responsive">
            <tr>
                <td>
                    <form method="post" action="<?php echo $_SERVER[PHP_SELF]; ?>">
                        <input type="textbox" name="pageno" size="1" value="<?php
                        if (isset($_POST['pageno']))
                            echo $_POST['pageno'];
                        else
                            echo $_GET['page'];
                        ?>">
                        <input type="submit" id="pageno" value="Go" name="submit">
                    </form>
                </td>
                <td><?php echo $postPage ? "$postPage of Pages $pageLimit1" : "$pages of Pages $pageLimit1" ?></td>
                <td><a href="pagination.php?page=<?php
                    echo $offset = 0;
                    $pages = 1;
                    ?>"><?php echo '| First |'
                        ?>
                </td>
                <td>
                    <a href="pagination.php?page=<?php
                    if ($_GET['page'] > 0 || $_POST['pageno'] > 0) {
                        echo $pageLimit1 - 2;
                    } else {
                        echo $pages = 0;
                    }
                    ?>&slno=<?php echo $slno ?>"><img src="../images/backward1.png" title="Fast previous" width="30px"></a>
                </td>
                <td>&nbsp;</td>
                <td><a href="pagination.php?page=<?php
                    if ($_GET['page'] > 0 || $_POST['pageno'] > 0)
                        echo $_GET['page'] ? $_GET['page'] - 1 : $_POST['pageno'] - 1;
                    else
                        echo $page = 0
                    ?>"><img src="../images/backward.png" title="next" width="20px"></a></td>
                <?php
                for ($i = 1; $i <= $pageLimit1; $i++) {
                    ?>
                    <td><a href="pagination.php?page=<?php echo $i; ?>"><?php echo $i ?></a>|</td>
                    <?php
                }
                ?>
                </td>
                <td><a href="pagination.php?page=<?php
                    if ($_GET['page'] > 0 || $_POST['pageno'] > 0) {
                        echo $pageLimit1 + 1;
                    } else {
                        echo $_GET['page'] + 1;
                    }
                    ?>&slno=<?php echo $slno ?>"><img src="../images/forward.png" title="next" width="20px"></a></td>
                <td><a href="pagination.php?page=<?php
                    if ($_GET['page'] > 0 || $_POST['pageno'] > 0 && $_GET['page'] >= $pageLimit1) {
                        echo $pageLimit1 + 2;
                    } else {
                        $pages = 0;
                    }
                    ?>&slno=<?php echo $slno ?>"><img src="../images/forward1.png" title="next" width="30px"></a></td>
                <td>
                    <a href="pagination.php?page=<?php echo $pageLimit1 - 1; ?>&slno=<?php echo $slno ?>"><?php echo "Last" ?></a>
                </td>
            </tr>
        </table>
    </div>
    <br/>
    <table border="0" width="auto" class="pagination">
        <tr>
            <th>S.No</th>
            <th>Name</th>
        </tr>
        <?php
        while ($row = mysql_fetch_array($resultPagination)) {
            ?>
            <tr>
                <td><?php echo $slno ?></td>
                <td><?php echo $row["first_name"]; ?></td>
            </tr>
            <?php
            $slno++;
        }
        ?>
    </table>
    <br/>
    <div id="pagination1">
        <table>
            <tr>
                <td>
                    <form method="post" action="<?php echo $_SERVER[PHP_SELF]; ?>">
                        <input type="textbox" name="pageno" size="1" value="<?php
                        if (isset($_POST['pageno']))
                            echo $_POST['pageno'];
                        else
                            echo $_GET['page'];
                        ?>">
                        <input type="submit" id="pageno" value="Go" name="submit">
                    </form>
                </td>
                <td>
                    <a href="pagination.php?page=<?php
                    echo $offset = 0;
                    $pages = 1;
                    ?>"><?php echo 'First' ?></a>|
                </td>
                <td><a href="pagination.php?page=<?php
                    if ($_GET['page'] > $totalPages)
                        echo $pageLimit1 - 2;
                    else {
                        echo $_GET['page'] - 2;
                        $page = 0;
                    }
                    ?>&slno=<?php echo $slno ?>"><img src="../images/backward1.png" title="Fast Previous" width="30px"></a>
                    |
                </td>
                <td>
                    <a href="pagination.php?page=<?php
                    if ($_GET['page'] || $_POST['pageno'] > 0)
                        echo $_GET['page'] ? $_GET['page'] - 1 : $_POST['pageno'] - 1;
                    else
                        echo $page = 0
                    ?>"><img
                            src="../images/backward.png" title="Previous" width="20px"></a></td>
                <td>&nbsp;</td>
                <?php
                for ($i = 1; $i <= $pageLimit1; $i++) {
                    ?>
                    <td><a href="pagination.php?page=<?php echo $i; ?>"><?php echo $i ?></a>|</td>
                    <?php
                }
                ?>
                <td><a href="pagination.php?page=<?php
                    if ($_GET['page'] >= $pageLimit1 - 1) {
                        echo $pageLimit1 + 1;
                    } else {
                        echo $_GET['page'] + 1;
                    }
                    ?>&slno=<?php echo $slno ?>"><img src="../images/forward.png" title="Next" width="20px"></a></td>
                <td><a href="pagination.php?page=<?php
                    if (trim($_GET['page']) >= $pageLimit1 - 2) {
                        echo $pageLimit1 - 2;
                    } else {
                        echo trim($_GET['page']) + 2;
                    }
                    ?>&slno=<?php echo $slno ?>"><img src="../images/forward1.png" title="Fast Next" width="30px"></a>
                </td>
                <td>
                    <a href="pagination.php?page=<?php echo $pageLimit1 - 1; ?>&slno=<?php echo $slno ?>"><?php echo "Last" ?></a>
                </td>
            </tr>
        </table>
    </body>
    </html>
<?php mysql_close(); ?>