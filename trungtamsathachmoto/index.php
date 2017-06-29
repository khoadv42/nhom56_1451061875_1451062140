<?php include 'header.php'; ?>
<?php include 'config.php'; ?>
<div id="content">
<?php 
	$sql="select * from tblgioithieu where trang='Trang Chủ'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
 ?>						<p class="tieude">giới thiệu trung tâm</p>
						<p class="title_content"><!-- TRUNG TÂM DỊCH VỤ ĐÀO TẠO THI SÁT HẠCH LÁI XE -->
							<?php echo $row['tieude']; ?>
						</p>
						<div class="thongbao">
							<!-- Bạn chưa có bằng lái xe máy, bạn đang cần tìm đến một trung tâm đào tạo và thi sát hạch cấp giấy phép lái xe tại khu vực Hà Nội, bạn muốn thi bằng lái xe cấp tốc để được lấy bằng trong thời gian sớm nhất, với mức chi phí ưu đãi và đảm bảo uy tín - chất lượng.
    Quý khách có thể yên tâm và hài lòng khi đến với chúng tôi, Hoạt động chủ yếu ở khu vực trung tâm thành phố Hà Nội và các khu vực lân cận, tiếp nhận hồ sơ thi sát hạch lái xe chủ yếu tại các trường Đại Học, Cao Đẳng và TCCN. Chúng tôi chuyên về dịch vụ đào tạo thi sát hạch lái xe môtô hạng A1, đào tạo chuyên nghiệp và uy tín nhất Hà Nội. Ngoài ra chúng tôi đang mở rộng thêm dịch vụ đào tạo thi sát hạch lái xe môtô hạng A2 (xe môtô phân khối lớn) và đào tạo lái xe ôtô hạng B1, B2, C. Dịch vụ đổi bằng, gia hạn bằng và cấp lại bằng lái xe.
     Chúng tôi luôn nỗ lực, cố gắng để phục vụ quý khách theo tiêu chí:

Ø Đảm bảo uy tín và chất lượng luôn đặt lên hàng đầu

Ø Thủ tục hồ sơ đơn giản và nhanh gọn

Ø Giá cả ưu đãi và tiết kiệm chi phí tối đa

Ø Đào tạo theo một quy trình đạt hiệu quả cao

Ø Luôn đáp ứng mọi nhu cầu của khách hàng  -->
							<?php echo $row['noidung']; ?>
						</div> <!--  end_thongba0 -->
						<br>
						<iframe width="600" height="450" src="https://www.youtube.com/embed/PXwVbtxh8P4" frameborder="0" allowfullscreen></iframe>
						</div> <!-- end_content -->
<?php include 'footer.php' ?>
