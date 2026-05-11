<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li>Transaksi</li>
            <li class="active">Form Pengembalian</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>Proses Pengembalian Buku</h3>
                    <hr />
                    
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="30%">No Peminjaman</th>
                                    <td>: <?= $data_peminjaman['no_peminjaman']; ?></td>
                                </tr>
                                <tr>
                                    <th>Nama Anggota</th>
                                    <td>: <?= $data_peminjaman['nama_anggota']; ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Pinjam</th>
                                    <td>: <?= $data_peminjaman['tgl_pinjam']; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    
                    <table data-toggle="table">
                        <thead>
                            <tr>
                                <th data-sortable="true">No</th>
                                <th data-sortable="true">Cover Buku</th>
                                <th data-sortable="true">Judul Buku</th>
                                <th data-sortable="true">Tgl Harus Kembali</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0; foreach($data_detail as $d) { ?>
                            <tr>
                                <td><?= $no=$no+1; ?></td>
                                <td><img src="<?= base_url('Assets/Cover_buku/'.$d['cover_buku']); ?>" width="60px"></td>
                                <td><?= $d['judul_buku']; ?></td>
                                <td><?= $d['tgl_kembali']; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <br />

                    <form action="<?= base_url('admin/simpan-pengembalian'); ?>" method="post">
                        <input type="hidden" name="no_peminjaman" value="<?= $data_peminjaman['no_peminjaman']; ?>">
                        <div class="form-group col-md-6">
                            <label>Denda (Rp)</label>
                            <input type="number" class="form-control" name="denda" value="0" required="required">
                            <small>*Isi 0 jika tidak ada denda keterlambatan / kerusakan.</small>
                        </div>
                        <div style="clear:both;"></div>
                        <div class="form-group col-md-6">
                            <button type="submit" class="btn btn-primary">Proses Pengembalian</button>
                            <a href="<?= base_url('admin/data-transaksi-peminjaman'); ?>" class="btn btn-danger">Batal</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>