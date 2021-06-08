<?php 

require_once 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT tbl_siswa.id, tbl_siswa.nama, tbl_siswa.no_hp, tbl_siswa.foto, tbl_siswa.alamat, tbl_jurusan.nama_jurusan AS jurusan FROM tbl_siswa LEFT JOIN tbl_jurusan ON tbl_siswa.id_jurusan = tbl_jurusan.id");
$aktif = 'siswa';
$no = 1;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Daftar Siswa - SMK Negeri 13 MALANG</title>
	<link rel="stylesheet" href="resources/datatables/datatables.min.css">
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
					Fasilitas
				</div>
                
                <div class = "container5">
<div class ="judul">

</div>
	<div class="gallery">
		<img src="resources/images/Lap1.jpg"  >
		<div class ="desc">
				<h3>Lapangan Futsal</h3>
			</div>
		</div>
		<div class="gallery">
		<img src="resources/images/basket1.jpg" >
		<div class ="desc">
				<h3>Lapangan Basket</h3>
			</div>
		</div>
		<div class="gallery">
		<img src="resources/images/perpustakaan.jpg">
		<div class ="desc">
				<h3>Perpustakaan</h3>
			</div>
		</div>
		<div class="gallery">
		<img src="resources/images/komputer.jpg" >
		<div class ="desc">
				<h3>Lab Komputer</h3>
			</div>
		</div>
		<div class="gallery">
		<img src="resources/images/bengkel.jpg" >
		<div class ="desc">
				<h3>Bengkel Otomotif</h3>
			</div>
		</div>
		<div class="gallery">
		<img src="resources/images/kantin.jpg">
		<div class ="desc">
				<h3>Kantin Sekolah</h3>
			</div>
		</div>
		
</div>
				    </tbody>
				</table>
			</div>
			<?php require 'sidebar.php'; ?>
		</div>
		<div class="text-white footer">
			2021 © Copyright by kelompok 1 PTI19 A.
		</div>
	</div>

	<script src="resources/js/jquery.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
	<script src="resources/datatables/datatables.min.js"></script>
	<script src="resources/datatables/datatable.js"></script>
</body>
</html>