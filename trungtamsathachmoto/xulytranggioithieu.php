<?php 
	if(isset($_POST['btnLuuBaiViet'])){
		$sql="update tblgioithieu set tieude='".$_POST['txtTieuDeGioiThieu']."',noidung='".$_POST['txtBaiViet']."' where 1=1";
		$resul=mysqli_query($conn,$sql);
	}
 ?>
