<?php 
include ("koneksi.php");
mysqli_query($konek, "INSERT INTO `price` (`id`, `nama_sayur`, `harga`, `tanggal`) VALUES (NULL, 'Tomat', '".$_GET['Tomat']."',CURRENT_TIMESTAMP), (NULL, 'Mentimun', '".$_GET['Mentimun']."',CURRENT_TIMESTAMP), (NULL, 'Wortel', '".$_GET['Wortel']."',CURRENT_TIMESTAMP), (NULL, 'Terung', '".$_GET['Terung']."',CURRENT_TIMESTAMP), (NULL, 'Kubis', '".$_GET['Kubis']."',CURRENT_TIMESTAMP), (NULL, 'Kentang', '".$_GET['Kentang']."',CURRENT_TIMESTAMP)");
header('Location: http://127.0.0.1/Sayur/?status=ok');
?>
