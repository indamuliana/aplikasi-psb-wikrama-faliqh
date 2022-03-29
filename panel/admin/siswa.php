<div class="content">
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">Daftar Calon Siswa</h4>
		</div>
		<div class="card">
			<div class="card-header">
				<div class="card-title">Daftar Calon Siswa</div>
			</div>
				<div class="card-body">
					<a href="admin/export.php" class="btn btn-primary"><i class="fa fa-upload"></i> Export Data Siswa</a>
					<hr>
					<div class="table-responsive">
						<table class="table" id="data">
							<thead>
								<th>NO.</th>
								<th width="300">DATA CALON SISWA</th>
								<th>BIODATA DIRI</th>
								<th>NILAI UAN</th>
								<th>JURUSAN</th>
								<th>PRESTASI</th>
								<th>ORANG TUA</th>
								<th>UPLOAD KK</th>
								<th>UPLOAD IJASAH</th>
								<th>UPLOAD NISN</th>
								<th>AKSI</th>
							</thead>
							<tbody>
								<?php
								$no = 1;
								$sql = mysqli_query($koneksi, "SELECT calon_siswa.*, calon_siswa_status.* FROM calon_siswa 
															JOIN calon_siswa_status ON calon_siswa.siswa_id=calon_siswa_status.siswa_id 
															ORDER BY calon_siswa.siswa_id DESC") or die(mysqli_error($koneksi));
								while($row = mysqli_fetch_assoc($sql)){
									$a = explode("-", $row['siswa_tanggal_daftar']);
									$no_pendaftaran = $a[0] . $a[1] . str_pad($row['siswa_no_pendaftaran'], 3, "0", STR_PAD_LEFT);
									echo '
									<tr>
										<td>'.$no.'</td>
										<td>
											<b>TANGGAL DAFTAR:</b> '.Tanggal($row['siswa_tanggal_daftar']).'<br>
											<b>NO. PENDAFTARAN:</b> '.$no_pendaftaran.'<br>
											<b>NAMA LENGKAP:</b> '.$row['siswa_nama'].'<br>
											<b>TEMPAT LAHIR:</b> '.$row['siswa_tempat_lahir'].'<br>
											<b>TANGGAL LAHIR:</b> '.$row['siswa_tanggal_lahir'].'<br>
											<b>JENIS KELAMIN:</b> '.$row['siswa_jenis_kelamin'].'<br>
											<b>NO. HP: '.$row['siswa_no_hp'].'<br>
											<b>STATUS: '; if($row['siswa_status'] == 1){ echo '<span class="badge badge-success">Approved</span>'; }else{ echo '<span class="badge badge-warning">Waiting....</span>'; } echo '
										</td>
										<td>'; if($row['status_biodata'] == 1){ echo '<span class="badge badge-success">Selesai</span>'; }else{ echo '<span class="badge badge-danger">Belum updated</span>'; } echo '</td>
										<td>'; if($row['status_uan'] == 1){ echo '<span class="badge badge-success">Selesai</span>'; }else{ echo '<span class="badge badge-danger">Belum updated</span>'; } echo '</td>
										<td>'; if($row['status_jurusan'] == 1){ echo '<span class="badge badge-success">Selesai</span>'; }else{ echo '<span class="badge badge-danger">Belum updated</span>'; } echo '</td>
										<td>'; if($row['status_prestasi'] == 1){ echo '<span class="badge badge-success">Selesai</span>'; }else{ echo '<span class="badge badge-danger">Belum updated</span>'; } echo '</td>
										<td>'; if($row['status_ortu'] == 1){ echo '<span class="badge badge-success">Selesai</span>'; }else{ echo '<span class="badge badge-danger">Belum updated</span>'; } echo '</td>
										<td>'; if($row['status_upload_kk'] == 1){ echo '<span class="badge badge-success">Selesai</span>'; }else{ echo '<span class="badge badge-danger">Belum updated</span>'; } echo '</td>
										<td>'; if($row['status_upload_ijasah'] == 1){ echo '<span class="badge badge-success">Selesai</span>'; }else{ echo '<span class="badge badge-danger">Belum updated</span>'; } echo '</td>
										<td>'; if($row['status_upload_nisn'] == 1){ echo '<span class="badge badge-success">Selesai</span>'; }else{ echo '<span class="badge badge-danger">Belum updated</span>'; } echo '</td>
										<td><a href="index.php?p=data-siswa&id='.$row['siswa_id'].'" class="btn btn-primary"><i class="fas fa-user-tag"></i> DATA</a></td>
										
									</tr>
									';
									$no++;
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
		</div>
	</div>
</div>