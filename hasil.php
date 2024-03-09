<?php
//menangkap value form berdasarkan unique name & simpan kedalam varible
$nim = $_POST['nim']; 
$nama = $_POST['nama']; 
$jk = $_POST['jk']; 
$prodi = $_POST['prodi']; 
$skill = $_POST['skill']; 
$domisili = $_POST['domisili']; 
$email = $_POST['email']; 

$nilai = 0;
foreach ($skill as $data) {
    switch ($data) {
        case 'html':
            $nilai += 10;
            break;
        case 'css':
            $nilai += 10;
            break;
        case 'javascript':
            $nilai += 20;
            break;
        case 'rwd':
            $nilai += 20;
            break;
        case 'php':
            $nilai += 30;
            break;
        case 'java':
            $nilai += 30;
            break;
        case 'phyton':
            $nilai += 50;
            break;
        default:
            # code...
            break;
    }
}
//Tampilan value kedalam web browser
echo"<h4>Informasi Yang Dikirim</h4>";
echo "NIM  : $nim ";
echo "<br>Nama  : $nama ";
echo "<br>Jenis Kelamin  : $jk ";
echo "<br>Program Studi  : $prodi ";
echo "<br>Skill  :  ";
foreach ($skill as $data) {
    echo $data . ", ";
}
echo "<br>Domisili  : $domisili ";
echo "<br>Email  : $email ";
echo "<br>Nilai skill : $nilai";
if ($nilai == 0) {
    echo "<br>Keterangan : Tidak memadai";
} elseif ($nilai >= 1 && $nilai <= 40) {
    echo "<br>Keterangan : Kurang";
} elseif ($nilai >= 41 && $nilai <= 60) {
    echo "<br>Keterangan : Cukup";
} elseif ($nilai >= 61 && $nilai <= 100) {
    echo "<br>Keterangan : Baik";
} elseif ($nilai >= 101 && $nilai <= 150) {
    echo "<br>Keterangan : Sangat baik";
}