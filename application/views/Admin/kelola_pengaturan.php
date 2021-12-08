<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Pengaturan Akun</h1>
        </div>
        <a href="<?php echo base_url('Admin/Produk') ?>" class="btn btn-success mb-3">Kembali</a>
        <div class="card">
        <?php echo $this->session->flashdata('pesan') ?>
            <div class="card-body">
                <?php foreach($tbl_admin as $prd ) : ?>
                <form method="POST" action="<?php echo base_url('Admin/Pengaturan/update_pengaturan_aksi') ?>" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="hidden" name="id" value="<?php echo $prd->id ?>">
                            <input type="text" name="nama" value="<?php echo $prd->nama ?>" class="form-control">
                            <?php echo form_error('nama','<div class="text-small text-danger">','</div>');?>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" value="<?php echo $prd->email ?>" class="form-control">
                            <?php echo form_error('email','<div class="text-small text-danger">','</div>');?>
                        </div>
                        <div class="form-group">
                            <label>password</label>
                            <input type="text" name="password" class="form-control">
                            <?php echo form_error('password','<div class="text-small text-danger">','</div>');?>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </div>
                </form>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>    