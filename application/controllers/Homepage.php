<?php

/**
* 
*/
class Homepage extends CI_Controller
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
		$this->load->view('home.php', $data);
	}
}