<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {
	public function index()
	{
		$this->load->view('dosen/index');
	}
	
	public function pemilihan_calon_asisten()
	{
		$this->load->view('dosen/pemilihan_calon_asisten');
	}
	
	public function edit_akun()
	{
		$this->load->view('dosen/edit_akun');
	}
}
