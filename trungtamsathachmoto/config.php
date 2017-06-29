<?php 

$conn=mysqli_connect('localhost','root','','dbtrungtamsathachlaixemoto')or die(' không thể kết nối server');
mysqli_set_charset($conn,'utf8');
if(isset($conn)){
	
}
function getPerMission($conn,$temp){
	$sql="select permission from tblusers where fullName='".$temp."' ";
	return mysqli_query($conn,$sql);
}
function getDanhSachThiSinh($conn){
	$sql="select * from tblusers";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	
	echo  "<h1>".$row['fullName']."</h1>";
}
 
 function getDangKyThi($conn){
 	$sql="select * from tblhocviendangky";
	$result=mysqli_query($conn,$sql);
	
	while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
		echo "<tr>";
			echo "<td>".$row['hoten']."</td>
			<td>".$row['ngaysinh']."</td>
			<td>".$row['cmtnd']."</td>
			<td>".$row['sdt']."</td>
			<td>".$row['theloaithi']."</td>
			<td><input type='text' value='".$row['ngaythi']."'><a href='updateNgayThi.php?id=".$row['id_dk']."'>Sửa</a></td>
			<td><a href='xoadangky.php?id=".$row['id_dk']."'>Xóa</a><td>";
		echo "</tr>";
	}
	
	
 }
function getLichThi($conn){
	$sql="select ngaythi from tblhocviendangky group by ngaythi order by ngaythi desc";
	return mysqli_query($conn,$sql);
}

function lichthi($conn,$temp){
	$sql="select * from tblhocviendangky where ngaythi='".$temp."' order by ngaythi desc";
	return mysqli_query($conn,$sql);

}

// function getNhanVien($conn){
// 	$sql="select * from tblnhanvien";
// 	 $resultNhanVien=mysqli_query($conn,$sql);
// 	 while($rowNhanVien=mysqli_fetch_array($resultNhanVien,MYSQLI_ASSOC)){
// 	 	echo "<tr>";
// 		echo "<td> ".$rowNhanVien['tennv']."</td>";
// 		echo "<td>".$rowNhanVien['cmtnd']." </td>";				
// 		echo "<td>".$rowNhanVien['sdt_nv']."</td>";
// 		echo "<td> ".$rowNhanVien['diachi_nv']."</td>";
// 		echo "<td> ".$rowNhanVien['tendangnhap']."</td>";
// 		echo "<td>".$rowNhanVien['matkhau']."</td>";
// 		echo "<td><a href='xoaNV.php?id=".$rowNhanVien['id_nv']."'>Xóa</a></td>";					
// 		echo "</tr>";
// 		}	
?>
