<?php include 'header.php'; ?>
<?php include 'config.php'; ?>
<?php 
	$sql="select * from tblgioithieu where trang='Giới Thiệu'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
 ?>
<div id="content">
						<p class="tieude">giới thiệu trung tâm</p>
						<!-- <p class="title_content">TRUNG TÂM DỊCH VỤ ĐÀO TẠO THI SÁT HẠCH LÁI XE</p> -->
						<?php 
						echo "<p class='title_content'>";
						echo $row['tieude'];
						echo "</p>";

						 ?>
						<div class="thongbao">
						 	<!-- Nội Dung Giới Thiệu Về Trung Tâm ---Giới thiệu về thông tin trung tâm -->
						 	<?php echo $row['noidung']; ?> 		
						
						</div> <!-- end_content -->
<?php include 'footer.php' ?>
