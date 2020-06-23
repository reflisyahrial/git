z<html>
    <head>
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
<?php
if(isset($_POST['tambah'])){
 include('config.php');
 $nip=$_POST['nip'];
 $nama=$_POST['nama'];
 $jabatan=$_POST['jabatan'];
 $bidang=$_POST['bidang'];
 $input=mysqli_query($koneksi,"INSERT INTO siswa VALUES(NULL, '$nip','$nama','$jabatan','$bidang')")or
 die(mysqli_error());
 if($input){
  echo'Data berhasil ditambahkan! ';
  echo'<a href="index.php" class="btn btn-primary">Kembali</a>';
 }else{
  echo'Gagal menambahkan data! ';
  echo'<a href="index.php" class="btn btn-primary">Kembali</a>';
 }
}else{
 echo'<script>window.history.back()</script>';
}
?>
</html>