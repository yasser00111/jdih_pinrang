<?php

    class Produk extends CI_Controller
    {
        public function index()
        {
            $data = array(
                'title'     => 'Kelola Produk',
                // 'produk'    => $this->M_produk->get_all_produk(),
                'berita'    => $this->M_homepage->TampilBerita(),
                'labelkb'   => $this->M_homepage->Keputusanbupati(),
                'labelpd'   => $this->M_homepage->Peraturandaerah(),
                'labelib'   => $this->M_homepage->Intruksibupati(),
                'labelpb'   => $this->M_homepage->Peraturanbupati(),
                'labelseb'   => $this->M_homepage->Suratedaranbupati(),
                'labelrb'   => $this->M_homepage->Rancanganbupati(),
                'labelrd'   => $this->M_homepage->Rancangandaerah(),
                'labeluu'   => $this->M_homepage->Undangundang(),
                'tahun2020' => $this->M_homepage->thn2020(),
                'tahun2019' => $this->M_homepage->thn2019(),
                'tahun2018' => $this->M_homepage->thn2018(),
                'tahun2017' => $this->M_homepage->thn2017(),
                'tahun2016' => $this->M_homepage->thn2016(),
                'tahun2015' => $this->M_homepage->thn2015(),
                'tahun2014' => $this->M_homepage->thn2014(),
                'tahun2013' => $this->M_homepage->thn2013()
            );

            //pencarian multi form
            $submit = $this->input->post('submit',true);
            if(isset($submit)){
                $kategori       = urldecode(trim($this->input->post('cari_kategori', TRUE)));
                $nomor          = urldecode(trim($this->input->post('cari_nomor', TRUE)));
                $tahun          = urldecode(trim($this->input->post('cari_tahun', TRUE)));
                $judul          = urldecode(trim($this->input->post('cari_judul', TRUE)));
                $judul1          = urldecode(trim($this->input->post('cari_judul1', TRUE)));
                $this->session->set_userdata('cari_kategori',$kategori);
                $this->session->set_userdata('cari_nomor',$nomor);
                $this->session->set_userdata('cari_tahun',$tahun);
                $this->session->set_userdata('cari_judul',$judul);
                $this->session->set_userdata('cari_judul1',$judul1);
        } else {
                $kategori = $this->session->userdata('cari_kategori');
                $nomor = $this->session->userdata('cari_nomor');
                $tahun = $this->session->userdata('cari_tahun');
                $judul = $this->session->userdata('cari_judul');
                $judul1 = $this->session->userdata('cari_judul1');
            }
            
            //config pagination
            $this->db->like('tentang', $judul); //mencari berdasarkan tentang
            $this->db->like('tentang', $judul1); //mencari berdasarkan tentang
            $this->db->like('kategori', $kategori); //mencari berdasarkan nomor
            $this->db->like('nomor', $nomor); //mencari berdasarkan tentang
            $this->db->like('tahun', $tahun); //mencari berdasarkan tentang
            $this->db->from('tbl_produk');
            $config['base_url'] = 'http://jdih.susiafm.com/Produk/index';
            $config['total_rows'] = $this->db->count_all_results();
            $data['total_rows'] = $config['total_rows'];
            $config['per_page'] = 5;
    
            //styling pagination
            $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
            $config['full_tag_close'] = '</ul></nav>';

            $config['first_link'] = 'Awal';
            $config['first_tag_open'] = '<li class="page-item">';
            $config['first_tag_close'] = '</li>';

            $config['last_link'] = 'akhir';
            $config['last_tag_open'] = '<li class="page-item">';
            $config['last_tag_close'] = '</li>';

            $config['next_link'] = '&raquo';
            $config['next_tag_open'] = '<li class="page-item">';
            $config['next_tag_close'] = '</li>';

            $config['prev_link'] = '&laquo';
            $config['prev_tag_open'] = '<li class="page-item">';
            $config['prev_tag_close'] = '</li>';

            $config['cur_tag_open'] = '<li class="page-item active"> <a class="page-link" href="#">';
            $config['cur_tag_close'] = '</a></li>';
            
            $config['num_tag_open'] = '<li class="page-item">';
            $config['num_tag_close'] = '</li>';

            $config['attributes'] = array('class' => 'page-link');
            //initialize pagination
            $this->pagination->initialize($config);
    
            $data['start'] = $this->uri->segment(3);
            $data['produk']         = $this->M_produk->menampilkan_sebagian_data($config['per_page'],$data['start'],$kategori,$nomor,$tahun,$judul,$judul1);
            $this->load->view('Template_User/header.php');
            $this->load->view('User/produkhukum.php',$data);
            $ip    = $this->input->ip_address(); // Mendapatkan IP user
            $date  = date("Y-m-d"); // Mendapatkan tanggal sekarang
            $waktu = time(); //
            $timeinsert = date("Y-m-d H:i:s");
            
            // Cek berdasarkan IP, apakah user sudah pernah mengakses hari ini
            $s = $this->db->query("SELECT * FROM visitor WHERE ip='".$ip."' AND date='".$date."'")->num_rows();
            $ss = isset($s)?($s):0;
            
            
            // Kalau belum ada, simpan data user tersebut ke database
            if($ss == 0){
            $this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('".$ip."','".$date."','1','".$waktu."','".$timeinsert."')");
            }
            
            // Jika sudah ada, update
            else{
            $this->db->query("UPDATE visitor SET hits=hits+1, online='".$waktu."' WHERE ip='".$ip."' AND date='".$date."'");
            }
            
            
            $pengunjunghariini  = $this->db->query("SELECT * FROM visitor WHERE date='".$date."' GROUP BY ip")->num_rows(); // Hitung jumlah pengunjung
            
            $dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row(); 
            
            $totalpengunjung = isset($dbpengunjung->hits)?($dbpengunjung->hits):0; // hitung total pengunjung
            
            $bataswaktu = time() - 300;
            
            $pengunjungonline  = $this->db->query("SELECT * FROM visitor WHERE online > '".$bataswaktu."'")->num_rows(); // hitung pengunjung online
            
            
            $data['pengunjunghariini']=$pengunjunghariini;
            $data['totalpengunjung']=$totalpengunjung;
            $data['pengunjungonline']=$pengunjungonline;
            $this->load->view('Template_User/footer.php',$data);
        }

        public function view($id)
        {
            $where = array(
                'id' => $id,
                'title'     => 'Tampil Produk Hukum',
                'labelkb'   => $this->M_homepage->Keputusanbupati(),
                'labelpd'   => $this->M_homepage->Peraturandaerah(),
                'labelib'   => $this->M_homepage->Intruksibupati(),
                'labelpb'   => $this->M_homepage->Peraturanbupati(),
                'labelseb'   => $this->M_homepage->Suratedaranbupati(),
                'labelrb'   => $this->M_homepage->Rancanganbupati(),
                'labelrd'   => $this->M_homepage->Rancangandaerah(),
                'labeluu'   => $this->M_homepage->Undangundang(),
                'tahun2020' => $this->M_homepage->thn2020(),
                'tahun2019' => $this->M_homepage->thn2019(),
                'tahun2018' => $this->M_homepage->thn2018(),
                'tahun2017' => $this->M_homepage->thn2017(),
                'tahun2016' => $this->M_homepage->thn2016(),
                'tahun2015' => $this->M_homepage->thn2015(),
                'tahun2014' => $this->M_homepage->thn2014(),
                'tahun2013' => $this->M_homepage->thn2013(),
                'tbl_produk' => $this->db->query("SELECT * FROM tbl_produk WHERE id='$id'")->result()
            );

            $ip    = $this->input->ip_address(); // Mendapatkan IP user
            $date  = date("Y-m-d"); // Mendapatkan tanggal sekarang
            $waktu = time(); //
            $timeinsert = date("Y-m-d H:i:s");
            
            // Cek berdasarkan IP, apakah user sudah pernah mengakses hari ini
            $s = $this->db->query("SELECT * FROM visitor WHERE ip='".$ip."' AND date='".$date."'")->num_rows();
            $ss = isset($s)?($s):0;
            
            
            // Kalau belum ada, simpan data user tersebut ke database
            if($ss == 0){
            $this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('".$ip."','".$date."','1','".$waktu."','".$timeinsert."')");
            }
            
            // Jika sudah ada, update
            else{
            $this->db->query("UPDATE visitor SET hits=hits+1, online='".$waktu."' WHERE ip='".$ip."' AND date='".$date."'");
            }
            
            
            $pengunjunghariini  = $this->db->query("SELECT * FROM visitor WHERE date='".$date."' GROUP BY ip")->num_rows(); // Hitung jumlah pengunjung
            
            $dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row(); 
            
            $totalpengunjung = isset($dbpengunjung->hits)?($dbpengunjung->hits):0; // hitung total pengunjung
            
            $bataswaktu = time() - 300;
            
            $pengunjungonline  = $this->db->query("SELECT * FROM visitor WHERE online > '".$bataswaktu."'")->num_rows(); // hitung pengunjung online
            
            
            $data['pengunjunghariini']=$pengunjunghariini;
            $data['totalpengunjung']=$totalpengunjung;
            $data['pengunjungonline']=$pengunjungonline;


            $this->load->view('Template_User/header.php');
            $this->load->view('User/tampilproduk.php',$where);
            $this->load->view('Template_User/footer.php',$data);
        }
    }