<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('dosen_m');
        $this->load->model('tu_m');
    }
    
	public function index()
	{
		// $data_header['menus'] = true;
		// $data_header['status'] = "";
		// $data_header['judul'] = "Sistem Informasi Open Recruitment Asisten Dosen";
		// $this->load->view('dosen/header', $data_header);
		// $this->load->view('dosen/index');
		$this->memilih_oprec();
	}
	
	public function memilih_oprec() {
		$data_header['memilih'] = true;
		$data_header['status'] = "";
		$data_header['judul'] = "List Open Recruitment Asisten Dosen";
		$data['list_oprec'] = $this->tu_m->list_oprec();
		$this->load->view('dosen/header', $data_header);
       	$this->load->view('dosen/memilih_oprec', $data);
	}

	public function pemilihan_calon_asisten()
	{
        $data['calon_asisten']=$this->dosen_m->list_daftar_asisten('333333333333333333');
		$this->load->view('dosen/pemilihan_calon_asisten', $data);
	}
    
    public function pilih_asisten($kelas, $nrp)
	{
        $this->dosen_m->pilih_asisten($kelas, $nrp);
        $data['calon_asisten']=$this->dosen_m->list_daftar_asisten('333333333333333333');
		$this->load->view('dosen/pemilihan_calon_asisten', $data);
	}
	
	public function edit_akun()
	{
        $data['dosen'] = $this->dosen_m->detail_dosen('333333333333333333');
		$this->load->view('dosen/edit_akun', $data);
	}
}
