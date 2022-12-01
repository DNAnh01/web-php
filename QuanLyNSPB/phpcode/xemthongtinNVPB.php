<?php
// lấy mã phòng ban IDPB từ trang xemthongtinPB.php
$ma_phongban = $_REQUEST['IDPB'];
// khai báo kết nối
$link = mysqli_connect('localhost','donguyenanh','10042001') or die ('Khong the ket noi CSDL MySQL');
// lựa chọn cơ sở dữ liệu
mysqli_select_db($link, 'DULIEU');

if ($ma_phongban=="") {
    $result = mysqli_query($link, "SELECT * FROM NHANVIEN");
} else {
    $result = mysqli_query($link, "SELECT * FROM NHANVIEN WHERE IDPB = '$ma_phongban'");
}
echo '<table border="1" width="100%">';
echo '<caption>Du lieu bang Nhan vien</caption>';
// tiêu đề các bảng chứa dữ liệu khi hiển thị lên web
echo '<TR><TH>IDNV</TH><TH>Ho ten</TH><TH>IDPB</TH><TH>Dia chi</TH></TR>';
// hiển thị từng hàng
while ($row = mysqli_fetch_array($result)) {
    echo '<TR><TD>'.$row['IDNV'].'</TD><TD>'.$row['Hoten'].'</TD><TD>'.$row['IDPB'].'</TD><TD>'.$row['Diachi'].'</TD></TR>';
}
echo '</table>';
mysqli_free_result($result);
mysqli_close($link);
?>