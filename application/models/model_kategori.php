<?php

class Model_kategori extends CI_Model{
	public function data_vas_bunga(){
		return $this->db->get_where("tb_barang", array('kategori' => 'vas bunga'));
	}

	public function data_bucket(){
		return $this->db->get_where("tb_barang", array('kategori' => 'bucket'));
	}

	public function data_bunga_hidup(){
		return $this->db->get_where("tb_barang", array('kategori' => 'bunga hidup'));
	}

	public function data_bunga_artivisial(){
		return $this->db->get_where("tb_barang", array('kategori' => 'bunga artivisial'));
	}
}