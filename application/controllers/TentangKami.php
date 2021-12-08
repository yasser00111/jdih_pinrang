<?php

    class TentangKami extends CI_Controller
    {
        public function index()
        {
            $data = array(
                'title'     => 'Kelola Produk',
                'produk'    => $this->M_produk->get_all_produk(),
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
            $this->load->view('Template_User/header.php');
            $this->load->view('User/tentangkami.php',$data);
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
    } 