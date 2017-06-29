<?php 
include 'config.php';
if(isset($_POST['send'])){
		if(!empty(trim($_POST['txtHoTen'],' '))&&!empty(trim($_POST['txtNgaySinh'],' '))&&!empty(trim($_POST['txtDiaChi'],' '))&&!empty(trim($_POST['txtCmtnd'],' '))&&!empty(trim($_POST['txtSDT'],' '))&&!empty(trim($_POST['option'],' '))&&(strlen($_POST['txtSDT'])==9||strlen($_POST['txtSDT'])==12) &&(strlen($_POST['txtCmtnd'])==11||strlen($_POST['txtCmtnd'])==9)){
		$sqlInsert="insert into tblhocviendangky values('','".trim($_POST['txtHoTen'],' ')."','".trim($_POST['txtNgaySinh'],' ')."','".trim($_POST['txtDiaChi'],' ')."','".trim($_POST['txtCmtnd'],' ')."','".trim($_POST['txtSDT'],' ')."','".trim($_POST['option'],' ')."','')";

		$results=mysqli_query($conn,$sqlInsert);
		if($results>0){
			echo "Đăng Ký Thành Công";

		}else echo "Đăng Ký Thất Bại";
	}else{
		echo "nhập sai, số điện thoại ,hoặc chứng minh thư có 2 loại 9 số và 12 số,Số điện thoại có hai loại là";
	}
}
$sqlInsert="insert into tblhocviendangky values('','hoten','ngaysinh','diachi',cmtnd,'sdt','theloaithi')";
?>