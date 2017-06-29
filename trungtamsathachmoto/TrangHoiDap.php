<?php include 'header.php'; ?>
<?php include 'config.php'; ?>
<div id="content">
<?php 
	$sql="select * from tblgioithieu where trang='Hỏi Đáp'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
 ?>
		<div id="content_hoidap">
			<p id="title_hoidap"><!-- Mọi Thắc Mắc Của Các Bạn -->
				
				<?php echo $row['tieude']; ?>
			</p>
			<div id="khunganhminhhoa">
				<!-- Gọi Tới Số 0982204131 Để được tư vấn của chúng tôi . -->
				<?php echo $row['noidung']; ?>
			</div>
		</div>
		

</div> <!-- end_content -->
<?php include 'footer.php' ?>
