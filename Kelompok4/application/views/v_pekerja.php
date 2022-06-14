<div class="content-wrapper">
    <section class="content-header">
        <!-- notifikasi berhasil -->
        <div><?= $this->session->flashdata('message'); ?></div>
        <!-- /tutup notifikasi berhasil -->
        <div>
            <h1>Data Pekerja</h1>
            <ol class="breadcrumb">
                <li><a href="<?= base_url('') . 'admin/index' ?>"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                <li class="active">Data Pekerja</li>
            </ol>
        </div>
    </section>

    <section class="content">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Data Pekerja</button>
        <table class="table">

            <tr>
                <th>NO</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Bagian</th>
                <th></th>

            </tr>

            <?php
            $no = 1;
            foreach ($pekerja as $pkj) : ?>

                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $pkj->kta ?></td>
                    <td><?= $pkj->nama_pkj ?></td>
                    <td><?= $pkj->email ?></td>
                    <td><?= $pkj->jk ?></td>
                    <td><?= $pkj->alamat ?></td>
                    <td><?= $pkj->bagian ?></td>
                    <td><a href="<?php base_url('mahasiswa/edit/' . $pkj->kta); ?>"><i class="glyphicon glyphicon-trash"></i></a></td>
                    <td><a href="<?php base_url('pekerja/edit/' . $pkj->kta); ?>"><i class="glyphicon glyphicon-edit"></i></a></td>
                </tr>
            <?php endforeach; ?>

        </table>
    </section>

    <!-- Modal dari Bootstrap untuk Form Inputan Tambah Pelanggan -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">FORM TAMBAH DATA PEKERJA</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url() . 'pekerja/tambah_pekerja'; ?>" method="POST">

                        <div class="form-group">
                            <label for="kta">NIK</label>
                            <input type="text" name="kta" id="kta" class="form-control" placeholder="Masukan NIK">
                        </div>
                        <div class="form-group">
                            <label for="nama_pkj">Nama</label>
                            <input type="text" name="nama_pkj" id="nama_pkj" class="form-control" placeholder="Masukan Nama">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Masukan Email">
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
                        <div class="form-group">
                            <label for="bagian">Bagian</label>
                            <input type="text" name="bagian" id="bagian" class="form-control" placeholder="Masukan Bagian">
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