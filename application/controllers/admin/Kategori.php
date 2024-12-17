<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kategori extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('level')==NULL){
          //memastikan jika level tidak ada akan dikembalikan ke login
          redirect('auth');
        }
    }
	public function index(){
        $this->db->from('kategori');
        $this->db->order_by('nama_kategori','ASC');
        $kategori = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Kategori Konten',
            'kategori'          => $kategori
    );
		$this->template->load('template_admin','admin/kategori_index',$data);
	}
    public function simpan(){
        $this->db->from('kategori');
        $this->db->where('nama_kategori',$this->input->post('nama_kategori'));
        $cek = $this->db->get()->result_array();
       if($cek<>NULL){
         $this->session->set_flashdata('alert','
        <div class="alert alert-info alert-dismissible" role="alert">
          Kategori Konten sudah digunakan.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
         ');
        redirect('admin/kategori');
       }
       $data = array(
        'nama_kategori'  =>$this->input->post('nama_kategori')
       );
        $this->db->insert('kategori',$data);
        $this->session->set_flashdata('alert','
        <div class="alert alert-primary alert-dismissible" role="alert">
          Berhasil menambahkan kategori konten.
          <button type="button" class="icon-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('admin/kategori');
    }
    public function delete_data($id){
      $where = array(
        'id_kategori'     => $id
      );
      $this->db->delete('kategori',$where);
        $this->session->set_flashdata('alert','
      <div class="alert alert-secondary alert-dismissible" role="alert">
        Berhasil menghapus Kategori Konten🤩.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      ');
        redirect('admin/kategori');
    }
    public function update() {
      // Mendefinisikan variabel $where untuk menentukan kondisi update
      // 'id_kategori' akan diambil dari data POST yang dikirim melalui form
      $where = array('id_kategori' => $this->input->post('id_kategori'));
  
      // Membuat array $data yang berisi data baru yang akan diperbarui
      // 'nama_kategori' diambil dari data POST form yang dikirim pengguna
      $data = array('nama_kategori' => $this->input->post('nama_kategori'));
  
      // Melakukan update data ke tabel 'kategori' di database
      // $data berisi nilai baru, sedangkan $where menentukan baris yang diupdate
      $this->db->update('kategori', $data, $where);
  
      // Menyimpan pesan flash menggunakan session untuk memberitahu pengguna
      // Pesan ini bersifat sementara dan akan ditampilkan hanya sekali
      $this->session->set_flashdata('alert', '
        <div class="alert alert-dark alert-dismissible mb-0" role="alert">
            Berhasil memperbarui Kategori Konten🤗. <!-- Pesan sukses -->
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      ');
  
      // Mengarahkan pengguna kembali ke halaman 'admin/kategori' setelah update selesai
      redirect('admin/kategori');
  }
  
}
