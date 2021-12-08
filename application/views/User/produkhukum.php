<!-- <link rel="stylesheet" href="<?php echo base_url('assets/DataTables/datatables.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/DataTables/datatables.min.css') ?>"> -->
<body>
    <section class="jumbotron-bg">
    <div class="jumbotron warna-bg text-white">
        <div class="container">
            <!-- <h2>Home / Produk Hukum</h2> -->
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                <!-- <?php echo form_open() ?> -->
                <form action="<?php echo base_url('Produk') ?>" method="post">
                    <div class="input-group input-group-lg jdih-home-input-group mt-0 pb-0">
                        <input type="text" name="cari_judul1" class="form-control" placeholder="Kata Kunci Pencarian Dokumen atau Peraturan Hukum" aria-label="Kata Kunci Pencarian Produk atau Informasi Hukum" aria-describedby="button-cari">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" name="submit">
                                <i class="fa fa-search fa-fw jdih-home-search-icon"></i>
                            </button>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseAdvanceSearch" role="button" aria-expanded="false" aria-controls="collapseAdvanceSearch">
                                <span data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Pencarian Lanjutan">
                                    <i class="fa fa-filter fa-fw jdih-home-search-icon"></i>
                                </span>
                            </button>
                        </div>
                    </div>  
                    <!-- <?php echo form_close() ?>  
                    <?php echo form_open() ?>  -->
                    <div class="collapse show jdih-home-input-group" id="collapseAdvanceSearch">
                        <div class="card card-body jdih-transparent-bg jdih-card-no-border">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label class="text-white" for="cari_kategori">Kategori</label>
                                        <select name="cari_kategori" id="search-bentuk" class="form-control">
                                            <option value="">Semua Kategori</option>
                                            <option value="Keputusan Bupati">Keputusan Bupati</option>
                                            <option value="Peraturan Bupati">Peraturan Bupati</option>
                                            <option value="Peraturan Daerah">Peraturan Daerah</option>
                                        </select>                                     
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label class="text-white" for="search-nomor">Nomor</label>
                                        <input type="text" name="cari_nomor" class="form-control" id="search-nomor" placeholder="Nomor">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label class="text-white" for="search-tahun">Tahun</label>
                                        <select name="cari_tahun" id="search-bentuk" class="form-control">
                                            <option value="">Semua tahun</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label class="text-white" for="search-judul">Judul / Kata Kunci Pencarian</label>
                                        <input type="text" name="cari_judul" class="form-control" id="search-judul" placeholder="Judul / Kata Kunci Pencarian">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12">
                                    <button type="submit" name="submit" class="btn btn-primary pull-right">Cari</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- <?php echo form_close() ?> -->
                </div>
                <div class="col-md-2"></div>
            </div>
            <!-- <center><img src="<?php echo base_url('assets/gambar/logobesar.png') ?>"></center> -->
            <!-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> -->
        </div>
    </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <!-- <form action="" method="post">
				<div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder="Cari" name="cari" autocomplete="off" autofocus="">
				  <div class="input-group-append">
				    <input class="btn btn-primary" type="submit" name="submit"></input>
				  </div>
				</div>
			</form> -->
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Kategori</th>
                    <th scope="col">Nomor/Tahun</th>
                    <th scope="col">Tentang</th>
                    <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(empty($produk)) : ?>
                    <tr>
                        <td colspan="6">
                            <div class="alert alert-danger" role="alert">
                            Data tidak ditemukan!
                            </div>
                        </td>
                    </tr>
                    <?php endif ?>

                    <?php 
                    // $no = 1;
                    foreach ($produk as $prd) :
                    ?>
                    <tr>
                        <td><?php echo $prd->kategori; ?></td>
                        <td><?php echo $prd->nomor; ?> / <?php echo $prd->tahun; ?></td>
                        <td><?php echo $prd->tentang; ?></td>
                        <td>
                        <a href="<?php echo base_url('Produk/view/').$prd->id; ?>" class="btn btn-sm btn-primary">Detail</a>
                        </td>
                    </tr>
                    <?php endforeach; ?> 
                </tbody>
            </table>
            <?php echo $this->pagination->create_links(); ?>
            <!-- <table id="table_hukum" class="table  table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor/Tahun</th>
                    <th>Tentang</th>
                    <th>#</th>
                </tr>    
            </thead>
            <tbody>
                <?php 
                $no = 1;
                foreach ($produk as $prd) :
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $prd->nomor; ?> / <?php echo $prd->tahun; ?></td>
                    <td><?php echo $prd->tentang; ?></td>
                    <td>
                    <a href="<?php echo base_url('Produk/view/').$prd->id; ?>" class="btn btn-sm btn-primary">Detail<i class="fa fa-arrow-circle-right"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>  
            </tbody>
            </table> -->
            </div>
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header">Kategori Produk Hukum</h5>
                    <div class="card-body">
                        <!--<h5 class="card-title"><a href="#">Instruksi Bupati <span class="badge badge-pill badge-primary pull-right"><?php echo $labelib; ?></span></a></h5>-->
                        <h5 class="card-title"><a href="#">Keputusan Bupati <span class="badge badge-pill badge-primary pull-right"><?php echo $labelkb; ?></span></a></h5>
                        <h5 class="card-title"><a href="#">Peraturan Bupati <span class="badge badge-pill badge-primary pull-right"><?php echo $labelpb; ?></span></a></h5>
                        <h5 class="card-title"><a href="#">Peraturan Daerah <span class="badge badge-pill badge-primary pull-right"><?php echo $labelpd; ?></span></a></h5>
                        <!--<h5 class="card-title"><a href="#">Surat Edaran Bupati <span class="badge badge-pill badge-primary pull-right"><?php echo $labelseb; ?></span></a></h5>-->
                        <!--<h5 class="card-title"><a href="#">Rancangan Peraturan Bupati <span class="badge badge-pill badge-primary pull-right"><?php echo $labelrb; ?></span></a></h5>-->
                        <!--<h5 class="card-title"><a href="#">Rancangan Peraturan Daerah <span class="badge badge-pill badge-primary pull-right"><?php echo $labelrd; ?></span></a></h5>-->
                        <!--<h5 class="card-title"><a href="#">Undang-undang <span class="badge badge-pill badge-primary pull-right"><?php echo $labeluu; ?></span></a></h5>-->
                    </div>
                </div><br>
                <div class="card">
                    <h5 class="card-header">Arsip Produk Hukum</h5>
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">2020 <span class="badge badge-pill badge-primary pull-right"><?php echo $tahun2020; ?></span></a></h5>
                        <h5 class="card-title"><a href="#">2019 <span class="badge badge-pill badge-primary pull-right"><?php echo $tahun2019; ?></span></a></h5>
                        <h5 class="card-title"><a href="#">2018 <span class="badge badge-pill badge-primary pull-right"><?php echo $tahun2018; ?></span></a></h5>
                        <h5 class="card-title"><a href="#">2017 <span class="badge badge-pill badge-primary pull-right"><?php echo $tahun2017; ?></span></a></h5>
                        <h5 class="card-title"><a href="#">2016 <span class="badge badge-pill badge-primary pull-right"><?php echo $tahun2016; ?></span></a></h5>
                        <h5 class="card-title"><a href="#">2015 <span class="badge badge-pill badge-primary pull-right"><?php echo $tahun2015; ?></span></a></h5>
                        <h5 class="card-title"><a href="#">2014 <span class="badge badge-pill badge-primary pull-right"><?php echo $tahun2014; ?></span></a></h5>
                        <h5 class="card-title"><a href="#">2013 <span class="badge badge-pill badge-primary pull-right"><?php echo $tahun2013; ?></span></a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- <script src="<?php echo base_url('assets/DataTables/datatables.js') ?>"></script> -->
  <!-- <script type="text/javascript">
    $(document).ready(function() {
      $('#table_hukum').DataTable({
		'paging'      : true,
		'lengthChange': false,
		'searching'   : true,
		'ordering'    : false,
		'info'        : true,
		'autoWidth'   : true
		});
  </script> -->