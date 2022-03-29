<div class="content">
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">Master Pembayaran</h4>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<div class="card-head-row">
							<div class="card-title">Master Pembayaran</div>
						</div>
					</div>
					<div class="card-body">
						<a href="index.php?p=pembayaran-tambah" class="btn btn-primary">Tambah Master Data</a>
						<hr>
						<?php
						if(isset($_GET['aksi'])){
							if($_GET['aksi'] == 'delete'){
								$id = $_GET['id'];
								$del = mysqli_query($koneksi, "DELETE FROM tagihan WHERE tagihan_id='$id'");
								if($del){
									echo '<script>alert("Data berhasil dihapus."); document.location="index.php?p=pembayaran";</script>';
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
										<th width="40">NO.</th>
										<th>NAMA PEMBAYARAN</th>
										<th>NOMINAL</th>
										<th>AKSI</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									$sql = mysqli_query($koneksi, "SELECT * FROM tagihan") or die(mysqli_error($koneksi));
									while($row = mysqli_fetch_assoc($sql)){
										echo '
										<tr>
											<td>'.$no.'</td>
											<td>'.$row['tagihan_nama'].'</td>
											<td>'.number_format($row['tagihan_total'], '0', ',', '.').'</td>
											<td><a href="index.php?p=pembayaran&aksi=delete&id='.$row['tagihan_id'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin?\')">DELETE</a></td>
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