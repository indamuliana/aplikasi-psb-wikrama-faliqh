<div class="content">
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">Upload Kartu Keluarga</h4>
		</div>
		<div class="card">
			<div class="card-header">
				<div class="card-title">Upload Kartu Keluarga</div>
			</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<?php
							$get_id = $_SESSION['id'];
							$sql = mysqli_query($koneksi, "SELECT * FROM calon_siswa_upload WHERE siswa_id='$get_id'");
							$upload = mysqli_fetch_assoc($sql);
							
							if($upload['upload_kk'] != ''){
								echo '<img src="upload/'.$upload['upload_kk'].'" class="img-fluid">';
							}else{
								echo '<img src="https://via.placeholder.com/800x400?text=Foto+atau+Scan+Kartu+Keluarga" class="img-fluid">';
							}
							?>							
						</div>
						
						<div class="col-md-6">
							<div id="kk"></div>
						</div>
						
					</div>
					
					
				</div>
		</div>
	</div>
</div>