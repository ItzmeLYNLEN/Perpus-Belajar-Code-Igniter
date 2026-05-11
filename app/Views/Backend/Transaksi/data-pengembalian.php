<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li>Transaksi</li>
            <li class="active">Data Pengembalian</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>Riwayat Pengembalian Buku</h3>
                    <hr />
                    
                    <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                            <tr>
                                <th data-sortable="true">No</th>
                                <th data-sortable="true">No Peminjaman</th>
                                <th data-sortable="true">Nama Anggota</th>
                                <th data-sortable="true">Tgl Pinjam</th>
                                <th data-sortable="true">Tgl Kembali</th>
                                <th data-sortable="true">Denda</th>
                                <th data-sortable="true">Admin Penerima</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0; foreach($data_pengembalian as $d) { ?>
                            <tr>
                                <td data-sortable="true"><?= $no=$no+1; ?></td>
                                <td data-sortable="true"><?= $d['no_peminjaman']; ?></td>
                                <td data-sortable="true"><?= $d['nama_anggota']; ?></td>
                                <td data-sortable="true"><?= $d['tgl_pinjam']; ?></td>
                                <td data-sortable="true"><?= $d['tgl_pengembalian']; ?></td>
                                <td data-sortable="true">Rp <?= number_format($d['denda'], 0, ',', '.'); ?></td>
                                <td data-sortable="true"><?= $d['nama_admin']; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>