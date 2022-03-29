<div class="content">
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">Konfirmasi Pembayaran</h4>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<div class="card-head-row">
							<div class="card-title">Form Konfirmasi</div>
						</div>
					</div>
					<div class="card-body">
						
						<?php
						if(isset($_POST['submit'])){
							$target_dir = "upload/";
							$target_file = $target_dir . $_SESSION['id'] .'-'. basename($_FILES["konfirmasi_foto"]["name"]);
							$uploadOk = 1;
							$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

							  $check = getimagesize($_FILES["konfirmasi_foto"]["tmp_name"]);
							  if($check !== false) {
								$uploadOk = 1;
							  } else {
								echo '<div class="alert alert-danger">File is not an image.</div>';
								$uploadOk = 0;
							  }
							

							if ($_FILES["konfirmasi_foto"]["size"] > 500000) {
							 echo '<div class="alert alert-danger">Sorry, your file is too large.</div>';
							  $uploadOk = 0;
							}

							if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
							&& $imageFileType != "gif" ) {
							  echo '<div class="alert alert-danger">Sorry, only JPG, JPEG, PNG & GIF files are allowed.</div>';
							  $uploadOk = 0;
							}

							if ($uploadOk == 0) {
							  echo '<div class="alert alert-danger">Sorry, your file was not uploaded.</div>';
							} else {
							  if (move_uploaded_file($_FILES["konfirmasi_foto"]["tmp_name"], $target_file)) {
								$id = $_SESSION['id'];
								$konfirmasi_tanggal = $_POST['konfirmasi_tanggal'];
								$konfirmasi_dari_bank = $_POST['konfirmasi_dari_bank'];
								$konfirmasi_ke_bank = $_POST['konfirmasi_ke_bank'];
								$konfirmasi_nominal = $_POST['konfirmasi_nominal'];
								$konfirmasi_foto = $_SESSION['id'] .'-'. basename($_FILES["konfirmasi_foto"]["name"]);
								
								$in = mysqli_query($koneksi, "INSERT INTO calon_siswa_konfirmasi(konfirmasi_tanggal, siswa_id, konfirmasi_dari_bank, konfirmasi_ke_bank, konfirmasi_nominal, konfirmasi_foto, konfirmasi_status) VALUES('$konfirmasi_tanggal', '$id', '$konfirmasi_dari_bank', '$konfirmasi_ke_bank', '$konfirmasi_nominal', '$konfirmasi_foto', '0')");
								
								if($in){
									echo '<div class="alert alert-success">Terimah kasih, data sudah di simpan dan dalam pengecekan admin.</div>';
								}else{
									echo '<div class="alert alert-danger">Gagal menyimpan data.</div>';
								}
								
								
							  } else {
								echo '<div class="alert alert-danger">Sorry, there was an error uploading your file.</div>';
							  }
							}
						}
						?>
						
						<form method="post" action="" enctype="multipart/form-data">
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">TANGGAL TRANSFER <span class="text-warning">*</span></label>
								<div class="col-sm-10">
									<input type="date" name="konfirmasi_tanggal" class="form-control" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">DARI BANK <span class="text-warning">*</span></label>
								<div class="col-sm-10">
									<select name="konfirmasi_dari_bank" class="form-control" required>
										<option value="">Pilih BANK Anda</option>
										<option value="BCA">BCA</option>
										<option value="BRI">BRI</option>
										<option value="BNI">BNI</option>
										<option value="Mandiri">Mandiri</option>
										<option value="Jatim">Jatim</option>
										<option value="BTN">BTN</option>
										<option value="Panin">Panin</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">KE BANK <span class="text-warning">*</span></label>
								<div class="col-sm-10">
									<select name="konfirmasi_ke_bank" class="form-control" required>
										<option value="">Pilih BANK Tujuan Transfer</option>
										<option value="BCA">BCA</option>
										<option value="BRI">BRI</option>
										<option value="BNI">BNI</option>
										<option value="Mandiri">Mandiri</option>
										<option value="Jatim">Jatim</option>
										<option value="BTN">BTN</option>
										<option value="Panin">Panin</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">NOMINAL TRANSFER <span class="text-warning">*</span></label>
								<div class="col-sm-10">
									<input type="number" name="konfirmasi_nominal" class="form-control" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">FOTO BUKTI TRANSFER <span class="text-warning">*</span></label>
								<div class="col-sm-10">
									<input type="file" name="konfirmasi_foto" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">&nbsp;</label>
								<div class="col-sm-10">
									<input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
								</div>
							</div>
						</form>
						
					</div>
				</div>
			</div>
		</div>

</div>