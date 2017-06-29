<?php 
include 'config.php';
$sql="delete tblnhanvien where id_nv=".$_GET['id'];
echo $sql;
$resul=mysqli_query($conn,$sql);
if($resul>0){
	echo "xóa Thành công";
}else echo "xóa thất bại";
 ?>
