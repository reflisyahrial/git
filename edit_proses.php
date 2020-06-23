<html>
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
if(isset($_POST['simpan'])){
 include('config.php');
 $id=$_POST['id'];
 $nip=$_POST['nip'];
 $nama=$_POST['nama'];
 $jabatan=$_POST['jabatan'];
 $bidang=$_POST['bidang'];
 $update=mysqli_query($koneksi,"UPDATE siswa SET nip='$nip',nama='$nama',jabatan='$jabatan',bidang='$bidang' WHERE id='$id'")or die(mysql_error());
 if($update){
  echo'Data berhasil disimpan! ';
  echo'<a href="index.php?id='.$id.'" class="btn btn-primary">Kembali</a>';
 }else{
  echo'Gagal menyimpan data! ';
  echo'<a href="index.php?id='.$id.'" class="btn btn-primary">Kembali</a>';
 }
}else{
 echo'<script>window.history.back()</script>';
}
?>
</html>