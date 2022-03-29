<?php
// Load file koneksi.php
include "../../config.php";
// Load plugin PHPExcel nya
require_once '../PHPExcel/PHPExcel.php';
// Panggil class PHPExcel nya
$excel = new PHPExcel();
// Settingan awal file excel
$excel->getProperties()->setCreator('Fatoni')
             ->setLastModifiedBy('Fatoni')
             ->setTitle("Data Siswa")
             ->setSubject("Siswa")
             ->setDescription("Laporan Semua Data Siswa")
             ->setKeywords("Data Siswa");
// Buat sebuah variabel untuk menampung pengaturan style dari header tabel
$style_col = array(
  'font' => array('bold' => true), // Set font nya jadi bold
  'alignment' => array(
    'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
    'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
  ),
  'borders' => array(
    'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
    'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
    'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
    'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
  )
);
// Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
$style_row = array(
  'alignment' => array(
    'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
  ),
  'borders' => array(
    'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
    'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
    'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
    'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
  )
);
$excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA CALON SISWA BARU SMK NU 1 KARANGGENENG"); // Set kolom A1 dengan tulisan "DATA SISWA"
$excel->getActiveSheet()->mergeCells('A1:K1'); // Set Merge Cell pada kolom A1 sampai F1
$excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
$excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
$excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT); // Set text center untuk kolom A1
// Buat header tabel nya pada baris ke 3
$excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('B3', "NIK"); // Set kolom B3 dengan tulisan "NIS"
$excel->setActiveSheetIndex(0)->setCellValue('C3', "NISN"); // Set kolom C3 dengan tulisan "NAMA"
$excel->setActiveSheetIndex(0)->setCellValue('D3', "NAMA LENGKAP"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
$excel->setActiveSheetIndex(0)->setCellValue('E3', "HOBI"); // Set kolom E3 dengan tulisan "TELEPON"
$excel->setActiveSheetIndex(0)->setCellValue('F3', "JENIS KELAMIN"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('G3', "TEMPAT LAHIR"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('H3', "TANGGAL LAHIR"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('I3', "ASAL SEKOLAH"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('J3', "ALAMAT ASAL SEKOLAH"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('K3', "AGAMA"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('L3', "KEWARGANEGARAAN"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('M3', "ANAK KE"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('N3', "JUMLAH SAUDARA"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('O3', "PROVINSI"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('P3', "KABUPATEN"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('Q3', "KECAMATAN"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('R3', "DESA"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('S3', "ALAMAT"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('T3', "KODE POS"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('U3', "NOMOR HP"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('V3', "TINGGI BADAN"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('W3', "BERAT BADAN"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('X3', "RIWAYAT PENYAKIT"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('Y3', "NILAI B. INDO"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('Z3', "NILAI MTK"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AA3', "NILAI B. INGG"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AB3', "JURUSAN 1"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AC3', "JURUSAN 2"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AD3', "PRESTASI"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AE3', "TINGKAT"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AF3', "JUARA KE"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AG3', "NIK AYAH"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AH3', "NAMA AYAH"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AI3', "PENDIDIKAN TERAKHIR AYAH"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AJ3', "PEKERJAAN AYAH"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AK3', "NOMOR HP AYAH"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AL3', "NIK IBU"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AM3', "NAMA IBU"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AN3', "PENDIDIKAN TERAKHIR IBU"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AO3', "PEKERJAAN IBU"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AP3', "NOMOR HP IBU"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AQ3', "ALAMAT ORTU"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AR3', "NIK WALI"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AS3', "NAMA WALI"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AT3', "PENDIDIKAN TERAKHIR WALI"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AU3', "PEKERJAAN WALI"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AV3', "NOMOR HP WALI"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('AW3', "ALAMAT WALI"); // Set kolom F3 dengan tulisan "ALAMAT"
// Apply style header yang telah kita buat tadi ke masing-masing kolom header
$excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('K3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('L3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('M3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('N3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('O3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('P3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('Q3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('R3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('S3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('T3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('U3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('V3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('W3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('X3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('Y3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('Z3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AA3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AB3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AC3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AD3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AE3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AF3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AG3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AH3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AI3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AJ3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AK3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AL3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AM3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AN3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AO3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AP3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AQ3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AR3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AS3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AT3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AU3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AV3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AW3')->applyFromArray($style_col);
// Set height baris ke 1, 2 dan 3
$excel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('2')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('3')->setRowHeight(20);

// Buat query untuk menampilkan semua data siswa
$sql = mysqli_query($koneksi, "SELECT a.*, b.*, c.*, d.*, e.*, f.*
								FROM (((((calon_siswa a
								INNER JOIN calon_siswa_biodata b ON a.siswa_id=b.siswa_id)
								INNER JOIN calon_siswa_nilai_uan c ON a.siswa_id=c.siswa_id)
								INNER JOIN calon_siswa_jurusan d ON a.siswa_id=d.siswa_id)
								INNER JOIN calon_siswa_prestasi e ON a.siswa_id=e.siswa_id)
								INNER JOIN calon_siswa_ortu f ON a.siswa_id=f.siswa_id)") or die(mysqli_error($koneksi));

$no = 1; // Untuk penomoran tabel, di awal set dengan 1
$numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
while($data = mysqli_fetch_assoc($sql)){ // Ambil semua data dari hasil eksekusi $sql
	$id = $data['siswa_id'];
	$s = mysqli_query($koneksi, "SELECT * FROM dari_sekolah WHERE id_asl='".$data["biodata_asal_sekolah"]."'"); 
	$asal_sekolah = mysqli_fetch_assoc($s);
	
	$agm = mysqli_query($koneksi, "SELECT * FROM agama WHERE id='".$data["biodata_agama"]."'"); 
	$agama = mysqli_fetch_assoc($agm);
	
	$pro = mysqli_query($koneksi, "SELECT * FROM provinsi WHERE prov_id='".$data["biodata_provinsi"]."'"); 
	$provinsi = mysqli_fetch_assoc($pro);
	
	$kab = mysqli_query($koneksi, "SELECT * FROM kabupaten WHERE kab_id=''".$data["biodata_kabupaten"]."''"); 
	$kabupaten = mysqli_fetch_assoc($kab);
	
	$kec = mysqli_query($koneksi, "SELECT * FROM kecamatan WHERE kec_id='".$data["biodata_kecamatan"]."'"); 
	$kecamatan = mysqli_fetch_assoc($kec);
	
	$des = mysqli_query($koneksi, "SELECT * FROM desa WHERE des_id='".$data["biodata_desa"]."'"); 
	$desa = mysqli_fetch_assoc($des);
	
	$jur1 = mysqli_query($koneksi, "SELECT * FROM jurusan WHERE id_jurusan='".$data["jurusan_1"]."'"); 
	$jurusan1 = mysqli_fetch_assoc($jur1);
	
	$jur2 = mysqli_query($koneksi, "SELECT * FROM jurusan WHERE id_jurusan='".$data["jurusan_2"]."'"); 
	$jurusan2 = mysqli_fetch_assoc($jur2);
	
	$ting = mysqli_query($koneksi, "SELECT * FROM tingkat WHERE id_tingkat='".$data["prestasi_tingkat"]."'"); 
	$tinkgkat = mysqli_fetch_assoc($ting);
	
	$pek1 = mysqli_query($koneksi, "SELECT * FROM pekerjaan WHERE pek_id='".$data["ortu_pekerjaan_ayah"]."'"); 
	$pekerjaan1 = mysqli_fetch_assoc($pek1);
	
	$pen1 = mysqli_query($koneksi, "SELECT * FROM pendidikan WHERE pend_id='".$data["ortu_pendidikan_ayah"]."'"); 
	$pendidikan1 = mysqli_fetch_assoc($pen1);
	
	$pek2 = mysqli_query($koneksi, "SELECT * FROM pekerjaan WHERE pek_id='".$data["ortu_pekerjaan_ibu"]."'"); 
	$pekerjaan2 = mysqli_fetch_assoc($pek2);
	
	$pen2 = mysqli_query($koneksi, "SELECT * FROM pendidikan WHERE pend_id='".$data["ortu_pendidikan_ibu"]."'"); 
	$pendidikan2 = mysqli_fetch_assoc($pen2);
	
	$pek3 = mysqli_query($koneksi, "SELECT * FROM pekerjaan WHERE pek_id='".$data["ortu_pekerjaan_wali"]."'"); 
	$pekerjaan3 = mysqli_fetch_assoc($pek3);
	
	$pen3 = mysqli_query($koneksi, "SELECT * FROM pendidikan WHERE pend_id='".$data["ortu_pendidikan_wali"]."'"); 
	$pendidikan3 = mysqli_fetch_assoc($pen3);
	
	$excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
	$excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data['biodata_nik'], PHPExcel_Style_NumberFormat::FORMAT_TEXT);
	$excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data['biodata_nisn'], PHPExcel_Style_NumberFormat::FORMAT_TEXT);
	$excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data['siswa_nama']);
	$excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data['biodata_hobi']);
	$excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data['siswa_jenis_kelamin']);
	$excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data['siswa_tempat_lahir']);
	$excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data['siswa_tanggal_lahir']);
	$excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $asal_sekolah['asl_sekolah']);
	$excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $asal_sekolah['alamat_skl']);
	$excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $agama['agama_nama']);
	$excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $data['biodata_kewarganegaraan']);
	$excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $data['biodata_anak_ke']);
	$excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $data['biodata_jumlah_saudara']);
	$excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, $provinsi['prov_nama']);
	$excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $kabupaten['kab_nama']);
	$excel->setActiveSheetIndex(0)->setCellValue('Q'.$numrow, $kecamatan['kec_nama']);
	$excel->setActiveSheetIndex(0)->setCellValue('R'.$numrow, $desa['des_nama']);
	$excel->setActiveSheetIndex(0)->setCellValue('S'.$numrow, $data['biodata_alamat']);
	$excel->setActiveSheetIndex(0)->setCellValue('T'.$numrow, $data['biodata_kodepos']);
	$excel->setActiveSheetIndex(0)->setCellValue('U'.$numrow, $data['siswa_no_hp'], PHPExcel_Style_NumberFormat::FORMAT_TEXT);
	$excel->setActiveSheetIndex(0)->setCellValue('V'.$numrow, $data['biodata_tinggi_badan']);
	$excel->setActiveSheetIndex(0)->setCellValue('W'.$numrow, $data['biodata_berat_badan']);
	$excel->setActiveSheetIndex(0)->setCellValue('X'.$numrow, $data['biodata_riwayat_penyakit']);
	$excel->setActiveSheetIndex(0)->setCellValue('Y'.$numrow, $data['uan_bahasa_indonesia']);
	$excel->setActiveSheetIndex(0)->setCellValue('Z'.$numrow, $data['uan_matematika']);
	$excel->setActiveSheetIndex(0)->setCellValue('AA'.$numrow, $data['uan_bahasa_inggris']);
	$excel->setActiveSheetIndex(0)->setCellValue('AB'.$numrow, $jurusan1['nama_jurusan']);
	$excel->setActiveSheetIndex(0)->setCellValue('AC'.$numrow, $jurusan2['nama_jurusan']);
	$excel->setActiveSheetIndex(0)->setCellValue('AD'.$numrow, $data['prestasi_nama']);
	$excel->setActiveSheetIndex(0)->setCellValue('AE'.$numrow, $tingkat['nama_tingkat']);
	$excel->setActiveSheetIndex(0)->setCellValue('AF'.$numrow, $data['prestasi_juara_ke']);
	$excel->setActiveSheetIndex(0)->setCellValue('AG'.$numrow, $data['ortu_nik_ayah'], PHPExcel_Style_NumberFormat::FORMAT_TEXT);
	$excel->setActiveSheetIndex(0)->setCellValue('AH'.$numrow, $data['ortu_nama_ayah']);
	$excel->setActiveSheetIndex(0)->setCellValue('AI'.$numrow, $pendidikan1['pend_nama']);
	$excel->setActiveSheetIndex(0)->setCellValue('AJ'.$numrow, $pekerjaan1['pek_nama']);
	$excel->setActiveSheetIndex(0)->setCellValue('AK'.$numrow, $data['ortu_no_hp_ayah'], PHPExcel_Style_NumberFormat::FORMAT_TEXT);
	$excel->setActiveSheetIndex(0)->setCellValue('AL'.$numrow, $data['ortu_nik_ibu'], PHPExcel_Style_NumberFormat::FORMAT_TEXT);
	$excel->setActiveSheetIndex(0)->setCellValue('AM'.$numrow, $data['ortu_nama_ibu']);
	$excel->setActiveSheetIndex(0)->setCellValue('AN'.$numrow, $pendidikan2['pend_nama']);
	$excel->setActiveSheetIndex(0)->setCellValue('AO'.$numrow, $pekerjaan2['pek_nama']);
	$excel->setActiveSheetIndex(0)->setCellValue('AP'.$numrow, $data['ortu_no_hp_ibu'], PHPExcel_Style_NumberFormat::FORMAT_TEXT);
	$excel->setActiveSheetIndex(0)->setCellValue('AQ'.$numrow, $data['ortu_alamat']);
	$excel->setActiveSheetIndex(0)->setCellValue('AR'.$numrow, $data['ortu_nik_wali'], PHPExcel_Style_NumberFormat::FORMAT_TEXT);
	$excel->setActiveSheetIndex(0)->setCellValue('AS'.$numrow, $data['ortu_nama_wali']);
	$excel->setActiveSheetIndex(0)->setCellValue('AT'.$numrow, $pendidikan3['pend_nama']);
	$excel->setActiveSheetIndex(0)->setCellValue('AU'.$numrow, $pekerjaan3['pek_nama']);
	$excel->setActiveSheetIndex(0)->setCellValue('AV'.$numrow, $data['ortu_no_hp_wali'], PHPExcel_Style_NumberFormat::FORMAT_TEXT);
	$excel->setActiveSheetIndex(0)->setCellValue('AW'.$numrow, $data['ortu_alamat_wali']);
  
  $excel->getActiveSheet()->getRowDimension($numrow)->setRowHeight(20);
  
  $no++; // Tambah 1 setiap kali looping
  $numrow++; // Tambah 1 setiap kali looping
}

// Set width kolom

$excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
$excel->getActiveSheet()->getColumnDimension('B')->setWidth(25); // Set width kolom B
$excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('D')->setWidth(30); // Set width kolom D
$excel->getActiveSheet()->getColumnDimension('E')->setWidth(20); // Set width kolom E
$excel->getActiveSheet()->getColumnDimension('F')->setWidth(20); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('H')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('I')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('J')->setWidth(25);
$excel->getActiveSheet()->getColumnDimension('K')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('L')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('M')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('N')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('O')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('P')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('Q')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('R')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('S')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('T')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('U')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('V')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('W')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('X')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('Y')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('Z')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('AA')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('AB')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('AC')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('AD')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('AE')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('AF')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('AG')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('AH')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('AI')->setWidth(27);
$excel->getActiveSheet()->getColumnDimension('AJ')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('AK')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('AL')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('AM')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('AN')->setWidth(27);
$excel->getActiveSheet()->getColumnDimension('AO')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('AP')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('AQ')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('AR')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('AS')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('AT')->setWidth(27);
$excel->getActiveSheet()->getColumnDimension('AU')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('AV')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('AW')->setWidth(20);

// Set orientasi kertas jadi LANDSCAPE
$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
// Set judul file excel nya
$excel->getActiveSheet(0)->setTitle("Calon Siswa Baru TP. 2020-2021");
$excel->setActiveSheetIndex(0);
// Proses file excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="PPDB2021.xlsx"'); // Set nama file excel nya
header('Cache-Control: max-age=0');
$write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
$write->save('php://output');

?>
