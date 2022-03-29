<div class="content">
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">Pilihan Jurusan</h4>
		</div>
		<div class="card">
			<div class="card-header">
				<div class="card-title">Yuk pilih Jurusan favoritmu.</div>
			</div>
			<form method="post" action="">
				<div class="card-body">
					<?php
					$get_id = $_GET['id'];
					$sql = mysqli_query($koneksi, "SELECT * FROM calon_siswa_jurusan WHERE siswa_id='$get_id'");
					$jur = mysqli_fetch_assoc($sql);
					
					
					if(isset($_POST['jurusan1'])){
						$jurusan_1 = $_POST['jurusan1'];
						$jurusan_2 = $_POST['jurusan2'];
						
						$update = mysqli_query($koneksi, "UPDATE calon_siswa_jurusan SET jurusan_1='$jurusan_1', jurusan_2='$jurusan_2'
															WHERE siswa_id='$get_id'") or die(mysqli_error($koneksi));
						
						if($update){
							$update2 = mysqli_query($koneksi, "UPDATE calon_siswa_status SET status_jurusan='1' WHERE siswa_id='$get_id'") or die(mysqli_error($koneksi));
							
							if($update2){
								echo '<script>document.location="index.php?p=jurusan&id='.$get_id.'&sukses=1";</script>';
							}else{
								echo '<script>document.location="index.php?p=jurusan&id='.$get_id.'&sukses=0&2";</script>';
							}
						}else{
							echo '<script>document.location="index.php?p=jurusan&id='.$get_id.'&sukses=0&1";</script>';
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
								<label class="col-sm-2 col-form-label">Pilihan 1 <span class="text-warning">*</span></label>
								<div class="col-sm-10">
									<div class="form-group form-group-default">
										<label>Pilih Jurusan 1</label>
										<select name="jurusan1" class="form-control">
											<?php
											$jurusan = mysqli_query($koneksi, "SELECT * FROM jurusan");
											while($jurusan_satu = mysqli_fetch_assoc($jurusan)){
												echo '<option value="'.$jurusan_satu['id_jurusan'].'" ';
												if($jurusan_satu['id_jurusan'] == $jur['jurusan_1']){ echo 'selected'; }
												echo '>'.$jurusan_satu['nama_jurusan'].'</option>';
											}
											?>
										</select>
									</div>
								</div>
							</div>
																			
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Pilihan 2 </label>
								<div class="col-sm-10">
									<div class="form-group form-group-default">
										<label>Pilih Jurusan 1</label>
										<select name="jurusan2" class="form-control">
											<?php
											$jurusan = mysqli_query($koneksi, "SELECT * FROM jurusan");
											while($jurusan_dua = mysqli_fetch_assoc($jurusan)){
												echo '<option value="'.$jurusan_dua['id_jurusan'].'" ';
												if($jurusan_dua['id_jurusan'] == $jur['jurusan_2']){ echo 'selected'; }
												echo '>'.$jurusan_dua['nama_jurusan'].'</option>';
											}
											?>
										</select>
									</div>
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