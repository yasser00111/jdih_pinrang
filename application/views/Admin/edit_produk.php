<script src="<?php echo base_url('assets/ckeditor_basic/ckeditor.js'); ?>"></script>
<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Form Edit Produk</h1>
        </div>
        <a href="<?php echo base_url('Admin/Produk') ?>" class="btn btn-success mb-3">Kembali</a>
        <div class="card">
            <div class="card-body">
                <?php foreach($tbl_produk as $prd ) : ?>
                <form method="POST" action="<?php echo base_url('Admin/Produk/update_produk_aksi') ?>" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nomor</label>
                            <input type="hidden" name="id" value="<?php echo $prd->id ?>">
                            <input type="text" name="nomor" value="<?php echo $prd->nomor ?>" class="form-control">
                            <?php echo form_error('nomor','<div class="text-small text-danger">','</div>');?>
                        </div>
                        <div class="form-group">
                            <label>Tahun</label>
                            <input type="text" name="tahun" value="<?php echo $prd->tahun ?>" class="form-control">
                            <?php echo form_error('tahun','<div class="text-small text-danger">','</div>');?>
                        </div>
                        <div class="form-group">
        					<label>Kategori</label>
        					<select name="kategori" class="form-control">
        						<option value="<?php echo $prd->kategori ?>" ><?php echo $prd->kategori ?></option>
        						<option value="Peraturan Daerah">Peraturan Daerah</option>
                                <option value="Peraturan Bupati">Peraturan Bupati</option>
                                <option value="Keputusan Bupati">Keputusan Bupati</option>
        					</select>
        					<?php echo form_error('kategori','<div class="text-small text-danger">','</div>');?>
        				</div>
                        <div class="form-group">
        					<label>Status</label>
        					<select name="status" class="form-control">
        						<option value="<?php echo $prd->status ?>" ><?php echo $prd->status ?></option>
        						<option value="Mencabut">Mencabut</option>
                                <option value="Mencabut Sebagian">Mencabut Sebagian</option>
                                <option value="Berlaku">Berlaku</option>
                                <option value="Batal">Batal</option>
        					</select>
        					<?php echo form_error('status','<div class="text-small text-danger">','</div>');?>
        				</div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tentang</label>
                            <textarea class="form-control" name="tentang" rows="3"><?php echo $prd->tentang ?></textarea>
                            <?php echo form_error('tentang','<div class="text-small text-danger">','</div>');?>
                        </div>
                        <div class="form-group">
                            <label>Upload File Pdf</label>
                            <input type="file" name="filepdf" value="<?php echo base_url('assets/upload/').$prd->filepdf ?>"" class="form-control">
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
<script>
    CKEDITOR.replace('tentang');
</script>