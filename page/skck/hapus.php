<?php
$kode=$_GET['id'];
$data=$koneksi->query("DELETE FROM data_skck WHERE nomor='$kode'");
if($data){
	?>
	<script type="text/javascript">
		alert("Data Berhasil Dihapus");
		window.location.href="?page=skck";
	</script>
	<?php
}
?>