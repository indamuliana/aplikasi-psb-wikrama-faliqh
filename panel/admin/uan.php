<div class="content">
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">Nilai UAN</h4>
		</div>
		<div class="card">
			<div class="card-header">
				<div class="card-title">Lengkapi Data Nilai Ujian Akhir Nasional</div>
			</div>
			<form method="post" action="">
				<div class="card-body">
					<?php
					$get_id = $_GET['id'];
					$sql = mysqli_query($koneksi, "SELECT * FROM calon_siswa_nilai_uan WHERE siswa_id='$get_id'");
					$uan = mysqli_fetch_assoc($sql);
					
					
					if(isset($_POST['uan_bahasa_indonesia'])){
						$uan_bahasa_indonesia = $_POST['uan_bahasa_indonesia'];
						$uan_matematika		  = $_POST['uan_matematika'];
						$uan_bahasa_inggris   = $_POST['uan_bahasa_inggris'];
						
						$update = mysqli_query($koneksi, "UPDATE calon_siswa_nilai_uan SET uan_bahasa_indonesia='$uan_bahasa_indonesia', uan_matematika='
																$uan_matematika', uan_bahasa_inggris='$uan_bahasa_inggris'
															WHERE siswa_id='$get_id'") or die(mysqli_error($koneksi));
						
						if($update){
							$update2 = mysqli_query($koneksi, "UPDATE calon_siswa_status SET status_uan='1' WHERE siswa_id='$get_id'") or die(mysqli_error($koneksi));
							
							if($update2){
								echo '<script>document.location="index.php?p=uan&id='.$get_id.'&sukses=1";</script>';
							}else{
								echo '<script>document.location="index.php?p=uan&id='.$get_id.'&sukses=0&2";</script>';
							}
						}else{
							echo '<script>document.location="index.php?p=uan&id='.$get_id.'&sukses=0&1";</script>';
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
								<label class="col-sm-2 col-form-label">Bahasa Indonesia <span class="text-warning">*</span></label>
								<div class="col-sm-10" >
									<input type="text" name="uan_bahasa_indonesia" class="form-control" value="<?=$uan['uan_bahasa_indonesia']?>" autocomplete="off" required>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Bahasa Inggris <span class="text-warning">*</span></label>
								<div class="col-sm-10">
									<input type="text" name="uan_matematika" class="form-control" value="<?=$uan['uan_matematika']?>" autocomplete="off" required>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Matematika <span class="text-warning">*</span></label>
								<div class="col-sm-10">
									<input type="text" name="uan_bahasa_inggris" class="form-control" value="<?=$uan['uan_bahasa_inggris']?>" autocomplete="off" required>
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