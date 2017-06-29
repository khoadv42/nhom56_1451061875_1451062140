<?php include 'header.php'; ?>
<?php include 'config.php'; ?>
<div id="content">
						<p class="tieude">click vào để download lịch thi</p>
						<div class="thongbao">
						 	
						 	<?php $result=getLichThi($conn);
						 	echo "<ul>";
						 		while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
						 		{
						 			echo "<li><a href='exportlichthi.php?ngaythi=".$row['ngaythi']."'>".$row['ngaythi']."</a></li>";
						 		}
						 			echo "</ul>";
						 	 ?>
						 	</div> <!-- end_content -->
<?php include 'footer.php' ?>
