<div class="content">
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">Upload NISN</h4>
		</div>
		<div class="card">
			<div class="card-header">
				<div class="card-title">Upload NISN</div>
			</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<?php
							$id = $_SESSION['id'];
							$sql = mysqli_query($koneksi, "SELECT * FROM calon_siswa_upload WHERE siswa_id='$id'");
							$upload = mysqli_fetch_assoc($sql);
							
							if($upload['upload_nisn'] != ''){
								echo '<img src="upload/'.$upload['upload_nisn'].'" class="img-fluid">';
							}else{
								echo '<img src="https://via.placeholder.com/800x400?text=Foto+atau+Scan+NISN" class="img-fluid">';
							}
							?>							
						</div>
						
						<div class="col-md-6">
							<div id="nisn"></div>
						</div>
						
					</div>
					
					
				</div>
		</div>
	</div>
</div>