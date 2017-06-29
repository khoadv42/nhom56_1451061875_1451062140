<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm Tài Khoản Đăng Nhập</title>
	<style>
		input{font-size: 1.2em;}
	</style>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="txthoten" placeholder="Họ Và Tên"><br>
		<input type="number" name="txtSDT" placeholder="Số Điện Thoại"><br>
		<input type="text" name="txtTenDangNhap" placeholder="Tên Đăng Nhập"><br>
		<input type="text" name="txtMatKhau" placeholder="Mật Khẩu"><br>
		<input type="submit" name="btnok" value="Lưu">
	</form>
<?php 
	include 'config.php';
	if(isset($_POST['btnok'])){
		$sql2="insert into tblusers value('','".trim($_POST['txthoten'],' ')."','".$_POST['txtSDT']."','','".trim($_POST['txtTenDangNhap'],' ')."','".trim($_POST['txtMatKhau'],' ')."','1')";
	$resul=mysqli_query($conn,$sql2);
	if($resul>0){
		header('Location: PagePanel.php');
	}else{
		echo "tên đăng nhập bị trùng";
	}
	}
 ?>
</body>
</html>