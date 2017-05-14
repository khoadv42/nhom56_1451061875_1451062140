<!DOCTYPE html>
<html lang="">
	<head>
	 	<!-- Required meta tags always come first --
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
	</head>
	<body>
		<?php
			$link=mysqli_connect('localhost','root','','music');
			if(!$link){
				die('ko the ket noi cac tham so');
			}else{
				//echo "ban da ket noi thanh cong";
				$sql="select * from tacgia";
				mysqli_set_charset($link,'UTF8');
				$result=mysqli_query($link,$sql);// truy van du lieu
				echo "<ul>";
				while($row=mysqli_fetch_assoc($result))
					{
						echo "<li>${row['ten_tgia']}</li>";
					}
				echo	"</ul>";
				while($row=mysqli_fetch_array($result))
				{
					print_r($row);
					echo "<br/>";
				}

			mysqli_close($link);
			}
		?>

		<h1 class="text-xs-center">Hello World</h1>
		
		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
	</body>
</html>