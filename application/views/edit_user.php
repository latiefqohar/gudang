<!-- Main content -->
<section class="content mt-2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Ubah User</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
                       
                    <form action="<?= base_url("user/update"); ?>" method="POST">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="hidden" name="id" value="<?= $user['id']; ?>">
							<input type="text" class="form-control" name="nama" id="nama" 
								placeholder="Nama" value ="<?= $user['nama']; ?>" required>
						</div>
						<div class="form-group">
							<label for="nama">Username</label>
							<input type="text" class="form-control" name="username" id="username" 
								placeholder="Username" value ="<?= $user['username']; ?>" required>
						</div>
						
						<div class="form-group">
							<label for="nama">Role</label>
							<select name="role" class="form-control">
								<option value="">--Silahkan Pilih--</option>
								<option value="Admin Gudang" <?php if($user['role']=="Admin Gudang"){echo "selected";} ?>>Admin Gudang</option>
								<option value="Kasir" <?php if($user['role']=="Kasir"){echo "selected";} ?>>Kasir</option>
								<option value="Owner" <?php if($user['role']=="Owner"){echo "selected";} ?>>Owner</option>
							</select>
						</div>
						<div class="form-group">
							<label for="nama">Password</label>
							<input type="password" class="form-control" name="password" id="password" 
								placeholder="Password Login">
							<span class="text-danger">Isi jika akan mengubah password</span>
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
