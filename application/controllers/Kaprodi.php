 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kaprodi extends CI_Controller {
   
   	public function __construct()
    {
        parent::__construct();
        $this->load->model('kaprodi_m');
    }

	public function index()
	{
		$this->load->view('kaprodi/index');
	}

	public function memilih_oprec()
	{
		$data['list_oprec'] = $this->kaprodi_m->list_oprec();
       	$this->load->view('kaprodi/memilih_oprec', $data);
	}

	public function open_oprec($id) {
		$id_jadwal = $id;

		//Info Oprec
		$data['oprec_terpilih'] = $this->kaprodi_m->oprec_terpilih($id_jadwal)->result_array();

		//Info kelas2 
		$data['list_kelas'] =  $this->kaprodi_m->list_kelas($id_jadwal);

		$this->load->view('kaprodi/list_kelas', $data);
	}

	public function list_asisten() {
		$id_kelas = $this->input->post('id_kelas');

		$data['detail_kelas'] = $this->kaprodi_m->kelas($id_kelas)->result_array();

		$data['list_asisten'] = $this->kaprodi_m->list_asisten($id_kelas)->result_array();
		echo json_encode($data);
	}

	public function add_asisten() {
		$nrp 		= $this->input->post('nrp');
		$id_kelas 	= $this->input->post('id_kelas');
		$this->kaprodi_m->add_asisten($nrp, $id_kelas);
		echo json_encode($nrp);
	}






    public function memilih_asisten_jadwal($id_jadwal) {
    	$data['list_oprec'] = $this->tu_m->list_oprec();
    	$this->load->view('kaprodi/memilih_asisten_jadwal', $data);
    }



	public function mengelola_pengumuman()
	{
       $this->load->view('kaprodi/pengumuman');
	}
	
	public function mengelola_akun_dosen()
	{
        
    }
}
