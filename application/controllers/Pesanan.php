<?php

/**
* 
*/
class Pesanan extends CI_Controller
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
		$this->load->view('layouts/header.php', $data);
		$this->load->view('pesanan', $data);
	}

	function getUserorder()
	{
		$tiketorder = array(
				'id_pemesan' => $this->input->get('id_pemesan')
				);

		$data = $this->Tiket_model->getOrder($tiketorder);
		$this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($data));
	}

	function batalpesan()
	{
		$data = array(
			'kd_pesan' => $this->input->post('kd_pesan')
		);
		$cancel = $this->Tiket_model->cancelOrder($data);
		echo json_encode($cancel);
	}
}