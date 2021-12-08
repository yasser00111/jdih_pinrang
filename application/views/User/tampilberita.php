<body>
    <section class="jumbotron-bg">
    <div class="jumbotron warna-bg text-white">
        <div class="container">
            <h2>Home / Berita</h2>
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
                <div class="block-content">
					<div class="box">
                        <div class="box-body">
                        <?php foreach ($tbl_berita as $brt) : ?>
                            <h2><?php echo $brt->judul; ?></h2>
                            <hr>
                            Dipublish Oleh Admin tanggal <?php echo date('d-m-Y', strtotime($brt->tanggal)) ?> berada di kategori <?php echo $brt->nama_kategori; ?>
                            <hr>
                            <?php echo $brt->isi; ?>
                            <?php endforeach; ?> 
                        </div>
                    </div>
                </div>

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