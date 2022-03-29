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

$a = explode("-", $row0['siswa_tanggal_daftar']);
$no_pendaftaran = $a[0] . $a[1] . str_pad($row0['siswa_no_pendaftaran'], 3, "0", STR_PAD_LEFT);
?>

<style>
table { border-collapse: collapse; }
</style>

<div style="width:800px; margin:auto; border:2px solid #000; padding:8px;">
	<table width="100%" border="0">
		<tr>
			<td width="100%" align="right"><img src="assets/img/wikrama.png" width="100"></td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<!--<td width="15%"><canvas id="qr"></canvas></td>-->
		</tr>
	</table>

	<hr size="3px" color="#0000">
	<center><h2><u>KARTU PESERTA</u></h2></center>

<div style="width:800px; margin:auto; border:0px dashed; #000; padding:0px;">	
	<table width="100%" border="0" cellspacing="0" cellpadding="5">
		<tr bgcolor="#b3b2b2">
			<td colspan="2" width="30%" align="center" >
				<b>Nomor Tes :</b> <font size=20> <b><br> <?php echo $no_pendaftaran; ?></b>
			</font>
			</td>
		
		</tr>
		<tr>
			<td width="45%">&nbsp;&nbsp;Nama</td>
			<td colspan="2" width="65%"><b>:</b>&nbsp;&nbsp;<?php echo $row0['siswa_nama']; ?></td>
			
		</tr>
		<tr bgcolor="#b3b2b2">
			<td>&nbsp;&nbsp;NISN</td>
			<td colspan="2"><b>:</b>&nbsp;&nbsp;<?php echo $row1['biodata_nisn']; ?></td>
			
		</tr>
		<tr>
			<td>&nbsp;&nbsp;Asal Sekolah</td>
			<td colspan="2"><b>:</b>&nbsp;&nbsp;<?php echo $row1['biodata_asal_sekolah']; ?></td>
			
		</tr>
		<tr bgcolor="#b3b2b2">
			<td>&nbsp;&nbsp;Alamat Siswa</td>
			<td colspan="2"><b>:</b>&nbsp;&nbsp;<?php echo $row1['biodata_alamat']; ?></td>
			
		</tr>
		<tr >
			<td>&nbsp;&nbsp;Username & Password PPDB Online</td>
			<td colspan="2"><b>:</b>&nbsp;&nbsp;<?php echo $row0['siswa_username']; ?></td>
		</tr>
		<tr bgcolor="#b3b2b2">
			<td>&nbsp;&nbsp;Tanggal Pendaftaran</td>
			<td colspan="2"><b>:</b>&nbsp;&nbsp;<?php echo $row0['siswa_tanggal_daftar']; ?></td>
			
		</tr>
	</table> 
</div>	
	<br>
	
	<div style="width: 350px; border:1px dashed; padding: 10px; float: left">
		<b>Keterangan :</b><br>
		&nbsp;&nbsp;1. Tes PPDB dilaksanakan tanggal 08-09 Juli 2020<br>
		&nbsp;&nbsp;2. Berpakaian seragam SMP/MTs Sekolah asal<br>
		&nbsp;&nbsp;3. Membawa Pensil 2B<br>
		&nbsp;&nbsp;4. Tes dilaksanakan mulai pukul 07.00 WIB
	</div>
	&nbsp;&nbsp;<td width="15%" align="center"><canvas id="qr"></canvas></td>

	<div style="width: 220px; padding: 10px; float: right">
		Karanggeneng, <br>
		Ketua Panitia,<br><br><br>
		<u><b>SUNANDAR, SE.</b></u>
	</div>
	<div style="clear:both"></div>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/qrious.js"></script>
<script>
var qr = new QRious({	
		element: document.getElementById('qr'),	
		size: 115,
		value: '<?php echo date("Ym").str_pad($data_siswa['no_pendaftaran'], 3, "0", STR_PAD_LEFT); ?>'
})
window.onload = function() { window.print(); }
</script>
