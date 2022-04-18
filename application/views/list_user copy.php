<!-- Main content -->
<section class="content mt-2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Data User</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
                        <button data-toggle="modal" data-target="#modalTambah" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Tambah Data</button>
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nama</th>
									<th>Username</th>
									<th>Role</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
                                <?php foreach($data_user as $user){ ?>
								<tr>
									<td><?= $user->id; ?></td>
									<td><?= $user->nama; ?></td>
									<td><?= $user->username; ?></td>
									<td><?= $user->role; ?></td>
									<td>
                                        <a href="<?= base_url("user/edit/".$user->id); ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i> Edit</a>
                                        <a href="<?= base_url("user/delete/".$user->id); ?>" onclick="return confirm('apakah anda yakin akan menghapus?')" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url("user/add_action"); ?>" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" 
                            placeholder="Nama" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Username</label>
						<input type="text" class="form-control" name="username" id="username" 
                            placeholder="Username" required>
                    </div>
					<div class="form-group">
                        <label for="nama">Password</label>
						<input type="password" class="form-control" name="password" id="password" 
                            placeholder="Password Login" required>
                    </div>
					<div class="form-group">
                        <label for="nama">Role</label>
						<select name="role" class="form-control">
							<option value="">--Silahkan Pilih--</option>
							<option value="Admin Gudang">Admin Gudang</option>
							<option value="Kasir">Kasir</option>
							<option value="Owner">Owner</option>
						</select>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>