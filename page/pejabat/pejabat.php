

<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA PEJABAT
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
                                           
                                            <th>Nama Pejabat</th>
                                            <th>Pangkat</th>
											<th>NRP</th>
											<th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
										<?php
											
											$sql = $koneksi->query("Select * from pejabat");
											while ($data = $sql->fetch_assoc()){
										?>                                      
									   <tr>
                                           
                                            <td><?php echo $data['nama_pejabat']?></td>
                                            <td><?php echo $data['pangkat']?></td>
                                           <td><?php echo $data['nrp']?></td>
											<td>
												<a href="?page=pejabat&aksi=ubah&id=<?php echo $data['nrp']?>" class="btn btn-success waves-effect">Ubah</a>
												<a onclick='return confirm("Apakah Anda Yakin Akan Menghapus Data Ini...???")'href="?page=pejabat&aksi=hapus&id=<?php echo $data['nrp']?>" class="btn btn-danger waves-effect">Hapus</a>
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
                            <h4 class="modal-title" id="defaultModalLabel">INPUT DATA PEJABAT</h4>
                        </div>
                        <div class="modal-body">

							<form method="POST" enctype="multipart/form-data">
                              
														
							<label for="">Nama Pejabat</label>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="nama_pejabat" class="form-control" placeholder="Nama Pejabat..." />
                                        </div>
                                    </div>
                                </div>
                            </div>
							
							<label for="">Pangkat</label>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="pangkat" class="form-control no-resize" placeholder="Tambahkan keterangan pangkat..."/>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
							<label for="">NRP</label>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="nrp" type="text" class="form-control no-resize" placeholder="Tambahkan NRP..."/>
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
				
				$nama_pejabat = $_POST['nama_pejabat'];
				$pangkat = $_POST['pangkat'];
				$nrp = $_POST['nrp'];
	
					$sql = $koneksi->query("insert into pejabat values('$nama_pejabat','$pangkat','$nrp')");
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
	