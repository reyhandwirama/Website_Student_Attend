<?php 
include '../sesi.php';
include '../conn.php';
$get_user = mysqli_query($conn,"SELECT * FROM akun where npm = '$npm'" );

$nama_mahasiswa = $query_besar['nama'];
$kodekelas = $query_besar['kode_kelas'];

$querydataabsen = mysqli_query($conn,"SELECT * FROM matakuliah where kode_kelas='$kodekelas' AND active='1'");







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
                <p><?php echo $nama_mahasiswa; ?> </p>
            </div>
            <a href="" class="dashboard">Dashboard</a>
            <div class="button-sidebar">
                <p>Main Menu</p>
                <a href="" class="presensi-member">Presensi</a>
                <a href="jadwalkuliah.php" class="jadwal-member">Jadwal Kuliah</a>
                <a href="" class="absen-member">Absen</a>
            </div>

            <a href="" class="logout">Logout</a>

        </div>
        <div class="body-member">
            <div class="body-container">
                <div class="isibody-member">
                    <div class="container-isibody-member">
                    <div class="header-body-member">
                        <div class="foto-header-body-member"></div>
                        <div class="text-header-body-member"><h2>Hi,<?php echo $nama_mahasiswa; ?></h2></div>
                    </div>
                    <div class="footer-body-member">
                        <div class="sidekiri-member sidekiri-tablemember">
                            <div class="judultable">
                                <p>Jadwal Hari ini</p>
                            </div>
                            <div class="containertablejadwal containertablejadwalmember">
                            <div class="tablejadwal tablejadwalmember">
                                <table border="1" cellspacing="0">
                                    <tr style="font-weight: bold;">
                                        <td class="mata-kuliah">Mata Kuliah</td>
                                        <td class="mata-kuliah">Dosen</td>
                                        <td>Jam Masuk</td>
                                        <td>Jam Keluar</td>
                                        <td class="mata-kuliah statusabsen">Status</td>
                                    </tr>
                                    <?php while($dataabsen = mysqli_fetch_assoc($querydataabsen)): ?>
                                    <tr>
                                        <td><?php echo $dataabsen["nama_matkul"]; ?></td>
                                        <td><?php echo $dataabsen["nama_dosen"]; ?></td>
                                        <td><?php echo $dataabsen["jam_masuk"]; ?></td>
                                        <td><?php echo $dataabsen["jam_keluar"]; ?></td>
                                        <?php if($dataabsen['active']=='0'){
                                            $status = "Belum Aktif";
                                        }
                                        else{
                                            $status = "Sudah Aktif";
                                        }
                                        ?>
                                        <td class="Status"><?php echo $status; ?></td>

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