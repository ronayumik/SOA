<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('dosen_m');
    }
    
	public function index()
	{
		$data['kelas']=$this->dosen_m->list_kelas_diajar('333333333333333333');
		$this->load->view('dosen/index',$data);
	}
	
	public function pemilihan_calon_asisten()
	{
        $data['calon_asisten']=$this->dosen_m->list_daftar_asisten('333333333333333333');
		$this->load->view('dosen/pemilihan_calon_asisten', $data);
	}
	
	public function edit_akun()
	{
		$this->load->view('dosen/edit_akun');
	}
}
