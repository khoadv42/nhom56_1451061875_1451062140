<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm Nhân Viên</title>
	<style>
		input{margin:3px;font-size: 1.2em;}
	</style>
</head>
<body>
<?php include 'config.php';?>
	<form action="" method="post">
		<input type="text" name="txtTen" placeholder="Họ Tên Nhân Viên"><br>
		<input type="number" name="txtcmtnd" placeholder="Số CMTND"><br>
		<input type="number" name="txtsdt" placeholder="Số Điện Thoại"><br>
		<input type="text" name="txtDiaChi" placeholder="Địa Chỉ"><br>
		<input type="text" name="txtTenDangNhap" placeholder="Tên Đăng Nhập"><br>
		<input type="text" name="txtMatKhau" placeholder="Mật Khẩu"><br>
		<input type="submit" name="btnok" value="Lưu">
	</form>
	<?php 
		if(isset($_POST['btnok'])){
			if(!empty(trim($_POST['txtTen'],' '))&&!empty(trim($_POST['txtTenDangNhap'],' '))&&!empty($_POST['txtcmtnd'])){
				$sql="insert into tblnhanvien values('','".trim($_POST['txtTen'],' ')."','".$_POST['txtcmtnd']."','".$_POST['txtsdt']."','".trim($_POST['txtDiaChi'],' ')."','".trim($_POST['txtTenDangNhap'],' ')."','".trim($_POST['txtMatKhau'],' ')."')";
				$result1=mysqli_query($conn,$sql);

				$sql2="insert into tblusers value('','".trim($_POST['txtTen'],' ')."','".$_POST['txtsdt']."','','".trim($_POST['txtTenDangNhap'],' ')."','".trim($_POST['txtMatKhau'],' ')."','2')";

				$result2=mysqli_query($conn,$sql2);
			}
		}
	 ?>
</body>
</html>