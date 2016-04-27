<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>jQuery UI Autocomplete - Accent folding</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

        <link rel="stylesheet" href="/resources/demos/style.css">
        <style>
            .ui-autocomplete-loading {
                background: white url("images/ui-anim_basic_16x16.gif") right center no-repeat;
            }
            .ui-widget{
                width: 25%;
                height: 25%;
                overflow: auto;
            }
        </style>
    <body>
        <div class="ui-widget">
            <form>
                <label for="developer">Developer: </label>
                <input id="developer" type="text" title="Select Student">
            </form>
        </div>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script type="text/javascript">
            $(function () {
                function log(message) {
                    $("<div>").text(message).prependTo("#log");
                    $("#log").scrollTop(0);
                }
                $("#developer").autocomplete({
                    source: "dataSource.php",
                    minLength: 2,
                    select: function (event, ui) {
                        log(ui.item ?
                                "Selected: " + ui.item.value + " aka " + ui.item.id :
                                "Nothing selected, input was " + this.value);
                    }
                });

            });
            $("#developer").keypress(function () {
                $.ajax({
                    url: "dataSource.php?val=" + $("#developer").val(),
                    method: "POST",
                    dataType: "JSON",
                    success: function (data) {
                        $("#find").html(data);
                    },
                });
            });
           $("#developer").tooltip();
        </script>
    </body>
</html>