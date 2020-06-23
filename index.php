<html>
  <head>
    <title>CRUD | Kelompok-3</title>
    <!-- LINK -->
    <link rel="shortcut icon" href="img/logo.png" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/all.min.css">
    <!-- META -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width", 
    initial-scale=1>

    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"
    ></script>
    <script src="js/bootstrap.min.js"></script>
  </head>

  <body>
<!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav">


    
    <li class="nav-item active">
    <a class="nav-link" href="logout.php"><i class="fa fa-home"></i> logout <span class="sr-only">(current)</span></a>
    <li class="nav-item active">

    <a class="nav-link" href="siswa/tambah.php"><i class="fa fa-plus"></i> Tambah Siswa <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">
    <a class="nav-link" href="guru/guru.php"><i class="fa fa-user"></i> Data Guru <span class="sr-only">(current)</span></a>
    <li class="nav-item active">
    <a class="nav-link" href="profil.php"><i class="fa fa-user"></i> Tentang saya<span class="sr-only">(current)</span></a>
    </li>
        </div>
        </li>
        </ul>
        </nav>
        <br />
        <h2 align="center">Data Pelajar Sekolah</h2>
        <hr />
        <!-- TABEL -->
        <div class="container">
        <div style="margin-top:20px"></div>
        <table width='80%' height='20%' border=2>
        <table class="table table-bordered">
        <div class="row">
        <tr style="background-color: #563d7c" align="center">
        <th style="color: white">No.</th>
        <th style="color: white">NIS</th>
        <th style="color: white">Nama Lengkap</th>
        <th style="color: white">Kelas</th>
        <th style="color: white">Jurusan</th>
        <th style="color: white">Opsi</th>
        </tr>
        <!-- BUTTON -->
        <?php
        include('config.php');
        $query=mysqli_query($koneksi,"SELECT * FROM siswa ORDER BY NIS")or die('perintah sql salah');
        if(mysqli_num_rows($query)==0){
        echo'<tr><td colspan="6">Tidak ada data!</td></tr>';
        }else{
        $no=1;
        while($data=mysqli_fetch_assoc($query)){
        echo'<tr bgcolor="white" align="center">';
        echo"<td><center>$no.</center></td>";
        echo"<td>$data[nis]</td>";
        echo'<td>'.$data['nama'].'</td>';
        echo'<td><center>'.$data['kelas'].'</center></td>';
        echo'<td><center>'.$data['jurusan'].'</center></td>';
        echo'<td><center><a href="siswa/edit.php?id='.$data['id'].'" class="btn btn-warning"><i class="fa fa-tools"></i> Edit</a> - <a href="siswa/hapus.php?id='.$data['id'].'"onclick="return confirm(\'Apakah Anda Yakin Ingin Menghapus Data?\')" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a></center></td>';
        echo'</tr>';
        $no++;
        }
        }
        ?>
        </table>
  </body>
  <hr />
  &copy; Kelompok 3
</html>