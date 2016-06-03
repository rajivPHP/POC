<?php
if (isset($_FILES['filename']['tmp_name'])) {
    $filename = $_FILES['filename']['name'];
    exec("mkdir uploads", $output, $val);
    $directory = date('Ymd');
    mkdir($directory,0777);
    $source = $_FILES['filename']['tmp_name'];
    $destination = "public_html/POC/fileupload/uploads/" . date('Ymd') . "/" . $filename['0'];
    //chmod("public_html/POC/fileupload/uploads/$directory",0777);
    if (move_uploaded_file($source, $destination)) {
        echo "Success Files Moved";
        return true;
    } else {
        echo "Not Moved";
        return false;
    }
    ?>
    <img src="<?php echo 'uploads/' . date('Ymd') . '/' . $filename; ?>">
    <?php
}
?>