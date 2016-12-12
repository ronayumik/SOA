 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TU extends CI_Controller {
   	
   	public function __construct()
    {
        parent::__construct();
        
        if( $this->session->userdata('hak') != 'TU')
             redirect('/user', 'refresh');
        
        $this->load->model('kaprodi_m');
        $this->load->model('tu_m');
        $this->load->helper('url');
        $this->load->model('kelas_m');
        $this->load->model('user_m');
        $this->load->model('pengumuman_m');
    }

	public function index()
	{
		$data_header['menus'] = true;
		$data_header['status'] = "";
		$data_header['judul'] = "Sistem Informasi Open Recruitment Asisten Dosen";
		$this->load->view('tu/header_tu', $data_header);
		$this->load->view('tu/index');
	}

	public function memilih_oprec() {
		$data_header['oprec'] = true;
		$data_header['status'] = "";
		$data_header['judul'] = "List Open Recruitment Asisten Dosen";
		$data['list_oprec'] = $this->tu_m->list_oprec();
		$this->load->view('tu/header_tu', $data_header);
       	$this->load->view('tu/memilih_oprec', $data);
	}

	public function edit_oprec($id) {
		$id_jadwal = $id;

		//Info Oprec
		$data['oprec_terpilih'] = $this->kaprodi_m->oprec_terpilih($id_jadwal)->result_array();

		//Info kelas2 
		$data['list_kelas'] =  $this->kelas_m->list_kelas($id_jadwal);

		$data_header['status'] = "edit";
		$data_header['judul'] = "Open Recruitment Asisten Dosen";
		$data_header['detail_oprec'] = $data['oprec_terpilih'];
		$this->load->view('tu/header_tu', $data_header);
		$this->load->view('tu/edit_oprec', $data);
	}

	public function edit_kelas() {
		$id_kelas 				= $this->input->post('id_kelas');
		$data['list_mk']  		= $this->tu_m->list_mk()->result_array();
		$data['list_dosen'] 	= $this->user_m->list_dosen()->result_array();
		$data['detail_kelas'] 	= $this->kaprodi_m->kelas($id_kelas)->result_array();
		
		echo json_encode($data);
	}


	public function simpan_kelas() {
		$id_kelas = $this->input->post('id_kelas');
		$id_mk = $this->input->post('nama_mk');
		$kelas = $this->input->post('kelas');
		$id_dosen = $this->input->post('dosen_mk');

		if($this->kelas_m->simpan_kelas($id_kelas, $id_dosen, $kelas, $id_mk)) {
			echo json_encode(true);
		}

	}

	public function create_kelas() {

		$data['list_mk']  		= $this->tu_m->list_mk()->result_array();
		$data['list_dosen'] 	= $this->user_m->list_dosen()->result_array();
		echo json_encode($data);
	}

	public function tambah_kelas() {
		// echo json_encode($this->input->post());
		$data = [];
		$data['k_id_dosen'] 		= $this->input->post('dosen_mk');
		$data['k_kelas'] 			= $this->input->post('kelas');
		$data['k_id_jadwal']		= $this->input->post('id_jadwal');
		$data['k_ruang']			= $this->input->post('room');
		$data['k_waktu_hari']		= $this->input->post('hari');
		$data['k_waktu_jam_mulai']	= $this->input->post('jam_mulai');
		$data['k_waktu_jam_selesai']= $this->input->post('jam_selesai');
		$data['k_matkul'] 			= $this->input->post('nama_mk');
		$data['k_nrp_asisten'] 		= '0';


		if($this->kelas_m->tambah_kelas($data)) {
			echo json_encode(true);
		}
	}

	public function hapus_kelas() {
		$id_kelas = $this->input->post('id_kelas');

		if($this->kelas_m->hapus_kelas($id_kelas)) {
			echo json_encode(true);
		}
	}

	public function delete_oprec() {
		$id_oprec = $this->input->post('id_oprec');

		if($this->tu_m->hapus_oprec($id_oprec)) {
			$data['pesan'] = "menghapus oprec";
			echo json_encode($data);
		}
	}

	public function tambah_oprec() {
		$semester 		= $this->input->post('semester');
		$tahun_ajaran 	= $this->input->post('tahun_ajaran');
		$waktu_buka		= $this->input->post('waktu_buka');
		$waktu_tutup	= $this->input->post('waktu_tutup');

		if($this->tu_m->tambah_oprec($semester, $tahun_ajaran, $waktu_buka, $waktu_tutup)) {

			echo json_encode(true);
		}
		
	}

	
	public function submit_orpec_edited() {
		$id_oprec 		= $this->input->post('id_oprec');
		$buka 			= $this->input->post('waktu_buka');
		$tutup 			= $this->input->post('waktu_tutup');

		if($this->tu_m->edit_oprec_exist($id_oprec, $buka, $tutup)) {
			echo json_encode(true);
		}
	}	

	public function mengelola_akun_dosen()
	{
		$this->load->model('tu_m');
 		$hasil['h']=$this->user_m->list_dosen();
        $hasil['h_tidak_aktif']=$this->user_m->list_dosen_tidak_aktif();
		$data['judul'] = "Mengelola Akun Dosen";
		$data['status'] = "";
		$this->load->view('tu/header_tu',$data);
        $this->load->view('tu/akun_dosen',$hasil);
    }

    public function tambah_akun_dosen()
	{
		$this->load->model('tu_m');
 		$hasil['h']=$this->user_m->list_dosen();
		$data['judul'] = "Mengelola Akun Dosen";
		$data['status'] = "";
		$this->load->view('tu/header_tu',$data);
        $this->load->view('tu/edit_akun',$hasil);
    }
    
    public function edit_status_dosen($id)
	{
		$this->load->model('tu_m');
        $this->load->model('dosen_m');
 		$hasil['h']=$this->dosen_m->detail_dosen($id);
		$data['judul'] = "Mengelola Akun Dosen";
		$data['status'] = "";
		$this->load->view('tu/header_tu',$data);
        $this->load->view('tu/edit_status_dosen',$hasil);
    }
    
    public function edit_akun_dosen()
    {
        $id = $this->input->post('u_nip');
        $nama = $this->input->post('u_nama');
        $email = $this->input->post('u_email');
        
        $this->user_m->edit_akun_dosen($id, $nama, $email);
        //var_dump($id);
        redirect('index.php/TU/mengelola_akun_dosen');
    }

    public function simpan_akun_dosen()
 	{
 		$this->user_m->simpan_dosen();
 		redirect('index.php/TU/mengelola_akun_dosen');
 	}

	public function mengelola_pengumuman()
	{
		//$data['judul'] = "Mengelola Pengumuman";
	   //$this->load->view('tu/header',$data);
       $this->load->view('tu/pengumuman');
	}

	public function lihat_pengumuman()
 	{
 		$this->load->model('tu_m');
 		$hasil['h']=$this->pengumuman_m->list_pengumuman();
 		$data_header['judul'] = "Pengumuman";
 		$data_header['status'] = "";
 		$this->load->view('tu/edit_pengumuman/header_tu',$data_header);
 		$this->load->view('tu/edit_pengumuman/pengumuman',$hasil);
 	}

 	public function edit_pengumuman()
 	{
 		$id = $this->input->post('id');
 		$this->load->model('tu_m');
 		$hasil['h']=$this->pengumuman_m->edit_pengumuman($id);
 		$data_header['judul'] = "Pengumuman";
 		$data_header['status'] = "";
 		$this->load->view('tu/edit_pengumuman/header_tu',$data_header);
 		$this->load->view('tu/edit_pengumuman/edit_pengumuman',$hasil);
 	}

 	public function tambah_pengumuman()
 	{
 		$data_header['judul'] = "Pengumuman";
 		$data_header['status'] = "";
 		$this->load->view('tu/edit_pengumuman/header_tu',$data_header);
 		$this->load->view('tu/edit_pengumuman/tambah_pengumuman');
 	}

 	public function simpan_pengumuman()
 	{
 		$id = $this->input->post('id');
 		$this->pengumuman_m->simpan_pengumuman($id);
 		redirect('index.php/TU/lihat_pengumuman');
 	}

 	public function tmbh_pengumuman()
 	{
 		$this->pengumuman_m->tambah_pengumuman($id);
 		redirect('index.php/TU/lihat_pengumuman');
 	}
    
    public function hapus_pengumuman($id)
 	{
 		$this->pengumuman_m->hapus_pengumuman($id);
 		redirect('index.php/TU/lihat_pengumuman');
 	}
    
    public function set_aktif_dosen($kode, $id)
 	{
 		$this->user_m->set_aktif_dosen($kode, $id);
 		redirect('index.php/TU/mengelola_akun_dosen');
 	}
}
