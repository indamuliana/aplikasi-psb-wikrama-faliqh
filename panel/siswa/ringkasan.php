<div class="content">
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">Ringkasan Akun</h4>
		</div>
		<div class="row">
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
														WHERE siswa_id='$id'") or die(mysqli_error($koneksi));
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
								<td><?=$row['siswa_nama']?></td>
							</tr>
							<tr>
								<td>Hobi</td>
								<td><?=$row1['biodata_hobi']?></td>
							</tr>
							<tr>
								<td>Jenis Kelamin</td>
								<td><?=$row['siswa_jenis_kelamin']?></td>
							</tr>
							<tr>
								<td>Tempat Lahir</td>
								<td><?=$row['siswa_tempat_lahir']?></td>
							</tr>
							<tr>
								<td>Tanggal Lahir</td>
								<td><?=$row['siswa_tanggal_lahir']?></td>
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
								<td><?=$row['siswa_no_hp']?></td>
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
														WHERE siswa_id='$id'") or die(mysqli_error($koneksi));
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
														WHERE siswa_id='$id'") or die(mysqli_error($koneksi));
						$row3 = mysqli_fetch_assoc($sql3);
						
						$sql4 = mysqli_query($koneksi, "SELECT * FROM calon_siswa_jurusan
														JOIN jurusan ON jurusan_2=id_jurusan 
														WHERE siswa_id='$id'") or die(mysqli_error($koneksi));
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
														WHERE siswa_id='$id'") or die(mysqli_error($koneksi));
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
														WHERE siswa_id='$id'") or die(mysqli_error($koneksi));
						$row6 = mysqli_fetch_assoc($sql6);
						
						$sql7 = mysqli_query($koneksi, "SELECT * FROM calon_siswa_ortu
														JOIN pendidikan ON ortu_pendidikan_ibu=pend_id 
														JOIN pekerjaan ON ortu_pekerjaan_ibu=pek_id 
														WHERE siswa_id='$id'") or die(mysqli_error($koneksi));
						$row7 = mysqli_fetch_assoc($sql7);
						
						$sql8 = mysqli_query($koneksi, "SELECT * FROM calon_siswa_ortu
														JOIN pendidikan ON ortu_pendidikan_wali=pend_id 
														JOIN pekerjaan ON ortu_pekerjaan_wali=pek_id 
														WHERE siswa_id='$id'") or die(mysqli_error($koneksi));
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
		</div>
	</div>
</div>