<?php 

$conn=mysqli_connect('localhost','root','','dbtrungtamsathachlaixemoto')or die(' không thể kết nối server');
mysqli_set_charset($conn,'utf8');
if(isset($conn)){
	
}

function getDanhSachThiSinh($conn){
	$sql="select * from tblusers";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	
	echo $row['fullName'];
}



 ?>
