<?php
include '../sesi.php';
include '../conn.php';

$matakuliah = $query_besar['jurusan'];
$namadosen = $query_besar['nama'];
$jurusan = $query_besar['jurusan'];
if(isset($_POST['tambah'])){
    date_default_timezone_set("Asia/Jakarta");
    $waktusekarang = date("h:i:s");
    $kode_matkul = $_POST['kode_matkul'];
    $kode_kelas = $_POST['kode_kelas'];
    $jam_masuk = $_POST['jammasuk'];
    $jam_keluar = $_POST['jamkeluar'];
    $hari = $_POST['hari'];
    $jurusan = $query_besar['jurusan'];
    $cekdatasama=mysqli_query($conn,"SELECT * FROM matakuliah WHERE kode_kelas='$kode_kelas' AND kode_matkul='$kode_matkul'");
    if(mysqli_affected_rows($conn)>0){
        echo "<script> alert('Data Sudah Ada Didatabase !');
            document.location.href='tambahmatkul.php';
            </script>";
    }
    else{
    $query2 = "INSERT INTO matakuliah values('$waktusekarang','$kode_matkul','$kode_kelas','$matakuliah','$namadosen','$jam_masuk','$jam_keluar','$hari','0','$jurusan')";
    $test = mysqli_query($conn,$query2);
    }
}


if(mysqli_affected_rows($conn)>0){
    echo "<script> alert('Data Berhasil Ditambahkan !');
            document.location.href='tambahjadwal.php';
            </script>";

}




?>