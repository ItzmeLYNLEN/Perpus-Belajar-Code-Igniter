<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li>Transaksi</li>
            <li class="active">Detail Peminjaman</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>Detail Peminjaman : <?= $data_peminjaman['no_peminjaman']; ?></h3>
                    <hr />
                    
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="30%">Nama Anggota</th>
                                    <td>: <?= $data_peminjaman['nama_anggota']; ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Pinjam</th>
                                    <td>: <?= $data_peminjaman['tgl_pinjam']; ?></td>
                                </tr>
                                <tr>
                                    <th>Status Transaksi</th>
                                    <td>: <?= $data_peminjaman['status_transaksi']; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <br />

                    <table data-toggle="table">
                        <thead>
                            <tr>
                                <th data-sortable="true">No</th>
                                <th data-sortable="true">Cover Buku</th>
                                <th data-sortable="true">Judul Buku</th>
                                <th data-sortable="true">Pengarang</th>
                                <th data-sortable="true">Status Pinjam</th>
                                <th data-sortable="true">Tanggal Kembali</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0; foreach($data_detail as $d) { ?>
                            <tr>
                                <td><?= $no=$no+1; ?></td>
                                <td><img src="<?= base_url('Assets/Cover_buku/'.$d['cover_buku']); ?>" width="60px"></td>
                                <td><?= $d['judul_buku']; ?></td>
                                <td><?= $d['pengarang']; ?></td>
                                <td><?= $d['status_pinjam']; ?></td>
                                <td><?= $d['tgl_kembali']; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <br />
                    <a href="<?= base_url('admin/data-transaksi-peminjaman'); ?>">
                        <button type="button" class="btn btn-primary">Kembali</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>