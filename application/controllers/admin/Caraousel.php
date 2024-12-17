<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Caraousel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') == NULL) {
            redirect('auth');
        }
    }
    public function index()
    {
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Halaman Konten',
            'caraousel'      => $caraousel,
        );
        $this->template->load('template_admin', 'admin/caraousel_index', $data);
        //load memuat semua yang ada di() lalu di tampilkan di halaman index dicaraousel
    }
    public function simpan()
    {
        $namafoto = date('YmdHis') . '.jpg';
        //tahunnya
        $config['upload_path']      = 'assets/upload/caraousel';
        //sebagai wadah foto pada caraousel
        $config['max_size'] = 1000 * 1024; // 500Kb
        //ukuran foto
        $config['file_name']        = $namafoto;
        //nama file foto nya
        $config['allowed_types']    = '*';
        //type foto
        $this->load->library('upload', $config);
        //menyimpan semua data config ditampung di upload
        if ($_FILES['foto']['size'] >= 1000 * 1024) {
            //jika ukuran fotonya lebih dari ini tidak bisa
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger alert-dismissible" role="alert">
                Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 1000 Kb. 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('admin/caraousel');
        } elseif (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }   
        $data = array(
            'judul'     => $this->input->post('judul'),
            'foto'           => $namafoto,
        );
        $this->db->insert('caraousel    ', $data);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-dark alert-dismissible mb-0" role="alert">
            Berhasil menambahkan caraousel.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('admin/caraousel');
    }
    public function delete_data($id)
    {
        $filename = FCPATH . '/assets/upload/caraousel/' . $id;
        if (file_exists($filename)) {
            unlink("./assets/upload/caraousel/" . $id);
        }
        $where = array(
            'foto'   => $id
        );
        $this->db->delete('caraousel', $where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-secondary alert-dismissible" role="alert">
            Berhasil menghapus Kategori Konten🤩.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('admin/caraousel');
  }
}
