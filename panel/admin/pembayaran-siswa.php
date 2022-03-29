<div class="content">
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">Data Pembayaran Calon Siswa</h4>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<div class="card-head-row">
							<div class="card-title">Data Pembayaran Calon Siswa</div>
						</div>
					</div>
					<div class="card-body">
						<?php
						if(isset($_GET['aksi'])){
							if($_GET['aksi'] == 'lunas'){
								$id = $_GET['id'];
								$up = mysqli_query($koneksi, "UPDATE calon_siswa_konfirmasi SET konfirmasi_status='1' WHERE konfirmasi_id='$id'");
								if($up){
									echo '<script>alert("Data berhasil disimpan."); document.location="index.php?p=pembayaran-siswa";</script>';
								}else{
									echo '<div class="alert alert-danger">Gagal melakukan aksi.</div>';
								}
							}
						}
						?>
					
						<div class="table-responsive">
							<table class="table" id="data">
								<thead>
									<tr>
										<th>NO.</th>
										<th>SISWA</th>
										<th>TANGGAL KONFIRMASI</th>
										<th>DARI BANK</th>
										<th>BANK TUJUAN</th>
										<th>NOMINAL</th>
										<th>FOTO</th>
										<th>STATUS</th>
										<th>AKSI</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									$sql = mysqli_query($koneksi, "SELECT calon_siswa_konfirmasi.*, calon_siswa.* FROM calon_siswa_konfirmasi
																JOIN calon_siswa ON calon_siswa.siswa_id=calon_siswa_konfirmasi.siswa_id ") or die(mysqli_error($koneksi));
									while($row = mysqli_fetch_assoc($sql)){
										echo '
										<tr>
											<td>'.$no.'</td>
											<td>'.$row['siswa_nama'].'</td>
											<td>'.$row['konfirmasi_tanggal'].'</td>
											<td>'.$row['konfirmasi_ke_bank'].'</td>
											<td>'.$row['konfirmasi_dari_bank'].'</td>
											<td>'.$row['konfirmasi_nominal'].'</td>
											<td>'.$row['konfirmasi_foto'].'</td>
											<td>'; if($row['konfirmasi_status'] == 0){ echo '<span class="badge badge-warning">Dalam pengecekan</span>'; }else{ echo '<span class="badge badge-success">LUNAS</span>'; } echo '</td>
											<td><a href="index.php?p=pembayaran-siswa&aksi=lunas&id='.$row['konfirmasi_id'].'" class="btn btn-primary btn-sm" onclick="return confirm(\'Yakin?\')">SET LUNAS</a></td>
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

</div>