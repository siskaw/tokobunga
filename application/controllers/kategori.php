<?php

class Kategori extends CI_Controller{
	public function vas_bunga()
	{
		$data['vas_bunga'] = $this->model_kategori->
		data_vas_bunga()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('vas_bunga', $data);
		$this->load->view('templates/footer');
	}

	public function bucket()
	{
		$data['bucket'] = $this->model_kategori->
		data_bucket()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('bucket', $data);
		$this->load->view('templates/footer');
	}

	public function bunga_hidup()
	{
		$data['bunga_hidup'] = $this->model_kategori->
		data_bunga_hidup()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('bunga_hidup', $data);
		$this->load->view('templates/footer');
	}

	public function bunga_artivisial()
	{
		$data['bunga_artivisial'] = $this->model_kategori->
		data_bunga_artivisial()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('bunga_artivisial', $data);
		$this->load->view('templates/footer');
	}
}