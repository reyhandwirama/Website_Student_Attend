<?php

include '../sesi.php';
include '../conn.php';


$get_user = mysqli_query($conn,"SELECT * FROM akun where npm = '$npm'" );
$get_matakuliah = mysqli_query($conn, "SELECT * FROM matakuliah");



$login_akun = mysqli_fetch_assoc($get_user);

$nama_mahasiswa = $login_akun['nama'];
$kode_kelas = $login_akun['kode_kelas'];
$matakuliah = $login_akun['jurusan'];
$namadosen = $login_akun['nama'];

echo mysqli_error($conn);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Tambah Absen</title>
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
            <a href="admin.php?username=<?= $npm ?>" class="dashboard">Dashboard</a>
            <div class="button-sidebar">
                <p>Main Menu</p>
                <a href="" class="presensi-member">Presensi</a>
                <a href="" class="jadwal-member">Jadwal Kuliah</a>
                <a href="tambahjadwal.php" class="absen-member">Tambah Absen</a>
            </div>

            <a href="../logout.php" class="logout">Logout</a>

        </div>
        <div class="body-member">
            <div class="body-container">
                    <div class="container-isibody-tambajadwal">
                        <div class="cardtambahabsen">
                            <div class="headertambahabsen">
                                <h2>Tambah Absen</h2>
                            </div>
                            <div class="bodytambahabsen">
                                <form action="absen.php?username=<?= $npm?>" method="post">
                                    <select name="namamatkul">
                                        <option value="">Pilih Kode Kelas</option>
                                        <?php while($daftarmatakuliah = mysqli_fetch_assoc($get_matakuliah)): ?>
                                            
                                        <option value="<?= $daftarmatakuliah['kode_matkul']; ?>"><?php echo "{$daftarmatakuliah['kode_kelas']} ({$daftarmatakuliah['kode_matkul']},{$daftarmatakuliah['nama_matkul']},{$daftarmatakuliah['hari']})"; ?></option>
                                        <?php endwhile ?>
                                    </select>
                                    <button type="submit" name="tambah" class="tambah" onclick="window.location.href='../absen.php?username=<?= $npm ?>'"> Tambah </button>
                                    <button type="button" name="cancel" onclick="window.location.href='tambahjadwal.php?username=<?= $npm ?>'">Batal</button>
                                </form>
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