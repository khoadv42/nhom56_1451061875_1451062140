<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=data.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<?php
include 'config.php';
$result=lichthi($conn,$_GET['ngaythi']);
$dem=1;
?>
<meta charset="utf-8" />
<table>
    <thead>
    <?php echo "Danh Sách Lịch Thi  Đợt Ngày '".$_GET['ngaythi']."'" ?>
        <tr>
            <td>STT</td>
            <td>Họ Tên</td>
            <td>Ngày Sinh</td>
            <td>Số điện thoại</td>
            <td>Địa Chỉ</td>
            <td>thể Loại Thi</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $row):?>
        <tr>
            <td><?php echo $dem++ ?></td>
            <td><?php echo $row['hoten'] ;?></td>
            <td><?php echo $row['ngaysinh'];?></td>
            <td><?php echo $row['sdt']; ?></td>
            <td><?php echo $row['diachi']; ?></td>
            <td><?php echo $row['theloaithi'];?></td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>   