<?php

    class Berita Extends CI_controller{

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
        
        // kode untuk menampilkan index
        public function index()
        {
            $data = array(
                'title'     => 'Kelola Berita',
                'berita'    => $this->M_berita->get_all_produk()
            );
            $this->load->view('Template_Admin/header',$data);
            $this->load->view('Template_Admin/sidebar');
            $this->load->view('Admin/kelola_berita',$data);
            $this->load->view('Template_Admin/footer');
        }

        // kode untuk menampilkan index

        public function tambah_berita()
        {
            $data = array(
                'title'     => 'Tambah Berita',
                'tbl_kategori'   => $this->M_berita->get_data('tbl_kategori')->result()
            );
            $this->load->view('Template_Admin/header',$data);
            $this->load->view('Template_Admin/sidebar');
            $this->load->view('Admin/tambah_berita',$data);
            $this->load->view('Template_Admin/footer');
        }

        public function tambah_berita_aksi(){
            $this->form_validation->set_rules('judul','Judul','required');
            $this->form_validation->set_rules('nama_kategori','Kategori','required');
            $this->form_validation->set_rules('isi','Isi Konten','required');

            if($this->form_validation->run() == FALSE ){
                $this->tambah_berita();
            } else {
                $judul          = $this->input->post('judul');
                $nama_kategori  = $this->input->post('nama_kategori');
                $isi            = $this->input->post('isi');
                $tanggal        = date('Y-m-d H:i:s');
                $thumbnail      = $_FILES['thumbnail']['name'];
                
                $config['upload_path']      ='./assets/thumbnail';
                $config['allowed_types']    ='jpg|png';
                $config['overwrite']        = FALSE;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('thumbnail')){
                    $thumbnail = $this->upload->data()['file_name'];
                } else {
                    echo $this->upload->display_errors();
                }

                $data = array(
                    'judul'	    	    => $judul,
                    'thumbnail'         => $thumbnail,
                    'nama_kategori'		=> $nama_kategori,
                    'isi'		    	=> $isi,
                    'tanggal'	    	=> $tanggal
                );

                $this->M_berita->insert_data($data,'tbl_berita');
                $this->session->set_flashdata('pesan', '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Berita </strong>Sukses DItambahkan.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    ');
                redirect('Admin/Berita');
            }
        }

        public function update($id)
        {
            $where = array('
                id' => $id,
                'title'     => 'Edit Berita'
            );
            // $data['tbl_berita'] = $this->db->query("SELECT * FROM tbl_berita WHERE id='$id'")->result();
            $data['tbl_berita'] = $this->db->query("SELECT * FROM tbl_berita br, tbl_kategori kt WHERE br.nama_kategori=kt.nama_kategori AND br.id_berita='$id'")->result();
            $data['tbl_kategori'] = $this->M_berita->get_data('tbl_kategori')->result();
            $this->load->view('Template_Admin/header',$where);
            $this->load->view('Template_Admin/sidebar');
            $this->load->view('Admin/edit_berita',$data);
            $this->load->view('Template_Admin/footer');
        }

        public function update_berita_aksi()
        {
            $this->form_validation->set_rules('judul','Judul','required');
            $this->form_validation->set_rules('nama_kategori','Kategori','required');
            $this->form_validation->set_rules('isi','Isi Konten','required');

            if($this->form_validation->run() == FALSE ){
                $this->update();
            } else {
                $id_berita      = $this->input->post('id_berita');
                $judul          = $this->input->post('judul');
                $nama_kategori  = $this->input->post('nama_kategori');
                $isi            = $this->input->post('isi');
                $thumbnail      = $_FILES['thumbnail']['name'];

                if(!empty($_FILES['thumbnail']['name'])){

                    $config['upload_path']      ='./assets/thumbnail';
                    $config['allowed_types']    ='jpg|png';
                    $config['overwrite']        = FALSE;

                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if($this->upload->do_upload('thumbnail')){
                        $thumbnail = $this->upload->data()['file_name'];
                    } else {
                        echo $this->upload->display_errors();
                    }

                    $data = array(
                        'judul'	    	    => $judul,
                        'thumbnail'         => $thumbnail,
                        'nama_kategori'		=> $nama_kategori,
                        'isi'		    	=> $isi
                    );
                }else{
                    $data = array(
                        'judul'	    	    => $judul,
                        'nama_kategori'		=> $nama_kategori,
                        'isi'		    	=> $isi
                    );
                
                }

                $where = array(
                    'id_berita' => $id_berita
                );

                $this->M_berita->update_data('tbl_berita',$data,$where);
                $this->session->set_flashdata('pesan', '
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                      <strong>Berita </strong>Sukses Diedit.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    ');
                redirect('Admin/Berita');
            }
        }

        // Upload image Summernote
        function upload_image() {
            if(isset($_FILES["image"]["name"])){
                $config['upload_path'] = './assets/images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('image')){
                    $this->upload->display_errors();
                    return FALSE;
                }else{
                    $data = $this->upload->data();
                    //Compress Image
                    $config['image_library']='gd2';
                    $config['source_image']='./assets/images/'.$data['file_name'];
                    $config['create_thumb']= FALSE;
                    $config['maintain_ratio']= TRUE;
                    $config['quality']= '60%';
                    $config['width']= 800;
                    $config['height']= 800;
                    $config['new_image']= './assets/images/'.$data['file_name'];
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();
                    echo base_url().'assets/images/'.$data['file_name'];
                }
            }
        }
    
        // Delete image Summernote
        function delete_image() {
            $src = $this->input->post('src');
            $file_name = str_replace(base_url(), '', $src);
            if(unlink($file_name))
            {
                echo 'File Delete Successfully';
            }
        }

        public function hapus($id)
        {
            $where = array('id_berita' => $id);
            $this->M_berita->delete_data($where,'tbl_berita');
            $this->session->set_flashdata('pesan', '
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>Berita </strong>Sukses Di Hapus.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>
				');
		    redirect('Admin/Berita');
        }

        public function detail_berita($id){
            $data['title'] = 'Detail Berita';
            $data['detail'] = $this->M_berita->detail($id);
            $this->load->view('Template_Admin/header',$data);
            $this->load->view('Template_Admin/sidebar');
            $this->load->view('Admin/detail_berita',$data);
            $this->load->view('Template_Admin/footer');
        }

        

        
    }