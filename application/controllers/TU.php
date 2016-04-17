 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TU extends CI_Controller {
   	
   	public function __construct()
    {
        parent::__construct();
        $this->load->model('kaprodi_m');
        $this->load->model('tu_m');
    }

	public function index()
	{
		$this->load->view('tu/index_2');
		// $data['judul'] = "Mengelola Oprek";
		// $this->load->view('tu/header',$data);
		// $this->load->view('tu/index');
	}

	public function memilih_oprec() {
		$data['list_oprec'] = $this->kaprodi_m->list_oprec();
       	$this->load->view('tu/memilih_oprec', $data);
	}


	public function edit_oprec($id) {
		$id_jadwal = $id;

		//Info Oprec
		$data['oprec_terpilih'] = $this->kaprodi_m->oprec_terpilih($id_jadwal)->result_array();

		//Info kelas2 
		$data['list_kelas'] =  $this->kaprodi_m->list_kelas($id_jadwal);

		$this->load->view('tu/edit_oprec', $data);
	}

	public function edit_kelas() {
		$id_kelas = $this->input->post('id_kelas');
		$data['list_mk']  		= $this->tu_m->list_mk()->result_array();
		$data['list_dosen'] 	= $this->tu_m->list_dosen()->result_array();
		$data['detail_kelas'] 	= $this->kaprodi_m->kelas($id_kelas)->result_array();
		echo json_encode($data);
	}







	
	public function mengelola_akun_dosen()
	{
		$data['judul'] = "Mengelola Akun Dosen";
		$this->load->view('tu/header',$data);
        $this->load->view('tu/akun_dosen');
    }
	public function mengelola_pengumuman()
	{
		$data['judul'] = "Mengelola Pengumuman";
	   $this->load->view('tu/header',$data);
       $this->load->view('tu/pengumuman');
	}
}
