<?php

class M_homepage extends CI_model{

    public function TampilProduk(){
        $this->db->select('*');
        $this->db->from('tbl_produk');
        $this->db->order_by('id',"DESC");
        $this->db->limit(4);
        $query = $this->db->get();
        return $query;
        // $this->db->select('*');
        // $this->db->from('tbl_produk');
        // $this->db->order_by('id',"DESC");
        // $this->db->limit(3);
        // $query = $this->db->get();
        // return $query;
    }

    public function TampilBerita(){
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->order_by('id_berita',"DESC");
        $this->db->limit(60);
        $query = $this->db->get();
        return $query;
    }

    public function Keputusanbupati(){
        $query = $this->db->query('SELECT * FROM tbl_produk WHERE kategori= "Keputusan Bupati"');
        $labelkb = $query->num_rows();
        return $labelkb;
    }

    public function Peraturandaerah(){
        $query = $this->db->query('SELECT * FROM tbl_produk WHERE kategori= "Peraturan Daerah"');
        $labelpd = $query->num_rows();
        return $labelpd;
    }

    public function Intruksibupati(){
        $query = $this->db->query('SELECT * FROM tbl_produk WHERE kategori= "Intruksi Bupati"');
        $labelib = $query->num_rows();
        return $labelib;
    }

    public function Peraturanbupati(){
        $query = $this->db->query('SELECT * FROM tbl_produk WHERE kategori= "Peraturan Bupati"');
        $labelpb = $query->num_rows();
        return $labelpb;
    }

    public function Suratedaranbupati(){
        $query = $this->db->query('SELECT * FROM tbl_produk WHERE kategori= "Surat Edaran Bupati"');
        $labelseb = $query->num_rows();
        return $labelseb;
    }

    public function Rancanganbupati(){
        $query = $this->db->query('SELECT * FROM tbl_produk WHERE kategori= "Rancangan Peraturan Bupati"');
        $labelrb = $query->num_rows();
        return $labelrb;
    }

    public function Rancangandaerah(){
        $query = $this->db->query('SELECT * FROM tbl_produk WHERE kategori= "Rancangan Peraturan Daerah"');
        $labelrd = $query->num_rows();
        return $labelrd;
    }

    public function Undangundang(){
        $query = $this->db->query('SELECT * FROM tbl_produk WHERE kategori= "Undang-undang"');
        $labeluu = $query->num_rows();
        return $labeluu;
    }
    
    public function thn2020(){
        $query = $this->db->query('SELECT * FROM tbl_produk WHERE tahun= "2020"');
        $tahun2020 = $query->num_rows();
        return $tahun2020;
    }
    public function thn2019(){
        $query = $this->db->query('SELECT * FROM tbl_produk WHERE tahun= "2019"');
        $tahun2019 = $query->num_rows();
        return $tahun2019;
    }
    public function thn2018(){
        $query = $this->db->query('SELECT * FROM tbl_produk WHERE tahun= "2018"');
        $tahun2018 = $query->num_rows();
        return $tahun2018;
    }
    public function thn2017(){
        $query = $this->db->query('SELECT * FROM tbl_produk WHERE tahun= "2017"');
        $tahun2017 = $query->num_rows();
        return $tahun2017;
    }
    public function thn2016(){
        $query = $this->db->query('SELECT * FROM tbl_produk WHERE tahun= "2016"');
        $tahun2016 = $query->num_rows();
        return $tahun2016;
    }
    public function thn2015(){
        $query = $this->db->query('SELECT * FROM tbl_produk WHERE tahun= "2015"');
        $tahun2015 = $query->num_rows();
        return $tahun2015;
    }
    public function thn2014(){
        $query = $this->db->query('SELECT * FROM tbl_produk WHERE tahun= "2014"');
        $tahun2014 = $query->num_rows();
        return $tahun2014;
    }
    public function thn2013(){
        $query = $this->db->query('SELECT * FROM tbl_produk WHERE tahun= "2013"');
        $tahun2013 = $query->num_rows();
        return $tahun2013;
    }
}