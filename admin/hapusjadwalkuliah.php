<?php 

include '../sesi.php';
include '../conn.php';
$kodekelas = $_GET['kodekelas'];

$namadosen = $query_besar['nama'];

$query1 = "DELETE FROM matakuliah WHERE kode_kelas='$kodekelas' AND nama_dosen='$namadosen'";
mysqli_query($conn,$query1);

if(mysqli_affected_rows($conn)){
    echo "<script> alert('Jadwal Berhasil Dihapus !');document.location.href='jadwalkuliah.php';</script>";
}
else{
    echo "Gagal Menambahkan";
}




?>