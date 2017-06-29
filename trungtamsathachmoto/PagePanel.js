$(document).ready(function(){
	$("#content div").hide();
	$("#1").click(function() {
		$("#content div").show();
		$("#ThiSinh").siblings().hide();
	});
	$("#2").click(function() {
		$("#content div").show();
		$("#GioiThieu").siblings().hide();
	});
	$("#3").click(function() {
		$("#content div").show();
		$("#LichThi").siblings().hide();
	});
	$("#4").click(function() {
		$("#content div").show();
		$("#NhanVien").siblings().hide();
	});
	$("#5").click(function() {
		$("#content div").show();
		$("#TaiKhoan").siblings().hide();
	});
	$("#6").click(function() {
		$("#content div").show();
		$("#TrangChu").siblings().hide();
	});
	$("#7").click(function() {
		$("#content div").show();
		$("#HoiDap").siblings().hide();
	});
});