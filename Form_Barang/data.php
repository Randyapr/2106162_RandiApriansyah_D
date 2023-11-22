<?php

include 'konek.php';

// get data dr tabel ngirim_barang
$query = "SELECT * FROM ngirim_barang";
$result = mysqli_query($koneksi, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Pengiriman Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #222;
            color: #fff;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #fff;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
            color: #fff;
        }

        th, td {
            border: 1px solid #555;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #333;
        }

        tr:nth-child(even) {
            background-color: #444;
        }
    </style>
</head>
<body>

<h2>Data Pengiriman Barang</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Nomor Resi</th>
        <th>Nama Pengirim</th>
        <th>Alamat Pengirim</th>
        <th>Nama Penerima</th>
        <th>Alamat Penerima</th>
        <th>Berat Barang</th>
        <th>Tanggal Pengiriman</th>
    </tr>

    <?php
    // Menampilkan data dalam tabel
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['no_resi']}</td>";
        echo "<td>{$row['nama_pengirim']}</td>";
        echo "<td>{$row['alamat_pengirim']}</td>";
        echo "<td>{$row['nama_penerima']}</td>";
        echo "<td>{$row['alamat_penerima']}</td>";
        echo "<td>{$row['berat_barangg']}  kg</td>";
        echo "<td>{$row['tanggal_pengiriman']}</td>";
        echo "</tr>";
    }

    // Membebaskan hasil kueri
    mysqli_free_result($result);

    // Menutup koneksi
    mysqli_close($koneksi);
    ?>
</table>

</body>
</html>
