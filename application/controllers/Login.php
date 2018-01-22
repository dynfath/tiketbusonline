<?php

class Login extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        
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
        $this->load->view('login/login.php');
    }

    public function login()
    {
    	$usr = $this->input->post('username');
		$pass = $this->input->post('password');
		$dataLogin = array(
			'username' => $usr,
			'password' => $pass
		);
		$res = $this->db->get_where('pengguna',$dataLogin);

		if ($res->num_rows() > 0 ) {
			$dataUser = $res->result();
			
			foreach ($dataUser as $value) {
				$this->session->set_userdata(
				$data = array(
					'isLogin' => true,
					'id_pengguna' => $value->id_pengguna,
					'nama' => $value->nama,
					'role' => $value->role
					)
				);

				if ($value->role=='Admin') {
					redirect(base_url('admin'));
				}
			}
			redirect(base_url());
		}else{
			$this->session->set_flashdata('result_login', 'Username atau Password Salah.');
			redirect(base_url('login'));
		}
    }

    public function logout()
	{
		session_destroy();
		redirect(base_url());
	}

	public function register()
	{
		$login = array(
    			'isLogin' => $this->session->userdata('isLogin'),
    			'id_pengguna' => $this->session->userdata('id_pengguna'),
    			'nama' => $this->session->userdata('nama'),
    			'role' => $this->session->userdata('role'),
    			 );
    	$data['login'] = $login;
		$this->load->view('layouts/header',$data);
		$this->load->view('login/daftar');
	}

	public function reguser()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		
		
		$id = $this->generateID();
		$dataReg = array(
			'id_pengguna' => $id,
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'role' => "Pelanggan"
		);
		$datuname = array('username' => $username );

		$sama = $this->db->get_where('pengguna',$datuname);

		if ($sama->num_rows() > 0) {
			$this->session->set_flashdata('result_reg', 'Username Sudah Ada!');
			redirect(base_url('login/register'));
		}else{
			$this->db->insert('pengguna', $dataReg);
			$dataLogin = array(
				'username' => $username,
				'password' => $password
			);
			$res = $this->db->get_where('pengguna',$dataLogin);

			if ($res->num_rows() > 0 ) {
				$dataUser = $res->result();
				
				foreach ($dataUser as $value) {
					$this->session->set_userdata(
					$data = array(
						'isLogin' => true,
						'id_pengguna' => $value->id_pengguna,
						'nama' => $value->nama,
						'role' => $value->role
						)
					);

				}
				redirect(base_url());
			}
		}
		
		
		

	}

	function generateID()
	{
		$i = 0; 
	    $pin = ""; 
	    while($i < 16){
	        
	        $pin .= mt_rand(0, 9);
	        $i++;
	    }
	    return $pin;
	}

}