<link rel="stylesheet" href="<?php echo base_url('assets/owl/dist/assets/owl.carousel.css') ?>"> 
<link rel="stylesheet" href="<?php echo base_url('assets/owl/dist/assets/owl.theme.default.css') ?>"> 
<body>
    <section class="jumbotron-bg">
    <div class="jumbotron warna-bg text-white">
        <div class="container">
            <center><h2>Jaringan Dokumentasi dan Informasi Hukum</h2></center><br>
            <center><img src="<?php echo base_url('assets/gambar/logobesar.png') ?>"></center>
            
            
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
                <div class="card">
                <h5 class="card-header">Produk Hukum Terbaru</h5>
                    <div class="card-body">
                    <?php 
                        foreach ($produk->result() as $prd) :
                    ?>  
                        <h5 class="card-title"><?php echo $prd->kategori; ?> Nomor <?php echo $prd->nomor; ?> Tahun <?php echo $prd->tahun; ?></h5>
                        <p class="card-text"><?php echo $prd->tentang; ?></p>
                        <a href="<?php echo base_url('Produk/view/').$prd->id; ?>" class="btn btn-primary btn-sm">Selengkapnya</a>
                        <hr class="my-4">
                    <?php endforeach; ?>
                        <div class="text-center">
                            <a href="<?php echo base_url('Produk'); ?>" class="btn btn-primary">View All</a>
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
        </div><br>
        <div class="row">
            <div class="col-md-12">
                <div class="text-center"><h2>Berita</h2></div>
            </div>
        </div><br>
        <div class="row owl-carousel">
        <?php foreach ($berita->result() as $brt) : ?>
            <!-- <div class="col-md-3"> -->
                <div class="card">
                    <img class="card-img-top" src="<?php echo base_url('assets/thumbnail/').$brt->thumbnail; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $brt->judul; ?></h5>
                            <a href="<?php echo base_url('Berita/view/').$brt->id_berita; ?>" class="btn btn-primary btn-sm">Selengkapnya</a>
                        </div>
                </div>
            <!-- </div> -->
            <?php endforeach; ?>
        </div>
        
        <!-- <div class="row">
            <div class="col-md-12">
                <div class="text-center"><a href="#" class="btn btn-primary">View All Berita</a></div>
            </div>
        </div> -->
    </div>
</body>
<script src="<?php echo base_url('assets/owl/docs/assets/vendors/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/owl/dist/owl.carousel.js') ?>"></script>
<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
</script>