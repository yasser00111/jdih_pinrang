<?php
    class M_kategori extends CI_model{

        public function get_data($table){
            return $this->db->get($table);
        }

        public function insert_data($data,$table){
            $this->db->insert($table,$data);
        }

        public function delete_data($data, $table){
            $this->db->where($data);
            $this->db->delete($table);
        }
    }