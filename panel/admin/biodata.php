<div class="content">
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">Biodata Diri</h4>
		</div>
		<div class="card">
			<div class="card-header">
				<div class="card-title">Lengkapi informasi umum tentang biodata kamu</div>
			</div>
			<form method="post" action="">
				<div class="card-body">
					<?php
					$get_id = $_GET['id'];
					
					$sql0 = mysqli_query($koneksi, "SELECT * FROM calon_siswa WHERE siswa_id='$get_id'");
					$row0 = mysqli_fetch_assoc($sql0);
						
					$sql = mysqli_query($koneksi, "SELECT * FROM calon_siswa_biodata WHERE siswa_id='$get_id'");
					$biodata = mysqli_fetch_assoc($sql);
					
					
					if(isset($_POST['nama_siswa'])){
						$tanggal_daftar		= date("Y-m-d");
						$nik				= $_POST['nik'];
						$nisn				= $_POST['nisn'];
						//$nama_siswa		= $_POST['nama_siswa'];
						$nama_siswa 		= mysqli_real_escape_string($koneksi, $_POST['nama_siswa']);
						$hobi				= $_POST['hobi'];
						$jenis_kelamin		= $_POST['jenis_kelamin'];
						$tempat_lahir		= $_POST['tempat_lahir'];
						$tanggal_lahir		= $_POST['tahun'].'-'.$_POST['bulan'].'-'.$_POST['tanggal'];
						$asal_sekolah		= $_POST['biodata_asal_sekolah'];
						$alamat_sekolah		= $_POST['biodata_alamat_asal_sekolah'];
						$siswa_agama		= $_POST['siswa_agama'];
						$kewarganegaraan	= $_POST['kewarganegaraan'];
						$anak_ke			= $_POST['anak_ke'];
						$jumlah_saudara		= $_POST['jumlah_saudara'];
						$alamat_siswa		= $_POST['alamat_siswa'];
						$siswa_provinsi		= $_POST['siswa_provinsi'];
						$kabupaten			= $_POST['kabupaten'];
						$kecamatan			= $_POST['kecamatan'];
						$desa				= $_POST['desa'];
						$kode_pos			= $_POST['kode_pos'];
						$nomor_hp			= $_POST['nomor_hp'];
						$tinggi_badan		= $_POST['tinggi_badan'];
						$berat_badan		= $_POST['berat_badan'];
						$riwayat_penyakit	= $_POST['riwayat_penyakit'];
						
						$update = mysqli_query($koneksi, "UPDATE calon_siswa SET siswa_nama='$nama_siswa', siswa_tanggal_lahir='$tempat_lahir', siswa_tanggal_lahir='$tanggal_lahir', siswa_no_hp='$nomor_hp' WHERE siswa_id='$get_id'") or die(mysqli_error($koneksi));
						
						if($update){
							$update2 = mysqli_query($koneksi, "UPDATE calon_siswa_biodata SET 
															biodata_nik='$nik', biodata_nisn='$nisn', biodata_hobi='$hobi', 
															biodata_asal_sekolah='$asal_sekolah', biodata_alamat_asal_sekolah='$alamat_sekolah', biodata_agama='$siswa_agama', biodata_kewarganegaraan='$kewarganegaraan', 
															biodata_anak_ke='$anak_ke', biodata_jumlah_saudara='$jumlah_saudara', 
															biodata_provinsi='$siswa_provinsi', biodata_kabupaten='$kabupaten', 
															biodata_kecamatan='$kecamatan', biodata_desa='$desa', biodata_kodepos='$kode_pos',
															biodata_alamat='$alamat_siswa', biodata_tinggi_badan='$tinggi_badan', 
															biodata_berat_badan='$berat_badan', biodata_riwayat_penyakit='$riwayat_penyakit' 
															WHERE siswa_id='$get_id'") or die(mysqli_error($koneksi));
							
							if($update2){
								$update3 = mysqli_query($koneksi, "UPDATE calon_siswa_status SET status_biodata='1' WHERE siswa_id='$get_id'") or die(mysqli_error($koneksi));
								if($update3){
									echo '<script>document.location="index.php?p=biodata&id='.$get_id.'&sukses=1";</script>';
								}else{
									echo '<script>document.location="index.php?p=biodata&id='.$get_id.'&sukses=0&3";</script>';
								}
							}else{
								echo '<script>document.location="index.php?p=biodata&id='.$get_id.'&sukses=0&2";</script>';
							}
						}else{
							echo '<script>document.location="index.php?p=biodata&id='.$get_id.'&sukses=0&1";</script>';
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
								<label class="col-sm-4 col-form-label">NIK <span class="text-warning">*</span></label>
								<div class="col-sm-8">
									<input type="number" name="nik" class="form-control" value="<?=$biodata['biodata_nik']?>" autocomplete="off" required>
									<small class="form-text text-muted"><i>
										Isi dengan 16 Digit NIK (Nomor Induk Kependudukan)</i>
									</small>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">NISN </label>
								<div class="col-sm-8">
									<input type="number" name="nisn" class="form-control" value="<?=$biodata['biodata_nisn']?>" autocomplete="off">
									<small class="form-text text-muted"><i>
										Nomor Induk Siswa Nasional</i>
									</small>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Nama Lengkap <span class="text-warning">*</span></label>
								<div class="col-sm-8">
									<input type="text" name="nama_siswa" class="form-control" onkeyup="this.value = this.value.toUpperCase()" value="<?=$row0['siswa_nama']?>" autocomplete="off" required>
									<small class="form-text text-muted"><i>
										Isi sesuai Ijazah SD/MI</i>
									</small>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Hobi</label>
								<div class="col-sm-8">
									<input type="text" name="hobi" class="form-control" value="<?=$biodata['biodata_hobi']?>" autocomplete="off">
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Jenis Kelamin <span class="text-warning">*</span></label>
								<div class="col-sm-8">
									<div class="form-group">
										<div class="custom-control custom-radio">
											<input type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="Laki-Laki" class="custom-control-input" <?php if($row0['siswa_jenis_kelamin'] == 'Laki-Laki'){ echo 'checked'; } ?> required>
											<label style="cursor:pointer" class="custom-control-label" for="jenis_kelamin1">Laki-Laki</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" name="jenis_kelamin" id="jenis_kelamin2"  value="Perempuan" class="custom-control-input" <?php if($row0['siswa_jenis_kelamin'] == 'Perempuan'){ echo 'checked'; } ?> required>
											<label style="cursor:pointer" class="custom-control-label" for="jenis_kelamin2">Perempuan</label>
										</div>
									</div>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Tempat Lahir <span class="text-warning">*</span></label>
								<div class="col-sm-8">
									<input type="text" name="tempat_lahir" class="form-control" value="<?=$row0['siswa_tempat_lahir']?>" autocomplete="off" required>
								</div>
							</div>
							
							<div class="form-group row">
								<?php
								$row_tgl = explode('-', $row0['siswa_tanggal_lahir']);
								?>
								<label class="col-sm-4 col-form-label">Tanggal Lahir <span class="text-warning">*</span></label>
								<div class="col-md-2">
									<div class="form-group form-group-default">
										<label>Tanggal</label>
										<select name="tanggal" class="form-control">
											<?php
											for($t=1; $t<=31; $t++){
												echo '<option value="'.sprintf("%02d", $t).'" ';
												if($row_tgl[2] == sprintf("%02d", $t)){ echo 'selected'; }
												echo '>'.sprintf("%02d", $t).'</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group form-group-default">
										<label>Bulan</label>
										<select name="bulan" class="form-control">
											<?php
											$bln = array("Januari","Februari","Maret","April","Mei","Juni","July","Agustus","September","Oktober","November","Desember");
											for ($b=0; $b<12; $b++) {
												$bulan = $b+1;
												echo '<option value="'.sprintf("%02d", $bulan).'" ';
												if($row_tgl[1] == sprintf("%02d", $bulan)){ echo 'selected'; }
												echo '>'.$bln[$b].'</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group form-group-default">
										<label>Tahun</label>
										<select name="tahun" class="form-control">
											<?php
											$tahun = date("Y");
											for ($thn=$tahun-20; $thn<$tahun; $thn++) {
												$bulan = $b+1;
												echo '<option value="'.$thn.'" ';
												if($row_tgl[0] == $thn){ echo 'selected'; }
												echo '>'.$thn.'</option>';
											}
											?>
										</select>
									</div>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Asal Sekolah <span class="text-warning">*</span></label>
								<div class="col-sm-8">
									<input type="text" name="biodata_asal_sekolah" class="form-control" value="<?=$biodata['biodata_asal_sekolah']?>">
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Alamat Sekolah <span class="text-warning">*</span></label>
								<div class="col-sm-8">
									<input type="text" name="biodata_alamat_asal_sekolah" class="form-control" value="<?=$biodata['biodata_alamat_asal_sekolah']?>">
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Agama <span class="text-warning">*</span></label>
								<div class="col-sm-8">
									<div class="form-group form-group-default">
										<label>Pilih Agama</label>
										<select name="siswa_agama" class="form-control">
											<?php
											$agama = mysqli_query($koneksi, "SELECT * FROM agama order by id asc");
											while($data_agama = mysqli_fetch_assoc($agama)){
												echo '<option value="'.$data_agama['id'].'" ';
												if($data_agama['id'] == $biodata['biodata_agama']){ echo 'selected'; }
												echo '>'.$data_agama['agama_nama'].'</option>';
											}
											?>
										</select>
									</div>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Kewarganegaraan <span class="text-warning">*</span></label>
								<div class="col-sm-8">
									<input type="text" name="kewarganegaraan" class="form-control" value="<?=$biodata['biodata_kewarganegaraan']?>" autocomplete="off" required>
								</div>
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Anak ke <span class="text-warning">*</span></label>
								<div class="col-sm-8">
									<input type="number" name="anak_ke" class="form-control" value="<?=$biodata['biodata_anak_ke']?>" autocomplete="off" required>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Jumlah Saudara <span class="text-warning">*</span></label>
								<div class="col-sm-8">
									<input type="number" name="jumlah_saudara" class="form-control" value="<?=$biodata['biodata_jumlah_saudara']?>" autocomplete="off" required>
								</div>
							</div>
							
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Provinsi <span class="text-warning">*</span></label>
								<div class="col-sm-8">
									<div class="form-group form-group-default">
										<select name="siswa_provinsi" id="provinsi" class="form-control">
											<option value="">Pilih provinsi</option>
											<?php
											$provinsi = mysqli_query($koneksi, "SELECT * FROM provinsi");
											while($data_provinsi = mysqli_fetch_assoc($provinsi)){
												echo '<option value="'.$data_provinsi['prov_id'].'" ';
												if($data_provinsi['prov_id'] == $biodata['biodata_provinsi']){ echo 'selected'; }
												echo '>'.$data_provinsi['prov_nama'].'</option>';
											}
											?>
										</select>
									</div>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Kabupaten <span class="text-warning">*</span></label>
								<div class="col-sm-8">
									<div class="form-group form-group-default">
										<label>Pilih Kabupaten</label>
										<select name="kabupaten" id="kabupaten" class="form-control">
											<option value="">Pilih kabupaten</option>
											<?php
											$kab = mysqli_query($koneksi, "SELECT * FROM kabupaten");
											while($data_kab = mysqli_fetch_assoc($kab)){
												echo '<option value="'.$data_kab['kab_id'].'" ';
												if($data_kab['kab_id'] == $biodata['biodata_kabupaten']){ echo 'selected'; }
												echo '>'.$data_kab['kab_nama'].'</option>';
											}
											?>
										</select>
									</div>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Kecamatan <span class="text-warning">*</span></label>
								<div class="col-sm-8">
									<div class="form-group form-group-default">
										<label>Pilih Kecamatan</label>
										<select name="kecamatan" id="kecamatan" class="form-control">
											
											<?php
											if($biodata['biodata_kecamatan'] == ''){
												echo '<option value="">Pilih kabupaten dahulu</option>';
											}else{
												$kec = $biodata['biodata_kecamatan'];
												$k = mysqli_query($koneksi, "SELECT * FROM kecamatan");
												while($kk = mysqli_fetch_assoc($k)){
													echo '<option value="'.$kk['kec_id'].'" ';
													if($kk['kec_id'] == $biodata['biodata_kecamatan']){ echo 'selected'; }
													echo '>'.$kk['kec_nama'].'</option>';
												}
											}
											?>
										</select>
									</div>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Desa <span class="text-warning">*</span></label>
								<div class="col-sm-8">
									<div class="form-group form-group-default">
										<label>Pilih Desa</label>
										<select name="desa" id="desa" class="form-control">
											<?php
											if($biodata['biodata_desa'] == ''){
												echo '<option value="">Pilih kecamatan dahulu</option>';
											}else{
												$des = $biodata['biodata_desa'];
												$d = mysqli_query($koneksi, "SELECT * FROM desa");
												while($dd = mysqli_fetch_assoc($d)){
													echo '<option value="'.$dd['des_id'].'" ';
													if($dd['des_id'] == $biodata['biodata_desa']){ echo 'selected'; }
													echo '>'.$dd['des_nama'].'</option>';
												}
											}
											?>
										</select>
									</div>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Kode Pos </label>
								<div class="col-sm-8">
									<input type="number" name="kode_pos" class="form-control" value="<?=$biodata['biodata_kodepos']?>" autocomplete="off">
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Alamat Siswa <span class="text-warning">*</span></label>
								<div class="col-sm-8">
									<textarea name="alamat_siswa" class="form-control" required><?=$biodata['biodata_alamat']?></textarea>
								</div>
							</div>
							
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Nomor HP <span class="text-warning">*</span></label>
								<div class="col-sm-8">
									<input type="number" name="nomor_hp" class="form-control" value="<?=$row0['siswa_no_hp']?>" autocomplete="off" required>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Tinggi Badan </label>
								<div class="col-sm-8">
									<input type="number" name="tinggi_badan" class="form-control" value="<?=$biodata['biodata_tinggi_badan']?>"  autocomplete="off" >
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Berat Badan </label>
								<div class="col-sm-8">
									<input type="number" name="berat_badan" class="form-control" value="<?=$biodata['biodata_berat_badan']?>"  autocomplete="off" >
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Riwayat Penyakit </label>
								<div class="col-sm-8">
									<textarea name="riwayat_penyakit" class="form-control" ><?=$biodata['biodata_riwayat_penyakit']?></textarea>
									<small class="form-text text-muted"><i>
										Isi sesuai dengan keadaan pribadi</i>
									</small>
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