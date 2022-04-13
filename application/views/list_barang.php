<!-- Main content -->
<section class="content mt-2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Data Barang</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
                        <button data-toggle="modal" data-target="#modalTambah" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Tambah Data</button>
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Barcode</th>
									<th>Nama</th>
									<th>Stok</th>
									<th>No. Rak</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
                                <?php foreach($data_barang as $barang){ ?>
								<tr>
									<td><?= $barang->id; ?></td>
									<td><?= $barang->kode_barcode; ?></td>
									<td><?= $barang->nama_barang; ?></td>
									<td><?= $barang->qty; ?></td>
									<td><?= $barang->no_rak; ?></td>
									<td>
                                        <a href="<?= base_url("barang/edit/".$barang->id); ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i> Edit</a>
                                        <a href="<?= base_url("barang/delete/".$barang->id); ?>" onclick="return confirm('apakah anda yakin akan menghapus?')" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url("barang/add_action"); ?>" method="POST">
                    <div class="form-group">
                        <label for="barcode">Barcode</label>
                        <input type="text" class="form-control" name="kode_barcode" id="barcode" 
                            placeholder="Kode Barcode" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama_barang" id="nama" 
                            placeholder="Nama Barang" required>
                    </div>
                    <div class="form-group">
                        <label for="qty">Qty</label>
                        <input type="number" class="form-control" name="qty" id="qty" 
                            placeholder="Jumlah Barang" required>
                    </div>
                    <div class="form-group">
                        <label for="Harga">Harga</label>
                        <input type="number" class="form-control" name="harga" id="Harga" 
                            placeholder="Harga Barang" required>
                    </div>
                    <div class="form-group">
                        <label for="no_rak">No. Rak</label>
                        <input type="text" class="form-control" name="no_rak" id="no_rak" 
                            placeholder="No Rak Penyimpanan" required>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>