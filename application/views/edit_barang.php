<!-- Main content -->
<section class="content mt-2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Ubah Barang</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
                       
                    <form action="<?= base_url("barang/update"); ?>" method="POST">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?= $barang['id']; ?>">
                            <label for="barcode">Barcode</label>
                            <input type="text" class="form-control" name="kode_barcode" id="barcode" 
                                placeholder="Kode Barcode" value="<?= $barang['kode_barcode']; ?>" read_only>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama_barang" id="nama" 
                                placeholder="Nama Barang" value="<?= $barang['nama_barang']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="qty">Qty</label>
                            <input type="number" class="form-control" name="qty" id="qty" 
                                placeholder="Jumlah Barang" value="<?= $barang['qty']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="Harga">Harga</label>
                            <input type="number" class="form-control" name="harga" id="Harga" 
                                placeholder="Harga Barang" value="<?= $barang['harga']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="no_rak">Penyimpanan</label>
                            <select name="no_rak" class="form-control" required>
                            <option value="">Pilih Rak</option>
                            <option value="Baris A" <?php if($barang['no_rak']=="Baris A"){ echo "selected";} ?>>Baris A</option>
                            <option value="Baris B" <?php if($barang['no_rak']=="Baris B"){ echo "selected";} ?>>Baris B</option>
                            <option value="Baris C" <?php if($barang['no_rak']=="Baris C"){ echo "selected";} ?>>Baris C</option>
                            <option value="Baris D" <?php if($barang['no_rak']=="Baris D"){ echo "selected";} ?>>Baris D</option>
                        </select>
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
