<!-- Main content -->
<section class="content mt-2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Barang Masuk</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
                       
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary mb-2 float-right" data-toggle="modal" data-target="#modalTambah">
                                <i class="fas fa-plus-circle"></i> Tambah Data Manual
                                </button>
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <label for="barcode">BARCODE</label>
                                        <input type="text" name="kode_barcode" class="form-control"  placeholder="Scan Barcode"  autofocus>
                                        <small id="barcode note" class="form-text text-danger">Silahkan Scan Barcode Atau Masukkan Kode Barcode</small>
                                    </div>
                                </form>

                                
                                <?php if($barang){ ?>
                                    
                                    <?php if($barang['status']=="sukses"){ ?>

                                        <div class="alert alert-success" role="alert">
                                            Barang berhasil diinput 
                                        </div>
                                        <h2>Data Barang</h2>
                                        <table class="table table-bordered table-striped">
                                            <tr>
                                                <th>Barcode</th>
                                                <td><b><?= $barang['kode_barcode']; ?></b></td>
                                            </tr>
                                            <tr>
                                                <th>Nama Barang</th>
                                                <td><?= $barang['nama_barang']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Suplier</th>
                                                <td><?= $barang['suplier']; ?></td>
                                            </tr>
                                            <tr>
                                                <th> Quantity</th>
                                                <td><b><?= $barang['qty']; ?></b></td>
                                            </tr>
                                            <tr>
                                                <th> Harga</th>
                                                <td><b><?= $barang['harga']; ?></b></td>
                                            </tr>
                                            <tr>
                                                <th> PPN (11%)</th>
                                                <td><b><?= round($barang['harga']*11/100); ?></b></td>
                                            </tr>
                                            <tr>
                                                <th>Rak</th>
                                                <td><?= $barang['no_rak']; ?></td>
                                            </tr>
                                        </table>
                                        <audio src="<?= base_url("assets/success.mp3"); ?>" autoplay="autoplay">
                                    <?php }else{ ?>
                                        <div class="alert alert-danger" role="alert">
                                            Barang Gagal diinput, Barcode tidak ditemukan 
                                            
                                        </div>
                                        <audio src="<?= base_url("assets/failed.mp3"); ?>" autoplay="autoplay">
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>

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


<!-- Modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
            <div class="form-group">
                <label for="barcode">BARCODE</label>
                <input type="text" name="kode_barcode" class="form-control"  placeholder="Scan Barcode"  required>
            </div>
            <div class="form-group">
                <label for="barcode">Qty</label>
                <input type="text" name="qty" class="form-control"  placeholder="Masukkan Qty Barang"  required>
            </div>
            <div class="form-group">
            <button class="btn btn-primary float-right">Simpan</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
