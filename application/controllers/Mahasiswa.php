 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class Mahasiswa extends CI_Controller {

 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('mahasiswa_m');
 		$this->load->model('tu_m');
 		$this->load->model('kaprodi_m');
 	}

 	public function index() {
 		$data_header['menus'] = true;
		$data_header['status'] = "";
		$data_header['judul'] = "Sistem Informasi Open Recruitment Asisten Dosen";
		$this->load->view('mahasiswa/header', $data_header);
		$this->load->view('mahasiswa/index');
 	}

 	public function memilih_oprec()
 	{
 		$data_header['memilih_oprec'] = true;
		$data_header['status'] = "";
		$data_header['judul'] = "Sistem Informasi Open Recruitment Asisten Dosen";
		$data['list_oprec'] = $this->tu_m->list_oprec();
		$this->load->view('mahasiswa/header', $data_header);
		$this->load->view('mahasiswa/memilih_oprec', $data);
 	}

	public function apply_oprec($id) {
		$id_jadwal = $id;

		//Info Oprec
		$data['oprec_terpilih'] = $this->kaprodi_m->oprec_terpilih($id_jadwal)->result_array();

		//Info kelas2 
		$data['list_kelas'] =  $this->kaprodi_m->list_kelas($id_jadwal);

		$data_header['status'] = "apply_oprec";
		$data_header['judul'] = "Open Recruitment Asisten Dosen";
		$data_header['detail_oprec'] = $data['oprec_terpilih'];

		$this->load->view('mahasiswa/header', $data_header);
		$this->load->view('mahasiswa/list_kelas', $data);
	}

	public function apply_kelas() {
		$nama_lengkap 		= $this->input->post('nama');
		$nrp 				= $this->input->post('nrp');

		$id_kelas 			= $this->input->post('id_kelas');

		if($this->mahasiswa_m->cek_asisten($nrp)->result_array() == null)
			$this->mahasiswa_m->add_asisten($nrp, $nama_lengkap);
		
		if($this->mahasiswa_m->cek_daftar($nrp, $id_kelas)->result_array() != null) {
			echo json_encode(false);
		} else {
			if($this->mahasiswa_m->add_asisten_daftar($nrp, $id_kelas)) {
				echo json_encode(true);
			} else {
				echo json_encode(false);
			}
		}
		// } else {
		// 	if($this->mahasiswa_m->add_asisten_daftar($nrp, $id_kelas)) {
		// 		echo json_encode(true);
		// 	} else {
		// 		echo json_encode(false);
		// 	}
		// }

		//echo json_encode($data);
	}


 	public function melihat_pengumuman()
 	{
 		$hasil['h']=$this->mahasiswa_m->list_pengumuman();
 		$data['judul'] = "Pengumuman";
 		$this->load->view('mahasiswa/header',$data);
 		$this->load->view('mahasiswa/pengumuman',$hasil);
 	}
 }
