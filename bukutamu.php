<?php 
require_once 'koneksi.php';
$aktif = 'bukutamu'; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Buku Tamu - SMK Negeri 13 MALANG</title>
	<link rel="stylesheet" href="resources/fonts/stylesheet.css">
	<link rel="stylesheet" href="resources/css/bootstrap.min.css">
	<link rel="stylesheet" href="resources/css/style.css">
	<link href="resources/images/logo.png" rel="shortcut icon">
</head>
<body>
	<div class="container bg-light">
		<!-- top bar -->
		<div class="logo clearfix">
			<div class="float-left mt-3 mb-3">
				<img src="resources/images/logo.png" alt="Logo Sekolah" width="70px" class="float-left mr-3">
				<div class="text float-right">
					<span class="smk">SMK Negeri 13 MALANG</span><br>
					<span class="visi">Jl. Villa Bukit Tidar No. 13, Merjosari, Kec.Lowokwaru, Malang.</span>
				</div>
			</div>
		</div>
			
		<!-- nav bar -->
		<?php require_once 'navbar.php'; ?>

		<!-- content -->
		<div class="row p-3">
			<div class="col-md-8">
				<div class="title mb-3">
					Buku Tamu SMK Negeri 13 MALANG
				</div>
				<div>
					<form method="POST" action="proses_bukutamu.php">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" placeholder="nama" autocomplete="off" required="required" name="nama">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="Email" class="form-control" id="email" placeholder="email" autocomplete="off" required="required" name="email">
						</div>
						<div class="form-group">
							<label for="isi">Isi</label>
							<textarea name="isi" class="form-control" rows="5" maxlength="250" placeholder="maksimal 250 karakter"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-sm btn-primary" name="kirim">Kirim</button>
							<button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')">Batal</button>
						</div>
					</form>
				</div>
			</div>
			<?php require_once 'sidebar.php'; ?>
		</div>
		<div class="text-white footer">
			2021 © Copyright by Kelompok 1 PTI19A.
		</div>
	</div>

	<script src="resources/js/jquery.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
</body>
</html>