<!-- Main content -->
<section class="content mt-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>
                            <?= $permintaan; ?>
                        </h3>

                        <p>Order Gudang</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                   
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>
                            <?= $barang_masuk; ?>
                        </h3>

                        <p>Barang Masuk</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                   
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>
                            <?= $barang_keluar; ?>
                        </h3>

                        <p>Barang Keluar</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                  
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>
                            <?= $barang_return; ?>
                        </h3>

                        <p>Return</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                   
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->


        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Barang Belum Disiapkan
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Quantity</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                </tr>
                                <?php foreach($permintaan_gudang as $permintaan){ ?>
                                <tr>
                                    <td>
                                        <?= $permintaan->nama_barang; ?>
                                    </td>
                                    <td>
                                        <?= $permintaan->qty; ?>
                                    </td>
                                    <td>
                                        <?= $permintaan->tanggal; ?>
                                    </td>
                                    <td>
                                        <?= $permintaan->status; ?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->