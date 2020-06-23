<html>
<head>
 <title>Simple CRUD</title>
 <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width", 
        initial-scale=1">
            <link rel="stylesheet" href="css/bootstrap.min.css" />
            <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"
            ></script>
            <script src="js/bootstrap.min.js"></script>
</head>
<body style="background-color: grey">
    <br />
<h2 style="color: white" align="center">Data Kepegawaian</h2>
<hr />
  <div class="container">
<p><a href="index.php" class="btn btn-success">Kembali</a></p>
<form action="tambah_proses.php" method="post">
 <table style="color: white" cellpadding="3" cellspacing="0">
 <tr>
   <td>Nip</td>
   <td>:</td>
   <td><input type="text" name="nip" size="30" required></td>
  </tr>
  <tr>
   <td>Nama</td>
   <td>:</td>
   <td><input type="text" name="nama" size="30" required></td>
  </tr>
  <tr>
  <td>Pangkat</td>
  <td>:</td>
   <td><select class="btn btn-primary" name="jabatan" required>
    <option value="">Pilih Pangkat</option>
    <option value="Gol.I/A">Gol.I/A</option>
    <option value="Gol.I/B">Gol.I/B</option>
    <option value="Gol.I/C">Gol.I/C</option>
    <option value="Gol.II/A">Gol.II/A</option>
    <option value="Gol.II/B">Gol.II/B</option>
    <option value="Gol.II/C">Gol.II/C</option>
    <option value="Gol.III/A">Gol.III/A</option>
    <option value="Gol.III/B">Gol.III/B</option>
    <option value="Gol.III/C">Gol.III/C</option>
    <option value="Gol.IV/A">Gol.IV/A</option>
    <option value="Gol.IV/B">Gol.IV/B</option>
    <option value="Gol.IV/C">Gol.IV/C</option>
    </select>
   </td>
  </tr>
  <tr>
  <td>Bidang Pekerjaan</td>
  <td>:</td>
   <td>
    <select class="btn btn-primary" name="bidang" required>
     <option value="">Pilih Bidang Pekerjaan</option>
     <option value="Koordinator Kebun">Koordinator Kebun</option>
     <option value="Staff Adminitrasi">Staff Adminitrasi</option>
     <option value="Staff Kepegawaian">Staff Kepegawaian</option>
     <option value="Teknisi">Teknisi</option>
     <option value="Peneliti">Peneliti</option>
     <option value="Kepala Gudang">Kepala Gudang</option>
    </select>
   </td>
  </tr>
  <tr>
   <td>&nbsp;</td>
   <td></td>
   <td><input type="submit" name="tambah" class="btn btn-success" value="Tambah"></td>
  </tr>
 </table>
</form>
</body>
</html>