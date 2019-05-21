<?php
$kode=$_GET['id'];
$sql=$koneksi->query("select * from kesatuan where id='$kode'");
$tampil=$sql->fetch_assoc();

?>


<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                UBAH DATA KESATUAN KEPOLISIAN
                            </h2>
							
							<div class="body">

							<form method="POST" enctype="multipart/form-data">
                            
							<label for="">ID</label>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <?php echo $tampil['id']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
							<label for="">DAERAH</label>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="daerah" class="form-control" value="<?php echo $tampil['daerah']; ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
							
							<label for="">KEPOLISIAN</label>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="kepolisian" class="form-control" value="<?php echo $tampil['kepolisian']; ?>" />
										</div>
                                    </div>
                                </div>
                            </div>
							
							<label for="">ALAMAT</label>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="jalan" class="form-control" value="<?php echo $tampil['jalan']; ?>" />
										</div>
                                    </div>
                                </div>
                            </div>
							
														<a class="btn" href="?page=kepolisian"><span class="glyphicon glyphicon-arrow-left"></span>  Cancel</a>
							<input type="submit" name="simpan" value="simpan" class="btn btn-primary">
							
							</form>
			

			<?php
			if(isset($_POST['simpan'])){
				
				$daerah = $_POST['daerah'];
				$kepolisian = $_POST['kepolisian'];
				$jalan = $_POST['jalan'];

				$sql = $koneksi->query("update kesatuan set daerah='$daerah', kepolisian='$kepolisian', jalan='$jalan' where id='$kode'");
						if($sql){
							?>
								<script type="text/javascript">
									alert("Data Berhasil Disimpan");
									window.location.href="?page=kepolisian";
								</script>
							<?php
							}
			}				
			?>