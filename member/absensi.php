<?php 
include '../conn.php';
include '../sesi.php';


$query1 = "SELECT * FROM matakuliah WHERE active='1'";
$querygetmatakuliah = mysqli_query($conn, $query1);

$nama_mahasiswa = $query_besar['nama'];
$kode_kelas = $query_besar['kode_kelas'];



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
        
                <a href="tambahjadwal.php" class="absen-member">Tambah Absen</a>
            </div>

            <a href="../logout.php" class="logout">Logout</a>

        </div>
        <div class="body-member">
            <div class="body-container">
                    <div class="container-isibody-tambajadwal">
                        <div class="cardabsen">
                            <div class="button-tableabsen">
                            </div>               
                        <div class="judultableabsenmember">
                            <table>
                                <tr>
                                    <td class="jam">Jam</td>
                                    <td class="kode_kelas">Kode Kelas</td>
                                    <td class="nama_matkul">Nama Matkul</td>
                                    <td class="nama_dosen">Nama Dosen</td>
                                    <td class="jam_masuk">Masuk</td>
                                    <td class="jam_masuk">Selesai</td>
                                </tr>
                            </table>
                        </div>
                        <div class="containerbodyjadwalmember">
                        <div class="containertableabsen">
                        <?php while($row = mysqli_fetch_assoc($querygetmatakuliah)) : ?>
                            <div class="tableabsen">
                                
                                <div class="kolomjam">
                                    <p><?php echo $row['jam'] ?></p>
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
                                <div class="buttonpengaturantable">
                                    <a href="hapus.php?kodematkul=<?= $row['kode_kelas'];?>">x</a>
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