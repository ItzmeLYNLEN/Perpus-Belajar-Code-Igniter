<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li>Transaksi</li>
            <li class="active">Data Peminjaman</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>Data Transaksi Peminjaman</h3>
                    <hr />
                    
                    <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                            <tr>
                                <th data-sortable="true">No</th>
                                <th data-sortable="true">No Peminjaman</th>
                                <th data-sortable="true">Tanggal Pinjam</th>
                                <th data-sortable="true">ID Anggota</th>
                                <th data-sortable="true">Nama Anggota</th>
                                <th data-sortable="true">Total Buku</th>
                                <th data-sortable="true">Status</th>
                                <th data-sortable="true">QR Code</th>
                                <th data-sortable="true">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0; foreach($data_peminjaman as $d) { ?>
                            <tr>
                                <td data-sortable="true"><?= $no=$no+1; ?></td>
                                <td data-sortable="true"><?= $d['no_peminjaman']; ?></td>
                                <td data-sortable="true"><?= $d['tgl_pinjam']; ?></td>
                                <td data-sortable="true"><?= $d['id_anggota']; ?></td>
                                <td data-sortable="true"><?= $d['nama_anggota']; ?></td>
                                <td data-sortable="true"><?= $d['total_pinjam']; ?></td>
                                <td data-sortable="true"><?= $d['status_transaksi']; ?></td>
                                <td data-sortable="true">
                                    <?php if($d['qr_code'] != "") { ?>
                                        <img src="<?= base_url('Assets/qr_code/'.$d['qr_code']); ?>" width="80px">
                                    <?php } else { echo "-"; } ?>
                                </td>
                                <td data-sortable="true">
                                    <a href="<?= base_url('admin/detail-peminjaman/'.sha1($d['no_peminjaman'])); ?>">
                                        <button type="button" class="btn btn-info btn-sm">Detail</button>
                                    </a>
                                    
                                    <?php if($d['status_transaksi'] == 'Berjalan') { ?>
                                        <a href="<?= base_url('admin/form-pengembalian/'.sha1($d['no_peminjaman'])); ?>">
                                            <button type="button" class="btn btn-success btn-sm">Kembalikan</button>
                                        </a>
                                    <?php } ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>