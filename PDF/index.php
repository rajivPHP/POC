<html>
    <head>
        <title>Show PDF</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php 
        $html .='<h2>Report</h2>';
        $html .='';
        ob_start();
        include 'pdf_data.php';
        $connect = ob_get_clean();
        require_once('dompdf/dompdf_config.inc.php');
        $html = ob_get_clean();
        $dompdf=new DOMPDF();
	$dompdf->load_html($html);
        $dompdf->render();
        $output = $dompdf->output();    
        file_put_contents('pdf_data.php', $output);
        $dompdf->stream("sample.pdf");
        ?>
    </body>
</html>