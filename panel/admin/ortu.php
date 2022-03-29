<div class="content">
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">Data Orang Tua</h4>
		</div>
		<div class="card">
			<div class="card-header">
				<div class="card-title">Yuk Lnegkapi Data orang tua dan wali.</div>
			</div>
			<form method="post" action="">
				<div class="card-body">
					<?php
					$get_id = $_GET['id'];
					$sql = mysqli_query($koneksi, "SELECT * FROM calon_siswa_ortu WHERE siswa_id='$get_id'");
					$ortu = mysqli_fetch_assoc($sql);
					
					
					if(isset($_POST['nik_ayah'])){
						$nik_ayah			= mysqli_real_escape_string($koneksi, $_POST['nik_ayah']);
						$nama_ayah			= mysqli_real_escape_string($koneksi, $_POST['nama_ayah']);
						//$nama_ayah = addslashes($_POST['nama_ayah']);
						$pendidikan_ayah	= mysqli_real_escape_string($koneksi, $_POST['pendidikan_ayah']);
						$pekerjaan_ayah		= mysqli_real_escape_string($koneksi, $_POST['pekerjaan_ayah']);
						$nomor_hp_ayah		= mysqli_real_escape_string($koneksi, $_POST['nomor_hp_ayah']);
						$nik_ibu			= mysqli_real_escape_string($koneksi, $_POST['nik_ibu']);
						$nama_ibu			= mysqli_real_escape_string($koneksi, $_POST['nama_ibu']);
						//$nama_ibu = addslashes ($_POST['nama_ibu']);
						$pendidikan_ibu		= $_POST['pendidikan_ibu'];
						$pekerjaan_ibu		= $_POST['pekerjaan_ibu'];
						$nomor_hp_ibu		= $_POST['nomor_hp_ibu'];
						$alamat_orang_tua	= $_POST['alamat_orang_tua'];
						$nik_wali			= $_POST['nik_wali'];
						$nama_wali			= mysqli_real_escape_string($koneksi, $_POST['nama_wali']);
						//$nama_wali = addslashes($_POST['nama_wali']);
						$pendidikan_wali	= $_POST['pendidikan_wali'];
						$pekerjaan_wali		= $_POST['pekerjaan_wali'];
						$nomor_hp_wali		= $_POST['nomor_hp_wali'];
						$alamat_wali		= $_POST['alamat_wali'];
						
						$update = mysqli_query($koneksi, "UPDATE calon_siswa_ortu SET ortu_nik_ayah='$nik_ayah', ortu_nama_ayah='$nama_ayah', 
															ortu_pendidikan_ayah='$pendidikan_ayah', ortu_pekerjaan_ayah='$pekerjaan_ayah', 
															ortu_no_hp_ayah='$nomor_hp_ayah', ortu_nik_ibu='$nik_ibu', ortu_nama_ibu='$nama_ibu', 
															ortu_pendidikan_ibu='$pendidikan_ibu', ortu_pekerjaan_ibu='$pekerjaan_ibu', 
															ortu_no_hp_ibu='$nomor_hp_ibu', ortu_alamat='$alamat_orang_tua', ortu_nik_wali='$nik_wali', ortu_nama_wali='$nama_wali', ortu_pendidikan_wali='$pendidikan_wali', 
															ortu_pekerjaan_wali='$pekerjaan_wali', ortu_no_hp_wali='$nomor_hp_wali', 
															ortu_alamat_wali='$alamat_wali' 
															WHERE siswa_id='$get_id'") or die(mysqli_error($koneksi));
						
						if($update){
							$update2 = mysqli_query($koneksi, "UPDATE calon_siswa_status SET status_ortu='1' WHERE siswa_id='$get_id'") or die(mysqli_error($koneksi));
							
							if($update2){
								echo '<script>document.location="index.php?p=ortu&id='.$get_id.'&sukses=1";</script>';
							}else{
								echo '<script>document.location="index.php?p=ortu&id='.$get_id.'&sukses=0&2";</script>';
							}
						}else{
							echo '<script>document.location="index.php?p=ortu&id='.$get_id.'&sukses=0&1";</script>';
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
						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">NIK Ayah</label>
								<div class="col-sm-8">
									<input type="number" name="nik_ayah" class="form-control" value="<?=$ortu['ortu_nik_ayah']?>" autocomplete="off">
									<small class="form-text text-muted"><i>
										Isi dengan 16 Digit NIK (Nomor Induk Kependudukan)</i>
									</small>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Nama Ayah <span class="text-warning">*</span></label>
								<div class="col-sm-8">
									<input type="text" name="nama_ayah" class="form-control" value="<?=$ortu['ortu_nama_ayah']?>" autocomplete="off" required>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Pendidikan Ayah <span class="text-warning">*</span></label>
								<div class="col-sm-8">
									<div class="form-group form-group-default">
										<label>Pilih Pendidikan Terakhir</label>
										<select name="pendidikan_ayah" class="form-control">
											<?php
											$pendidikan = mysqli_query($koneksi, "SELECT * FROM pendidikan");
											while($pendidikan_ayah = mysqli_fetch_assoc($pendidikan)){
												echo '<option value="'.$pendidikan_ayah['pend_id'].'" ';
												if($pendidikan_ayah['pend_id'] == $ortu['ortu_pendidikan_ayah']){ echo 'selected'; }
												echo '>'.$pendidikan_ayah['pend_nama'].'</option>';
											}
											?>
										</select>
									</div>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Pekerjaan Ayah <span class="text-warning">*</span></label>
								<div class="col-sm-8">
									<div class="form-group form-group-default">
										<label>Pilih Pekerjaan</label>
										<select name="pekerjaan_ayah" class="form-control">
											<?php
											$pekerjaan = mysqli_query($koneksi, "SELECT * FROM pekerjaan");
											while($pekerjaan_ayah = mysqli_fetch_assoc($pekerjaan)){
												echo '<option value="'.$pekerjaan_ayah['pek_id'].'" ';
												if($pekerjaan_ayah['pek_id'] == $ortu['ortu_pekerjaan_ayah']){ echo 'selected'; }
												echo '>'.$pekerjaan_ayah['pek_nama'].'</option>';
											}
											?>
										</select>
									</div>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Nomor HP Ayah <span class="text-warning">*</span></label>
								<div class="col-sm-8">
									<input type="number" name="nomor_hp_ayah" class="form-control" value="<?=$ortu['ortu_no_hp_ayah']?>"  autocomplete="off" required>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">NIK Ibu</label>
								<div class="col-sm-8">
									<input type="number" name="nik_ibu" class="form-control" value="<?=$ortu['ortu_nik_ibu']?>"  autocomplete="off">
									<small class="form-text text-muted"><i>
										Isi dengan 16 Digit NIK (Nomor Induk Kependudukan)</i>
									</small>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Nama Ibu <span class="text-warning">*</span></label>
								<div class="col-sm-8">
									<input type="text" name="nama_ibu" class="form-control" value="<?=$ortu['ortu_nama_ibu']?>"  autocomplete="off" required>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Pendidikan Ibu <span class="text-warning">*</span></label>
								<div class="col-sm-8">
									<div class="form-group form-group-default">
										<label>Pilih Pendidikan Terakhir</label>
										<select name="pendidikan_ibu" class="form-control">
											<?php
											$pendidikan = mysqli_query($koneksi, "SELECT * FROM pendidikan");
											while($pendidikan_ibu = mysqli_fetch_assoc($pendidikan)){
												echo '<option value="'.$pendidikan_ibu['pend_id'].'" ';
												if($pendidikan_ibu['pend_id'] == $ortu['ortu_pendidikan_ibu']){ echo 'selected'; }
												echo '>'.$pendidikan_ibu['pend_nama'].'</option>';
											}
											?>
										</select>
									</div>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Pekerjaan Ibu <span class="text-warning">*</span></label>
								<div class="col-sm-8">
									<div class="form-group form-group-default">
										<label>Pilih Pekerjaan</label>
										<select name="pekerjaan_ibu" class="form-control">
											<?php
											$pekerjaan = mysqli_query($koneksi, "SELECT * FROM pekerjaan");
											while($pekerjaan_ibu = mysqli_fetch_assoc($pekerjaan)){
												echo '<option value="'.$pekerjaan_ibu['pek_id'].'" ';
												if($pekerjaan_ibu['pek_id'] == $ortu['ortu_pekerjaan_ibu']){ echo 'selected'; }
												echo '>'.$pekerjaan_ibu['pek_nama'].'</option>';
											}
											?>
										</select>
									</div>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Nomor HP Ibu <span class="text-warning">*</span></label>
								<div class="col-sm-8">
									<input type="number" name="nomor_hp_ibu" class="form-control" value="<?=$ortu['ortu_no_hp_ibu']?>" autocomplete="off" required>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Alamat Orang Tua <span class="text-warning">*</span></label>
								<div class="col-sm-8">
									<textarea name="alamat_orang_tua" class="form-control" required><?=$ortu['ortu_alamat']?></textarea>
								</div>
							</div>
							
						</div>
						
						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">NIK Wali</label>
								<div class="col-sm-8">
									<input type="number" name="nik_wali" class="form-control" value="<?=$ortu['ortu_nik_wali']?>" autocomplete="off">
									<small class="form-text text-muted"><i>
										Isi dengan 16 Digit NIK (Nomor Induk Kependudukan)</i>
									</small>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Nama Wali <span class="text-warning">*</span></label>
								<div class="col-sm-8">
									<input type="text" name="nama_wali" class="form-control" value="<?=$ortu['ortu_nama_wali']?>" autocomplete="off" required>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Pendidikan Wali <span class="text-warning">*</span></label>
								<div class="col-sm-8">
									<div class="form-group form-group-default">
										<label>Pilih Pendidikan Terakhir</label>
										<select name="pendidikan_wali" class="form-control">
											<?php
											$pendidikan = mysqli_query($koneksi, "SELECT * FROM pendidikan");
											while($pendidikan_wali = mysqli_fetch_assoc($pendidikan)){
												echo '<option value="'.$pendidikan_wali['pend_id'].'" ';
												if($pendidikan_wali['pend_id'] == $ortu['ortu_pendidikan_wali']){ echo 'selected'; }
												echo '>'.$pendidikan_wali['pend_nama'].'</option>';
											}
											?>
										</select>
									</div>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Pekerjaan Wali <span class="text-warning">*</span></label>
								<div class="col-sm-8">
									<div class="form-group form-group-default">
										<label>Pilih Pekerjaan</label>
										<select name="pekerjaan_wali" class="form-control">
											<?php
											$pekerjaan = mysqli_query($koneksi, "SELECT * FROM pekerjaan");
											while($pekerjaan_wali = mysqli_fetch_assoc($pekerjaan)){
												echo '<option value="'.$pekerjaan_wali['pek_id'].'" ';
												if($pekerjaan_wali['pek_id'] == $ortu['ortu_pekerjaan_wali']){ echo 'selected'; }
												echo '>'.$pekerjaan_wali['pek_nama'].'</option>';
											}
											?>
										</select>
									</div>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Nomor HP Wali <span class="text-warning">*</span></label>
								<div class="col-sm-8">
									<input type="number" name="nomor_hp_wali" class="form-control" value="<?=$ortu['ortu_no_hp_wali']?>" autocomplete="off" required>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Alamat Wali <span class="text-warning">*</span></label>
								<div class="col-sm-8">
									<textarea name="alamat_wali" class="form-control" required><?=$ortu['ortu_alamat_wali']?></textarea>
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