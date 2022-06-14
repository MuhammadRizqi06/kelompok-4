<div class="content-wrapper">
    <section class="content-header">
        <div><?= $this->session->flashdata('message'); ?>
        </div>
        <div>
            <h1>Transaksi</h1>
            <ol class="breadcrumb">
                <li><a href="<?= base_url('') . 'admin/index' ?>"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                <li class="active">Transaksi</li>
            </ol>
        </div>
    </section>
    <section class="content">
        <form action="<?= base_url('') . 'transaksi/tambah_Transaksi' ?>" method="post">
            <div class="form-group">
                <label for="id_transaksi">Nomor Transaksi</label>
                <input type="text" name="id_transaksi" id="id_transaksi" class="form-control">
            </div>
            <div class="form-group">
                <label class="control-label" for="kta">NIK Petugas</label>
                <div>
                    <select name="kta" class="form-control" id="kta">
                        <option></option>
                        <?php foreach ($pkj as $pkj) : ?>
                            <option value="<?php echo $pkj->kta ?>"><?php echo $pkj->kta ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="nama_pkj">Nama Petugas</label>
                <input type="text" name="nama_pkj" id="nama_pkj" class="form-control">
            </div>
            <div class="form-group">
                <label class="control-label" for="nik">ID Pelanggan</label>
                <div>
                    <select name="nik" class="form-control" id="nik">
                        <option></option>
                        <?php foreach ($plg as $plg) : ?>
                            <option value="<?php echo $plg->nik ?>"><?php echo $plg->nik ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="nama_plg">Nama Pelanggan</label>
                <input type="text" name="nama_plg" id="nama_plg" class="form-control">
            </div>
            <div class="form-group">
                <label class="control-label" for="id_vaksin">ID Vaksin</label>
                <div>
                    <select name="id_vaksin" class="form-control" id="id_vaksin">
                        <option></option>
                        <?php foreach ($vaksin as $vaksin) : ?>
                            <option value="<?php echo $vaksin->id_vaksin ?>"><?php echo $vaksin->id_vaksin ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="nama_vaksin">Nama Vaksin</label>
                <input type="text" name="nama_vaksin" id="nama_vaksin" class="form-control">
            </div>
            <div class="form-group">
                <label for="dosis">Dosis</label>
                <input type="text" name="dosis" id="dosis" class="form-control">
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control">
            </div>
            <div class="form-group">
                <button type="reset" class="btn btn-danger">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan Transaksi</button>
            </div>
        </form>
    </section>
</div>