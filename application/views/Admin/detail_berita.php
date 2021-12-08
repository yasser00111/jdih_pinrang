<link rel="stylesheet" href="<?php echo base_url('summernote/summernote-bs4.css'); ?>">
<!-- <link rel="stylesheet" href="<?php echo base_url('summernote/summernote.min.css'); ?>"> -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Form Edit Berita</h1>
        </div>
        <a href="<?php echo base_url('Admin/Berita') ?>" class="btn btn-success mb-3">Kembali</a>
        <div class="card">
            <div class="card-body">
            <?php foreach($detail as $dt) : ?>
                <h2 class="card-title"><?php echo $dt->judul ?></h2>
                <p class="card-text"><p><?php echo $dt->isi ?></p>    
            </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>  
