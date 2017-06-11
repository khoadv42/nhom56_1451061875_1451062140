<?php session_start(); 
	if(isset($_SESSION['name'])){
		header("Location: PagePanel.php");
	}
?>
<!DOCTYPE html>
<html lang="">
	<head>
	 
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>
		<link rel="stylesheet" href="login.css">
		<script src="jquery-3.2.1.min.js"></script>
		
	<body>
	<?php 
			if(isset($_POST['submit'])){
				$errors=array();
				$required=array('txtTaiKhoan','pword');
				foreach($required as $fieldname){
					if(!isset($_POST[$fieldname])||empty($_POST[$fieldname])){
						$errors[]="The <strong>{$fieldname}</strong>errors" ;
					}
				}// End foreach

				if(empty($errors)){
					$conn=mysqli_connect('localhost','root','','dbtrungtamsathachlaixemoto')or die ('không thể kết nối vào database');
					$email=mysqli_real_escape_string($conn,$_POST['txtTaiKhoan']);
					$pword=mysqli_real_escape_string($conn,$_POST['pword']);
					$hash_pw=sha1($pword);
					$query="select fullName as name from tblusers where email='{$email}' and pword='{$hash_pw}' limit 1";
					mysqli_set_charset($conn,'utf8');
					$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
					if(mysqli_num_rows($result)==1){
						while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
							$_SESSION['name']=$row['name'];
							header('Location: PagePanel.php');
						}
					}
					else{
						$errors[]="Mật khẩu tài khoản chưa đúng";
					}
				}
			} // End: if(isset($_POST['submit']))

	 ?>
		<div id="wapper">
				<?php 
					if(!empty($errors)){
						echo "<ul>";
						foreach($errors as $error){
							echo "<li>$error</li>";
						}
						echo "<ul>";
					}
				?>
			<div id="loginForm">
				<form action="" method="post">
				<label for="UserName"><img src="img/account.png" alt="ảnh die"> Acount</label>
				<input type="text" name="txtTaiKhoan" value="" required><br>
				<label for="pword"><img src="img/key.png" alt="ảnh die">Key</label><br>
				<input type="password" name="pword" value="" required><br>
				<input type="submit" name="submit" value="Gửi"><br>
				<input type="checkbox" name="check" id="check"><label for="remember">Nhớ Mật Khẩu</label>
			</form>
			</div>
		</div>
	</body>
</html>
