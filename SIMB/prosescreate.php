<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nm_pelapor = $_POST['nm_pelapor'];
    $no_hp = $_POST['no_hp'];
    $nm_korban = $_POST['nm_korban'];
    $lokasi = $_POST['lokasi'];
    $ciri = $_POST['ciri'];
    $status = $_POST['status'];

    $sql = "INSERT INTO laporan (nm_pelapor, no_hp, nm_korban, lokasi, ciri, status) VALUES ('$nm_pelapor', '$no_hp', '$nm_korban', '$lokasi', '$ciri', '$status')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan. <a href='index.php'>Lihat Data</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>