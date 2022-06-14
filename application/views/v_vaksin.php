<div class="content-wrapper">
    <section class="content-header">
        <div><?= $this->session->flashdata('message'); ?>
        </div>
        <div>
            <h1>Daftar Vaksin</h1>
            <ol class="breadcrumb">
                <li><a href="<?= base_url('') . 'admin/index' ?>"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                <li class="active">Daftar Vaksin</li>
            </ol>
        </div>
    </section>

    <section class="content">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Jenis Vaksin</button>
        <table class="table">

            <tr>
                <th>NO</th>
                <th>ID Vaksin</th>
                <th>Nama Vaksin</th>
                <th></th>
            </tr>

            <?php
            $no = 1;
            foreach ($jenis as $jns) : ?>

                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $jns->id_vaksin ?></td>
                    <td><?= $jns->nama_vaksin ?></td>
                    <td><?= anchor('vaksin/hapus/' . $jns->id_vaksin, '<div class="glyphicon glyphicon-trash"></div>') ?></td>
                    <!-- <td><a href="<?= base_url() . 'vaksin/edit' ?>"><i class="glyphicon glyphicon-edit"></i></a></td> -->
                </tr>
            <?php endforeach; ?>

        </table>
    </section>

    <!-- Modal dari Bootstrap untuk Form Inputan Tambah Jenis Vaksin -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">FORM TAMBAH DATA VAKSIN</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url() . 'vaksin/tambah_vaksin'; ?>" method="POST">

                        <div class="form-group">
                            <label for="id_vaksin">ID Vaksin</label>
                            <input type="text" name="id_vaksin" id="id_vaksin" class="form-control" placeholder="Masukan ID Vaksin">
                        </div>
                        <div class="form-group">
                            <label for="nama_vaksin">Nama Vaksin</label>
                            <input type="text" name="nama_vaksin" id="nama_vaksin" class="form-control" placeholder="Masukan Nama Vaksin">
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