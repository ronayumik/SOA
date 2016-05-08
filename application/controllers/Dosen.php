<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        
        if( $this->session->userdata('hak') != 'DOSEN')
             redirect('/user', 'refresh');
        
        $this->load->model('dosen_m');
        $this->load->model('tu_m');
        $this->load->model('kaprodi_m');
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

	public function pilih_asisten_in_my_class() {
		$id_dosen = $this->input->post('id_dosen');
		$id_oprec = $this->input->post('id_oprec');

		$data_header['memilih'] = true;
		$data_header['status'] = "add_asisten";
		$data_header['judul'] = "Memilih Asisten";

		
		$data_header['detail_oprec'] =  $this->kaprodi_m->oprec_terpilih($id_oprec)->result_array();
		$data['list_kelas'] = $this->dosen_m->list_kelas($id_dosen, $id_oprec);
		//var_dump($data_header['detail_oprec']);
		$this->load->view('dosen/header', $data_header);
		$this->load->view('dosen/memilih_asisten_kelas', $data);
	}

	public function detail_asisten() {
		$id_kelas = $this->input->post('id_kelas');
		$id_asisten = $this->input->post('id_asisten');

		$data['detail_kelas'] = $this->kaprodi_m->kelas($id_kelas)->result_array();
		$data['detail_asisten'] = $this->dosen_m->detail_asisten($id_asisten)->result_array();
		
		echo json_encode($data);
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
        $id = $this->session->userdata('id');
        $data['dosen'] = $this->dosen_m->detail_dosen($id);
		$this->load->view('dosen/edit_akun', $data);
	}
    
    public function edit_akun_do()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $pass = $this->input->post('pass');
        
        $this->dosen_m->edit_dosen($id, $nama, $email, $pass);
        $this->index();
    }

    public function list_asisten() {
		$id_kelas = $this->input->post('id_kelas');

		$data['detail_kelas'] = $this->kaprodi_m->kelas($id_kelas)->result_array();

		$data['list_asisten'] = $this->kaprodi_m->list_asisten($id_kelas)->result_array();
		echo json_encode($data);
	}
}
