<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Page Panel </title>
		<link rel="stylesheet" href="PagePanel.css">
		<script src="jquery-3.2.1.min.js"></script>
		<script src="PagePanel.js"></script>
	</head>
	<body background="img/hinhanhcaioto.jpg">
		
		<div id="wapper">
			<div id="header">

						<ul>
							<li>
								<h4>TRANG QUẢN TRỊ</h4>
				 			Xin Chào <?php include 'config.php';?>
							<?php if(isset($_SESSION['name'])){
							echo $_SESSION['name'];
							} 
							else
							{
								header("Location:login.php");
							}
							?>

							</li>
							<li>
								<a href="index.php">Xem Web</a>
							</li>
							<!-- <li>
								<a href="#">Trợ Giúp</a>
							</li> -->

						</ul>
			</div>
			<div id="rightPanel">
			<?php $resultphanquyen=getPerMission($conn,$_SESSION['name']); while($permission=mysqli_fetch_array($resultphanquyen,MYSQLI_ASSOC)){
						$kiemtra=$permission['permission'];
						} ?>
				<ul>
					<li id="1"><a href="#">Thí Sinh Đăng Ký</a></li>
					<li id="2"><a href="#">Trang Giới Thiệu</a></li>
					<li id="6"><a href="#">Trang Trang Chủ</a></li>
					<li id="7"><a href="#">Hỏi Đáp</a></li>
					<!-- <li id="3"><a href="#">Lịch Thi</a></li> -->
					<li id="4"  <?php if($kiemtra==2){echo "style='display:none'";} ?> ><a href="#">Nhân Viên</a></li>
					<li id="5" <?php if($kiemtra==2){echo "style='display:none'";} ?>><a href="#">Quản Lý Tài Khoản</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
			<div id="content">
				<div id="ThiSinh">
					<table>
						<tr>
							<th>Họ Tên</th>
							<th>Ngày Sinh</th>
							<th>Số CMTND</th>
							<th>Số Điện Thoại</th>
							<th>Thi Bằng Lái Xe Loại</th>
							<th>Ngày Thi</th>
						</tr>
						<?php getDangKyThi($conn)?>
					</table>
				</div>
				<div id="GioiThieu">
					<form action="" method="post">
						<label for="tiêu đề">Tiêu Đề Giới Thiệu</label><br>
						<input type="text" name="txtTieuDeGioiThieu"><br>
						<label for="">Bài Viết</label><br>
						<textarea name="txtBaiViet" id="baiViet" cols="30" rows="26" placeholder="để cho ký tự xuống dòng bạn nhập thêm '<br>' thay cho phím enter"></textarea>
						<input type="submit" name="btnLuuBaiViet" value="Lưu"><br>
					</form>
					<?php 
						if(isset($_POST['btnLuuBaiViet'])){
							$sql="update tblgioithieu set tieude='".$_POST['txtTieuDeGioiThieu']."',noidung='".$_POST['txtBaiViet']."' where trang='Giới Thiệu'";
							$resulgioithieu=mysqli_query($conn,$sql);
						}
					 ?>
				</div>
				<div id="LichThi">
					<form action="" method="post">
						<label for="">Đợt Thi</label><br>
						<input type="text" ><br>
						<label for="">Ngày Thi</label><br>
						<input type="date" name="txtNgayThi">
					</form>
					<table>
						<tr>
							<th>STT</th>
							<th>Đợt Thi</th>
							<th>Ngày Thi</th>
						</tr>
					</table>
				</div>
				<div id="NhanVien">
				<a href="themnv.php">Thêm Nhân Viên</a>
				<form action="" method="post">
					<table>
						<tr>
							<th>Tên Nhân Viên</th>
							<th>Số CMTND</th>
							<th>Số Điện Thoại</th>
							<th>Địa Chỉ</th>
							<th>Tên Đăng Nhập</th>
							<th>Mật Khẩu</th>	
						</tr>
						<?php 
								$sql="select * from tblnhanvien";
	 $resultNhanVien=mysqli_query($conn,$sql);
	 while($rowNhanVien=mysqli_fetch_array($resultNhanVien,MYSQLI_ASSOC)){
	 	echo "<tr>";
		echo "<td> ".$rowNhanVien['tennv']."</td>";
		echo "<td>".$rowNhanVien['cmtnd']." </td>";				
		echo "<td>".$rowNhanVien['sdt_nv']."</td>";
		echo "<td> ".$rowNhanVien['diachi_nv']."</td>";
		echo "<td> ".$rowNhanVien['tendangnhap']."</td>";
		echo "<td>".$rowNhanVien['matkhau']."</td>";
		echo "<td><a href='xoaNV.php?id=".$rowNhanVien['id_nv']."'>Xóa</a></td>";					
		echo "</tr>";
		}	
						 ?>
					</table>
				</form>
					
				</div>
				<div id="HoiDap">
					<form action="" method="post">
						<label for="tiêu đề">Tiêu Đề</label><br>
						<input type="text" name="txtTieuDeHoiDap"><br>
						<label for="">Bài Viết</label><br>
						<textarea name="txtHoiDap" id="hoidap" cols="30" rows="26" placeholder="để cho ký tự xuống dòng bạn nhập thêm '<br>' thay cho phím enter"></textarea>
						<input type="submit" name="btnThongTinHoTro" value="Lưu"><br>
					</form>
					<?php 
						if(isset($_POST['btnThongTinHoTro'])){
							$sql="update tblgioithieu set tieude='".$_POST['txtTieuDeHoiDap']."',noidung='".$_POST['txtHoiDap']."' where trang='Hỏi Đáp'";
							$resulhoidap=mysqli_query($conn,$sql);
						}
					 ?>
				</div>
				<div id="TaiKhoan">
					<a href="themtaikhoan.php">Thêm Tài Khoản Admin</a>
				<form action="" method="post">
					<table>
						<tr>
							<th>Họ Tên</th>
							<th>Số Điện Thoại</th>
							<th>Tên Đăng Nhập</th>
							<th>Mật Khẩu</th>	
						</tr>
						<?php 
							$sqlTaiKhoan="select * from tblusers";
							$resultaikhoan=mysqli_query($conn,$sqlTaiKhoan);
							while($row=mysqli_fetch_array($resultaikhoan,MYSQLI_ASSOC)){
								echo "<tr>";
								echo "<td>".$row['fullName']."</td>";
								echo "<td>".$row['numberPhone']."</td>";
								echo "<td>".$row['email']."</td>";
								echo "<td>".$row['pword']."</td>";
							}
						 ?>

					</table>
				</form>
					
				</div>
				<div id="TrangChu">
					<form action="" method="post">
						<label for="tiêu đề">Tiêu Đề Trang Chủ</label><br>
						<input type="text" name="txtTieuDeTrangChu"><br>
						<label for="">Bài Viết</label><br>
						<textarea name="txtBaiVietTrangChu" id="baiVietTrangChu" cols="30" rows="26" placeholder="để cho ký tự xuống dòng bạn nhập thêm '<br>' thay cho phím enter"></textarea>
						<input type="submit" name="btnLuuBaiVietTrangChu" value="Lưu"><br>
					</form>
					<?php 
						if(isset($_POST['btnLuuBaiVietTrangChu'])){
							$sql="update tblgioithieu set tieude='".$_POST['txtTieuDeTrangChu']."',noidung='".$_POST['txtBaiVietTrangChu']."' where trang='Trang Chủ'";
							$resulgioithieu=mysqli_query($conn,$sql);
						}
					 ?>
				</div>
			</div> <!-- end-content -->
			<div id="footer">
				&copy; khoadv42@wru.vn
			</div>
		</div> <!-- end-wapper -->
	</body>
</html>