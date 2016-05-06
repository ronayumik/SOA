<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('dosen_m');
    }
    
	public function index()
	{
		$data['judul'] = "Halaman Login";
        $data['log_stat'] = "";
 		$this->load->view('user/header',$data);
 		$this->load->view('user/login');
	}
    
    
    public function login()
    {    
        $email = $this->input->post('email');
        $pass = $this->input->post('pass');
        
        $data = $this->dosen_m->login($email, $pass);
        //$data['judul'] = "Halaman Login";
        if($data == NULL)
        {
            $data['judul'] = "Halaman Login";
            $data['log_stat'] = "Email dan Password Salah";  
            $this->load->view('user/header',$data);
            $this->load->view('user/login');
        }
        else
        {
            foreach($data as $d){
                //echo "$d";
                if($d->u_hak_akses == "DOSEN")
                {
                    //echo "lala -  $d->u_nip";
                    $this->session->set_userdata('hak', 'DOSEN');
                    $this->session->set_userdata('id', $d->u_nip);
                    redirect('/dosen', 'refresh');
                }
                else if($d->u_hak_akses == "TU")
                {
                    //echo "lala -  $d->u_nip";
                    $this->session->set_userdata('hak', 'TU');
                    $this->session->set_userdata('id', $d->u_nip);
                    redirect('/tu', 'refresh');
                }
                else if($d->u_hak_akses == "KAPRODI")
                {
                    //echo "lala -  $d->u_nip";
                    $this->session->set_userdata('hak', 'KAPRODI');
                    $this->session->set_userdata('id', $d->u_nip);
                    redirect('/kaprodi', 'refresh');
                }
            }
        }
    }
}
