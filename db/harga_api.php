<?php 
include ("koneksi.php");
$sql = "SELECT `nama_sayur`, `harga`, `tanggal` FROM `price` ORDER BY `tanggal` DESC LIMIT 6";
$db = mysqli_query($konek,$sql);
$result = array();
while($row =mysqli_fetch_assoc($db))
{
    $result[] = $row;
}
echo json_encode($result);
mysqli_close($konek);
?>