<div class="content">
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">Upload Ijasah MI/SD</h4>
		</div>
		<div class="card">
			<div class="card-header">
				<div class="card-title">Upload Ijasah MI/SD</div>
			</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<?php
							$id = $_SESSION['id'];
							$sql = mysqli_query($koneksi, "SELECT * FROM calon_siswa_upload WHERE siswa_id='$id'");
							$upload = mysqli_fetch_assoc($sql);
							
							if($upload['upload_ijasah'] != ''){
								echo '<img src="upload/'.$upload['upload_ijasah'].'" class="img-fluid">';
							}else{
								echo '<img src="https://via.placeholder.com/800x400?text=Foto+atau+Scan+Ijasah+MI+atau+SD" class="img-fluid">';
							}
							?>							
						</div>
						
						<div class="col-md-6">
							<div id="ijasah"></div>
						</div>
						
					</div>
					
					
				</div>
		</div>
	</div>
</div>