<div class="content">
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">Petunjuk Pembayaran</h4>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<div class="card-head-row">
							<div class="card-title">Setting Petunjuk Pembayaran</div>
						</div>
					</div>
					<div class="card-body">
						<?php
						$sql = mysqli_query($koneksi, "SELECT * FROM pengaturan WHERE pengaturan_slug='pembayaran'");
						$row = mysqli_fetch_assoc($sql);
						
						if(isset($_POST['submit'])){
							$pengaturan_value = $_POST['petunjuk'];
							$update = mysqli_query($koneksi, "UPDATE pengaturan SET pengaturan_value='$pengaturan_value' WHERE pengaturan_slug='pembayaran'") or die(mysqli_error($koneksi));
							if($update){
								echo '<script>alert("Berhasil di simpan."); document.location="index.php?p=pembayaran-petunjuk";</script>';
							}else{
								echo '<div class="alert alert-danger">Gagal di simpan.</div>';
								
							}
						}
						
						?>
						<form action="" method="post">
						<textarea name="petunjuk" id="summernote"><?=$row['pengaturan_value']?></textarea>
						<input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
						</form>
					</div>
				</div>
			</div>
		</div>

</div>