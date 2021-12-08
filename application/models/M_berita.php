<?php

class M_berita extends CI_model{
    public function get_all_produk(){
        $query = $this->db->order_by('id_berita','DESC')->get('tbl_berita');
        return $query->result();
    }

    public function get_data($table){
		return $this->db->get($table);
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

    public function detail($id){
		$hasil = $this->db->where('id_berita', $id)->get('tbl_berita');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return false;
		}
	}
}