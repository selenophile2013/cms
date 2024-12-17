<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('home_model');
        if($this->session->userdata('level')==NULL){
            redirect('auth');
          }
    }
	public function index(){
        $data = array(
            'judul_halaman' => ' Halaman Dashboard',
            'jumlah_user' => $this->home_model->total_user(),
            'jumlah_kategori' => $this->home_model->total_Kategori(),
            'jumlah_konten' => $this->home_model->total_Konten(),
    );
		$this->template->load('template_admin','admin/dashboard',$data);
	}
}
