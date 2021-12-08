<?php

class M_produk extends CI_model{

    public function menampilkan_sebagian_data($limit,$start,$kategori,$nomor,$tahun,$judul,$judul1)
    {
        $this->db->select('id,kategori,nomor,tahun,tentang');
        if(!empty($judul)){$this->db->like('tentang', $judul);}
        if(!empty($judul1)){$this->db->like('tentang', $judul1);}
        if(!empty($kategori)){$this->db->like('kategori', $kategori);}
        if(!empty($nomor)){$this->db->like('nomor', $nomor);}
        if(!empty($tahun)){$this->db->like('tahun', $tahun);}    
        $this->db->limit($limit, $start);
        $this->db->from('tbl_produk');
            return $this->db->get()->result();
        // // if($cari){
        //     $this->db->or_like('tentang', $cari)
		// 	->or_like('kategori',$cari)
        //     ->or_like('nomor', $cari)
        //     ->or_like('tahun', $cari);
		// // }
		// return $this->db->get('tbl_produk', $limit, $start);
    }
    
    public function get_all_produk(){
        $query = $this->db->order_by('id','DESC')->get('tbl_produk');
        return $query->result();
    }

    public function insert_data($data,$table){
        $this->db->insert($table,$data);
    }

    public function update_data($table, $data, $where){
        $this->db->update($table,$data,$where);
    }

    public function delete_data($where, $table){
		$this->db->where($where);
        $this->db->delete($table);
    }
}

?>