<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('dosen_m');
    }
    
	public function index()
	{
		$data['judul'] = "Halaman Login";
 		$this->load->view('user/header',$data);
 		$this->load->view('user/login');
	}
}
