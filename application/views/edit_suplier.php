<!-- Main content -->
<section class="content mt-2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Ubah Suplier</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
                       
                    <form action="<?= base_url("suplier/update"); ?>" method="POST">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?= $suplier['id']; ?>">
                            <label for="nama_suplier">Nama Suplier</label>
                            <input type="text" class="form-control" name="nama_suplier" id="nama_suplier" 
                                placeholder="Nama Suplier" value="<?= $suplier['nama_suplier']; ?>" read_only>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                           <textarea name="alamat" class="form-control" cols="30" rows="5" required><?= $suplier['alamat']; ?></textarea>
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
