<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slide extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('upload');
        $this->load->database();
    }

    // Method untuk menampilkan semua slide
    public function index(){
        $slides = $this->db->get('slides')->result_array();

        $data = array(
            'judul_halaman' => 'Halaman Slide',
            'slides'        => $slides
        );
        $this->template->load('template_admin', 'admin/slide_index', $data);
    }

    // Method untuk menyimpan slide baru
    public function simpan(){
        $namafoto = date('YmdHis') . '.jpg';
        $config['upload_path']   = './assets/upload/slides/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['file_name']     = $namafoto;
        $config['max_size']      = 1000; // dalam KB (1MB)

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('foto')) {
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                    Gagal mengupload gambar: ' . $this->upload->display_errors() . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ');
            redirect('admin/slide');
        } else {
            $data = array(
                'judul'      => $this->input->post('judul'),
                'deskripsi'  => $this->input->post('deskripsi'),
                'foto'       => $namafoto,
                'created_at' => date('Y-m-d H:i:s')
            );
            $this->db->insert('slides', $data);

            $this->session->set_flashdata('alert', '
                <div class="alert alert-success alert-dismissible" role="alert">
                    Slide berhasil ditambahkan!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ');
            redirect('admin/slide');
        }
    }

    // Method untuk menghapus slide
    public function delete($id){
        $slide = $this->db->get_where('slides', array('id' => $id))->row_array();

        if ($slide) {
            $file_path = './assets/upload/slides/' . $slide['foto'];
            if (file_exists($file_path)) {
                unlink($file_path);
            }

            $this->db->delete('slides', array('id' => $id));

            $this->session->set_flashdata('alert', '
                <div class="alert alert-success alert-dismissible" role="alert">
                    Slide berhasil dihapus!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ');
        } else {
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                    Slide tidak ditemukan!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ');
        }

        redirect('admin/slide');
    }

    // Method untuk memperbarui slide
    public function update($id){
        $slide = $this->db->get_where('slides', array('id' => $id))->row_array();

        if (!$slide) {
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                    Slide tidak ditemukan!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ');
            redirect('admin/slide');
        }

        $namafoto = $slide['foto'];
        if (!empty($_FILES['foto']['name'])) {
            $config['upload_path']   = './assets/upload/slides/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['file_name']     = date('YmdHis') . '.jpg';
            $config['overwrite']     = true;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('foto')) {
                $file_path = './assets/upload/slides/' . $slide['foto'];
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
                $namafoto = $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata('alert', '
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        Gagal mengupload gambar: ' . $this->upload->display_errors() . '
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                ');
                redirect('admin/slide');
            }
        }

        $data = array(
            'judul'      => $this->input->post('judul'),
            'deskripsi'  => $this->input->post('deskripsi'),
            'foto'       => $namafoto,
            'updated_at' => date('Y-m-d H:i:s')
        );

        $this->db->update('slides', $data, array('id' => $id));

        $this->session->set_flashdata('alert', '
            <div class="alert alert-success alert-dismissible" role="alert">
                Slide berhasil diperbarui!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        ');
        redirect('admin/slide');
    }
}
