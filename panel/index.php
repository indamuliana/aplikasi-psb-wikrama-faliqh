<?php
include('../config.php');
if(empty($_SESSION['id'])){
	echo '<script>document.location="../login.php";</script>';
}else{
	$id = $_SESSION['id'];
	$level = $_SESSION['level'];
	
	if($level == 1){
		$sql_admin = mysqli_query($koneksi, "SELECT * FROM users WHERE id='$id' LIMIT 1");
		$row = mysqli_fetch_assoc($sql_admin);
	}else if($level == 2){
		$sql_siswa = mysqli_query($koneksi, "SELECT * FROM calon_siswa WHERE siswa_id='$id' LIMIT 1");
		$row = mysqli_fetch_assoc($sql_siswa);
	}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>PPDB SMK Wikrama 1 Garut</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link href="assets/img/logo-smk1.png" rel="icon">

	<link href="https://hayageek.github.io/jQuery-Upload-File/4.0.11/uploadfile.css" rel="stylesheet">
	
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
	

	<!-- Fonts and icons -->
	<script src="./assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['./assets/css/fonts.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="./assets/css/azzara.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="./assets/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<!--
				Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
		-->
		<div class="main-header" data-background-color="purple">
			<!-- Logo Header -->
			<div class="logo-header">
				
				<a href="index.php" class="logo text-white">
					ADMIN PANEL
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fa fa-bars"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
				<div class="navbar-minimize">
					<button class="btn btn-minimize btn-rounded">
						<i class="fa fa-bars"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="../assets/img/logo-smk1.png" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<li>
									<a class="dropdown-item" href="logout.php">Logout</a>
								</li>
							</ul>
						</li>
						
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar">
			
			<div class="sidebar-background"></div>
			<div class="sidebar-wrapper scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="../assets/img/logo-smk1.png" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?php if($level == 1){ echo $row['nama']; }else{ echo $row['siswa_nama']; } ?>
									<span class="user-level"><?php if($level == 1){ echo 'Administrator'; }else{ echo 'Calon Siswa'; } ?></span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="logout.php">
											<span class="link-collapse">Logout</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav">
						<?php
						if($level == 1){
						?>
						<li class="nav-item <?php if(!$_GET['p']){ echo 'active'; } ?>">
							<a href="index.php">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Menu Utama</h4>
						</li>
						
						<li class="nav-item <?php if($_GET['p'] == 'siswa' || $_GET['p'] == 'data-siswa'){ echo 'active'; } ?>">
							<a href="index.php?p=siswa">
								<i class="fas fa-users"></i>
								<p>Calon Siswa</p>
							</a>
						</li>
						
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Pembayaran</h4>
						</li>
						
						<li class="nav-item <?php if($_GET['p'] == 'pembayaran-siswa'){ echo 'active'; } ?>">
							<a href="index.php?p=pembayaran-siswa">
								<i class="fas fa-receipt"></i>
								<p>Pembayaran Siswa</p>
							</a>
						</li>
						<li class="nav-item <?php if($_GET['p'] == 'pembayaran' || $_GET['p'] == 'pembayaran-tambah'){ echo 'active'; } ?>">
							<a href="index.php?p=pembayaran">
								<i class="fas fa-money-check-alt"></i>
								<p>Master Pembayaran</p>
							</a>
						</li>
						<li class="nav-item <?php if($_GET['p'] == 'pembayaran-petunjuk' || $_GET['p'] == 'pembayaran-petunjuk-tambah'){ echo 'active'; } ?>">
							<a href="index.php?p=pembayaran-petunjuk">
								<i class="fas fa-tasks"></i>
								<p>Petunjuk Pembayaran</p>
							</a>
						</li>
						<?php
						}else if($level == 2){
						?>
						<li class="nav-item <?php if(!isset($_GET['p'])){ echo 'active'; } ?>">
							<a href="index.php">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Menu Utama</h4>
						</li>
						<li class="nav-item <?php if(isset($_GET['p'])){ if($_GET['p'] == 'biodata' || $_GET['p'] == 'uan' || $_GET['p'] == 'jurusan' || $_GET['p'] == 'prestasi' || $_GET['p'] == 'ortu'){ echo 'active submenu'; } } ?>">
							<a data-toggle="collapse" href="#data">
								<i class="fas fa-layer-group"></i>
								<p>Lengkapi Data</p>
								<span class="caret"></span>
							</a>
							<div class="collapse <?php if(isset($_GET['p'])){ if($_GET['p'] == 'biodata' || $_GET['p'] == 'uan' || $_GET['p'] == 'jurusan' || $_GET['p'] == 'prestasi' || $_GET['p'] == 'ortu'){ echo 'show'; } } ?>" id="data">
								<ul class="nav nav-collapse">
									<li <?php if(isset($_GET['p'])){ if($_GET['p'] == 'biodata'){ echo 'class="active"'; } } ?>>
										<a href="index.php?p=biodata">
											<span class="sub-item">Biodata Diri</span>
										</a>
									</li>
									<li <?php if(isset($_GET['p'])){ if($_GET['p'] == 'uan'){ echo 'class="active"'; } } ?>>
										<a href="index.php?p=uan">
											<span class="sub-item">Nilai UAN</span>
										</a>
									</li>
									<li <?php if(isset($_GET['p'])){ if($_GET['p'] == 'jurusan'){ echo 'class="active"'; } } ?>>
										<a href="index.php?p=jurusan">
											<span class="sub-item">Pilihan Jurusan</span>
										</a>
									</li>
									<li <?php if(isset($_GET['p'])){ if($_GET['p'] == 'prestasi'){ echo 'class="active"'; } } ?>>
										<a href="index.php?p=prestasi">
											<span class="sub-item">Prestasi</span>
										</a>
									</li>
									<li <?php if(isset($_GET['p'])){ if($_GET['p'] == 'ortu'){ echo 'class="active"'; } } ?>>
										<a href="index.php?p=ortu">
											<span class="sub-item">Orang Tua</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						
						<li class="nav-item <?php if(isset($_GET['p'])){ if($_GET['p'] == 'kk' || $_GET['p'] == 'ijasah' || $_GET['p'] == 'nisn'){ echo 'active submenu'; } } ?>">
							<a data-toggle="collapse" href="#upload">
								<i class="fas fa-upload"></i>
								<p>Upload Data</p>
								<span class="caret"></span>
							</a>
							<div class="collapse <?php if(isset($_GET['p'])){ if($_GET['p'] == 'kk' || $_GET['p'] == 'ijasah' || $_GET['p'] == 'nisn'){ echo 'show'; } } ?>" id="upload">
								<ul class="nav nav-collapse">
									<li <?php if(isset($_GET['p'])){ if($_GET['p'] == 'kk'){ echo 'class="active"'; } } ?>>
										<a href="index.php?p=kk">
											<span class="sub-item">Upload Kartu Keluarga</span>
										</a>
									</li>
									<li <?php if(isset($_GET['p'])){ if($_GET['p'] == 'ijasah'){ echo 'class="active"'; } } ?>>
										<a href="index.php?p=ijasah">
											<span class="sub-item">Upload Ijasah</span>
										</a>
									</li>
									<li <?php if(isset($_GET['p'])){ if($_GET['p'] == 'nisn'){ echo 'class="active"'; } } ?>>
										<a href="index.php?p=nisn">
											<span class="sub-item">Upload NISN</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						
						<li class="nav-item <?php if(isset($_GET['p'])){ if($_GET['p'] == 'ringkasan'){ echo 'active'; } } ?>">
							<a href="index.php?p=ringkasan">
								<i class="fas fa-clipboard-list"></i>
								<p>Ringkasan Akun</p>
							</a>
						</li>
						<?php
						}
						?>
						
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<?php
			if($level == 1){
				$pages_dir = 'admin';
				if(!empty($_GET['p'])){
					$pages = scandir($pages_dir, 0);
					unset($pages[0], $pages[1]);
		 
					$p = $_GET['p'];
					if(in_array($p.'.php', $pages)){
						include($pages_dir.'/'.$p.'.php');
					} else {
						echo 'Halaman tidak ditemukan! :(';
					}
				} else {
					include($pages_dir.'/home.php');
				}
			}else if($level == 2){
				$pages_dir = 'siswa';
				if(!empty($_GET['p'])){
					$pages = scandir($pages_dir, 0);
					unset($pages[0], $pages[1]);
		 
					$p = $_GET['p'];
					if(in_array($p.'.php', $pages)){
						include($pages_dir.'/'.$p.'.php');
					} else {
						echo 'Halaman tidak ditemukan! :(';
					}
				} else {
					include($pages_dir.'/home.php');
				}
			}
			?>

		</div>
		
	</div>
	<!--   Core JS Files   -->
	<script src="./assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="./assets/js/core/popper.min.js"></script>
	<script src="./assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="./assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="./assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="./assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

	<!-- Moment JS -->
	<script src="./assets/js/plugin/moment/moment.min.js"></script>

	<!-- Chart JS -->
	<script src="./assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="./assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="./assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="./assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="./assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- Bootstrap Toggle -->
	<script src="./assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="./assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="./assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Google Maps Plugin -->
	<script src="./assets/js/plugin/gmaps/gmaps.js"></script>

	<!-- Sweet Alert -->
	<script src="./assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Azzara JS -->
	<script src="./assets/js/ready.min.js"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
	
	<script src="https://hayageek.github.io/jQuery-Upload-File/4.0.11/jquery.uploadfile.min.js"></script>
	
	<script>
	// Add the following code if you want the name of the file appear on select
	$(".custom-file-input").on("change", function() {
	  var fileName = $(this).val().split("\\").pop();
	  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
	});
	</script>
	
	<script>
	$(document).ready(function()
	{
		$("#kk").uploadFile({
			url:"siswa/upload-kk.php",
			multiple:false,
			maxFileCount:1,
			fileName:"myfile",
			allowedTypes:"jpg,jpeg,png",
			acceptFiles:"image/*",
			showPreview:true,
			onSuccess:function(files,data,xhr,pd)
			{

				setTimeout(function(){// wait for 5 secs(2)
					   location.reload(); // then reload the page.(3)
				  }, 5000); 
				
			},
		});
		
		$("#ijasah").uploadFile({
			url:"siswa/upload-ijasah.php",
			multiple:false,
			maxFileCount:1,
			fileName:"myfile",
			allowedTypes:"jpg,jpeg,png",
			acceptFiles:"image/*",
			showPreview:true,
			onSuccess:function(files,data,xhr,pd)
			{

				setTimeout(function(){// wait for 5 secs(2)
					   location.reload(); // then reload the page.(3)
				  }, 5000); 
				
			},
		});
		
		$("#nisn").uploadFile({
			url:"siswa/upload-nisn.php",
			multiple:false,
			maxFileCount:1,
			fileName:"myfile",
			allowedTypes:"jpg,jpeg,png",
			acceptFiles:"image/*",
			showPreview:true,
			onSuccess:function(files,data,xhr,pd)
			{

				setTimeout(function(){// wait for 5 secs(2)
					   location.reload(); // then reload the page.(3)
				  }, 5000); 
				
			},
		});
		
		
		
	});
	</script>
	<?php
	if(isset($_GET['p'])){
		if($_GET['p'] == 'siswa' || $_GET['p'] == 'pembayaran-siswa' || $_GET['p'] == 'pembayaran'){
			echo '
			<script >
			$(document).ready(function() {
				$("#data").DataTable({
					"order": [],
				});
			});
			</script>
			';
		}
		
		if($_GET['p'] == 'biodata'){
		?>
			
			<script>
			$(document).ready(function(){
				$('#provinsi').on('change', function(){
					var proID = $(this).val();
					if(proID){
						$.ajax({
							type:'POST',
							url:'siswa/getAlamat.php',
							data:'pro_id='+proID,
							success:function(html){
								$('#kabupaten').html(html);
								$('#kecamatan').html('<option value="">Pilih kecamatan dahulu</option>'); 
								$('#desa').html('<option value="">Pilih desa dahulu</option>'); 
							}
						}); 
					}else{
						$('#kabupaten').html('<option value="">Pilih kabupaten dahulu</option>');
						$('#kecamatan').html('<option value="">Pilih kecamatan dahulu</option>');
						$('#desa').html('<option value="">Pilih desa dahulu</option>'); 
					}
				});
				
				$('#kabupaten').on('change', function(){
					var kabID = $(this).val();
					if(kabID){
						$.ajax({
							type:'POST',
							url:'siswa/getAlamat.php',
							data:'kab_id='+kabID,
							success:function(html){
								$('#kecamatan').html(html);
								$('#desa').html('<option value="">Pilih desa dahulu</option>'); 
							}
						}); 
					}else{
						$('#kecamatan').html('<option value="">Pilih kabupaten dahulu</option>');
						$('#desa').html('<option value="">Pilih desa dahulu</option>'); 
					}
				});
				
				$('#kecamatan').on('change', function(){
					var kecID = $(this).val();
					if(kecID){
						$.ajax({
							type:'POST',
							url:'siswa/getAlamat.php',
							data:'kec_id='+kecID,
							success:function(html){
								$('#desa').html(html);
							}
						}); 
					}else{
						$('#desa').html('<option value="">Pilih desa dahulu</option>'); 
					}
				});
			});
			</script>
		<?php


		
		}
	}
	?>
	
	<script>
	$(document).ready(function() {
		$('#summernote').summernote({
			placeholder: 'Masukkan petunjuk pembayaran disini.',
			tabsize: 2,
			height: 400
		});
	});
	</script>
	
</body>
</html>