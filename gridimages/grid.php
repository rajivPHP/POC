<html>
<head>
    <title>Container Sample</title>
    <style type="text/css">
        #container {
            width: 100%;
            margin: auto;
        }

        #container > div {
            /*-webkit-box-shadow: 0 4px 15px -5px #555;
            box-shadow: 0 4px 15px -5px #555;*/
            background-color: #fff;
            width: 25%;
            padding: 2px;
            margin: 5px;
        }

        #container > table img {
            padding: 0px;
            display: block;
            width: 25%;
        }
    </style>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/Pinterest/jquery.pinto.js"></script>
</head>
<body>
<div id="container">
    <table border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td><img src="../images/MasterCard-Logo.png"></td>
        </tr>
        <tr>
            <td><h2>Price</h2></td>
        </tr>
        <tr>
            <td><img src="../images/Firefox-logo.svg.png" width="50px"></td>
        </tr>
        <tr>
            <td><h2>Price</h2></td>
        </tr>
        <tr>
            <td><img src="../images/olympic.png"></td>
        </tr>
        <tr>
            <td><h2>Price</h2></td>
        </tr>
        <tr>
            <td><img src="../images/Vanamo_Logo.png"></td>
        </tr>
        <tr>
            <td><h2>Price</h2></td>
        </tr>
    </table>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#container').pinto({
            itemClass: "pinto",
            itemSkipClass: "pinto-skip",
            itemWidth: 220,
            gapX: 10,
            gapY: 10,
            align: "left",
            fitWidth: true,
            autoResize: true,
            resizeDelay: 50,
            onItemLayout: function ($item, column, position) {
            },

        });
    });
</script>
</body>
</html>