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
		$login = array(
    			'isLogin' => $this->session->userdata('isLogin'),
    			'id_pengguna' => $this->session->userdata('id_pengguna'),
    			'nama' => $this->session->userdata('nama'),
    			'role' => $this->session->userdata('role'),
    			 );
    	$data['login'] = $login;
		$data['kota'] = $this->Kota_model->get_all_kota();
		$data['tiket'] = $this->Tiket_model->get_tiketjoin();
		$this->load->view('layouts/header.php',$data);
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

	function ordertiket()
	{
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d');
		$data = array(
			'kode_tiket' => $this->input->post('kode_tiket'), 
			'id_pemesan' => $this->input->post('id_pengguna'), 
			'tanggal' => $date,
			'harga' => $this->input->post('harga'),
			'jumlah' => $this->input->post('jumlah')
		);
		$order['pemesanan'] = $this->Tiket_model->order_tiket($data);
		$this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($order));
	}
}