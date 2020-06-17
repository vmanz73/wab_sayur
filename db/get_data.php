<?php
function data($val){
    include ("koneksi.php");
    $db = mysqli_query($konek, "SELECT * FROM `price` WHERE `nama_sayur` = '".$val."' ORDER BY `tanggal` DESC");
    if ($data = mysqli_fetch_array($db) ){
        
        return $data['harga'];
    }
    else {
        return '0';
    }
    mysqli_close($konek);
    
}
?>