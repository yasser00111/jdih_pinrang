<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Kelola Kategori</h1>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                    <?php echo $this->session->flashdata('pesan') ?>
                        <table class="table table-hover table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>	
                            </thead>
                            <tbody>
                                <?php 
                                $no=1;
                                foreach ($tbl_kategori as $ktr) : ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $ktr->nama_kategori ?></td>
                                        <td>
                                            <a href="<?php echo base_url('Admin/Kategori/delete_kategori/').$ktr->id_kategori ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>	
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                    <form method="post" action="<?php echo base_url('Admin/Kategori/Tambah_kategori_aksi') ?>">
                        <div class="form-group">
                            <label>Kategori</label>
                            <input type="text" name="nama_kategori" class="form-control">
                            <?php echo form_error('nama_kategori','<div class="text-small text-danger">','</div>');?>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>        