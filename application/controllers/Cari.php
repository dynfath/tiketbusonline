<?php

/**
* 
*/
class Cari extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Kota_model');
		$this->load->model('Tiket_model');
	}

	function index()
	{
		$data['kota'] = $this->Kota_model->get_all_kota();
		$data['tiket'] = $this->Tiket_model->get_tiketjoin(); 
		$this->load->view('layouts/header.php');
		$this->load->view('caritiket/cari', $data);
	}

	function caritiket()
	{
		header('Content-Type: application/json');
		$datacari = array(
			'asal' => $this->input->get('asal'), 
			'tujuan' => $this->input->get('tujuan'));
		$tiket = $this->Tiket_model->found_tiket($datacari);

		echo json_encode($tiket);
	}

	function tampilcari(){

	}
}