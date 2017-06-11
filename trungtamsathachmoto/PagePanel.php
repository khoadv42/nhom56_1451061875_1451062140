<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Page Panel</title>
		<link rel="stylesheet" href="PagePanel.css">
		<script src="jquery-3.2.1.min.js"></script>
		<script src="PagePanel.js"></script>
	</head>
	<body>
		
		<div id="wapper">
			<div id="header">

						<ul>
							<li>
								<h4>Admin Control Panel </h4>
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
								xem Web
							</li>
							<li>
								Trợ Giúp
							</li>

						</ul>
			</div>
			<div id="rightPanel">
				<ul>
					<li id="1"><a href="#">Thí Sinh Đăng Ký</a></li>
					<li id="2"><a href="#">Trang Giới Thiệu</a></li>
					<li id="6"><a href="#">Trang Giới Thiệu</a></li>
					<li id="3"><a href="#">Lịch Thi</a></li>
					<li id="4"><a href="#">Nhân Viên</a></li>
					<li id="5"><a href="#">Quản Lý Tài Khoản</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
			<div id="content">
				<div id="ThiSinh">
					<table>
						<tr>
							<th>Họ Tên</th>
							<th>Giới Tính</th>
							<th>Ngày Sinh</th>
							<th>Số CMTND</th>
							<th>Số Điện Thoại</th>
							<th>Thi Băng Lái Xe Loại</th>
							<th>Sửa</th>
							<th class="delete" ><a href="#">Xóa</a></th>
						</tr>
						<tr>
							<td><?php echo $_SESSION['name'] ?></td>
						</tr>
					</table>
				</div>
				<div id="GioiThieu">
					<form action="" method="post">
						<label for="tiêu đề">Tiêu Đề Giới Thiệu</label><br>
						<input type="text" name="txtTieuDeGioiThieu"><br>
						<label for="">Bài Viết</label><br>
						<textarea name="txtBaiViet" id="baiViet" cols="30" rows="26"></textarea>
						<input type="submit" name="btnLuuBaiViet" value="Lưu"><br>
					</form>
				</div>
				<div id="LichThi">
					c
				</div>
				<div id="NhanVien">
					d
				</div>
				<div id="TaiKhoan">
					e
				</div>
				<div id="TrangChu">
					<form action="" method="post">
						<label for="tiêu đề">Tiêu Đề Trang Chủ</label><br>
						<input type="text" name="txtTieuDeTrangChu"><br>
						<label for="">Bài Viết</label><br>
						<textarea name="txtBaiVietTrangChu" id="baiVietTrangChu" cols="30" rows="26"></textarea>
						<input type="submit" name="btnLuuBaiVietTrangChu" value="Lưu"><br>
					</form>
				</div>
			</div> <!-- end-content -->
			<div id="footer">
				&copy; khoadv42@wru.vn
			</div>
		</div> <!-- end-wapper -->
	</body>
</html>