<?php 

include '../sesi.php';
include '../conn.php';
$kodematkul = $_GET['kodematkul'];
$kodekelas =$_GET['kodekelas'];

$query1 = "UPDATE matakuliah SET active='0' where kode_matkul='$kodematkul' AND kode_kelas='$kodekelas'";
mysqli_query($conn,$query1);

if(mysqli_affected_rows($conn)){
    echo "<script> alert('Absen Berhasil Dihapus!');
                document.location.href='tambahjadwal.php';
                </script>
            
            ";
}
else{
    echo "Gagal Menambahkan";
}




?>