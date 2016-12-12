<?php
Class User_m extends CI_Model{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    	
    public function set_aktif_dosen($kode, $id){
        $this->db->query("update user_ set view = '$kode' where u_nip = '$id'");
    }
    
    public function edit_akun_dosen($id, $nama, $email){
        $this->db->query("update user_ set u_nip = '$id', u_nama = '$nama', u_email = '$email' where u_nip = '$id'");
    }

    public function list_dosen() {
        $data = $this->db->query("select * from user_ where u_hak_akses = 'DOSEN' and view = 1");
        return $data;   
    }
    
    public function list_dosen_tidak_aktif() {
        $data = $this->db->query("select * from user_ where u_hak_akses = 'DOSEN' and view = 0");
        return $data;   
    }

    public function simpan_dosen() {
        $u_nip = $this->input->post('u_nip');
        $u_nama = $this->input->post('u_nama');
        $u_email = $this->input->post('u_email');
        $data = $this->db->query("insert into user_(u_nip,u_nama,u_email,u_pass,u_hak_akses) values('$u_nip','$u_nama','$u_email','$u_nip','DOSEN')");
        return $data;   
    }


}
    
?>