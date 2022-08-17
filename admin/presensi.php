<?php 
include '../conn.php';
include '../sesi.php';



$nama_mahasiswa = $query_besar['nama'];
$kode_kelas = $query_besar['kode_kelas'];
$query1 = "SELECT * FROM matakuliah WHERE nama_dosen='$nama_mahasiswa'";
$querygetmatakuliah = mysqli_query($conn, $query1);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Tambah Jadwal</title>
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
                <p><?php echo $nama_mahasiswa; ?></p>
            </div>
            <a href="admin.php" class="dashboard">Dashboard</a>
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
                        <div class="cardabsen jadwalkuliah">
                        <div class="button-tableabsen">
                                <a href="tambahmatkul.php">Tambah Jadwal</a>
                                <a href="hapusjadwal.php" class="hapusjadwal">Hapus Jadwal</a>
                            </div>   
                        <div class="judultableabsen judultablejadwal">
                            <table>
                                <tr>
                                    <td class="jam">Status</td>
                                    <td class="kode_kelas">Kode Kelas</td>
                                    <td class="nama_matkul">Nama Matkul</td>
                                    <td class="nama_dosen">Nama Dosen</td>
                                    <td class="jam_masuk">Masuk</td>
                                    <td class="jam_masuk">Selesai</td>
                                    <td class="jam_masuk hari">Hari</td>

                                </tr>
                            </table>
                        </div>
                        <div class="containerbodyjadwal containerbodyjadwaldosen">
                        <div class="containertableabsen containertablejadwaldosen">
                        <?php while($row = mysqli_fetch_assoc($querygetmatakuliah)) : ?>
                            <div class="tableabsen">
                                
                                <div class="kolomjam kolomstatus">
                                    <?php if($row['active']=='0'){
                                            $status = "Belum Aktif";
                                        }
                                        else{
                                            $status = "Sudah Aktif";
                                        }
                                    ?>
                                    <p><?php echo $status ?></p>
                                </div>
                                <div class="kolomkodekelas">
                                    <p><?php echo $row['kode_kelas'] ?></p>
                                </div>
                                <div class="kolommatkul">
                                    <p><?php echo $row['nama_matkul'] ?></p>
                                </div>
                                <div class="kolomnamadosen">
                                    <p><?php echo $row['nama_dosen'] ?></p>
                                </div>
                                <div class="kolommasuk">
                                    <p><?php echo $row['jam_masuk'] ?></p>
                                </div>
                                <div class="kolomselesai">
                                    <p><?php echo $row['jam_keluar'] ?></p>
                                </div>
                                <div class="kolomhari">
                                    <p><?php echo $row['hari'] ?></p>
                                </div>
                                <div class="buttonpengaturantable">
                                    <a href="hapusjadwalkuliah.php?kodekelas=<?= $row['kode_kelas'];?>" onclick="return confirm('Yakin Ingin Menghapus Jadwal ?');">x</a>
                                </div>
                                
                            </div>
                            <?php endwhile ?>
                            
                            
                            
                            
                            
                            
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