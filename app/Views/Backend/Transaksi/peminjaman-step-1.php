<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li>Transaksi</li>
            <li class="active">Peminjaman</li>
        </ol>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>Input Anggota</h3>
                    <hr />
                    <form action="<?= base_url('admin/peminjaman-step-2'); ?>" method="post">
                        <div class="form-group col-md-6">
                            <label>Pilih Anggota</label>
                            <select class="form-control" name="id_anggota" required="required">
                                <option value="">-- Pilih Anggota --</option>
                                <?php foreach($data_anggota as $agt) { ?>
                                    <option value="<?= $agt['id_anggota']; ?>"><?= $agt['id_anggota']; ?> - <?= $agt['nama_anggota']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div style="clear:both;"></div>
                        <div class="form-group col-md-6">
                            <button type="submit" class="btn btn-primary">Next</button>
                            <a href="<?= base_url('admin/peminjaman-step-1'); ?>"><button type="button" class="btn btn-danger">Batal</button></a>
                        </div>
                        <div style="clear:both;"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>