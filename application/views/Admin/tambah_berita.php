<link rel="stylesheet" href="<?php echo base_url('summernote/summernote-bs4.css'); ?>">
<!-- <link rel="stylesheet" href="<?php echo base_url('summernote/summernote.min.css'); ?>"> -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Form Tambah Produk</h1>
        </div>
        <a href="<?php echo base_url('Admin/Produk') ?>" class="btn btn-success mb-3">Kembali</a>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('Admin/Berita/tambah_berita_aksi') ?>" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" name="judul" class="form-control">
                            <?php echo form_error('judul','<div class="text-small text-danger">','</div>');?>
                        </div>
                        <div class="form-group">
                            <label>Thumbnail</label>
                            <input type="file" name="thumbnail" class="form-control">
                            <?php echo form_error('judul','<div class="text-small text-danger">','</div>');?>
                        </div>
                        <div class="form-group">
        					<label>Kategori</label>
        					<select name="nama_kategori" class="form-control">
        						<option value="" >--Pilih Kategori --</option>
        						<?php foreach ($tbl_kategori as $tbl) : ?>
        						<option value="<?php echo $tbl->nama_kategori ?>"> <?php echo $tbl->nama_kategori ?></option>	
        						<?php endforeach; ?>	
        					</select>
        					<?php echo form_error('kategori','<div class="text-small text-danger">','</div>');?>
        				</div>
                        <div class="form-group">
                            <label>Konten</label>
                            <textarea class="form-control" name="isi" id="summernote" rows="3"></textarea>
                            <!-- <input type="text" name="konten" class="form-control"> -->
                            <?php echo form_error('isi','<div class="text-small text-danger">','</div>');?>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>
</div>  
<!-- <script src="<?php echo base_url('assets/bootstrap/jquery/jquery3.js') ?>"></script> 
<script src="<?php echo base_url('assets/bootstrap/popper/popper.js') ?>"></script>  
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.js') ?>"></script>  -->
<script src="<?php echo base_url('summernote/summernote-bs4.js') ?>"></script>  
<!-- <script src="<?php echo base_url('summernote/summernote.min.js') ?>"></script>   -->
<script>
        $(document).ready(function(){
            $('#summernote').summernote({
                height: "300px",
                callbacks: {
                    onImageUpload: function(image) {
                        uploadImage(image[0]);
                    },
                    onMediaDelete : function(target) {
                        deleteImage(target[0].src);
                    }
                }
            });

            function uploadImage(image) {
                var data = new FormData();
                data.append("image", image);
                $.ajax({
                    url: "<?php echo site_url('Admin/Berita/upload_image')?>",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: data,
                    type: "POST",
                    success: function(url) {
                        $('#summernote').summernote("insertImage", url);
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            }

            function deleteImage(src) {
                $.ajax({
                    data: {src : src},
                    type: "POST",
                    url: "<?php echo site_url('Admin/Berita/delete_image')?>",
                    cache: false,
                    success: function(response) {
                        console.log(response);
                    }
                });
            }

        });

    </script>