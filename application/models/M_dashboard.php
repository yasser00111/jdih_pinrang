<?php

class M_dashboard extends CI_model{

    public function hitungJumlahProduk(){
        $query = $this->db->get('tbl_produk');
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        } else {
        return 0;
        }
    }

    public function hitungJumlahBerita(){
        $query = $this->db->get('tbl_berita');
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        } else {
        return 0;
        }
    }
}