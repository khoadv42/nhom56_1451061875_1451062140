<?php 
	require("config.php");
	$sql="delete from tblhocviendangky where id_dk='".$_GET['id']."'";
	$results=mysqli_query($conn,$sql);
	header('Location:PagePanel.php');
 ?>