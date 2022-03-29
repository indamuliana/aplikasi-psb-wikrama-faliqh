<?php 
// Include the database config file 
include('../../config.php'); 

if(!empty($_POST["pro_id"])){ 
    // Fetch state data based on the specific country 
	$pro_id = $_POST['pro_id'];
	
    $q = mysqli_query($koneksi, "SELECT * FROM kabupaten WHERE prov_id='$pro_id'");
	
	if(mysqli_num_rows($q) > 0){
		echo '<option value="">Pilih Kabupaten</option>'; 
		while($r = mysqli_fetch_assoc($q)){
			echo '<option value="'.$r['kab_id'].'">'.$r['kab_nama'].'</option>'; 
		}
	}
	
	
}elseif(!empty($_POST["kab_id"])){ 
    // Fetch state data based on the specific country 
	$kab_id = $_POST['kab_id'];
	
    $q = mysqli_query($koneksi, "SELECT * FROM kecamatan WHERE kab_id='$kab_id'");
	
	if(mysqli_num_rows($q) > 0){
		echo '<option value="">Pilih Kecamatan</option>'; 
		while($r = mysqli_fetch_assoc($q)){
			echo '<option value="'.$r['kec_id'].'">'.$r['kec_nama'].'</option>'; 
		}
	}
	
	
}elseif(!empty($_POST["kec_id"])){ 
	$kec_id = $_POST['kec_id'];
	
    $q2 = mysqli_query($koneksi, "SELECT * FROM desa WHERE kec_id='$kec_id'");
	
	if(mysqli_num_rows($q2) > 0){
		echo '<option value="">Pilih Kecamatan</option>'; 
		while($r2 = mysqli_fetch_assoc($q2)){
			echo '<option value="'.$r2['des_id'].'">'.$r2['des_nama'].'</option>'; 
		}
	}
}
?>
