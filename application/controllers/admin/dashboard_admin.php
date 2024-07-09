<?php

class Dashboard_admin extends CI_Controller{

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '1'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Anda Belum Login!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('auth/login');
		}
	}
	
	public function index()
	{
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('templates_admin/footer');
	}

	public function detail($id_brg)
  {
    $data['barang'] = $this->model_barang->detail_brg($id_brg);
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('detail_barang', $data);
    $this->load->view('templates/footer');
  }
}