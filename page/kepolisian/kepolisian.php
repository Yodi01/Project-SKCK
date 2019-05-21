

<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA KESATUAN KEPOLISIAN
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                           
                                            <th>DAERAH</th>
                                            <th>KEPOLISIAN</th>
											<th>JALAN</th>
											<th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
										<?php
											
											$sql = $koneksi->query("Select * from kesatuan");
											while ($data = $sql->fetch_assoc()){
										?>                                      
									   <tr>
                                           
                                            <td><?php echo $data['daerah']?></td>
                                            <td><?php echo $data['kepolisian']?></td>
                                           <td><?php echo $data['jalan']?></td>
											<td>
												<a href="?page=kepolisian&aksi=ubah&id=<?php echo $data['id']?>" class="btn btn-success waves-effect">Ubah</a>
												<a onclick='return confirm("Apakah Anda Yakin Akan Menghapus Data Ini...???")'href="?page=kepolisian&aksi=hapus&id=<?php echo $data['id']?>" class="btn btn-danger waves-effect">Hapus</a>
											</td>
                                        </tr>
	
    										<?php
											
											} ?>
									</tbody>
                                </table>
									<button type="button" data-color="pink" data-toggle="modal" data-target="#mdModal" class="btn bg-blue waves-effect">Input</button>
							</div>
				
				
											
			<div class="modal fade" id="mdModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">INPUT DATA KESATUAN</h4>
                        </div>
                        <div class="modal-body">

							<form method="POST" enctype="multipart/form-data">
                              
							<label for="">ID</label>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
										<?php
											$kb = $koneksi->query("Select max(id) as maxKode From kesatuan");
											while ($dkb = $kb->fetch_assoc()){
												$id = $dkb['maxKode'];
											}
											$noUrut = (int) substr($id, 4, 4);
											$noUrut++;
											$char = "KPLS";
											$newID = $char . sprintf("%04s", $noUrut);
										?>
                                            <input type="text" readonly name="id" class="form-control" value="<?php echo $newID; ?>"  />
                                        </div>
                                    </div>
                                </div>
                            </div>
														
							
							<label for="">DAERAH</label>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="daerah" class="form-control" placeholder="Daerah..." />
                                        </div>
                                    </div>
                                </div>
                            </div>
							
							<label for="">KEPOLISIAN</label>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="kepolisian" class="form-control no-resize" placeholder="kepolisian..."/>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
							<label for="">Alamat</label>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="jalan" type="text" class="form-control no-resize" placeholder="alamat..."/>
                                        </div>
                                    </div>
                                </div>
                            </div>
							

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button>
							<input type="submit" name="simpan" value="simpan" class="btn btn-primary">
							</form>							
						</div>
                    </div>
                </div>
            </div>				

			<?php
			if(isset($_POST['simpan'])){
				
				$daerah = $_POST['daerah'];
				$kepolisian = $_POST['kepolisian'];
				$jalan = $_POST['jalan'];
				$id = $_POST['id'];
	
					$sql = $koneksi->query("insert into kesatuan values('$daerah','$kepolisian','$jalan','$id')");
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
	