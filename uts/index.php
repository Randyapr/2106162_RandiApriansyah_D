<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Pengiriman Barang</title>
     <link rel="stylesheet" href="stylee.css">
</head>
<body>
     <div class="kotak_form">
          <h1>Form Pengiriman Barang</h1>
          <form action="proses_input.php" method="post">
               <label for="no_resi">Nomor Resi:</label>
               <input type="text" name="no_resi" placeholder="input nomor resi " class="form_barang" required><br>

               <label for="nama_pengirim">Nama Pengirim:</label>
               <input type="text" name="nama_pengirim" placeholder="Masukkan nama pengirim"class="form_barang" required><br>

               <label for="alamat_pengirim">Alamat Pengirim:</label>
               <input type="text" name="alamat_pengirim" placeholder="Masukkan alamat pengirim"class="form_barang" required></input><br>

               <label for="nama_penerima">Nama Penerima:</label>
               <input type="text" name="nama_penerima" placeholder="Masukkan nama penerima"class="form_barang" required><br>

               <label for="alamat_penerima">Alamat Penerima:</label>
               <input type="text" name="alamat_penerima" placeholder="masukkan alamat penerima"class="form_barang" required><br>
               
               <label for="berat_barang">Berat Barang:</label>
               <input type="number" name="berat_barang" placeholder="input berat /kg" step="0.01" class="form_barang" required> <span>kg</span><br>


               <label for="tanggal_pengiriman">Tanggal Pengiriman:</label>
               <input type="datetime-local" name="tanggal_pengiriman" class="form_barang" required><br>
               
               <button type="submit"id="btnKirim">
                    Send
               </button> <br>
               <input type="reset" name="BtnReset" id="btnCancel" value="Reset" class="tombol_cancel">
          </form>
     </div>
</body>
</html>