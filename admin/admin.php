<?php 

include('../sesi.php');

$nama_dosen = $query_besar['nama'];
$kode_kelas = $query_besar['kode_kelas'];
$query1 = "SELECT * FROM matakuliah where nama_dosen='$nama_dosen' AND hari='$harisekarang'";
$resultquery1= mysqli_query($conn,$query1);


$get_matakuliah = mysqli_query($conn,"SELECT * FROM matakuliah where kode_kelas like '%$kode_kelas%'");
$matakuliah = mysqli_fetch_assoc($get_matakuliah);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="container-member">
        <div class="header-member">
            <div class="logo">
            <a href="#"class="button-navigasi">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </a>
            <img src="../image/gunadarma.png" alt="">
            <p>Absensi Gunadarma</p>
            </div>
        </div>
        <div class="sidebar-member">
            <div class="foto-member">
                <img src="../image/passfoto.jpg" alt="">
                <p><?php echo $nama_dosen; ?> </p>
            </div>
            <a href="" class="dashboard">Dashboard</a>
            <div class="button-sidebar">
                <p>Main Menu</p>
                <a href="" class="presensi-member">Presensi</a>
                <a href="jadwalkuliah.php" class="jadwal-member">Jadwal Kuliah</a>
                <a href="tambahjadwal.php" class="absen-member">Tambah Absen</a>
            </div>

            <a href="../logout.php" class="logout">Logout</a>

        </div>
        <div class="body-member">
            <div class="body-container">
                <div class="isibody-member">
                    <div class="container-isibody-member">
                    <div class="header-body-member">
                        <div class="foto-header-body-member"></div>
                        <div class="text-header-body-member">
                            <p>Hi,<?php echo $nama_dosen; ?></p>
                        </div>
                    </div>
                    <div class="footer-body-member">
                        <div class="sidekiri-member">
                            <div class="judultable">
                                <p>Absen Kelas</p>
                            </div>
                            <div class="containertablejadwal">
                            <div class="tablejadwal">
                                <table >
                                    <tr style="font-weight: bold;">
                                        <td class="mata-kuliah">Kelas</td>
                                        <td class="mata-kuliah">Jurusan</td>
                                        <td>Jam Masuk</td>
                                        <td>Jam Keluar</td>
                                        <td class="mata-kuliah">Status</td>
                                    </tr>
                                    <?php while($row = mysqli_fetch_assoc($resultquery1)): ?>
                                    <tr style="font-weight: bold;">
                                        <td class="mata-kuliah"><?php echo $row['kode_kelas']; ?></td>
                                        <td class="mata-kuliah"><?php echo $row['jurusan']; ?></td>
                                        <td><?php echo $row['jam_masuk']; ?></td>
                                        <td><?php echo $row['jam_keluar']; ?></td>
                                        <?php if($row['active']=='0'){
                                            $status = "Belum Aktif";
                                        }
                                        else{
                                            $status = "Sudah Aktif";
                                        }
                                        ?>
                                        <td class="mata-kuliah"><?php echo $status ?></td>
                                    </tr> 
                                    <?php endwhile ?>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>
