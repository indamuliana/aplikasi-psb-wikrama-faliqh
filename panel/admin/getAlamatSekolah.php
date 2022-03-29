<?php 
// Include the database config file 
include('../../config.php'); 

if(!empty($_POST["sekolah_id"])){ 
    // Fetch state data based on the specific country 
	$sekolah_id = $_POST['sekolah_id'];
	
    $q = mysqli_query($koneksi, "SELECT * FROM dari_sekolah WHERE id_asl='$sekolah_id'");
	$r = mysqli_fetch_assoc($q);
	echo $r['alamat_skl'];
}
?>