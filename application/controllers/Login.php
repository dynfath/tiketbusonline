<?php

class Login extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        
    }

    function index()
    {
        $this->load->view('layouts/header.php');

        $this->load->view('login/login.php');
    }
}