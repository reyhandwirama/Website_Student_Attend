<?php
include '../conn.php';
include '../sesi.php';

$nama_mahasiswa = $query_besar['nama'];
$kode_kelas = $query_besar['kode_kelas'];
$matakuliah = $query_besar['jurusan'];
$namadosen = $query_besar['nama'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Tambah Matkul</title>
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
            <a href="admin.php" class="dashboard">Dashboard</a>
            <div class="button-sidebar">
                <p>Main Menu</p>
                <a href="" class="presensi-member">Presensi</a>
                <a href="" class="jadwal-member">Jadwal Kuliah</a>
                <a href="tambahjadwal.php" class="absen-member">Tambah Absen</a>
            </div>

            <a href="../login.php" class="logout">Logout</a>

        </div>
        <div class="body-member">
            <div class="body-container">
                    <div class="container-isibody-tambajadwal">
                        <div class="cardtambahjadwal">
                            <div class="headertambahjadwal">
                                <h2>Tambah Jadwal</h2>
                            </div>
                            <div class="bodytambahjadwal">
                                <form action="tambah.php?" method="post">
                                    <label for="kode_matkul"> Kode Matkul</label>
                                    <select name="kode_matkul" id="kode_matkul">
                                        <option value="">Pilih Kode Matkul</option>
                                        <?php while($daftarmatakuliah = mysqli_fetch_assoc($datakodematkul)): ?>
                                        <option value="<?= $daftarmatakuliah['kode_matkul']; ?>"><?php echo "{$daftarmatakuliah['kode_matkul']}"; ?></option>
                                        <?php endwhile ?>
                                    </select>
                                    <label for="kode_kelas">Kode Kelas</label>
                                    <input type="text" name="kode_kelas" id="kode_kelas">
                                    <label for="hari">Hari</label>
                                    <select name="hari" id="hari">
                                        <option value="">Pilih Hari</option>
                                        <option value="Senin">Senin</option>
                                        <option value="Selasa">Selasa</option>
                                        <option value="Rabu">Rabu</option>
                                        <option value="Kamis">Kamis</option>
                                        <option value="Jumat">Jumat</option>
                                        <option value="Sabtu">Sabtu</option>
                                        
                                    </select>
                                    <label for="jam_masuk">Jam Masuk</label>
                                    <select name="jammasuk" id="jam_masuk">
                                        <option value="">Pilih Jam Masuk</option>
                                        <option value="07.00">07.30 (Jam Ke-1)</option>
                                        <option value="08.00">08.30 (Jam Ke-2)</option>
                                        <option value="09.00">09.30 (Jam Ke-3)</option>
                                        <option value="10.00">10.30 (Jam Ke-4)</option>
                                        <option value="11.00">11.30 (Jam Ke-5)</option>
                                        <option value="12.00">12.30 (Jam Ke-6)</option>
                                        <option value="13.00">13.30 (Jam Ke-7)</option>
                                        <option value="14.00">14.30 (Jam Ke-8)</option>
                                        <option value="15.00">15.30 (Jam Ke-9)</option>
                                        <option value="16.00">16.30 (Jam Ke-10)</option>
                                        <option value="17.00">17.30 (Jam Ke-11)</option>
                                        <option value="18.00">18.30 (Jam Ke-12)</option>
                                    </select>
                                    <label for="jam_keluar">Jam Selesai</label>
                                    <select name="jamkeluar" id="jam_keluar">
                                        <option value="">Pilih Jam Keluar</option>
                                        <option value="07.00">07.30 (Jam Ke-1)</option>
                                        <option value="08.00">08.30 (Jam Ke-2)</option>
                                        <option value="09.00">09.30 (Jam Ke-3)</option>
                                        <option value="10.00">10.30 (Jam Ke-4)</option>
                                        <option value="11.00">11.30 (Jam Ke-5)</option>
                                        <option value="12.00">12.30 (Jam Ke-6)</option>
                                        <option value="13.00">13.30 (Jam Ke-7)</option>
                                        <option value="14.00">14.30 (Jam Ke-8)</option>
                                        <option value="15.00">15.30 (Jam Ke-9)</option>
                                        <option value="16.00">16.30 (Jam Ke-10)</option>
                                        <option value="17.00">17.30 (Jam Ke-11)</option>
                                        <option value="18.00">18.30 (Jam Ke-12)</option>
                                    </select>
                                    <button type="submit" name="tambah" class="tambah" onclick="return confirm('Data Sudah Yakin Benar ?');"> Tambah </button>
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