<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class fasilitas extends CI_Controller {
    public function __construct(){
        parent::__construct();
        
    }

    public function index(){
        $this->db->from('fasilitas ');
        $this->db->order_by('id_fasilitas ', 'ASC');
        $fasilitas = $this->db->get()->result_array();

        $this->db->from('fasilitas a');

        $fasilitas = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Halaman fasilitas',
            'fasilitas'        => $fasilitas
        );
		$this->template->load('template_admin','admin/fasilitas_index', $data);
    }

    public function simpan(){
        $namafoto = date('YmdHis').'.jpg';
        $config['upload_path']      = 'assets/upload/fasilitas/';
        $config['max_size']         = 1000 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['file_name']        = $namafoto;
        $config['allowed_types']    = '*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 1000 * 1024) {
            $this->session->set_flashdata('alert','
                <div class=" alert alert-danger alert-dismissible" role="alert">
                    Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 1000 KB.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            ');
            redirect('admin/fasilitas');
        } elseif(! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }

        
        $this->db->from('fasilitas');
        $this->db->where('judul', $this->input->post('judul'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->set_flashdata('alert', '
            <div class="alert alert-dark alert-dismissible mb-3" role="alert">
                            Yahh Judul sudah ada nihh!! Ganti yang lain oke 😉👌
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
            ');
            redirect('admin/fasilitas');
        }
        $data = array(
            'judul'             => $this->input->post('judul'), 
            'tanggal'           => date('Y-m-d'),
            'foto'              => $namafoto,
        );
        $this->db->insert('fasilitas',$data);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-dark alert-dismissible mb-3" role="alert">
                      SELAMAT!! Kamu berhasil menambahkan foto 😉👌
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
        ');
        redirect('admin/fasilitas');
    }

    public function delete_data($id){
        $filename=FCPATH.'/assets/upload/fasilitas/'.$id;
            if(file_exists($filename)){
                unlink("./assets/upload/fasilitas/".$id);
            }
        $where = array(
            'foto'  => $id
        );
        //perintah hapus
        $this->db->delete('fasilitas',$where);
         //nontifikasi
         $this->session->set_flashdata('alert', '
         <div class="alert alert-primary alert-dismissible" role="alert">
          Yeayy berhasil menghapus foto dari fasilitas nihh 👌
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
           </button>
         </div>
         ');
         redirect('admin/fasilitas');
    }

    public function update(){
        $namafoto = $this->input->post('nama_foto');
        $config['upload_path']          = 'assets/upload/fasilitas/';
        $config['max_size'] = 1000 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['file_name']            = $namafoto;
        $config['overwrite']            = true;
        $config['allowed_types']        = '*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 1000 * 1024){
            $this->session->set_flashdata('alert', '
        <div class="alert alert-primary alert-dismissible" role="alert">
            Yahhh ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 1000 KB !😼
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
        '); 
        redirect('admin/fasilitas');
        } elseif( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else {
            $data = array('upload_data' => $this->upload->data());
        }
        $data = array(
            'judul'         => $this->input->post('judul'),
        );
        $where = array(
            'foto'    => $this->input->post('nama_foto')
        );
        $this->db->update('fasilitas',$data,$where);
        //nontifikasi
        $this->session->set_flashdata('alert', '
        <div class="alert alert-primary alert-dismissible" role="alert">
         Wuiss fasilitasmu berhasil diperbarui nihh !😻
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
        ');
        redirect('admin/fasilitas');
    }
}
?>
