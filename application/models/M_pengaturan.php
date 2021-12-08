<?php

class M_pengaturan extends CI_model{
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