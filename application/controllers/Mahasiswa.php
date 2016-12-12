 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class Mahasiswa extends CI_Controller {

 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('mahasiswa_m');
 		$this->load->model('tu_m');
 		$this->load->model('kaprodi_m');
        $this->load->model('kelas_m');
        $this->load->model('user_m');
        $this->load->model('pengumuman_m');
 	}

 	public function index() {
// 		$data_header['menus'] = true;
//		$data_header['status'] = "";
//		$data_header['judul'] = "Sistem Informasi Open Recruitment Asisten Dosen";
//		$this->load->view('mahasiswa/header', $data_header);
//		$this->load->view('mahasiswa/index');
        
        $hasil['h']=$this->mahasiswa_m->list_pengumuman();
 		$data_header['judul'] = "Pengumuman";
 		$data_header['status'] = "";
 		$this->load->view('mahasiswa/header',$data_header);
 		$this->load->view('mahasiswa/index',$hasil);
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
		$data['list_kelas'] =  $this->kelas_m->list_kelas($id_jadwal);

		$data_header['status'] = "apply_oprec";
		$data_header['judul'] = "Open Recruitment Asisten Dosen";
		$data_header['detail_oprec'] = $data['oprec_terpilih'];

		$this->load->view('mahasiswa/header', $data_header);
		$this->load->view('mahasiswa/list_kelas', $data);
	}

	public function apply_kelas() {
		$nama_lengkap 		= $this->input->post('nama');
		$nrp 				= $this->input->post('nrp');
		$ipk 				= $this->input->post('ipk');
		$nilai 				= $this->input->post('nilai');
		$transkrip 			= $this->input->post('transkrip');
		$id_kelas 			= $this->input->post('id_kelas');

		if($this->mahasiswa_m->cek_asisten($nrp)->result_array() == null)
			$this->mahasiswa_m->add_asisten($nrp, $nama_lengkap);
		
		if($this->mahasiswa_m->cek_daftar($nrp, $id_kelas)->result_array() != null) {
			echo json_encode(false);
		} else {
			if($this->mahasiswa_m->add_asisten_daftar($nrp, $id_kelas, $nilai, $ipk, $transkrip)) {
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
// 		$hasil['h']=$this->mahasiswa_m->list_pengumuman();
// 		$data_header['judul'] = "Pengumuman";
// 		$data_header['status'] = "";
// 		$this->load->view('mahasiswa/header',$data_header);
// 		$this->load->view('mahasiswa/pengumuman',$hasil);
        
        $hasil['h']=$this->mahasiswa_m->list_syarat();
 		$data_header['judul'] = "Pengumuman";
 		$data_header['status'] = "";
 		$this->load->view('mahasiswa/header',$data_header);
 		$this->load->view('mahasiswa/syarat',$hasil);
 	}
 }
