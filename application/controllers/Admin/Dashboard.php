<?php

    class Dashboard extends CI_controller{

        function __construct()
        {
          parent::__construct();
          if($this->session->userdata("status") != "login"){
            redirect(base_url("login"));
            exit;
          }
        }

        function logout(){
            $this->session->sess_destroy();
            $this->session->set_flashdata("sukses_logout","Berhasil logout");
            redirect(base_url("login"));
        }

        public function index()
        {
            $data = array(
                'title'     => 'Dashboard',
                'total_produk'    => $this->M_dashboard->hitungJumlahProduk(),
                'total_berita'    => $this->M_dashboard->hitungJumlahBerita()
            );
            $this->load->view('Template_Admin/header',$data);
            $this->load->view('Template_Admin/sidebar');
            $this->load->view('Admin/dashboard',$data);
            $this->load->view('Template_Admin/footer');
        }

        
    }


?>