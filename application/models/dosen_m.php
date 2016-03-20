<?php
Class Dosen_m extends CI_Model{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
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
}
    
?>