 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
   
	public function index()
	{
		$data['judul'] = "Mengelola Oprek";
		$this->load->view('mahasiswa/header',$data);
		$this->load->view('mahasiswa/index');
	}
	
	public function mengelola_akun_dosen()
	{
		$data['judul'] = "Mengelola Akun Dosen";
		$this->load->view('tu/header',$data);
        $this->load->view('tu/akun_dosen');
    }
	public function melihat_pengumuman()
	{
		$data['judul'] = "Pengumuman";
	   $this->load->view('mahasiswa/header',$data);
       $this->load->view('mahasiswa/pengumuman');
	}
}
