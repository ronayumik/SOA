<?php
Class Mahasiswa_m extends CI_Model{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
	
	//--untuk hasilkan query
	public function list_pengumuman()
    {
        $query = $this->db->query("select * from pengumuman where view = 1");
        return $query;
    }

    public function cek_asisten($nrp) {
        $data = $this->db->query("select a_nrp from asisten where a_nrp = '$nrp'");
        return $data;
    }

    public function add_asisten($nrp, $nama) {
        $data = $this->db->query("insert into asisten values ('$nrp', '$nama')");
        return $data;
    }

    public function cek_daftar($nrp, $id_kelas) {
        $data =  $this->db->query("select ad_nrp_mhs from asisten_daftar where ad_id_kelas = '$id_kelas' and ad_nrp_mhs = '$nrp'");
        return $data;
    }

    public function add_asisten_daftar($nrp, $id_kelas) {
        $data = $this->db->query("insert into asisten_daftar(ad_id_kelas, ad_nrp_mhs) values('$id_kelas', '$nrp')");
        return $data;   
        
    }
    public function apply_kelas() {

    }

}
    
?>