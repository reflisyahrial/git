<html>
<head>
 <title>Data Kepegawaian</title>
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
<p><a href="tambah.php" class="btn btn-primary">Tambah Data</a></p>
<div style="margin-top:20px"></div>
        <table width='80%' height='20%' border=2>
        <table class="table table-bordered">
        <div class="row">
 <tr style="text-align: center;" bgcolor="dark">
  <th>No.</th>
  <th>Nip</th>
  <th>Nama</th>
  <th>Pangkat</th>
  <th>Bidang Pekerjaan</th>
  <th>Opsi</th>
 </tr>
<?php
include('config.php');
$query=mysqli_query($koneksi,"SELECT * FROM siswa ORDER BY Nip")or die('perintah sql salah');
 if(mysqli_num_rows($query)==0){
  echo'<tr><td colspan="6">Tidak ada data!</td></tr>';
 }else{
  $no=1;
  while($data=mysqli_fetch_assoc($query)){
   echo'<tr bgcolor="white">';
   echo"<td><center>$no.</center></td>";
   echo"<td>$data[nip]</td>";
   echo'<td>'.$data['nama'].'</td>';
   echo'<td><center>'.$data['jabatan'].'</center></td>';
   echo'<td><center>'.$data['bidang'].'</center></td>';
   echo'<td><center><a href="edit.php?id='.$data['id'].'" class="btn btn-primary">Edit</a> - <a href="hapus.php?id='.$data['id'].'"onclick="return confirm(\'Yakin Ingin Menghapus Data?\')" class="btn btn-danger">Hapus</a></center></td>';
   echo'</tr>';
   $no++;
  }
 }
?>
</table>
</body>
<a style="color: white">
&copy; Farhanms
</a>
</html>