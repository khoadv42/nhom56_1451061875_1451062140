<?php 
	
// 1. tim SESSION
 session_start();

// huy tat ca cac bien cua session
 $_SESSION=array();

// bo tat ca cac cookies
 if(isset($_COOKIE[session_name()])){
 	setcookie(session_name(),time()-36000,'/',0,0);
 }

// hủy toàn bộ session
 session_destroy();

// chuyen ve trang login
header("Location: login.php");
 ?>