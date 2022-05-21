<!-- Main content -->
<section class="content mt-2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Ubah Password</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
                        <div class="row">
                            <div class="col-lg-12" method="post">
                                <form action="<?= base_url("login/aksi_ubah_password"); ?>" method="post">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-control">
                                    <button class="btn btn-primary float-right mt-3">Simpan</button>
                                </div>
                                </form>
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
