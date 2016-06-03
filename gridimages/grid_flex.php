<html>
<head>
    <title>Container Sample</title>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/jQuery-flexImages/jquery.flex-images.js"></script>
</head>
<body>
<div id="container">
    <div class="item" data-w="200" data-h="150"><img src="../images/MasterCard-Logo.png"></div>
    <div class="item" data-w="250" data-h="150"><img src="../images/Firefox-logo.svg.png"></div>
    <div class="item" data-w="150" data-h="150">><img src="../images/olympic.png"></div>
    <div class="item" data-w="150" data-h="150"><img src="../images/Vanamo_Logo.png"></div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#container').flexImages({

        });
    });
</script>
</body>
</html>