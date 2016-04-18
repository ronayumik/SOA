 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
   
	public function index()
	{
	   $data['judul'] = "Pengumuman";
	   $this->load->view('mahasiswa/header',$data);
       $this->load->view('mahasiswa/pengumuman');
	}
	
	public function melihat_pengumuman()
	{
		$data['judul'] = "Pengumuman";
	   $this->load->view('mahasiswa/header',$data);
       $this->load->view('mahasiswa/pengumuman');
	}
}
