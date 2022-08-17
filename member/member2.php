<?php 

$conn = mysqli_connect('localhost','root','','absensi');

$npm = $_GET['username'];

$get_user = mysqli_query($conn,"SELECT * FROM akun where npm = '$npm'" );

while($login_akun = mysqli_fetch_assoc($get_user)){

$nama_mahasiswa = $login_akun['nama'];
$kode_kelas = $login_akun['kode_kelas'];

echo $kode_kelas;

}

$get_matakuliah = mysqli_query($conn,"SELECT * FROM matakuliah where kode_kelas like '%$kode_kelas%'");



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
            <img src="image/gunadarma.png" alt="">
            <p>Absensi Gunadarma</p>
            </div>
            <div class="fotokanan">
                <a href=""><img src="passfoto.jpg" alt=""></a>
            </div>
        </div>
        <div class="sidebar-member">
            <div class="foto-member">
                <img src="passfoto.jpg" alt="">
                <p><?php echo $nama_mahasiswa; ?> </p>
            </div>
            <a href="" class="dashboard">Dashboard</a>
            <div class="button-sidebar">
                <p>Main Menu</p>
                <a href="" class="presensi-member">Presensi</a>
                <a href="" class="jadwal-member">Jadwal Kuliah</a>
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
                        <div class="sidekiri-member">
                            <div class="judultable">
                                <p>Jadwal Hari ini</p>
                            </div>
                            <div class="containertablejadwal">
                            <div class="tablejadwal">
                                <table border="1" cellspacing="0">
                                    <tr style="font-weight: bold;">
                                        <td class="mata-kuliah">Mata Kuliah</td>
                                        <td class="mata-kuliah">Dosen</td>
                                        <td>Jam Masuk</td>
                                        <td>Jam Keluar</td>
                                        <td>Status</td>
                                    </tr>
                                    <?php while($matakuliah = mysqli_fetch_assoc($get_matakuliah)): ?>
                                    <tr>
                                        <td><?php echo $matakuliah["nama_matkul"]; ?></td>
                                        <td><?php echo $matakuliah["nama_dosen"]; ?></td>
                                    </tr>
                                    <?php endwhile ?>
                                </table>
                            </div>
                            </div>
                        </div>
                        <div class="sidekanan-member">
                            <h3>JAM : MENIT : DETIK </h3>
                            <table>
                                <tr>
                                    <td class="row1 hadir">Jumlah Hadir</td>
                                    <td class="jumlahhadir">1</td>
                                </tr>
                                <tr >
                                    <td class="row1 izin">Jumlah Izin</td>
                                    <td class="jumlahizin">1</td>
                                </tr>
                                <tr>
                                    <td class="row1 sakit">Jumlah Sakit</td>
                                    <td class="jumlahsakit">1</td>
                                </tr>
                                <tr>
                                    <td class="row1 thadir">Jumlah Tidak Hadir</td>
                                    <td class="jumlahthadir">1</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>