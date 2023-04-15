<!DOCTYPE html>
<html lang="en">

<?php
$nama = "Reza Irvando";
$ttl = "Pati, 13 Oktober 2002";
$jeniskelamin = "Laki-laki";
$alamat = "Jalan Kenanga RT 2 RW 3, Kecamatan Juwana, Kabupaten Pati, Provinsi Jawa Tengah.";
$smp = "SMP Negeri 1 Juwana";
$sma = "SMA Negeri 1 Pati";
$univ = "Universitas Gadjah Mada";
$hobby = "Mengwibu"
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Diri</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <center>
        <div class="pri-container">
            <div class="head-container">
                <h1>Biodata Diri</h1>
            </div>
            <div class="body-container">
                <div class="pri-content">
                    <div class="content row-1">
                        <div class="left-content">
                            <p>Nama</p>
                        </div>
                        <div class="mid-content">
                            <p>:</p>
                        </div>
                        <div class="right-content">
                            <p><?php echo $nama ?></p>
                        </div>
                    </div>
                    <div class="content row-2">
                        <div class="left-content">
                            <p>Tempat, tanggal lahir</p>
                        </div>
                        <div class="mid-content">
                            <p>:</p>
                        </div>
                        <div class="right-content">
                            <p><?php echo $ttl ?></p>
                        </div>
                    </div>
                    <div class="content row-3">
                        <div class="left-content">
                            <p>Jenis Kelamin</p>
                        </div>
                        <div class="mid-content">
                            <p>:</p>
                        </div>
                        <div class="right-content">
                            <p><?php echo $jeniskelamin ?></p>
                        </div>
                    </div>
                    <div class="content row-4">
                        <div class="left-content">
                            <p>Alamat Lengkap</p>
                        </div>
                        <div class="mid-content">
                            <p>:</p>
                        </div>
                        <div class="right-content">
                            <p><?php echo $alamat ?></p>
                        </div>
                    </div>
                    <div class="content row-5">
                        <div class="left-content">
                            <p>Riwayat Pendidikan</p>
                        </div>
                        <div class="mid-content">
                            <p>:</p>
                        </div>
                        <div class="right-content">
                            <ul>
                                <li><p><?php echo $smp ?></p></li>
                                <li><p><?php echo $sma ?></p></li>
                                <li><p><?php echo $univ ?></p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content row-6">
                        <div class="left-content">
                            <p>Hobby</p>
                        </div>
                        <div class="mid-content">
                            <p>:</p>
                        </div>
                        <div class="right-content">
                        <p><?php echo $hobby ?></p>
                        </div>
                    </div>
                </div>
                <div class="foto">
                    <img class="fotobiasa" src="assets/foto-nonformal2.jpg" alt="" width="200px">
                </div>
            </div>
        </div>
    </center>
</body>
</html>l

