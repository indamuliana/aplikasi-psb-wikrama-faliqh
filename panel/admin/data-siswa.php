<div class="content">
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">Data Lengkap Siswa</h4>
		</div>
		<div class="row">
			<div class="col-md-5">
				<div class="card">
					<div class="card-header">
						<div class="card-title">Kelengkapan Biodata</div>
					</div>
					<div class="card-body">
						<?php
						$get_id = $_GET['id'];
						$sql0 = mysqli_query($koneksi, "SELECT * FROM calon_siswa WHERE siswa_id='$get_id'");
						$row0 = mysqli_fetch_assoc($sql0);
						
						$sql = mysqli_query($koneksi, "SELECT * FROM calon_siswa_status WHERE siswa_id='$get_id'");
						$lengkap = mysqli_fetch_assoc($sql);
						?>
						<div class="d-flex">
							<div class="avatar avatar-online">
								<?php
								if($lengkap['status_biodata'] == 1){
									echo '<span class="avatar-title rounded-circle border border-white bg-success"><i class="fas fa-thumbs-up"></i></span>';
								}else{
									echo '<span class="avatar-title rounded-circle border border-white bg-danger"><i class="fa fa-times-circle"></i></span>';
								}
								?>
								
							</div>
							<div class="flex-1 ml-3 pt-1">
								<h5 class="text-uppercase fw-bold mb-1">Biodata Diri 
								<?php
								if($lengkap['status_biodata'] == 1){
									echo '<span class="text-success pl-3">lengkap</span>';
								}else{
									echo '<span class="text-warning pl-3">Belum lengkap</span>';
								}
								?>
								</h5>
								<span class="text-muted">Informasi umum tentang biodata siswa</span>
							</div>
							<div class="float-right pt-1">
								<?php
								if($lengkap['status_biodata'] == 0){
									echo '<small class="text-muted"><a href="index.php?p=biodata&id='.$row0['siswa_id'].'" class="btn btn-primary btn-sm">Lengkapi</a></small>';
								}else{
									echo '<small class="text-muted"><a href="index.php?p=biodata&id='.$row0['siswa_id'].'" class="btn btn-success btn-sm">Update Ulang</a></small>';
								}
								?>
								
							</div>
						</div>
						<div class="separator-dashed"></div>
						<div class="d-flex">
							<div class="avatar avatar-online">
								<?php
								if($lengkap['status_uan'] == 1){
									echo '<span class="avatar-title rounded-circle border border-white bg-success"><i class="fas fa-thumbs-up"></i></span>';
								}else{
									echo '<span class="avatar-title rounded-circle border border-white bg-danger"><i class="fa fa-times-circle"></i></span>';
								}
								?>
							</div>
							<div class="flex-1 ml-3 pt-1">
								<h5 class="text-uppercase fw-bold mb-1">Nilai UAN 
								<?php
								if($lengkap['status_uan'] == 1){
									echo '<span class="text-success pl-3">lengkap</span>';
								}else{
									echo '<span class="text-warning pl-3">Belum lengkap</span>';
								}
								?>
								</h5>
								<span class="text-muted">Data Nilai Ujian Akhir Nasional</span>
							</div>
							<div class="float-right pt-1">
								<?php
								if($lengkap['status_uan'] == 0){
									echo '<small class="text-muted"><a href="index.php?p=uan&id='.$row0['siswa_id'].'" class="btn btn-primary btn-sm">Lengkapi</a></small>';
								}else{
									echo '<small class="text-muted"><a href="index.php?p=uan&id='.$row0['siswa_id'].'" class="btn btn-success btn-sm">Update Ulang</a></small>';
								}
								?>
							</div>
						</div>
						<div class="separator-dashed"></div>
						<div class="d-flex">
							<div class="avatar avatar-online">
								<?php
								if($lengkap['status_jurusan'] == 1){
									echo '<span class="avatar-title rounded-circle border border-white bg-success"><i class="fas fa-thumbs-up"></i></span>';
								}else{
									echo '<span class="avatar-title rounded-circle border border-white bg-danger"><i class="fa fa-times-circle"></i></span>';
								}
								?>
							</div>
							<div class="flex-1 ml-3 pt-1">
								<h5 class="text-uppercase fw-bold mb-1">Pilihan Jurusan 
								<?php
								if($lengkap['status_jurusan'] == 1){
									echo '<span class="text-success pl-3">lengkap</span>';
								}else{
									echo '<span class="text-warning pl-3">Belum lengkap</span>';
								}
								?>
								</h5>
								<span class="text-muted">Pilihan jurusan yang tersedia</span>
							</div>
							<div class="float-right pt-1">
								<?php
								if($lengkap['status_jurusan'] == 0){
									echo '<small class="text-muted"><a href="index.php?p=jurusan&id='.$row0['siswa_id'].'" class="btn btn-primary btn-sm">Lengkapi</a></small>';
								}else{
									echo '<small class="text-muted"><a href="index.php?p=jurusan&id='.$row0['siswa_id'].'" class="btn btn-success btn-sm">Update Ulang</a></small>';
								}
								?>
							</div>
						</div>
						<div class="separator-dashed"></div>
						<div class="d-flex">
							<div class="avatar avatar-online">
								<?php
								if($lengkap['status_prestasi'] == 1){
									echo '<span class="avatar-title rounded-circle border border-white bg-success"><i class="fas fa-thumbs-up"></i></span>';
								}else{
									echo '<span class="avatar-title rounded-circle border border-white bg-danger"><i class="fa fa-times-circle"></i></span>';
								}
								?>
							</div>
							<div class="flex-1 ml-3 pt-1">
								<h5 class="text-uppercase fw-bold mb-1">PRESTASI 
								<?php
								if($lengkap['status_prestasi'] == 1){
									echo '<span class="text-success pl-3">lengkap</span>';
								}else{
									echo '<span class="text-warning pl-3">Belum lengkap</span>';
								}
								?>
								</h5>
								<span class="text-muted">Prestasi Akademis atau Non-Akademis yang pernah diraih</span>
							</div>
							<div class="float-right pt-1">
								<?php
								if($lengkap['status_prestasi'] == 0){
									echo '<small class="text-muted"><a href="index.php?p=prestasi&id='.$row0['siswa_id'].'" class="btn btn-primary btn-sm">Lengkapi</a></small>';
								}else{
									echo '<small class="text-muted"><a href="index.php?p=prestasi&id='.$row0['siswa_id'].'" class="btn btn-success btn-sm">Update Ulang</a></small>';
								}
								?>
							</div>
						</div>
						<div class="separator-dashed"></div>
						<div class="d-flex">
							<div class="avatar avatar-online">
								<?php
								if($lengkap['status_ortu'] == 1){
									echo '<span class="avatar-title rounded-circle border border-white bg-success"><i class="fas fa-thumbs-up"></i></span>';
								}else{
									echo '<span class="avatar-title rounded-circle border border-white bg-danger"><i class="fa fa-times-circle"></i></span>';
								}
								?>
							</div>
							<div class="flex-1 ml-3 pt-1">
								<h5 class="text-uppercase fw-bold mb-1">DATA ORANG TUA 
								<?php
								if($lengkap['status_ortu'] == 1){
									echo '<span class="text-success pl-3">lengkap</span>';
								}else{
									echo '<span class="text-warning pl-3">Belum lengkap</span>';
								}
								?>
								</h5>
								<span class="text-muted">Data orang tua</span>
							</div>
							<div class="float-right pt-1">
								<?php
								if($lengkap['status_ortu'] == 0){
									echo '<small class="text-muted"><a href="index.php?p=ortu&id='.$row0['siswa_id'].'" class="btn btn-primary btn-sm">Lengkapi</a></small>';
								}else{
									echo '<small class="text-muted"><a href="index.php?p=ortu&id='.$row0['siswa_id'].'" class="btn btn-success btn-sm">Update Ulang</a></small>';
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="card">
					<div class="card-header">
						<div class="card-title">Upload Kelengkapan</div>
					</div>
					<div class="card-body">
						<div class="d-flex">
							<div class="avatar avatar-online">
								<?php
								if($lengkap['status_upload_kk'] == 1){
									echo '<span class="avatar-title rounded-circle border border-white bg-success"><i class="fas fa-thumbs-up"></i></span>';
								}else{
									echo '<span class="avatar-title rounded-circle border border-white bg-danger"><i class="fa fa-times-circle"></i></span>';
								}
								?>
								
							</div>
							<div class="flex-1 ml-3 pt-1">
								<h5 class="text-uppercase fw-bold mb-1">Upload KK
								<?php
								if($lengkap['status_upload_kk'] == 1){
									echo '<span class="text-success pl-3">Sudah Upload</span>';
								}else{
									echo '<span class="text-warning pl-3">Belum upload</span>';
								}
								?>
								</h5>
								<span class="text-muted">Upload file kartu kerluarga (KK)</span>
							</div>
							<div class="float-right pt-1">
								
							</div>
						</div>
						<div class="separator-dashed"></div>
						<div class="d-flex">
							<div class="avatar avatar-online">
								<?php
								if($lengkap['status_upload_ijasah'] == 1){
									echo '<span class="avatar-title rounded-circle border border-white bg-success"><i class="fas fa-thumbs-up"></i></span>';
								}else{
									echo '<span class="avatar-title rounded-circle border border-white bg-danger"><i class="fa fa-times-circle"></i></span>';
								}
								?>
							</div>
							<div class="flex-1 ml-3 pt-1">
								<h5 class="text-uppercase fw-bold mb-1">Upload Ijasah 
								<?php
								if($lengkap['status_upload_ijasah'] == 1){
									echo '<span class="text-success pl-3">Sudah upload</span>';
								}else{
									echo '<span class="text-warning pl-3">Belum Upload</span>';
								}
								?>
								</h5>
								<span class="text-muted">Upload file ijasah</span>
							</div>
							<div class="float-right pt-1">
								
							</div>
						</div>
						<div class="separator-dashed"></div>
						<div class="d-flex">
							<div class="avatar avatar-online">
								<?php
								if($lengkap['status_upload_nisn'] == 1){
									echo '<span class="avatar-title rounded-circle border border-white bg-success"><i class="fas fa-thumbs-up"></i></span>';
								}else{
									echo '<span class="avatar-title rounded-circle border border-white bg-danger"><i class="fa fa-times-circle"></i></span>';
								}
								?>
							</div>
							<div class="flex-1 ml-3 pt-1">
								<h5 class="text-uppercase fw-bold mb-1">Upload NISN 
								<?php
								if($lengkap['status_upload_nisn'] == 1){
									echo '<span class="text-success pl-3">Sudah upload</span>';
								}else{
									echo '<span class="text-warning pl-3">Belum upload</span>';
								}
								?>
								</h5>
								<span class="text-muted">Upload file NISN</span>
							</div>
							<div class="float-right pt-1">
								
							</div>
						</div>
					</div>
				</div>
				
				<div class="card">
					<div class="card-header">
						<div class="card-title">Status Pendaftaran</div>
					</div>
					<div class="card-body">
						<?php
						if($row0['siswa_status'] == 0){
							echo '<b>STATUS:</b> <span class="badge badge-warning"><i class="fa fa-times-circle"></i> NON AKTIF</span>';
						}else if($row0['siswa_status'] == 1){
							echo '<b>STATUS:</b> <span class="badge badge-success"><i class="fa fa-check-circle"></i> AKTIF</span>';
						}
						?>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card">
					<div class="card-header">
						<div class="card-title">Tombol Aksi</div>
					</div>
					<div class="card-body">
						<?php
						if(isset($_GET['aksi'])){
							if($_GET['aksi'] == 'aktif'){
								$s = mysqli_query($koneksi, "UPDATE calon_siswa SET siswa_status=1 WHERE siswa_id='$get_id'");
								if($s){
									echo '<script>alert("Status berhasil di update menjadi AKTIF"); document.location="index.php?p=data-siswa&id='.$get_id.'";</script>';
								}
							}else if($_GET['aksi'] == 'nonaktif'){
								$s = mysqli_query($koneksi, "UPDATE calon_siswa SET siswa_status=0 WHERE siswa_id='$get_id'");
								if($s){
									echo '<script>alert("Status berhasil di update menjadi NON AKTIF"); document.location="index.php?p=data-siswa&id='.$get_id.'";</script>';
								}
							}else if($_GET['aksi'] == 'delete'){
								$s = mysqli_query($koneksi, "DELETE FROM calon_siswa WHERE siswa_id='$get_id'");
								$s2 = mysqli_query($koneksi, "DELETE FROM calon_siswa_biodata WHERE siswa_id='$get_id'");
								$s3 = mysqli_query($koneksi, "DELETE FROM calon_siswa_jurusan WHERE siswa_id='$get_id'");
								$s4 = mysqli_query($koneksi, "DELETE FROM calon_siswa_nilai_uan WHERE siswa_id='$get_id'");
								$s5 = mysqli_query($koneksi, "DELETE FROM calon_siswa_ortu WHERE siswa_id='$get_id'");
								$s6 = mysqli_query($koneksi, "DELETE FROM calon_siswa_prestasi WHERE siswa_id='$get_id'");
								$s7 = mysqli_query($koneksi, "DELETE FROM calon_siswa_upload WHERE siswa_id='$get_id'");
								$s8 = mysqli_query($koneksi, "DELETE FROM calon_siswa_status WHERE siswa_id='$get_id'");
								if($s){
									echo '<script>alert("Calon siswa berhasil di hapus."); document.location="index.php?p=siswa";</script>';
								}
							}
						}
						?>
						<a href="cetak-formulir.php?id=<?=$row0['siswa_id']?>" target="_blank" class="btn btn-primary btn-block btn-lg"><i class="fa fa-print"></i> CETAK FORMULIR PENDAFTARAN</a>
						<a href="cetak-nomor.php?id=<?=$row0['siswa_id']?>" target="_blank" class="btn btn-secondary btn-block btn-lg"><i class="fa fa-print"></i> CETAK NOMOR TES</a>
						<a href="index.php?p=data-siswa&aksi=aktif&id=<?=$row0['siswa_id']?>" class="btn btn-success btn-block btn-lg"><i class="fa fa-check-circle"></i> SET STATUS: AKTIF</a>
						<a href="index.php?p=data-siswa&aksi=nonaktif&id=<?=$row0['siswa_id']?>" class="btn btn-warning btn-block btn-lg"><i class="fa fa-times-circle"></i> SET STATUS: NON AKTIF</a>
						<a href="index.php?p=data-siswa&aksi=delete&id=<?=$row0['siswa_id']?>" class="btn btn-danger btn-block btn-lg" onclick="return confirm('Yakin?')"><i class="fa fa-trash"></i> HAPUS DATA SISWA</a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<div class="card-title">Biodata Diri</div>
					</div>
					<div class="card-body">
					
						<?php
						
						$sql1 = mysqli_query($koneksi, "SELECT * FROM calon_siswa_biodata 
														JOIN provinsi ON biodata_provinsi=prov_id 
														JOIN kabupaten ON biodata_kabupaten=kab_id 
														JOIN kecamatan ON biodata_kecamatan=kec_id 
														JOIN desa ON biodata_desa=des_id 
														JOIN agama ON biodata_agama=id 
														WHERE siswa_id='$get_id'") or die(mysqli_error($koneksi));
						$row1 = mysqli_fetch_assoc($sql1);
						?>
						<table class="table table-hover table-striped">
							<tr>
								<td width="200">NIK</td>
								<td><?=$row1['biodata_nik']?></td>
							</tr>
							<tr>
								<td>NISN</td>
								<td><?=$row1['biodata_nisn']?></td>
							</tr>
							<tr>
								<td>Nama Lengkap</td>
								<td><?=$row0['siswa_nama']?></td>
							</tr>
							<tr>
								<td>Hobi</td>
								<td><?=$row1['biodata_hobi']?></td>
							</tr>
							<tr>
								<td>Jenis Kelamin</td>
								<td><?=$row0['siswa_jenis_kelamin']?></td>
							</tr>
							<tr>
								<td>Tempat Lahir</td>
								<td><?=$row0['siswa_tempat_lahir']?></td>
							</tr>
							<tr>
								<td>Tanggal Lahir</td>
								<td><?=$row0['siswa_tanggal_lahir']?></td>
							</tr>
							<tr>
								<td>Asal Sekolah</td>
								<td><?=$row1['biodata_asal_sekolah']?></td>
							</tr>
							<tr>
								<td>Alamat Asal Sekolah</td>
								<td><?=$row1['biodata_alamat_asal_sekolah']?></td>
							</tr>
							<tr>
								<td>Agama</td>
								<td><?=$row1['agama_nama']?></td>
							</tr>
							<tr>
								<td>Kewarganegaraan</td>
								<td><?=$row1['biodata_kewarganegaraan']?></td>
							</tr>
							<tr>
								<td>Anak Ke</td>
								<td><?=$row1['biodata_anak_ke']?></td>
							</tr>
							<tr>
								<td>Jumlah Saudara</td>
								<td><?=$row1['biodata_jumlah_saudara']?></td>
							</tr>
							<tr>
								<td>Provinsi</td>
								<td><?=$row1['prov_nama']?></td>
							</tr>
							<tr>
								<td>Kabupaten</td>
								<td><?=$row1['kab_nama']?></td>
							</tr>
							<tr>
								<td>Kecamatan</td>
								<td><?=$row1['kec_nama']?></td>
							</tr>
							<tr>
								<td>Desa</td>
								<td><?=$row1['des_nama']?></td>
							</tr>
							<tr>
								<td>Alamat Detail</td>
								<td><?=$row1['biodata_alamat']?></td>
							</tr>
							<tr>
								<td>Kode Pos</td>
								<td><?=$row1['biodata_kodepos']?></td>
							</tr>
							<tr>
								<td>Nomor HP</td>
								<td><?=$row0['siswa_no_hp']?></td>
							</tr>
							<tr>
								<td>Tinggi Badan</td>
								<td><?=$row1['biodata_tinggi_badan']?> cm</td>
							</tr>
							<tr>
								<td>Berat Badan</td>
								<td><?=$row1['biodata_berat_badan']?> kg</td>
							</tr>
							<tr>
								<td>Riwayat Pengakit</td>
								<td><?=$row1['biodata_riwayat_penyakit']?></td>
							</tr>
						</table>
					</div>
				</div>
				
				<div class="card">
					<div class="card-header">
						<div class="card-title">Nilai UAN</div>
					</div>
					<div class="card-body">
					
						<?php
						$sql2 = mysqli_query($koneksi, "SELECT * FROM calon_siswa_nilai_uan
														WHERE siswa_id='$get_id'") or die(mysqli_error($koneksi));
						$row2 = mysqli_fetch_assoc($sql2);
						?>
						<table class="table table-hover table-striped">
							<tr>
								<td width="200">Nilai Bahasa Indonesia</td>
								<td><?=$row2['uan_bahasa_indonesia']?></td>
							</tr>
							<tr>
								<td width="200">Nilai Matematika</td>
								<td><?=$row2['uan_matematika']?></td>
							</tr>
							<tr>
								<td width="200">Nilai Bahasa Inggris</td>
								<td><?=$row2['uan_bahasa_inggris']?></td>
							</tr>
						</table>
					</div>
				</div>
				
			</div>
			
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<div class="card-title">Pilihan Jurusan</div>
					</div>
					<div class="card-body">
					
						<?php
						$sql3 = mysqli_query($koneksi, "SELECT * FROM calon_siswa_jurusan
														JOIN jurusan ON jurusan_1=id_jurusan 
														WHERE siswa_id='$get_id'") or die(mysqli_error($koneksi));
						$row3 = mysqli_fetch_assoc($sql3);
						
						$sql4 = mysqli_query($koneksi, "SELECT * FROM calon_siswa_jurusan
														JOIN jurusan ON jurusan_2=id_jurusan 
														WHERE siswa_id='$get_id'") or die(mysqli_error($koneksi));
						$row4 = mysqli_fetch_assoc($sql4);
						?>
						<table class="table table-hover table-striped">
							<tr>
								<td width="200">Pilihan Jurusan 1</td>
								<td><?=$row3['nama_jurusan']?></td>
							</tr>
							<tr>
								<td width="200">Pilihan Jurusan 2</td>
								<td><?=$row4['nama_jurusan']?></td>
							</tr>
						</table>
					</div>
				</div>
				
				<div class="card">
					<div class="card-header">
						<div class="card-title">Prestasi</div>
					</div>
					<div class="card-body">
					
						<?php
						$sql5 = mysqli_query($koneksi, "SELECT * FROM calon_siswa_prestasi
														JOIN tingkat ON prestasi_tingkat=id_tingkat 
														WHERE siswa_id='$get_id'") or die(mysqli_error($koneksi));
						$row5 = mysqli_fetch_assoc($sql5);
						
						?>
						<table class="table table-hover table-striped">
							<tr>
								<td width="200">Nama Prestasi</td>
								<td><?=$row5['prestasi_nama']?></td>
							</tr>
							<tr>
								<td width="200">Tingkat</td>
								<td><?=$row5['nama_tingkat']?></td>
							</tr>
							<tr>
								<td width="200">Juara Ke</td>
								<td><?=$row5['prestasi_juara_ke']?></td>
							</tr>
						</table>
					</div>
				</div>
				
				<div class="card">
					<div class="card-header">
						<div class="card-title">Orang Tua/Wali</div>
					</div>
					<div class="card-body">
					
						<?php
						$sql6 = mysqli_query($koneksi, "SELECT * FROM calon_siswa_ortu
														JOIN pendidikan ON ortu_pendidikan_ayah=pend_id 
														JOIN pekerjaan ON ortu_pekerjaan_ayah=pek_id 
														WHERE siswa_id='$get_id'") or die(mysqli_error($koneksi));
						$row6 = mysqli_fetch_assoc($sql6);
						
						$sql7 = mysqli_query($koneksi, "SELECT * FROM calon_siswa_ortu
														JOIN pendidikan ON ortu_pendidikan_ibu=pend_id 
														JOIN pekerjaan ON ortu_pekerjaan_ibu=pek_id 
														WHERE siswa_id='$get_id'") or die(mysqli_error($koneksi));
						$row7 = mysqli_fetch_assoc($sql7);
						
						$sql8 = mysqli_query($koneksi, "SELECT * FROM calon_siswa_ortu
														JOIN pendidikan ON ortu_pendidikan_wali=pend_id 
														JOIN pekerjaan ON ortu_pekerjaan_wali=pek_id 
														WHERE siswa_id='$get_id'") or die(mysqli_error($koneksi));
						$row8 = mysqli_fetch_assoc($sql8);
						?>
						<table class="table table-hover table-striped">
							<tr>
								<td width="200">NIK Ayah</td>
								<td><?=$row6['ortu_nik_ayah']?></td>
							</tr>
							<tr>
								<td width="200">Nama Ayah</td>
								<td><?=$row6['ortu_nama_ayah']?></td>
							</tr>
							<tr>
								<td width="200">Pendidikan Terakhir Ayah</td>
								<td><?=$row6['pend_nama']?></td>
							</tr>
							<tr>
								<td width="200">Pekerjaan Ayah</td>
								<td><?=$row6['pek_nama']?></td>
							</tr>
							<tr>
								<td width="200">No. HP Ayah</td>
								<td><?=$row6['ortu_no_hp_ayah']?></td>
							</tr>
							<tr>
								<td width="200">NIK Ibu</td>
								<td><?=$row7['ortu_nik_ibu']?></td>
							</tr>
							<tr>
								<td width="200">Nama Ibu</td>
								<td><?=$row7['ortu_nama_ibu']?></td>
							</tr>
							<tr>
								<td width="200">Pendidikan Terakhir Ibu</td>
								<td><?=$row7['pend_nama']?></td>
							</tr>
							<tr>
								<td width="200">Pekerjaan Ibu</td>
								<td><?=$row7['pek_nama']?></td>
							</tr>
							<tr>
								<td width="200">No. HP Ibu</td>
								<td><?=$row7['ortu_no_hp_ibu']?></td>
							</tr>
							<tr>
								<td width="200">Alamat Orang Tua</td>
								<td><?=$row7['ortu_alamat']?></td>
							</tr>
							<tr>
								<td width="200">NIK Wali</td>
								<td><?=$row8['ortu_nik_wali']?></td>
							</tr>
							<tr>
								<td width="200">Nama Wali</td>
								<td><?=$row8['ortu_nama_wali']?></td>
							</tr>
							<tr>
								<td width="200">Pendidikan Terakhir Wali</td>
								<td><?=$row8['pend_nama']?></td>
							</tr>
							<tr>
								<td width="200">Pekerjaan Wali</td>
								<td><?=$row8['pek_nama']?></td>
							</tr>
							<tr>
								<td width="200">No. HP Wali</td>
								<td><?=$row8['ortu_no_hp_wali']?></td>
							</tr>
							<tr>
								<td width="200">Alamat Wali</td>
								<td><?=$row8['ortu_alamat_wali']?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			
			<?php
			$sql9 = mysqli_query($koneksi, "SELECT * FROM calon_siswa_upload WHERE siswa_id='$get_id'") or die(mysqli_error($koneksi));
			$row9 = mysqli_fetch_assoc($sql9);
			?>
			
			<div class="col-md-4">
				<div class="card">
					<div class="card-header">
						<div class="card-title">Upload KK</div>
					</div>
					<div class="card-body">
						<?php
						if($row9['upload_kk'] != ''){
							echo '<img src="upload/'.$row9['upload_kk'].'" class="img-fluid">';
						}else{
							echo '<img src="https://via.placeholder.com/800x400?text=Foto+atau+Scan+Kartu+Keluarga" class="img-fluid">';
						}
						?>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="card">
					<div class="card-header">
						<div class="card-title">Upload Ijasah MI/SD</div>
					</div>
					<div class="card-body">
						<?php
						if($row9['upload_ijasah'] != ''){
							echo '<img src="upload/'.$row9['upload_ijasah'].'" class="img-fluid">';
						}else{
							echo '<img src="https://via.placeholder.com/800x400?text=Foto+atau+Scan+Ijasah+MI+atau+SD" class="img-fluid">';
						}
						?>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="card">
					<div class="card-header">
						<div class="card-title">Upload NISN</div>
					</div>
					<div class="card-body">
						<?php
						if($row9['upload_nisn'] != ''){
							echo '<img src="upload/'.$row9['upload_nisn'].'" class="img-fluid">';
						}else{
							echo '<img src="https://via.placeholder.com/800x400?text=Foto+atau+Scan+NISN" class="img-fluid">';
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>