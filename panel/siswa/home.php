<div class="content">
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">Hai! Selamat Datang.</h4>
		</div>
		
		<div class="row">
			
			
			<div class="col-md-9">
				<div class="card">
					<div class="card-header">
						<div class="card-title">Tagihan</div>
					</div>
					<div class="card-body">
						<?php
						$id = $_SESSION['id'];
						$cek = mysqli_query($koneksi, "SELECT * FROM calon_siswa_konfirmasi WHERE siswa_id='$id'");
						if(mysqli_num_rows($cek) == 0){
						?>
							<h5 class="mb-3">Kepada:</h5>
							<h3 class="text-dark mb-3"><?=$row['siswa_nama']?></h3>
						
							<div class="table-responsive-sm">
								<table class="table table-striped table-bordered">
									<thead>
										<tr>
											<th class="center" width="50">#</th>
											<th>Nama Tagihan</th>
											<th class="text-right" width="150">Total</th>
										</tr>
									</thead>
									<tbody>
									<?php
									$no = 1;
									$total = 0;
									$tag = mysqli_query($koneksi, "SELECT * FROM tagihan");
									while($tagihan = mysqli_fetch_assoc($tag)){
										echo '
										<tr>
											<td>'.$no.'</td>
											<td>'.$tagihan['tagihan_nama'].'</td>
											<td class="text-right">'.number_format($tagihan['tagihan_total'], 0, ',', '.').'</td>
										</tr>
										';
										$no++;
										$total+=$tagihan['tagihan_total'];
									}
									?>
										<tr>
											<td></td>
											<td class="text-right">TOTAL</td>
											<td class="text-right"><?=number_format($total, 0, ',', '.')?></td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<th></th>
											<th class="text-right">TOTAL</th>
											<th class="text-right"><?=number_format($total, 0, ',', '.')?></th>
										</tr>
									</tfoot>
								</table>
							</div>
							<a href="index.php?p=konfirmasi" class="btn btn-secondary btn-lg">KONFIRMASI PEMBAYARAN</a>
							<a href="" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-lg float-right">BAYAR SEKARANG</a>
							
							
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Petunjuk Pembayaran</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<?php
											$petunjuk = mysqli_query($koneksi, "SELECT * FROM pengaturan WHERE pengaturan_slug='pembayaran'");
											$petunjuk_row = mysqli_fetch_assoc($petunjuk);
											echo $petunjuk_row['pengaturan_value'];
											?>
										</div>
										<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						<?php
						}else{
							$cek_row = mysqli_fetch_assoc($cek);
							echo '
							<table class="table">
								<tr>
									<th width="200">TANGGAL KONFIRMASI</th>
									<td>'.$cek_row['konfirmasi_tanggal'].'</td>
								</tr>
								<tr>
									<th>DARI BANK</th>
									<td>'.$cek_row['konfirmasi_ke_bank'].'</td>
								</tr>
								<tr>
									<th>KE BANK</th>
									<td>'.$cek_row['konfirmasi_dari_bank'].'</td>
								</tr>
								<tr>
									<th>NOMINAL</th>
									<td>'.$cek_row['konfirmasi_nominal'].'</td>
								</tr>
								<tr>
									<th>FOTO</th>
									<td>'.$cek_row['konfirmasi_foto'].'</td>
								</tr>
								<tr>
									<th>STATUS</th>
									<td>'; if($cek_row['konfirmasi_status'] == 0){ echo 'Dalam pengecekan'; }else{ echo 'LUNAS'; } echo '</td>
								</tr>
							</table>
							';
						}
						?>
						
						
						
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card"><
					<div class="card-body text-center">
						<style>
						canvas {
						  background-color: white; 
						  width: 100%;
						  height: auto;
						}
						</style>
						<canvas id="canvas" width="300" height="300"></canvas>
						<script>
						var c=document.getElementById("canvas");
						var ctx2=c.getContext("2d");
						ctx2.beginPath();
						ctx2.arc(95,50,40,0,2*Math.PI);
						

						
						var canvas = document.getElementById("canvas");
						var ctx = canvas.getContext("2d");
						var radius = canvas.height / 2;
						ctx.translate(radius, radius);
						radius = radius * 0.90
						setInterval(drawClock, 1000);
						
						function drawClock() {
						  drawFace(ctx, radius);
						  drawNumbers(ctx, radius);
						  drawTime(ctx, radius);
						}

						function drawFace(ctx, radius) {
						  var grad;
						  ctx.beginPath();
						  ctx.arc(0, 0, radius, 0, 2*Math.PI);
						  ctx.fillStyle = 'white';
						  ctx.fill();
						  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
						  grad.addColorStop(0, '#333');
						  grad.addColorStop(0.5, 'white');
						  grad.addColorStop(1, '#333');
						  ctx.strokeStyle = grad;
						  ctx.lineWidth = radius*0.1;
						  ctx.stroke();
						  ctx.beginPath();
						  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
						  ctx.fillStyle = '#333';
						  ctx.fill();
						}

						function drawNumbers(ctx, radius) {
						  var ang;
						  var num;
						  ctx.font = radius*0.15 + "px arial";
						  ctx.textBaseline="middle";
						  ctx.textAlign="center";
						  for(num = 1; num < 13; num++){
							ang = num * Math.PI / 6;
							ctx.rotate(ang);
							ctx.translate(0, -radius*0.85);
							ctx.rotate(-ang);
							ctx.fillText(num.toString(), 0, 0);
							ctx.rotate(ang);
							ctx.translate(0, radius*0.85);
							ctx.rotate(-ang);
						  }
						}

						function drawTime(ctx, radius){
							var now = new Date();
							var hour = now.getHours();
							var minute = now.getMinutes();
							var second = now.getSeconds();
							//hour
							hour=hour%12;
							hour=(hour*Math.PI/6)+
							(minute*Math.PI/(6*60))+
							(second*Math.PI/(360*60));
							drawHand(ctx, hour, radius*0.5, radius*0.07);
							//minute
							minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
							drawHand(ctx, minute, radius*0.8, radius*0.07);
							// second
							second=(second*Math.PI/30);
							drawHand(ctx, second, radius*0.9, radius*0.02);
						}

						function drawHand(ctx, pos, length, width) {
							ctx.beginPath();
							ctx.lineWidth = width;
							ctx.lineCap = "round";
							ctx.moveTo(0,0);
							ctx.rotate(pos);
							ctx.lineTo(0, -length);
							ctx.stroke();
							ctx.rotate(-pos);
						}
						</script>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-header">
						<div class="card-title">Data Pendaftaran Online</div>
					</div>
					<div class="card-body">
						<table class="table table-hover table-striped table-sm">
							<tr>
								<td width="150">Login</td>
								<td width="10">:</td>
								<td><?=$row['siswa_username']?></td>
							</tr>
							<tr>
								<td width="150">Tanggal Pendaftaran</td>
								<td width="10">:</td>
								<td><?=$row['siswa_tanggal_daftar']?></td>
							</tr>
							<?php
							$a = explode("-", $row['siswa_tanggal_daftar']);
							$no_pendaftaran = $a[0] . $a[1] . str_pad($row['siswa_no_pendaftaran'], 3, "0", STR_PAD_LEFT);
							?>
							<tr>
								<td width="150">No. Pendaftaran</td>
								<td width="10">:</td>
								<td><?=$no_pendaftaran?></td>
							</tr>
							<tr>
								<td width="150">Nama Lengkap</td>
								<td width="10">:</td>
								<td><?=$row['siswa_nama']?></td>
							</tr>
							<tr>
								<td width="150">Tempat Lahir</td>
								<td width="10">:</td>
								<td><?=$row['siswa_tempat_lahir']?></td>
							</tr>
							<tr>
								<td width="150">Tanggal Lahir</td>
								<td width="10">:</td>
								<td><?=$row['siswa_tanggal_lahir']?></td>
							</tr>
							<tr>
								<td width="150">Jenis Kelamin</td>
								<td width="10">:</td>
								<td><?=$row['siswa_jenis_kelamin']?></td>
							</tr>
							<tr>
								<td width="150">No. HP</td>
								<td width="10">:</td>
								<td><?=$row['siswa_no_hp']?></td>
							</tr>
							<tr>
								<td width="150">Tahun Pelajaran</td>
								<td width="10">:</td>
								<td><?=$row['siswa_tahun_pelajaran']?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="card">
					<div class="card-header">
						<div class="card-head-row">
							<div class="card-title">Kelengkapan Biodata Calon Siswa</div>
						</div>
					</div>
					<div class="card-body">
						<?php
						$id = $_SESSION['id'];
						$sql = mysqli_query($koneksi, "SELECT * FROM calon_siswa_status WHERE siswa_id='$id'");
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
								if($lengkap['status_biodata'] == 1){
									echo '<small class="text-muted"><a href="index.php?p=biodata" class="btn btn-success btn-sm">Lihat</a></small>';
								}else{
									echo '<small class="text-muted"><a href="index.php?p=biodata" class="btn btn-primary btn-sm">Lengkapi</a></small>';
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
								if($lengkap['status_uan'] == 1){
									echo '<small class="text-muted"><a href="index.php?p=uan" class="btn btn-success btn-sm">Lihat</a></small>';
								}else{
									echo '<small class="text-muted"><a href="index.php?p=uan" class="btn btn-primary btn-sm">Lengkapi</a></small>';
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
								if($lengkap['status_jurusan'] == 1){
									echo '<small class="text-muted"><a href="index.php?p=jurusan" class="btn btn-success btn-sm">Lihat</a></small>';
								}else{
									echo '<small class="text-muted"><a href="index.php?p=jurusan" class="btn btn-primary btn-sm">Lengkapi</a></small>';
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
								if($lengkap['status_prestasi'] == 1){
									echo '<small class="text-muted"><a href="index.php?p=prestasi" class="btn btn-success btn-sm">Lihat</a></small>';
								}else{
									echo '<small class="text-muted"><a href="index.php?p=prestasi" class="btn btn-primary btn-sm">Lengkapi</a></small>';
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
								if($lengkap['status_ortu'] == 1){
									echo '<small class="text-muted"><a href="index.php?p=ortu" class="btn btn-success btn-sm">Lihat</a></small>';
								}else{
									echo '<small class="text-muted"><a href="index.php?p=ortu" class="btn btn-primary btn-sm">Lengkapi</a></small>';
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card">
					<div class="card-header">
						<div class="card-head-row">
							<div class="card-title">Persyaratan Calon Peserta Didik Baru</div>
						</div>
					</div>
					<div class="card-body">
						<?php
						$syarat = mysqli_query($koneksi, "SELECT * FROM pengaturan WHERE pengaturan_slug='syarat_pendaftaran'");
						$syarat_row = mysqli_fetch_assoc($syarat);
						echo $syarat_row['pengaturan_value'];
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>