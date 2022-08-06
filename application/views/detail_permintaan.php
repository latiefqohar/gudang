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
						<table class="table table-striped">
							<tr>
								<td>Nama </td>
								<td> : <?= $data_permintaan['nama_pembeli']; ?></td>
							</tr>
							<tr>
								<td>Tanggal Beli </td>
								<td> : <?= $data_permintaan['tanggal']; ?></td>
							</tr>
							<tr>
								<td>Tanggal Beli </td>
								<td> : <?= $data_permintaan['tanggal']; ?></td>
							</tr>
							<tr>
								<td>Alamat </td>
								<td> : <?= $data_permintaan['alamat']; ?></td>
							</tr>
						</table>
						<hr>
						<h4>Data Barang</h4>
						<table class="table table-striped">
							<tr>
								<td>Barcode</td>
								<td>Nama Barang</td>
								<td>Qty</td>
								<td>Suplier</td>
								<td>Harga</td>
							</tr>
							<?php foreach ($list as $row) { ?>
								<tr>
									<td><?= $row->kode_barcode; ?></td>
									<td><?= $row->nama_barang; ?></td>
									<td><?= $row->qty; ?></td>
									<td><?= $row->suplier; ?></td>
									<td><?= $row->harga; ?></td>
								</tr>
							<?php } ?>
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
