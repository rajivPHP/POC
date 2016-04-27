<?php
echo phpinfo();
		if (isset($_FILES['filename']['tmp_name'])) {
		$filename=$_FILES['filename']['name'];
		exec("mkdir uploads",$output,$val);
		$directory=date('Ymd');
		exec("cd uploads/ && mkdir $directory",$output,$val);
		$source=$_FILES['filename']['tmp_name'];
		$destination="public_html/POC/fileupload/uploads/".date('Ymd')."/".$filename;
		echo $destination;
		if(move_uploaded_file($source, $destination)) {
			echo "Success Files Moved";
			return true;
		}
		else{
			echo "Not Moved";
			return false;
		}
?>
<img src="<?php echo 'uploads/' . date('Ymd') . '/' . $filename; ?>">
<?php
}
?>