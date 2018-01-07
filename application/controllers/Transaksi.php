<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Transaksi extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Transaksi_model');
    } 

    /*
     * Listing of transaksi
     */
    function index()
    {
        $data['transaksi'] = $this->Transaksi_model->get_all_transaksi();
        
        $data['_view'] = 'transaksi/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new transaksi
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('id_pelanggan','Id Pelanggan','required');
		$this->form_validation->set_rules('jml_tiket','Jml Tiket','integer|required');
		$this->form_validation->set_rules('total_harga','Total Harga','integer');
		$this->form_validation->set_rules('kd_tiket','Kd Tiket','required');
		$this->form_validation->set_rules('tgl_trans','Tgl Trans','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'id_pelanggan' => $this->input->post('id_pelanggan'),
				'kd_tiket' => $this->input->post('kd_tiket'),
				'tgl_trans' => $this->input->post('tgl_trans'),
				'jml_tiket' => $this->input->post('jml_tiket'),
				'total_harga' => $this->input->post('total_harga'),
            );
            
            $transaksi_id = $this->Transaksi_model->add_transaksi($params);
            redirect('transaksi/index');
        }
        else
        {            
            $data['_view'] = 'transaksi/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a transaksi
     */
    function edit($)
    {   
        // check if the transaksi exists before trying to edit it
        $data['transaksi'] = $this->Transaksi_model->get_transaksi($);
        
        if(isset($data['transaksi']['']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('id_pelanggan','Id Pelanggan','required');
			$this->form_validation->set_rules('jml_tiket','Jml Tiket','integer|required');
			$this->form_validation->set_rules('total_harga','Total Harga','integer');
			$this->form_validation->set_rules('kd_tiket','Kd Tiket','required');
			$this->form_validation->set_rules('tgl_trans','Tgl Trans','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'id_pelanggan' => $this->input->post('id_pelanggan'),
					'kd_tiket' => $this->input->post('kd_tiket'),
					'tgl_trans' => $this->input->post('tgl_trans'),
					'jml_tiket' => $this->input->post('jml_tiket'),
					'total_harga' => $this->input->post('total_harga'),
                );

                $this->Transaksi_model->update_transaksi($,$params);            
                redirect('transaksi/index');
            }
            else
            {
                $data['_view'] = 'transaksi/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The transaksi you are trying to edit does not exist.');
    } 

    /*
     * Deleting transaksi
     */
    function remove($)
    {
        $transaksi = $this->Transaksi_model->get_transaksi($);

        // check if the transaksi exists before trying to delete it
        if(isset($transaksi['']))
        {
            $this->Transaksi_model->delete_transaksi($);
            redirect('transaksi/index');
        }
        else
            show_error('The transaksi you are trying to delete does not exist.');
    }
    
}
