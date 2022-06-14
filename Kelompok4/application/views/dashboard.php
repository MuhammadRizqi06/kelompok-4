<!-- Content Wrapper. Keseluruhan konten -->
<div class="content-wrapper">
    <!-- Content Header (Bagian header) -->
    <section class="content-header">
        <div>
            <h1>Beranda</h1>
            <ol class="breadcrumb">
                <li><a href="<?= base_url('') . 'admin/index' ?>"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                <li class="active">Beranda</li>
            </ol>
        </div>
    </section>

    <!-- Konten Utama -->
    <section class="content">
        <!-- Area kotak kotak di header content -->
        <div class="row">
            <!-- kodingan perkotak -->
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>
                            <center><?= $jumlahPkj ?></center>
                        </h3>
                        <center>
                            <p>Daftar Pekerja</p>
                        </center>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="<?= base_url('') . 'pekerja/index' ?>" class="small-box-footer">Lihat Detail<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- /kodingan kotak pekerja -->

            <!-- kodingan perkotak -->
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>
                            <center><?= $jumlahPlg ?></center>
                        </h3>
                        <center>
                            <p>Daftar Pelanggan</p>
                        </center>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="<?= base_url('') . 'pelanggan/index' ?>" class="small-box-footer">Lihat Detail<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- /kodingan kotak daftar pelanggan -->

            <!-- kodingan perkotak -->
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>
                            <center><?= $totalTransaksi ?></center>
                        </h3>
                        <center>
                            <p>Laporan Transaksi</p>
                        </center>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="<?= base_url('') . 'laporan/index' ?>" class="small-box-footer">Lihat Detail <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- /kodingan kotak Laporan Transaksi -->

            <!-- kodingan perkotak -->
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>
                            <center><?= $jumlahVaksin ?></center>
                        </h3>
                        <center>
                            <p>Daftar Vaksin</p>
                        </center>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="<?= base_url('') . 'vaksin/index' ?>" class="small-box-footer">Lihat Detail<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- /kodingan kotak vaksin -->
        </div>
        <!-- /Area kotak kotak di header -->
    </section>
    <!-- /konten utama -->
</div>
<!-- tutup content-wrapper -->