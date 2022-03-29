<?php
include("../config.php");

$get_id = $_GET['id'];

$sql0 = mysqli_query($koneksi, "SELECT * FROM calon_siswa WHERE siswa_id='$get_id'");
$row0 = mysqli_fetch_assoc($sql0);
						
$sql1 = mysqli_query($koneksi, "SELECT * FROM calon_siswa_biodata 
								JOIN provinsi ON biodata_provinsi=prov_id 
								JOIN kabupaten ON biodata_kabupaten=kab_id 
								JOIN kecamatan ON biodata_kecamatan=kec_id 
								JOIN desa ON biodata_desa=des_id 
								JOIN agama ON biodata_agama=id 
								WHERE siswa_id='$get_id'") or die(mysqli_error($koneksi));
$row1 = mysqli_fetch_assoc($sql1);

$sql2 = mysqli_query($koneksi, "SELECT * FROM calon_siswa_nilai_uan
								WHERE siswa_id='$get_id'") or die(mysqli_error($koneksi));
$row2 = mysqli_fetch_assoc($sql2);
						
$sql3 = mysqli_query($koneksi, "SELECT * FROM calon_siswa_jurusan
								JOIN jurusan ON jurusan_1=id_jurusan 
								WHERE siswa_id='$get_id'") or die(mysqli_error($koneksi));
$row3 = mysqli_fetch_assoc($sql3);

$sql4 = mysqli_query($koneksi, "SELECT * FROM calon_siswa_jurusan
								JOIN jurusan ON jurusan_2=id_jurusan 
								WHERE siswa_id='$get_id'") or die(mysqli_error($koneksi));
$row4 = mysqli_fetch_assoc($sql4);						

$sql5 = mysqli_query($koneksi, "SELECT * FROM calon_siswa_prestasi
								JOIN tingkat ON prestasi_tingkat=id_tingkat 
								WHERE siswa_id='$get_id'") or die(mysqli_error($koneksi));
$row5 = mysqli_fetch_assoc($sql5);

$sql6 = mysqli_query($koneksi, "SELECT * FROM calon_siswa_ortu
								JOIN pendidikan ON ortu_pendidikan_ayah=pend_id 
								JOIN pekerjaan ON ortu_pekerjaan_ayah=pek_id 
								WHERE siswa_id='$get_id'") or die(mysqli_error($koneksi));
$row6 = mysqli_fetch_assoc($sql6);

$sql7 = mysqli_query($koneksi, "SELECT * FROM calon_siswa_ortu
								JOIN pendidikan ON ortu_pendidikan_ibu=pend_id 
								JOIN pekerjaan ON ortu_pekerjaan_ibu=pek_id 
								WHERE siswa_id='$get_id'") or die(mysqli_error($koneksi));
$row7 = mysqli_fetch_assoc($sql7);

$sql8 = mysqli_query($koneksi, "SELECT * FROM calon_siswa_ortu
								JOIN pendidikan ON ortu_pendidikan_wali=pend_id 
								JOIN pekerjaan ON ortu_pekerjaan_wali=pek_id 
								WHERE siswa_id='$get_id'") or die(mysqli_error($koneksi));
$row8 = mysqli_fetch_assoc($sql8);
?>

<style>
table { border-collapse: collapse; }
.isi { font-family:tahoma; font-size:15px; }
</style>

<div style="width:1000px; margin:auto; border:2px solid #000; padding:9px;">
	<table width="100%" border="0">
		<tr>
			<td width="100%" height="100%" align="center"><img src="assets/img/wikrama.png" width="100%" height="50%"></td>
			<td width="13%" align="center" width="50"></td>
			<!--<td width="15%"><canvas id="qr"></canvas></td>-->
		</tr>
	</table>

	<hr size="3px" color="#0000">

	<center><h2><u>FORMULIR PENDAFTARAN</u></h2></center>
	<br>

	<table width="100%" border="0" class="isi">
		<tr >
			<td valign="top" width="48%" >
				<table width="100%" border="0" cellpadding="8" rules="rows" >
				<tr bgcolor="#b3b2b2" >
				<td height="35" width="150" colspan="3"><b>DATA SISWA</b></td>
				</tr>
					<tr>
						<td width="150">NIK</td>
						<td width="5">:</td>
						<td><?php echo $row1['biodata_nik']; ?></td>
						
					</tr>
					<tr>
						<td width="150">NISN</td>
						<td width="5">:</td>
						<td><?php echo $row1['biodata_nisn']; ?></td>
					</tr>
					<tr>
						<td width="150">Nama Lengkap</td>
						<td width="5">:</td>
						<td><?php echo $row0['siswa_nama']; ?></td>
					</tr>
					<tr>
						<td width="150">Hobi</td>
						<td width="5">:</td>
						<td><?php echo $row1['biodata_hobi']; ?></td>
						
					</tr>
					<tr>
						<td width="150">Jenis Kelamin</td>
						<td width="5">:</td>
						<td><?php echo $row0['siswa_jenis_kelamin']; ?></td>
					</tr>
					<tr>
						<td width="150">Tempat Lahir</td>
						<td width="5">:</td>
						<td><?php echo $row0['siswa_tempat_lahir']; ?></td>
					</tr>
					<tr>
						<td width="150">Tanggal Lahir</td>
						<td width="5">:</td>
						<td><?php echo $row0['siswa_tanggal_lahir']; ?></td>
						
					</tr>
					<tr>
						<td width="150">Asal Sekolah</td>
						<td width="5">:</td>
						<td><?php echo $row1['biodata_asal_sekolah']; ?></td>
					</tr>
					<tr>
						<td width="150">Alamat Sekolah</td>
						<td width="5">:</td>
						<td><?php echo $row1['biodata_alamat_asal_sekolah']; ?></td>
					</tr>
					<tr>
						<td width="150">Agama</td>
						<td width="5">:</td>
						<td><?php echo $row1['agama_nama']; ?></td>
						
					</tr>
					<tr>
						<td width="150">Kewarganegaraan</td>
						<td width="5">:</td>
						<td><?php echo $row1['biodata_kewarganegaraan']; ?></td>
					</tr>
					<tr>
						<td width="150">Anak ke</td>
						<td width="5">:</td>
						<td><?php echo $row1['biodata_anak_ke']; ?></td>
					</tr>
					<tr >
						<td width="150">Jumlah Saudara</td>
						<td width="5">:</td>
						<td><?php echo $row1['biodata_jumlah_saudara']; ?></td>
						
					</tr>
					<tr >
						<td width="150">Provinsi</td>
						<td width="5">:</td>
						<td><?php echo $row1['prov_nama']; ?></td>
					</tr>
					<tr>
						<td width="150">Kabupaten</td>
						<td width="5">:</td>
						<td><?php echo $row1['kab_nama']; ?></td>
						
					</tr>
					<tr >
						<td width="150">Kecamatan</td>
						<td width="5">:</td>
						<td><?php echo $row1['kab_nama']; ?></td>
					</tr>
					<tr >
						<td width="150">Desa</td>
						<td width="5">:</td>
						<td><?php echo $row1['des_nama']; ?></td>
					</tr>
					<tr>
						<td width="150">Kode Pos</td>
						<td width="5">:</td>
						<td><?php echo $row1['biodata_kodepos']; ?></td>
					</tr>
					<tr>
						<td width="150">Alamat Lengkap</td>
						<td width="5">:</td>
						<td><?php echo $row1['biodata_alamat']; ?></td>
					</tr>
					<tr >
						<td width="150">Nomor Hp</td>
						<td width="5">:</td>
						<td><?php echo $row0['siswa_no_hp']; ?></td>
						
					</tr>
					<tr>
						<td width="150">Tinggi Badan</td>
						<td width="5">:</td>
						<td><?php echo $row1['biodata_tinggi_badan']; ?> cm.</td>
					</tr>
					<tr>
						<td width="150">Berat Badan</td>
						<td width="5">:</td>
						<td><?php echo $row1['biodata_berat_badan']; ?> kg.</td>
					</tr>
					<tr>
						<td width="150">Riwayat Penyakit</td>
						<td width="5">:</td>
						<td><?php echo $row1['biodata_riwayat_penyakit']; ?></td>
						
					</tr>
					<tr>
						<td width="150">&nbsp;</td>
						<td width="5"></td>
						<td></td>
					</tr>
					<tr bgcolor="#b3b2b2" >
						<td height="35" width="150" colspan="3"><b>NILAI UAN</b></td>
					</tr>
					<tr>
						<td width="150">Bahasa Indonesia</td>
						<td width="5">:</td>
						<td><?php echo $row2['uan_bahasa_indonesia']; ?></td>
						
					</tr>
					<tr>
						<td width="150">Bahasa Inggris</td>
						<td width="5">:</td>
						<td><?php echo $row2['uan_matematika']; ?></td>
					</tr>
					<tr >
						<td width="150">Matematika</td>
						<td width="5">:</td>
						<td><?php echo $row2['uan_bahasa_inggris']; ?></td>
					</tr>
					<tr>
						<td width="150">&nbsp;</td>
						<td width="5"></td>
						<td></td>
					</tr>
					<tr bgcolor="#b3b2b2" >
						<td height="35" width="150" colspan="3"><b>PILIHAN JURUSAN</b></td>
					</tr>
					<tr>
						<td width="150">Jurusan 1</td>
						<td width="5">:</td>
						<td><?php echo $row3['nama_jurusan']; ?></td>
						
					</tr>
					<tr > 
						<td width="150">Jurusan 2</td>
						<td width="5">:</td>
						<td><?php echo $row4['nama_jurusan']; ?></td>
					</tr>
					<tr>
						<td width="150">&nbsp;</td>
						<td width="5"></td>
						<td></td>
					</tr>
					
					<tr height="35" bgcolor="#b3b2b2" border="3" >					
						<td width="150" colspan="3" align="left"><b>PILIHAN JURUSAN</b></td>
					</tr>
					<tr>
						<td width="150" colspan="3"><ul type="circle">
							<li>Rekayasa Perangkat Lunak</li>
							<li>Teknik Bisnis & Sepeda Motor</li>
							<li>Teknik Komputer & Jaringan</li>
							<li>Multimedia</li>
							<li>Bisnis Daring & Pemasaran</li>				
							<li>Akuntansi & Keuangan Lembaga</li>				
							<li>Perbankan & Keuangan Mikro</li>				
						</td>
					</tr>				
	
				</table>
			</td>			
				
<!-- kanan -->			
			<td valign="top" width="2%" >
			</td>

			<td valign="top" width="48%">
				<table width="100%" border="0"  cellpadding="8" rules="rows" >
					<tr bgcolor="#b3b2b2" >
						<td height="35" width="150" colspan="3"><b>PRESTASI</b></td>
					</tr>
					<tr>
						<td width="150">Nama Prestasi</td>
						<td width="5">:</td>
						<td><?php echo $row5['prestasi_nama']; ?></td>
					</tr>
					<tr>
						<td width="150">Tingkat</td>
						<td width="5">:</td>
						<td><?php echo $row5['nama_tingkat']; ?></td>
					</tr>
					<tr>
						<td width="150">Juara ke</td>
						<td width="5">:</td>
						<td><?php echo $row5['prestasi_juara_ke']; ?></td>
					</tr>
					<!--
					<tr>
						<td width="150">Bukti Prestasi</td>
						<td width="5">:</td>
						<td><i>Terlampir</td>
					</tr>
					-->
					<tr>
						<td width="150">&nbsp;</td>
						<td width="5"></td>
						<td></td>
					</tr>
					<tr bgcolor="#b3b2b2" >
						<td height="35" width="150" colspan="3"><b>DATA ORANG TUA</b></td>
					</tr>
					<tr>
						<td width="150">NIK Ayah</td>
						<td width="5">:</td>
						<td><?php echo $row6['ortu_nik_ayah']; ?></td>
					</tr>
					<tr>
						<td width="150">Nama Ayah</td>
						<td width="5">:</td>
						<td><?php echo $row6['ortu_nama_ayah']; ?></td>
					</tr>
					<tr>
						<td width="150">Pendidikan Ayah</td>
						<td width="5">:</td>
						<td><?php echo $row6['pend_nama']; ?></td>
					</tr>
					<tr>
						<td width="150">Pekerjaan Ayah</td>
						<td width="5">:</td>
						<td><?php echo $row6['pek_nama']; ?></td>
					</tr>
					<tr>
						<td width="150">Nomor HP Ayah</td>
						<td width="5">:</td>
						<td><?php echo $row6['ortu_no_hp_ayah']; ?></td>
					</tr>
					<tr>
						<td width="150">NIK Ibu</td>
						<td width="5">:</td>
						<td><?php echo $row6['ortu_nik_ibu']; ?></td>
					</tr>
					<tr>
						<td width="150">Nama Ibu</td>
						<td width="5">:</td>
						<td><?php echo $row6['ortu_nama_ibu']; ?></td>
					</tr>
					<tr>
						<td width="150">Pendidikan Ibu</td>
						<td width="5">:</td>
						<td><?php echo $row7['pend_nama']; ?></td>
					</tr>
					<tr>
						<td width="150">Pekerjaan Ibu</td>
						<td width="5">:</td>
						<td><?php echo $row7['pek_nama']; ?></td>
					</tr>
					<tr>
						<td width="150">Nomor HP Ibu</td>
						<td width="5">:</td>
						<td><?php echo $row6['ortu_no_hp_ibu']; ?></td>
					</tr>
					<tr>
						<td width="150">Alamat Orang Tua</td>
						<td width="5">:</td>
						<td><?php echo $row6['ortu_alamat']; ?></td>
					</tr>
					<tr>
						<td width="150">NIK Wali</td>
						<td width="5">:</td>
						<td><?php echo $row6['ortu_nik_wali']; ?></td>
					</tr>
					<tr>
						<td width="150">Nama Wali</td>
						<td width="5">:</td>
						<td><?php echo $row6['ortu_nama_wali']; ?></td>
					</tr>
					<tr>
						<td width="150">Pendidikan Wali</td>
						<td width="5">:</td>
						<td><?php echo $row8['pend_nama']; ?></td>
					</tr>
					<tr>
						<td width="150">Pekerjaan Wali</td>
						<td width="5">:</td>
						<td><?php echo $row8['pek_nama']; ?></td>
					</tr>
					<tr>
						<td width="150">Nomor HP Wali</td>
						<td width="5">:</td>
						<td><?php echo $row6['ortu_no_hp_wali']; ?></td>
					</tr>
					<tr>
						<td width="150">Alamat Wali</td>
						<td width="5">:</td>
						<td><?php echo $row6['ortu_alamat_wali']; ?></td>
					</tr>	
					<tr>
						<td width="150">&nbsp;</td>
						<td width="5"></td>
						<td></td>
					</tr>
					<table width="100%" border="3"  cellpadding="5">
					<tr height="35" bgcolor="#b3b2b2">					
						<td width="150" colspan="3" align="center"><b>Nama Persyaratan Calon Peserta Didik Baru</b></td>
					</tr>
					<tr>
						<td width="150" colspan="3">
							<input type="checkbox" name="persyaratan" value="Persyaratan1">Foto Copy Ijazah & SKHUN SMP/MTs 2 lembar & dilegalisir<br>
							<input type="checkbox" name="persyaratan" value="Persyaratan2">Foto Copy Kartu Keluarga 2 lembar<br>
							<input type="checkbox" name="persyaratan" value="Persyaratan3">Foto Copy NISN 2 lembar<br>							
							<input type="checkbox" name="persyaratan" value="Persyaratan4">Foto Copy Ijazah SD/MI 2 lembar<br>							
							<input type="checkbox" name="persyaratan" value="Persyaratan5">Pas Foto Hitam Putih 3x4 = 4 lembar<br>							
							<input type="checkbox" name="persyaratan" value="Persyaratan6">Menyerahkan FC KIP (Kartu Indonesia Pintar) bagi yang punya<br>							
							<input type="checkbox" name="persyaratan" value="Persyaratan7">Biaya Pendaftaran Rp. 50.000,- (Lima puluh ribu rupiah)<br>							
						</td>
					</tr>					
					</table>
					<br>
					<table width="100%" border="2"  cellpadding="5">
					<td width="150" colspan="3" align="center">Tulisan bertanda * artinya anda di wajibkan mengisi data tersebut</td>
					</table>
				<br>
				<br>
					<table  align="reight" width="100%" border="0"  cellpadding="6" >
					<td><center>&nbsp;........................., ..................... 2020</center>
					<br><center>Pendaftar,</center><br>
					<br>
					<br>
					<br>
					
										
					<center><u><b>..............................................</u></b></center>
				</tr>
					</table>
			</td>
		</tr>
	</table>

</div>
<script>window.onload = function() { window.print(); }</script>