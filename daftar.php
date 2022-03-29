<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PPDB SMK Wikrama 1 Garut</title>
  <meta content="PPDB SMK Wikrama 1 Garut" name="descriptison">
  <meta content="PPDB SMK Wikrama 1 Garut" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo-smk1.png" rel="icon">
  <link href="assets/img/logo-smk1.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Appland - v2.0.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
		<?php
		$sql_title = mysqli_query($koneksi, "SELECT * FROM pengaturan WHERE pengaturan_slug='title'");
		$row_title = mysqli_fetch_assoc($sql_title);
		?>
        <h1 class="text-light"><a href="index.php"><?=$row_title['pengaturan_value']?></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php#header">Beranda</a></li>
		  <li><a href="login.php">Login</a></li>

          <li class="get-started"><a href="daftar.php">DAFTAR</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1>Formulir Pendaftaran</h1>
            <h2>Lengkapi data formulir di bawah ini.</h2>
			
			<?php
			if(isset($_SESSION['level'])){
				echo '<script>document.location="selesai.php";</script>';
			}
			
			if(isset($_POST['nama'])){
				function GenerateLogin($length = 5) {
					return substr(str_shuffle(str_repeat($x='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
				}
				
				$cek = mysqli_query($koneksi, "SELECT * FROM calon_siswa ORDER BY siswa_id DESC");
				
				if(mysqli_num_rows($cek) == 0){
					$no_pendaftaran = '1';
				}else{
					$data = mysqli_fetch_assoc($cek);
					$no = $data['siswa_no_pendaftaran'];
					$no_pendaftaran = $no + 1;
				}
				
				$t1 = date("Y");
				$t2 = date("Y") + 1;
				
				$tgl           = date("Y-m-d H:i:s");
				$nik          = $_POST['nik'];
				$nama          = $_POST['nama'];
				$tempat_lahir  = $_POST['tempat_lahir'];
				$tanggal_lahir = $_POST['tahun'].'-'.$_POST['bulan'].'-'.$_POST['tanggal'];
				$jenis_kelamin = $_POST['jenis_kelamin'];
				$hp            = $_POST['hp'];
				$ta            = $t1 .'/'. $t2;
				$username	   = GenerateLogin();
				
				$cek = mysqli_query($koneksi,"SELECT siswa_no_hp FROM calon_siswa WHERE siswa_no_hp='$hp'");
				if(mysqli_num_rows($cek) == 0){
					$cek_nik = mysqli_query($koneksi, "SELECT * FROM calon_siswa_biodata WHERE biodata_nik='$nik'");
					
					if(mysqli_num_rows($cek_nik) == 0){
						$in = mysqli_query($koneksi, "INSERT INTO calon_siswa(siswa_username, siswa_tanggal_daftar, siswa_no_pendaftaran, siswa_nama, siswa_tempat_lahir, siswa_tanggal_lahir, siswa_jenis_kelamin, siswa_no_hp, siswa_tahun_pelajaran, siswa_status) VALUES('$username', '$tgl', '$no_pendaftaran', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$hp', '$ta', '0')");
						$id = mysqli_insert_id($koneksi);
						
						if($in){
							$_SESSION['id'] = $id;
							$_SESSION['level'] = '2';
							
							mysqli_query($koneksi, "INSERT INTO calon_siswa_biodata(siswa_id, biodata_nik) VALUES('$id', '$nik')");
							mysqli_query($koneksi, "INSERT INTO calon_siswa_nilai_uan(siswa_id) VALUES('$id')");
							mysqli_query($koneksi, "INSERT INTO calon_siswa_jurusan(siswa_id) VALUES('$id')");
							mysqli_query($koneksi, "INSERT INTO calon_siswa_ortu(siswa_id) VALUES('$id')");
							mysqli_query($koneksi, "INSERT INTO calon_siswa_prestasi(siswa_id) VALUES('$id')");
							mysqli_query($koneksi, "INSERT INTO calon_siswa_upload(siswa_id) VALUES('$id')");
							mysqli_query($koneksi, "INSERT INTO calon_siswa_status(siswa_id, status_daftar) VALUES('$id', '1')");
							
							echo '<script>alert("Terima kasih, pendaftaran Anda sudah berhasil."); document.location="selesai.php";</script>';
						}else{
							echo mysqli_error($koneksi);
						}
						}else{
						echo '<script>alert("Nomor Induk Kependudukan (NIK) sudah terdaftar."); document.location="index.php";</script>';
					}
				}else{
					echo '<script>alert("Nomor HP sudah terdaftar."); document.location="index.php";</script>';
				}
				
			}
			?>
			
			<form method="post" action="index.php">
				<div class="form-group">
					<input placeholder="Nomor Induk Kependudukan (NIK)" type="text" name="nik" class="form-control" required/>
				</div>
				<div class="form-group">
					<input placeholder="Nama Lengkap Sesuai Ijasah" type="text" name="nama" class="form-control" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);" required />
				</div>
				<div class="form-group">
					<input placeholder="Tempat Lahir" type="text" name="tempat_lahir" class="form-control" required/>
				</div>
				<div class="form-group row">
					<div class="col-md-4">
						<select name="tanggal" class="form-control" required>
							<option value="">Tanggal Lahir</option>
							<?php
							for($t=1; $t<=31; $t++){
								echo '<option value="'.sprintf("%02d", $t).'">'.sprintf("%02d", $t).'</option>';
							}
							?>
						</select>
					</div>
					<div class="col-md-4">
						<select name="bulan" class="form-control" required>
							<option value="">Bulan Lahir</option>
							<?php
							$bln = array("Januari","Februari","Maret","April","Mei","Juni","July","Agustus","September","Oktober","November","Desember");
							for ($b=0; $b<12; $b++) {
								$bulan = $b+1;
								echo '<option value='.sprintf("%02d", $bulan).'>'.$bln[$b].'</option>';
							}
							?>
						</select>
					</div>
					<div class="col-md-4">
						<select name="tahun" class="form-control" required>
							<option value="">Tahun Lahir</option>
							<?php
							$tahun = date("Y");
							for ($thn=$tahun-20; $thn<$tahun; $thn++) {
								$bulan = $b+1;
								echo '<option value='.$thn.'>'.$thn.'</option>';
							}
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<select name="jenis_kelamin" class="form-control" required>
						<option value="">Jenis Kelamin</option>
						<option value="Laki-Laki">Laki-Laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</div>
				<div class="form-group">
					<input placeholder="Nomor Whatsapp / WA Aktif" type="number" name="hp" class="form-control" min="0" required/>
				</div>
				<div class="form-group">
					<button type="submit" class="download-btn"><i class="icofont-paper"></i> DAFTAR SEKARANG</button>
				</div>
			</form>
			<div class="alert alert-info">
			<div class="row">
				<div class="col-md-2">
					<i class="icofont-info-circle icofont-3x"></i> 
				</div>
				<div class="col-md-10">
					Instruksi selanjutnya akan di berikan setelah Anda selesai melakukan pendaftaran Online.
				</div>
				</div>
			</div>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
  
   <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter" data-aos="fade-up">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Dapatkan informasi terbaru, masukkan email Anda di bawah ini.</h4>
            
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

<!--    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact" data-aos="fade-up">
            <h3>Appland</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="100">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="200">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="300">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>
-->
    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span><?=$row_title['pengaturan_value']?></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/ -->
        Designed by <a href="https://fatoni.xyz/">Faliqh</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>