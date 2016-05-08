<?php
Class Dosen_m extends CI_Model{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
	
    public function list_kelas($id_dosen, $id_jadwal) {
        $data = $this->db->query("  SELECT *
                                    FROM kelas AS k , asisten AS a, list_mata_kuliah AS list_mk, user_ AS dosen
                                    WHERE a.a_nrp = k.k_nrp_asisten && list_mk.lmk_id = k.k_matkul && dosen.u_nip = k.k_id_dosen && k.k_id_jadwal = '$id_jadwal' && k.k_id_dosen = '$id_dosen'");
        return $data;
    }

    public function detail_asisten($id_asisten) {
        $data = $this->db->query("SELECT * from asisten where a_nrp = '$id_asisten'");
        return $data;
    }

	//--untuk hasilkan query
	public function list_kelas_diajar($id_dosen)
    {
        $query = $this->db->query("select * from kelas, list_mata_kuliah where k_id_dosen = $id_dosen and lmk_id = k_matkul");
        $data = $query->result();
        return $data;
    }
    
    public function list_daftar_asisten($id_dosen)
    {
        $query = $this->db->query("select * from asisten, asisten_daftar, kelas, list_mata_kuliah where k_id_dosen = $id_dosen and ad_id_kelas = k_id_kelas and a_nrp = ad_nrp_mhs and lmk_id = k_matkul order by lmk_nama ASC, k_kelas ASC, ad_ipk DESC, ad_nilai_matkul ASC");
        $data = $query->result();
        return $data;
    }
    
    public function pilih_asisten($id_kelas, $nrp)
    {
        $query = $this->db->query("update asisten_daftar set ad_keterangan = 'DITERIMA' where ad_id_kelas = '$id_kelas' and ad_nrp_mhs = '$nrp'");
        //$data = $query->result();
        //return $data;
    }

    public function edit_dosen($id, $nama, $email)
    {
        $query = $this->db->query("update user_ set u_nama = '$nama', u_email='$email' where u_nip = '$id'");
    }
    
    public function edit_pass($id, $baru)
    {
        $query = $this->db->query("update user_ set u_pass = '$baru' where u_nip = '$id'");
    }
    
    public function detail_dosen($id)
    {
        $query = $this->db->query("select * from user_ where u_nip = '$id'");
        $data = $query->result();
        return $data;
    }
    
    public function login_d($email, $pass)
    {
        //echo "$email - $pass";
        $query = $this->db->query("SELECT * FROM user_ WHERE u_email = 'dosen1@kampus.com' AND u_pass = 'dosen1'");
        $data = $query->result();
        return $data;
    }
    
    
    
    public function login($email, $pass)
    {
        //echo "$email - $pass";
        $query = $this->db->query("SELECT * FROM user_ WHERE u_email = '$email' AND u_pass = '$pass'");
        $data = $query->result();
        return $data;
    }
    
}
    
?>