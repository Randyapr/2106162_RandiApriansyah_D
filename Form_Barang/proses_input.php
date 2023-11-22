<?php
// Koneks
include 'konek.php';

// cek
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // get data dr form
    $no_resi = $_POST['no_resi'];
    $nama_pengirim = $_POST['nama_pengirim'];
    $alamat_pengirim = $_POST['alamat_pengirim'];
    $nama_penerima = $_POST['nama_penerima'];
    $alamat_penerima = $_POST['alamat_penerima'];
    $berat_barang = $_POST['berat_barang'];
    $tanggal_pengiriman = $_POST['tanggal_pengiriman'];

    // save data ke tabel ngirim batang
    $sql_queryy = "INSERT INTO ngirim_barang (no_resi, nama_pengirim, alamat_pengirim, nama_penerima, alamat_penerima, berat_barangg, tanggal_pengiriman) VALUES ('$no_resi', '$nama_pengirim', '$alamat_pengirim', '$nama_penerima', '$alamat_penerima', $berat_barang, '$tanggal_pengiriman')";

    if (mysqli_query($koneksi, $sql_queryy)) {
     echo "Data berhasil disimpan!";
     header('location: index.php'); 
    }
    else {
     echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);

    }
}

?>
