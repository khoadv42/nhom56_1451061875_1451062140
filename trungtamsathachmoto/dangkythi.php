<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ĐĂNG KÝ THI</title>
		<link rel="stylesheet" href="dangkythi.css">
		<script src="jquery-3.2.1.min.js"></script>
	</head>
	<body>
		<div id="wapper">
			<div id="content">
				<h2>trung tâm sát hạch lái xe việt thanh</h2>
				<div id="dangkyForm">
					<p>* bắt buộc</p>
				<form action="localhost:8080/trungatamsathachmoto/dangkythi.php" method="post">
					<label for="">Họ Và Tên</label><br>
					<input type="text" value="" name="txtTen" placeholder="" required><br>
					<label for="">Ngày Sinh</label><br>
					<input type="text" value="" name="txtTen" placeholder="" required><br>
					<label for="">Nơi Đăng Ký Hộ Khẩu Thường Trú</label><br>
					<input type="text" value="" name="txtTen" placeholder="" required><br>
					<label for="">Số CMTND</label><br>
					<input type="text" value="" name="txtTen" placeholder="" required><br>
					<label for="">Điện Thoại Liên Hệ</label><br>
					<input type="text" value="" name="txtTen" placeholder="" required><br>

					<p>Bạn muốn đăng ký thi bằng lái xe loại nào</p>
					<input type="radio" name="option" value="A1"><label for="">A1</label><br>
					<input type="radio" name="option" value=A2><label for="">A2</label><br>
					<input type="radio" name="option" value="B2"><label for="">B2</label><br>
					<input type="radio" name="option" value="Cấp Lại Bằng Lái"><label for="">Cấp Lại Bằng Lái</label><br>
					<input type="radio" name="option" value="Đổi Lại Bằng Lái"><label for="">Đổi Lại Bằng Lái</label><br>
					<input type="radio" name="option" value="Gia Hạn Bằng Lái"><label for="">Gia Hạn Bằng Lái</label><br>
					<input type="submit" value="Gửi" name="send"><br>
				</form>
				<i id="canhbao">Không bao giờ gửi biểu mẫu thông qua Google biểu mẫu</i>
				</div>
				<p id="demo"></p>
			</div>
		</div>
	</body>
</html>