<!-- Main content -->
<section class="content mt-2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Data Permintaan Ke Gudang</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
                        <button data-toggle="modal" data-target="#modalTambah" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Tambah Data</button>
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nama Barang</th>
									<th>Qty</th>
									<th>Tanggal</th>
									<th>Status</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
                                <?php foreach($data_permintaan as $permintaan){ ?>
								<tr>
									<td><?= $permintaan->id; ?></td>
									<td><?= $permintaan->nama_barang; ?></td>
									<td><?= $permintaan->qty; ?></td>
									<td><?= $permintaan->tanggal; ?></td>
									<td><?= $permintaan->status; ?></td>
									<td>
                                        <a href="<?= base_url("permintaan_gudang/edit/".$permintaan->id); ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i> Edit</a>
										<a href="<?= base_url("permintaan_gudang/selesai/".$permintaan->id); ?>" class="btn btn-success"><i class="fas fa-check-double"></i> Selesai Disiapkan</a>
                                        <a href="<?= base_url("permintaan_gudang/delete/".$permintaan->id); ?>" onclick="return confirm('apakah anda yakin akan menghapus?')" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                                    </td>
								</tr>
                                <?php } ?>
							</tbody>
						</table>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</section>
<!-- /.content -->

<!-- modal tambah-->
<!-- Modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Suplier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url("permintaan_gudang/add_action"); ?>" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama</label>
						<select name="nama_barang" class="form-control" required>
							<option value="">Silahkan Pilih Barang</option>
							<?php foreach($data_barang as $barang){ ?>
								<option value="<?= $barang->nama_barang; ?>"><?= $barang->nama_barang; ?></option>
							<?php } ?>
						</select>
                        
                    </div>
                    <div class="form-group">
                        <label for="qty">Qty</label>
						<input type="number" class="form-control" name="qty" id="qty" 
                            placeholder="Qty Barang" required>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>