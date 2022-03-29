<div class="content">
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">Prestasi</h4>
		</div>
		<div class="card">
			<div class="card-header">
				<div class="card-title">Prestasi Akademis atau Non-Akademis yang pernah diraih.</div>
			</div>
			<form method="post" action="">
				<div class="card-body">
					<?php
					$get_id = $_GET['id'];
					$sql = mysqli_query($koneksi, "SELECT * FROM calon_siswa_prestasi WHERE siswa_id='$get_id'");
					$pres = mysqli_fetch_assoc($sql);
					
					
					if(isset($_POST['prestasi_nama'])){
						$prestasi_nama     = $_POST['prestasi_nama'];
						$prestasi_tingkat  = $_POST['prestasi_tingkat'];
						$prestasi_juara_ke = $_POST['prestasi_juara'];
						
						$update = mysqli_query($koneksi, "UPDATE calon_siswa_prestasi SET prestasi_nama='$prestasi_nama', 
															prestasi_tingkat='$prestasi_tingkat', prestasi_juara_ke='$prestasi_juara_ke'
															WHERE siswa_id='$get_id'") or die(mysqli_error($koneksi));
						
						if($update){
							$update2 = mysqli_query($koneksi, "UPDATE calon_siswa_status SET status_prestasi='1' WHERE siswa_id='$get_id'") or die(mysqli_error($koneksi));
							
							if($update2){
								echo '<script>document.location="index.php?p=prestasi&id='.$get_id.'&sukses=1";</script>';
							}else{
								echo '<script>document.location="index.php?p=prestasi&id='.$get_id.'&sukses=0&2";</script>';
							}
						}else{
							echo '<script>document.location="index.php?p=prestasi&id='.$get_id.'&sukses=0&1";</script>';
						}
									
					}
					?>
					
					<?php
					if(isset($_GET['sukses'])){
						if($_GET['sukses'] == 1){
							echo '<div class="alert alert-danger bg-primary text-white">Hore...! Data kamu berhasil di simpan.</div>';
						}else if($_GET['sukses'] == 0){
							echo '<div class="alert alert-primary bg-danger text-white">Ups...! Ada kesalahan saat proses update data.</div>';
						}
					}
					?>
					
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Nama Prestasi</label>
								<div class="col-sm-10">
									<input type="text" name="prestasi_nama" class="form-control" value="<?=$pres['prestasi_nama']?>" autocomplete="off" >
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Tingkat</label>
								<div class="col-sm-10">
									<div class="form-group form-group-default">
										<label>Tingkat</label>
										<select name="prestasi_tingkat" class="form-control">
											<?php
											$tingkat = mysqli_query($koneksi, "SELECT * FROM tingkat");
											while($tingkat_prestasi = mysqli_fetch_assoc($tingkat)){
												echo '<option value="'.$tingkat_prestasi['id_tingkat'].'" ';
												if($tingkat_prestasi['id_tingkat'] == $pres['prestasi_tingkat']){}
												echo '>'.$tingkat_prestasi['nama_tingkat'].'</option>';
											}
											?>
										</select>
									</div>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Juara ke</label>
								<div class="col-sm-10">
									<input type="number" name="prestasi_juara" class="form-control" value="<?=$pres['prestasi_juara_ke']?>" autocomplete="off">
								</div>
							</div>
						</div>
					</div>
					
					
				</div>
				<div class="card-action text-center">
					<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> SIMPAN DATA</button>
				</div>
			</form>
		</div>
	</div>
</div>