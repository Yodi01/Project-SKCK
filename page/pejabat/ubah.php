<?php
$kode=$_GET['id'];
$sql=$koneksi->query("select * from pejabat where nrp='$kode'");
$tampil=$sql->fetch_assoc();

?>


<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                UBAH DATA PEJABAT
                            </h2>
							
							<div class="body">

							<form method="POST" enctype="multipart/form-data">
                            
							<label for="">NRP</label>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <?php echo $tampil['nrp']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
							<label for="">NAMA PEJABAT</label>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="nama_pejabat" class="form-control" value="<?php echo $tampil['nama_pejabat']; ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
							
							<label for="">PANGKAT</label>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="pangkat" class="form-control" value="<?php echo $tampil['pangkat']; ?>" />
										</div>
                                    </div>
                                </div>
                            </div>
							
														<a class="btn" href="?page=pejabat"><span class="glyphicon glyphicon-arrow-left"></span>  Cancel</a>
							<input type="submit" name="simpan" value="simpan" class="btn btn-primary">
							
							</form>
			

			<?php
			if(isset($_POST['simpan'])){
				
				$nama_pejabat = $_POST['nama_pejabat'];
				$pangkat = $_POST['pangkat'];

				$sql = $koneksi->query("update pejabat set nama_pejabat='$nama_pejabat', pangkat='$pangkat' where nrp='$kode'");
						if($sql){
							?>
								<script type="text/javascript">
									alert("Data Berhasil Disimpan");
									window.location.href="?page=pejabat";
								</script>
							<?php
							}
			}				
			?>