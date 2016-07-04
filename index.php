<style>
    #contentArea, #contentArea1, .list-child-one {
        display: none;
    }

    .box {
        width: 100%;
        height: 200px;
        background: none;
        text-align: center;
        margin-left: 333px;
    }

    #tabs ul {
        width: auto;
        height: auto;
        background: #aaaaaa;
    }
    #tabs  {
        width: 100%;
        height: auto;
        background: #aaaaaa;
    }
    #tabs div {
        width: 500px;
        height: auto;
        background: #cccccc;
    }
    a:link {
        color: #006666;
        text-decoration: none;
    }

    a:visited {
        color: #00FF00;
        text-decoration: none;
    }

    a:hover {
        color: #FF00FF;
        text-decoration: none;
    }

    a:active {
        color: #0000FF;
        text-decoration: none;
    }

    ul {
        list-style-type: square;
        text-align: center;
        width: 20%;
        margin-left: 119px;
        margin-top: 4px;
        background: none;
    }

    .even {
        color : #0000FF;
        background: none;
    }

    tr:nth-child(odd) td{
        background: #cccccc;
    }
    tr:nth-child(even) td
    {
        background:#2293f7;
    }
    ul.list-child-one.odd {
        background: #006666;
    }

    ul.list-child-one.even {
        background: #006666;
    }
</style>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <link rel="stylesheet" href="jquery-ui-1.11.4.custom/jquery-ui.css">
        <script src="jscharts.js"></script>
        <script src="jquery-1.11.0.min.js"></script>

        <script src="jquery-ui-1.11.4.custom/jquery-ui.js">
        <script src = "//code.jquery.com/jquery-1.10.2.js" ></script>
        <script src="jquery-mousewheel-master/jquery.mousewheel.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script></head>
    <title>Welcome to the Sample World</title>
    <body>
        <div id="tabs">
            <ul>
                <li><a href="#tab1">More Info</a></li>
                <li><a href="#tab2">About Us</a></li>
                <li><a href="#tab3">Contact</a></li>
                <li><a href="#tab4">Welcome</a></li>

            </ul>
            <div id="tab1">
                <p>MoreInfoMoreInfoMoreInfoMoreInfoMoreInfoMore
                    InfoMoreInfoMoreInfoMoreInfoMoreInfoMoreInfoMoreInfoMoreInfoMoreInfoMoreInfoMoreInfoMoreInfoMoreInfoMoreInfoMoreInfoMoreInfoMore
                    InfoMoreInfoMoreInfoMoreInfoMoreInfoMoreInfoMoreInfoMoreInfoMoreInfoMoreInfoMoreInfo
                    MoreInfoMoreInfoMoreInfoMoreInfoMoreInfoMore
                    InfoMoreInfoMoreInfoMoreInfoMoreInfoMoreInfoMoreInfoMoreInfoMoreInfoMoreInfoMoreInfo
                    MoreInfoMoreInfoMoreInfoMoreInfoMoreInfoMore
                    InfoMoreInfoMoreInfoMoreInfoMoreInfoMoreInfoMoreInfoMoreInfoMoreInfoMoreInfoMoreInfo</p>
            </div>
            <div id="tab2">
                <p>Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2
                    .Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.
                    Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2ab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.
                    Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.
                    Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.
                    Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.Tab2.
                </p>
            </div>
            <div id="tab3">
                <p>Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3
                    Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Ta
                    b3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Ta
                    b3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3
                    Tab3
                    Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3
                </p>
            </div>
            <div id="tab4">
                <p>Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3
                    Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3
                    Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3
                    Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3
                    Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3
                    Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3Tab3</p>
            </div>
        </div>
        <div class="box" style="width: 400px">
            <div class="title">
                Inventory Menu (<a id="lnkCollapse" href="#" style="color: black; font-size: 12px;text-decoration: none;">Click
                    to Expand +</a>) |
                <a id="lnkClose" href="#" style="font-size: 15px;" onclick="return slideup();">Close</a>
            </div>
            <div id="contentArea" class="content">
                <form method="POST" action="<?php echo $_SERVER[PHP_SELF]; ?>">
                    <ul>
                        <li class="even"><a id="menu1" href="#" style="font-size: 15px;" onclick="return slideup();">menu1</a>
                        </li>
                        <li class="odd"><a id="menu2" href="#" style="font-size: 15px;" onclick="return slideup();">menu2</a>
                        </li>
                        <li class="even"><a id="menu3" href="#" style="font-size: 15px;" onclick="return slideup();">menu3</a>
                        </li>
                    </ul>
                </form>
            </div>
            <div class="title">
                Inventory Menu1(<a id="lnkCollapse1" href="#" style="color: black; font-size: 12px;text-decoration: none;">Click
                    to Expand +</a>) |
                <a id="lnkClose1" href="#" style="font-size: 15px;" onclick="return slideup();">Close</a>
            </div>
            <div id="contentArea1" class="content">
                <form method="POST" action="<?php echo $_SERVER[PHP_SELF]; ?>">
                    <ul>
                        <li class="even"><a id="menu1" href="#" style="font-size: 15px;" onclick="return slideup();">menu1</a>
                        </li>
                        <li class="odd"><a id="menu2" href="#" style="font-size: 15px;" onclick="return slideup();">menu2</a>
                        </li>
                        <li class="even"><a id="menu3" href="#" style="font-size: 15px;" onclick="return slideup();">menu3</a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
        <table width="100%" border="0" style="margin-top:100px;">
            <tr class="even">
                <td>menu1</td>
            </tr>
            <tr class="odd">
                <td>menu2</td>
            </tr>
            <tr class="even">
                <td>menu3</td>
            </tr>
            <tr class="odd">
                <td>menu4</td>
            </tr>
        </table>

        <div id="chartcontent">Just Sample for Bar Chart</div>
        <script type="text/javascript">
            var myChart = new JSChart('chartcontent', 'pie');
            myChart.setDataXML('mydata.xml');
            myChart.setBackgroundColor('#efe');
            myChart.setAxisNameX('Field');
            myChart.setAxisNameY('Length');
            myChart.setSize(700, 600);
            myChart.setTitle('Production Development');
            myChart.setTitleColor('#5555AA');
            myChart.setTitleFontSize(12);
            myChart.draw();
        </script>
        <script type="text/javascript">
            //$("#contentArea").hide();
            $(function () {
                $("#lnkCollapse").click(function () {
                    $("#contentArea").slideToggle("slow");
                });
                $("#lnkCollapse1").click(function () {
                    $("#contentArea").slideUp("slow");
                    $("#contentArea1").slideToggle("slow");
                });
                $("#menu2").click(function () {
                    $(".list-child-one").slideToggle("slow");
                });
                $("#lnkClose").click(function () {
                    // $('#contentArea').html('Details[-]');
                    $("#contentArea").slideUp(400);
                });
                $("#lnkClose1").click(function () {
                    // $('#contentArea').html('Details[-]');
                    $("#contentArea1").slideUp(400);
                });
            });
            $(document).ready(function () {
                $("#spinner").spinner();
                $("#tabs").tabs({
                    collapsible: true,
                });
            });
        </script>
        <script>
            $("#chartcontent").click(function () {
                // $("#chartcontent").html("Added Chart");
                $("#chartcontent").append("<a href='#top'>top</a>");
            });
        </script>
    </body>
</html>