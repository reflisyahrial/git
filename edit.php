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
<body style="background-color: gray">
  <br />
<h2 style="color: white" align="center">Edit Data Kepegawaian</h2> 
<hr />
  <div class="container">
<p><a href="index.php" class="btn btn-success">Kembali</a></p>
<?php
include('config.php');
$id=$_GET['id'];
$show=mysqli_query($koneksi,"SELECT * FROM siswa WHERE id='$id'");
 if(mysqli_num_rows($show)==0){
  echo'<script>window.history.back()</script>';
 }else{
  $data=mysqli_fetch_assoc($show);
 }
?>
<form action="edit_proses.php" method="post">
<input type="hidden" name="id" value="<?php echo $id;?>">
<table style="color: white" cellpadding="3" cellspancing="0">
 <tr>
  <td>NIP</td>
  <td>:</td>
  <td><input type="text" name="nip" size="30" value="<?php echo $data['nip'];?>"required></td>
 </tr>
 <tr>
  <td>Nama</td>
  <td>:</td>
  <td><input type="text" name="nama" size="30" value="<?php echo $data['nama'];?>"required></td>
 </tr>
 <tr>
  <td>Pangkat</td>
  <td>:</td>
  <td>
   <select name="jabatan" required>
    <option value="">Pilih Pangkat</option>
    <option value="Gol.I/A" <?php if($data['jabatan']=='Gol.I/A'){echo'selected';}?>>Gol.I/A</option>
    <option value="Gol.I/B" <?php if($data['jabatan']=='Gol.I/B'){echo'selected';}?>>Gol.I/B</option>
    <option value="Gol.I/C" <?php if($data['jabatan']=='Gol.I/C'){echo'selected';}?>>Gol.I/C</option>
    <option value="Gol.II/A" <?php if($data['jabatan']=='Gol.II/A'){echo'selected';}?>>Gol.II/A</option>
    <option value="Gol.II/B" <?php if($data['jabatan']=='Gol.II/B'){echo'selected';}?>>Gol.II/B</option>
    <option value="Gol.II/C" <?php if($data['jabatan']=='Gol.II/C'){echo'selected';}?>>Gol.II/C</option>
    <option value="Gol.III/A" <?php if($data['jabatan']=='Gol.III/A'){echo'selected';}?>>Gol.III/A</option>
    <option value="Gol.III/B" <?php if($data['jabatan']=='Gol.III/B'){echo'selected';}?>>Gol.III/B</option>
    <option value="Gol.III/C" <?php if($data['jabatan']=='Gol.III/C'){echo'selected';}?>>Gol.III/C</option>
    <option value="Gol.IV/A" <?php if($data['jabatan']=='Gol.IV/A'){echo'selected';}?>>Gol.IV/A</option>
    <option value="Gol.IV/B" <?php if($data['jabatan']=='Gol.IV/B'){echo'selected';}?>>Gol.IV/B</option>
    <option value="Gol.IV/C" <?php if($data['jabatan']=='Gol.IV/C'){echo'selected';}?>>Gol.IV/C</option>
   </select>
  </td>
 </tr>
 <tr>
  <td>Bidang</td>
  <td>:</td>
  <td>
   <select name="bidang" required>
    <option value="">Bidang Pekerjaan</option>
    <option value="Koordinator Kebun" <?php if($data['bidang']=='Koordinator Kebun'){echo'selected';}?>>Koordinator Kebun</option>
    <option value="Staff Adminitrasi" <?php if($data['bidang']=='Staff Adminitrasi'){echo'selected';}?>>Staff Adminitrasi</option>
    <option value="Staff Kepegawaian" <?php if($data['bidang']=='Staff Kepegawaian'){echo'selected';}?>>Staff Kepegawaian</option>
    <option value="Teknisi" <?php if($data['bidang']=='Teknisi'){echo'selected';}?>>Teknisi</option>
    <option value="Peneliti" <?php if($data['bidang']=='Peneliti'){echo'selected';}?>>Peneliti</option>
    <option value="Kepala Gudang" <?php if($data['bidang']=='Kepala Gudang'){echo'selected';}?>>Kepala Gudang</option>
</select>
  </td>
 </tr>
 <tr>
  <td>&nbsp;</td>
  <td></td>
  <td><input type="submit" name="simpan" class="btn btn-primary" value="Simpan"></td>
 </tr>
</table>
</form>
</body>
</html>