	<!-- Review gambar Js -->
	<script>
function readURL(input) { // Mulai membaca inputan gambar
if (input.files && input.files[0]) {
var reader = new FileReader(); // Membuat variabel reader untuk API FileReader
 
reader.onload = function (e) { // Mulai pembacaan file
$('#preview_gambar') // Tampilkan gambar yang dibaca ke area id #preview_gambar
.attr('src', e.target.result)
.width(150); // Menentukan lebar gambar preview (dalam pixel)
//.height(200); // Jika ingin menentukan lebar gambar silahkan aktifkan perintah pada baris ini
};
 
reader.readAsDataURL(input.files[0]);
}
}
</script>


<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA SKCK
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
                                            <th>Nomor</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
											<th>NIK</th>
											<th>Tanggal Lahir</th>
											<th>Tanggal Buat</th>
											<th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
										<?php
											$no=1;
											
											$sql = $koneksi->query("Select * from data_skck");
											while ($data = $sql->fetch_assoc()){
										?>                                      
									   <tr>
                                            <td><?php echo $data['nomor']?></td>
                                            <td><?php echo $data['nama']?></td>
                                            <td><?php echo $data['jenis_kelamin']?></td>
											<td><?php echo $data['no_ktp']?></td>
											<td><?php echo $data['tgl_lahir']?></td>
											<td><?php echo $data['pada_tgl']?></td>																	
											<td>
												<a onclick='return confirm("Apakah Anda Yakin Akan Menghapus Data Ini...???")'href="?page=skck&aksi=hapus&id=<?php echo $data['nomor']?>" class="btn btn-danger waves-effect">Hapus</a>
											</td>
                                        </tr>
	
    										<?php
											
											} ?>
									</tbody>
                                </table>
									<a href="?page=skck&aksi=input" class="btn btn-info waves-effect">Input Data</a>
									</div>
				
				