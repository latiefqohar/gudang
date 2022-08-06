<?php 

function rupiah($angka){
	
	$hasil_rupiah = number_format($angka,0,',','.');
	return $hasil_rupiah;
 
}

?>

<!-- Main content -->
<section class="content mt-2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Data PO</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
                        <div class="row mb-5">
							<div class="col-lg-12">
							<form action="" method="POST">
								<div class="form-group">
									<label for="nama">Barang</label>
									<select name="id_barang" class="form-control" required>
										<option value="">Pilih Barang</option>
										<?php foreach($barang as $brg){ ?>
											<option value="<?= $brg->id; ?>"><?= $brg->nama_barang; ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group">
									<label for="nama">Total</label>
									<input type="number" name="total" class="form-control" required>
								</div>
								<button type="submit" class="btn btn-primary float-right">Tambah Barang</button>
							</form>

							</div>
						</div>
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nama Barang</th>
									<th>Total Barang</th>
									<th>Harga</th>
									<th>Total Harga</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
                                <?php foreach($data_po as $po){ ?>
								<tr>
									<td><?= $po->id; ?></td>
									<td><?= $po->nama_barang; ?></td>
									<td><?= $po->total; ?></td>
									<td><?= rupiah($po->harga); ?></td>
									<td><?= rupiah($po->total*$po->harga); ?></td>
									<td>
                                        <a href="<?= base_url("po/delete_temp/".$po->id); ?>" onclick="return confirm('apakah anda yakin akan menghapus?')" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                                    </td>
								</tr>
                                <?php } ?>
							</tbody>
						</table>

						<form action="<?= base_url("po/simpan_po"); ?>" method="POST" >
							<div class="form-group mt-5">
								<label for="nama">Suplier</label>
								<select name="id_suplier" class="form-control" required>
									<option value="">Pilih Suplier</option>
									<?php foreach($suplier as $spl){ ?>
										<option value="<?= $spl->id; ?>"><?= $spl->nama_suplier; ?></option>
									<?php } ?>
								</select>
							</div>
							<button type="submit" class="btn btn-warning float-right">Simpan PO</button>
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

