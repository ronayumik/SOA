 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TU extends CI_Controller {
   
	public function index()
	{
		$data['judul'] = "Mengelola Oprek";
		$this->load->view('tu/header',$data);
		$this->load->view('tu/index');
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
