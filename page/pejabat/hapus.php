<?php
$kode=$_GET['id'];
   $data=$koneksi->query("DELETE FROM pejabat WHERE nrp='$kode'");
if($data){
	?>
	<script type="text/javascript">
		alert("Data Berhasil Dihapus");
		window.location.href="?page=pejabat";
	</script>
	<?php
}
?>