<?php
include('conn.php');
     session_start();
    if(!isset($_SESSION['npm']) || (trim($_SESSION['npm']) == '')){
       header('location: login.php');
       exit();
    }
    $npm = $_SESSION['npm'];

    $akun =mysqli_query($conn,"SELECT * FROM akun  WHERE npm='$npm'");
    $query_besar = mysqli_fetch_assoc($akun);

    $datamatakuliah = mysqli_query($conn, "SELECT * FROM matakuliah");
    $datakodematkul = mysqli_query($conn, "SELECT * FROM daftarkelas");
    $query_matakuliah = mysqli_fetch_assoc($datamatakuliah);

    $harisekarang = date("l");
if($harisekarang == "Sunday"){
    $harisekarang = "Minggu";
}
else if($harisekarang =="Monday"){
    $harisekarang = "Senin";
}
else if($harisekarang =="Tuesday"){
    $harisekarang ="Selasa";
}
else if($harisekarang == "Wednesday"){
    $harisekarang ="Rabu";
}
else if ($harisekarang =="Thursday"){
    $harisekarang ="Kamis";
}
else if ($harisekarang=="Friday"){
    $harisekarang ="Jumat";
}
else if ($harisekarang =="Saturday"){
    $harisekarang ="Sabtu";
}
    
?>