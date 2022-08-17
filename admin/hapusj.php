<?php
include '../sesi.php';
include '../conn.php';

$query2 = "SELECT * FROM akun where npm='$npm'";


if(isset($_POST['hapus'])){
    $kode_kelas = $_POST['namamatkul'];
    $query1 = "DELETE FROM matakuliah where kode_kelas='$kode_kelas'";
    $datamatakuliah = mysqli_query($conn, $query1);
    if(mysqli_affected_rows($conn)){
        echo "<script> alert('Jadwal Berhasil Dihapus !');
            document.location.href='tambahjadwal.php';
            </script>
            
        ";
    }
    else{
            echo "Gagal Menambahkan";
    } 
    }
else{
    echo "<script> alert('Gagal Menghapus Jadwal !');
            document.location.href='hapusjadwal.php';
            </script>
        
    ";
}

    



?>