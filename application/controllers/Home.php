<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('home_model');
    }
    public function index(){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();

        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();

        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        
        $this->db->from('konten a');
		$this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
		$this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal', 'DESC');
		$konten = $this->db->get()->result_array();
        $data = array(
            'judul' => "MATA TRANS",
            'konfig' => $konfig,
            'kategori' => $kategori,
            'caraousel' => $caraousel,
            'konten' => $konten,
        );
		$this->load->view('dashboard', $data);
	}
	public function beranda(){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();

        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();

        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        
        $this->db->from('konten a');
		$this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
		$this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal', 'DESC');
		$konten = $this->db->get()->result_array();
        $data = array(
            'judul' => "Beranda | MATA TRANS",
            'konfig' => $konfig,
            'kategori' => $kategori,
            'caraousel' => $caraousel,
            'konten' => $konten,
        );
		$this->load->view('beranda', $data);
	}
    public function artikel($id){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $this->db->from('konten a');
		$this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
		$this->db->join('user c','a.username=c.username','left');
        $this->db->where('slug',$id);
		$konten = $this->db->get()->row();
        $data = array(
            'judul' => "Beranda | MATA TRANS",
            'konfig' => $konfig,
            'kategori' => $kategori,
            'konten' => $konten,
        );
		$this->load->view('detail', $data);
    }
    public function kategori($id){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();

		$this->db->from('konten a');
		$this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
		$this->db->join('user c','a.username=c.username','left');
		$this->db->order_by('judul', 'ASC');
        $this->db->where('a.id_kategori', $id);
		
		$konten = $this->db->get()->result_array();

        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();

		$this->db->from('kategori');
		$this->db->where('id_kategori', $id);
        $nama_kategori = $this->db->get()->row()->nama_kategori;

        $data = array(
            'judul'     		=> $nama_kategori." | MATA TRANS",
			'nama_kategori'		=> $nama_kategori,
            'konfig'   			=> $konfig,
            'kategori'  		=> $kategori,
			'caraousel'  		=> $caraousel,
			'konten' 			=> $konten
        );

        $this->load->view('kategori', $data);
	}
    public function galeri(){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();

        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();

        $this->db->from('konten');
        $konten = $this->db->get()->result_array();

        $this->db->from('galeri');
        $galeri = $this->db->get()->result_array();

        $data = array(
            'judul' => "Galeri | MATA TRANS",
            'konfig' => $konfig,
            'kategori' => $kategori,
            'konten' => $konten,
            'galeri' => $galeri
        );  
        $this->load->view('galeri', $data);
    }
    
    public function cari(){
        $judul = $this->input->post('judul');

        $bus = $this->home_model->cari($judul);

        // Cek apakah data ditemukan
        if (empty($bus)) {
            // Jika data tidak ditemukan, beri pesan dan tetap di halaman dashboard
            $this->session->set_flashdata('message', 'Tidak ada bus yang ditemukan.');
            redirect(''); 
        } else {
            // Jika data ditemukan, arahkan ke halaman hasil dan kirim data
            $data = array(
                'halaman' => 'Carbook - Search',
                'bus' => $bus,
            );
            // var_dump($data);
            // die;
            $this->load->view('bus', $data);
        }
}

public function blog(){
    $this->db->from('konfigurasi');
    $konfig = $this->db->get()->row();

    $this->db->from('caraousel');
    $caraousel = $this->db->get()->result_array();
    $this->db->from('kategori');
    $kategori = $this->db->get()->result_array();
    $this->db->order_by('tanggal', 'DESC');
    $this->db->from('konten a');
    $this->db->join('kategori b', 'a.id_kategori=b.id_kategori','left');
    $this->db->join('user c', 'a.username=c.username','left');
    $konten = $this->db->get()->result_array();
    $data = array(
        'title' 	=> 'Blog',
        'judul'		=> "BLOG | AGAM TUNGA JAYA",
        'konfig'	=> $konfig,
        'kategori'	=> $kategori,
        'caraousel'	=> $caraousel,
        'konten'	=> $konten
    );
    $this->load->view('blog',$data);
}
public function slide(){
    $this->db->from('konfigurasi');
    $konfig = $this->db->get()->row();

    $this->db->from('kategori');
    $kategori = $this->db->get()->result_array();

    $this->db->from('konten');
    $konten = $this->db->get()->result_array();

    $this->db->from('galeri');
    $galeri = $this->db->get()->result_array();

    $data = array(
        'judul' => "slide | MATA TRANS",
        'konfig' => $konfig,
        'kategori' => $kategori,
        'konten' => $konten,
        'galeri' => $galeri
    );  
    $this->load->view('slide', $data);
}
public function fasilitas(){
    $this->db->from('fasilitas');
    $fasilitas = $this->db->get()->result_array();

    $data = array(
        'judul' => "fasilitas | MATA TRANS",
        'fasilitas' => $fasilitas
        
    );  
    $this->load->view('fasilitas', $data);
}
public function melihat(){
    $this->db->from('melihat');
    $melihat = $this->db->get()->result_array();

    $data = array(
        'judul' => "BLOG | MATA TRANS",
        'melihat' => $melihat
        
    );  
    $this->load->view('melihat', $data);
}
public function konfigurasi(){
    $this->db->from('konfigurasi');
    $konfig = $this->db->get()->row();

    $this->db->from('kategori');
    $kategori = $this->db->get()->result_array();

    $this->db->from('konten');
    $konten = $this->db->get()->result_array();

    $this->db->from('konfigurasi');
    $konfigurasi = $this->db->get()->result_array();

    $data = array(
        'judul' => "konfigurasi | MATA TRANS",
        'konfig' => $konfig,
        'kategori' => $kategori,
        'konten' => $konten,
        'konfigurasi' => $konfigurasi
    );  
    $this->load->view('konfigurasi', $data);
}
}
?>
