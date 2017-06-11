<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="img"/>
	<input type="submit" name="submit" value="ok">
</form>
<?php 
	if(isset($_POST['submit'])){
		$fileInfo=$_FILES['img'];
		//echo "<pre>";
		if($fileInfo=='')
			echo "ban nen chon file";
		move_uploaded_file($fileInfo['tmp_name'], "uploads/".$fileInfo['name']);
	}

	$url='uploads/'.$fileInfo['name'];
	if(!empty($url)){
		echo "<img src=$url  alt=''>";
	}
 ?>
 