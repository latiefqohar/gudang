<!-- Main content -->
<section class="content mt-2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Laporan Barang Masuk</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">

						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Kode Barcode</th>
									<th>Nama Barang</th>
									<th>Suplier</th>
									<th>Qty</th>
									<th>Harga</th>
									<th>PPN</th>
									<th>Tanggal</th>
									
								</tr>
							</thead>
							<tbody>
                                <?php foreach($data_barang_masuk as $barang_masuk){ ?>
								<tr>
									<td><?= $barang_masuk->kode_barcode; ?></td>
									<td><?= $barang_masuk->nama_barang; ?></td>
									<td><?= $barang_masuk->suplier; ?></td>
									<td><?= $barang_masuk->qty; ?></td>
									<td><?= $barang_masuk->harga; ?></td>
									<td><?= round($barang_masuk->harga*11/100); ?></td>
									<td><?= $barang_masuk->tanggal_transaksi; ?></td>
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
                <form action="<?= base_url("suplier/add_action"); ?>" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama_suplier" id="nama" 
                            placeholder="Nama Suplier" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Alamat</label>
                        <textarea name="alamat" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>