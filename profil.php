<html>
<head>
	<title>CRUD | Tentang saya</title>
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
		<a class="nav-link" href="index.php"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
		</li>
		<a style="color: black" class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><i class="fa fa-user"></i> Tentang saya</a>
	</div>
	</li>
	</ul>
	</nav>
	<br />
	<!-- PROFIL -->
	<div class="card">
	<img src="img/refli.jpg" class="card-img-top">
	<div class="card-body">
		<h5 class="card-title">Refli syahrial</h5>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Refli"><i class="fa fa-user"></i> Profil</button>
	<div class="modal fade" id="Refli" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	</div>
		<div class="modal-body">
		Nama : Refli syahrial<br />
		Kelas : Sebelas (XI)<br />
		Jurusan : Rekayasa Perangkat Lunak (RPL)<br />
		Jenis Kelamin : Laki-Laki
		</div>
	<div class="modal-footer">
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</body>
</html>