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
		$login = array(
    			'isLogin' => $this->session->userdata('isLogin'),
    			'id_pengguna' => $this->session->userdata('id_pengguna'),
    			'nama' => $this->session->userdata('nama'),
    			'role' => $this->session->userdata('role'),
    			 );
    	$data['login'] = $login;
		$data['kota'] = $this->Kota_model->get_all_kota();
		$data['tiket'] = $this->Tiket_model->get_tiketjoin();
		$this->load->view('layouts/header.php', $data);
		$this->load->view('home.php', $data);
	}
}