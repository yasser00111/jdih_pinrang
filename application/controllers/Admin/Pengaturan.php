<?php

    class Pengaturan extends CI_controller{

        public function index()
        {
            $data = array(
                'title'     => 'Pengaturan Akun',
                'tbl_admin' => $this->db->query("SELECT * FROM user")->result()
            );
            $this->load->view('Template_Admin/header',$data);
            $this->load->view('Template_Admin/sidebar');
            $this->load->view('Admin/kelola_pengaturan',$data);
            $this->load->view('Template_Admin/footer');
        }

        public function update_pengaturan_aksi()
        {
            $id            = $this->input->post('id');
            $nama          = $this->input->post('nama');
            $email      = $this->input->post('email');
            $password      = ($this->input->post('password'));

            if(!empty($this->input->post('password'))){
                $data = array(
                    'nama'          => $nama,
                    'email'         => $email,
                    'password'      => $password
                );
            } else {
                $data = array(
                    'nama'          => $nama,
                    'email'         => $email
                );
            }
            
            $where = array('id' => $id);
            
            $this->M_pengaturan->update_data('user',$data,$where);
            $this->session->set_flashdata('pesan', '
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <strong>Data Admin </strong>Sukses Di Update.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                ');
            redirect('Admin/Pengaturan');
        }
    }