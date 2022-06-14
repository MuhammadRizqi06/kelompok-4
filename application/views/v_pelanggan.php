<div class="content-wrapper">
    <section class="content-header">
        <div><?= $this->session->flashdata('message'); ?>
        </div>
        <div>
            <h1>Daftar Pelanggan</h1>
            <ol class="breadcrumb">
                <li><a href="<?= base_url('') . 'admin/index' ?>"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                <li class="active">Daftar Pelanggan</li>
            </ol>
        </div>
    </section>

    <section class="content">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Data Pelanggan</button>
        <table class="table">

            <tr>
                <th>NO</th>
                <th>ID Pelanggan</th>
                <th>Tanggal Daftar</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Nomor Hp</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
            </tr>

            <?php
            $no = 1;
            foreach ($pelanggan as $plg) : ?>

                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $plg->id_pelanggan ?></td>
                    <td><?= $plg->tgl_daftar ?></td>
                    <td><?= $plg->nik ?></td>
                    <td><?= $plg->nama_plg ?></td>
                    <td><?= $plg->nohp ?></td>
                    <td><?= $plg->umur ?></td>
                    <td><?= $plg->jk ?></td>
                    <td><?= $plg->alamat ?></td>
                    <td><?= anchor('pelanggan/hapus/' . $plg->id_pelanggan, '<div class="glyphicon glyphicon-trash"></div>') ?></td>
                    <!-- <td><?php echo anchor('pelanggan/edit/' . $plg->id_pelanggan, '<i class="glyphicon glyphicon-edit"></i>'); ?></td> -->
                </tr>
            <?php endforeach; ?>

        </table>
    </section>

    <!-- Modal dari Bootstrap untuk Form Inputan Tambah Pelanggan -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">FORM TAMBAH DATA PELANGGAN</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url() . 'pelanggan/tambah_pelanggan'; ?>" method="POST">

                        <div class="form-group">
                            <label for="tgl_daftar">Tanggal Daftar</label>
                            <input type="date" name="tgl_daftar" id="tgl_daftar" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukan NIK">
                        </div>
                        <div class="form-group">
                            <label for="nama_plg">Nama Pelanggan</label>
                            <input type="text" name="nama_plg" id="nama_plg" class="form-control" placeholder="Masukan Nama">
                        </div>
                        <div class="form-group">
                            <label for="nohp">Nomor HP</label>
                            <input type="text" name="nohp" id="nohp" class="form-control" placeholder="Masukan Nomor Hp">
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="text" name="umur" id="umur" class="form-control" placeholder="Masukan Umur">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label><br>
                            <select name="jk" id="jk">
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukan Alamat">
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>