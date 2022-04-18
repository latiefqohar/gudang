<!-- Main content -->
<section class="content mt-2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Ubah Barang Return</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
                       
                    <form action="<?= base_url("barang_return/update"); ?>" method="POST">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?= $barang_return['id']; ?>">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" id="nama_barang" 
                                placeholder="Nama Barang" value="<?= $barang_return['nama_barang']; ?>">
                        </div>
						<div class="form-group">
                            <label for="qty">Qty Barang</label>
                            <input type="number" class="form-control" name="qty" id="qty" 
                                placeholder="Qty Barang" value="<?= $barang_return['qty']; ?>">
                        </div>
						<div class="form-group">
							<label for="nama">Status Barang</label>
							<select name="status" class="form-control" required>
								<option value="">Silahkan Pilih Status Barang</option>
								<option value="Return" <?php if($barang_return['status']=="Return"){echo "selected";} ?>>Return</option>
								<option value="Service" <?php if($barang_return['status']=="Service"){echo "selected";} ?>>Service</option>
							</select>
						</div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                           <textarea name="keterangan" class="form-control" cols="30" rows="5" required><?= $barang_return['keterangan']; ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                    </form>

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
