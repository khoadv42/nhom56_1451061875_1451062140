<form action="" method="post">
	Nhập Ngày :<input type='date' name='txtNgayThi'>
	<input type='submit' value='Lưu' name='btnok'>
</form>
<?php 
include 'config.php';
if(isset($_POST['btnok'])){
	if(isset($_POST['txtNgayThi']))
	{
			$sql="update tblhocviendangky set ngaythi='".$_POST['txtNgayThi']."' where id_dk='".$_GET['id']."'";
		$result =mysqli_query($conn,$sql);
			if($result>0){
				header('Location: PagePanel.php');
			}else{
				echo "Phải Tạo Ngày Này Trong Lịch Thi. Thao Tác Thất Bại";
	}
	}

}
?>
	

