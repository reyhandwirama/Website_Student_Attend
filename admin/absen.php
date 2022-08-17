<?php
include '../sesi.php';
include '../conn.php';

$query2 = "SELECT * FROM akun where npm='$npm'";

if(isset($_POST['tambah'])){
    $kode_matkul = $_POST['namamatkul'];
    $query1 = "SELECT * FROM matakuliah where kode_matkul='$kode_matkul'";
    $datamatakuliah = mysqli_query($conn, $query1);
    $daftarmatakuliah = mysqli_fetch_assoc($datamatakuliah);
    $telahditambahkan = "Data Telah Aktif!";
    if($daftarmatakuliah['active']=='0'){
        date_default_timezone_set("Asia/Jakarta");
        $waktusekarang = date("h:i:s");
        $query3 = "UPDATE matakuliah SET active='1'WHERE kode_matkul='$kode_matkul'";
        $query4 = "UPDATE matakuliah SET jam='$waktusekarang'WHERE kode_matkul='$kode_matkul'";
        $matakuliah = $daftarmatakuliah['nama_matkul'];
        $tambahabsen = mysqli_query($conn,$query3);
        $tambahwaktu = mysqli_query($conn,$query4);
        
        if(mysqli_affected_rows($conn)){
            echo "<script> alert('Absen Berhasil Ditambahkan !');
                document.location.href='tambahjadwal.php';
                </script>
            
            ";
        }
        else{
            echo "Gagal Menambahkan";
        } 
    }
    else{
        echo "<script> alert('Absen Sudah Aktif !');
            document.location.href='tambahabsen.php';
            </script>
        
        ";
    }

    
}



?>