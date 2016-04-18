 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class Mahasiswa extends CI_Controller {

 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('mahasiswa_m');
 	}

 	public function index()
 	{
 		$hasil['h']=$this->mahasiswa_m->list_pengumuman();
 		$data['judul'] = "Pengumuman";
 		$this->load->view('mahasiswa/header',$data);
 		$this->load->view('mahasiswa/pengumuman',$hasil);
 	}

 	public function melihat_pengumuman()
 	{
 		$hasil['h']=$this->mahasiswa_m->list_pengumuman();
 		$data['judul'] = "Pengumuman";
 		$this->load->view('mahasiswa/header',$data);
 		$this->load->view('mahasiswa/pengumuman',$hasil);
 	}
 }
