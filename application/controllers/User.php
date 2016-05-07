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
        if($this->session->userdata('hak') == "DOSEN")
        {
            redirect('/dosen', 'refresh');
        }
        else if($this->session->userdata('hak') == "TU")
        {
            redirect('/tu', 'refresh');
        }
        else if($this->session->userdata('hak') == "KAPRODI")
        {
            redirect('/kaprodi', 'refresh');
        }
        else
        {
            $data['judul'] = "Halaman Login";
            $data['log_stat'] = "";
            $this->load->view('user/header',$data);
            $this->load->view('user/login');
        }
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
                    $this->session->set_userdata('email', $d->u_email);
                    redirect('/dosen', 'refresh');
                }
                else if($d->u_hak_akses == "TU")
                {
                    //echo "lala -  $d->u_nip";
                    $this->session->set_userdata('hak', 'TU');
                    $this->session->set_userdata('id', $d->u_nip);
                    $this->session->set_userdata('email', $d->u_email);
                    redirect('/tu', 'refresh');
                }
                else if($d->u_hak_akses == "KAPRODI")
                {
                    //echo "lala -  $d->u_nip";
                    $this->session->set_userdata('hak', 'KAPRODI');
                    $this->session->set_userdata('id', $d->u_nip);
                    $this->session->set_userdata('email', $d->u_email);
                    redirect('/kaprodi', 'refresh');
                }
            }
        }
    }
    
    public function edit_akun()
	{
        $id = $this->session->userdata('id');
        $data['dosen'] = $this->dosen_m->detail_dosen($id);
        $data['error'] = '';
        $data['error_pass'] = '';
		$this->load->view('dosen/edit_akun', $data);
	}
    
    public function edit_akun_do()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $data['error_pass'] = '';
        
        if($id == NULL or $nama == NULL or $email == NULL)
        {
            $data['error'] = ' (DATA TIDAK BOLEH KOSONG)';
            $id = $this->session->userdata('id');
            $data['dosen'] = $this->dosen_m->detail_dosen($id);
            $this->load->view('dosen/edit_akun', $data);
        }
        else
        {
            $this->dosen_m->edit_dosen($id, $nama, $email);
            $data['error'] = ' (UPDATE DATA BERHASIL!)';
            $id = $this->session->userdata('id');
            $data['dosen'] = $this->dosen_m->detail_dosen($id);
            $this->load->view('dosen/edit_akun', $data);
        }
    }
    
    public function edit_pass_do()
    {
        $lama = $this->input->post('pass_lama');
        $baru = $this->input->post('pass_baru');
        $konf = $this->input->post('pass_konf');
        
        $id = $this->session->userdata('id');
        $data['dosen'] = $this->dosen_m->detail_dosen($id);
        $data['error'] = '';
        if($lama == NULL or $baru == NULL or $konf == NULL)
        {
            $data['error_pass'] = ' (DATA TIDAK BOLEH KOSONG)';
            $this->load->view('dosen/edit_akun', $data);
        }
        else
        {
            foreach($data['dosen'] as $d)
            {
                if($lama != $d->u_pass)
                {
                    $data['error_pass'] = ' (PASSWORD LAMA SALAH!)';
                    $this->load->view('dosen/edit_akun', $data);
                }
                else if($baru != $konf)
                {
                    $data['error_pass'] = ' (KONFIRMASI PASSWORD SALAH!)';
                    $this->load->view('dosen/edit_akun', $data);
                }
                else
                {
                    $this->dosen_m->edit_pass($id, $baru);
                    $data['error_pass'] = ' (UPDATE DATA BERHASIL!)';
                    $this->load->view('dosen/edit_akun', $data);
                }
            }
        }
    }
    
    public function logout()
	{
        $this->session->unset_userdata('hak');
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('email');
        redirect('/user', 'refresh');
	}
}
