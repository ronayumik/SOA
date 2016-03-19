<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {
	public $navigation="<a class='mdl-navigation__link' href=''><i class='mdl-color-text--blue-grey-400 material-icons' role='presentation'>home</i>Kelas</a>
          <a class='mdl-navigation__link'><i class='mdl-color-text--blue-grey-400 material-icons' role='presentation'>people</i>Calon Asdos</a>";
	public function index()
	{
		$data['navigation']=$this->navigation;
		$this->load->view('dosen/index',$data);
	}
	
	public function pemilihan_calon_asisten()
	{
		$this->load->view('dosen/pemilihan_calon_asisten');
	}
	
	public function edit_akun()
	{
		$this->load->view('dosen/edit_akun');
	}
}
