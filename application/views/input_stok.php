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
                                <div class="form-group">
                                    <label for="exampleInputEmail1">BARCODE</label>
                                    <input type="email" class="form-control"  placeholder="Barcode"  autofocus>
                                    <small id="emailHelp" class="form-text text-danger">Silahkan Scan Barcode Atau Masukkan Kode Barcode</small>
                                </div>


                                <h2>Data Barang</h2>
                                <?php if($barang){ ?>
                                    <?php if($barang['status']=="sukses"){ ?>
                                        <div class="alert alert-success" role="alert">
                                            Barang berhasil diinput 
                                        </div>
                                    <?php }else{ ?>
                                        <div class="alert alert-danger" role="alert">
                                            Barang Gagal diinput 
                                        </div>
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
<script>
    window.addEventListener("DOMContentLoaded", event => {
  const audio = document.querySelector("audio");
  audio.volume = 0.2;
  audio.play();
});

</script>