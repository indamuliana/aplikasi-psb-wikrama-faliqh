<div class="content">
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">Tambah Master Data Pembayaran</h4>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<div class="card-head-row">
							<div class="card-title">Form Tambah</div>
						</div>
					</div>
					<div class="card-body">
						
						<?php
						if(isset($_POST['submit'])){
							
							$tagihan_nama = $_POST['tagihan_nama'];
							$tagihan_total = $_POST['tagihan_total'];
							
							
							$in = mysqli_query($koneksi, "INSERT INTO tagihan(tagihan_nama, tagihan_total) VALUES('$tagihan_nama', '$tagihan_total')");
								
							if($in){
								echo '<div class="alert alert-success">Data berhasil disimpan.</div>';
							}else{
								echo '<div class="alert alert-danger">Gagal menyimpan data.</div>';
							}
						}
						?>
						
						<form method="post" action="">
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">NAMA TAGIHAN <span class="text-warning">*</span></label>
								<div class="col-sm-10">
									<input type="text" name="tagihan_nama" class="form-control" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">NOMINAL TAGIHAN <span class="text-warning">*</span></label>
								<div class="col-sm-10">
									<input type="number" name="tagihan_total" class="form-control" required>
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