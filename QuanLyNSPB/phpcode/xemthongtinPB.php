<?php
// khai báo kết nối
$link = mysqli_connect('localhost','donguyenanh','10042001') or die ('Khong the ket noi CSDL MySQL');
// lựa chọn cơ sở dữ liệu
mysqli_select_db($link, 'DULIEU');
$sql_query = "SELECT * FROM PHONGBAN";
$result = mysqli_query($link,$sql_query);
echo '<table border="1" width="100%">';
echo '<caption>Du lieu bang Phong ban</caption>';
// tiêu đề các bảng chứa dữ liệu khi hiển thị lên web
echo '<TR><TH>Ma phong ban</TH><TH>Ten phong ban</TH><TH>Mo ta</TH><TH>Xem nhan vien</TH></TR>';
// hiển thị từng hàng
while ($row = mysqli_fetch_array($result)) {
    echo '<TR><TD>'.$row['IDPB'].'</TD><TD>'.$row['Tenpb'].'</TD><TD>'.$row['Mota'].'</TD><TD
    align="center"><a href="xemthongtinNVPB.php?IDPB='.$row['IDPB'].'">xxx</a></TD></TR>';
}
echo '</table>';
mysqli_free_result($result);
mysqli_close($link);
?>