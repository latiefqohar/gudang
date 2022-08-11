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
                        <!-- <a href="<?= base_url("po/tambah"); ?>" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Tambah Data</a> -->
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>NO. PO</th>
									<th>Suplier</th>
									<th>Total Barang</th>
									<th>Tanggal</th>
									<th>Status</th>
									
								</tr>
							</thead>
							<tbody>
                                <?php foreach($data_po as $po){ ?>
								<tr>
									<td><?= $po->id; ?></td>
									<td><?= $po->no_po; ?></td>
									<td><?= $po->nama_suplier; ?></td>
									<td><?= $po->total_barang; ?></td>
									<td><?= $po->tanggal_transaksi; ?></td>
									<td>
										<?php if($po->status == "Selesai"){ ?>
											<span class="badge badge-success"><?= $po->status; ?></span>
										<?php }else{ ?>
											<span class="badge badge-warning"><?= $po->status; ?></span>
										 <?php } ?>
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

