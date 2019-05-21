<?php
$kode=$_GET['id'];
   $data=$koneksi->query("DELETE FROM kesatuan WHERE id='$kode'");
if($data){
	?>
	<script type="text/javascript">
		alert("Data Berhasil Dihapus");
		window.location.href="?page=kepolisian";
	</script>
	<?php
}
?>