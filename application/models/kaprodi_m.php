<?php
Class Kaprodi_m extends CI_Model{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
	
	//--untuk hasilkan query
	public function list_oprec()
    {
        $data = $this->db->query("select * from jadwal");
        return $data;
    }

    public function list_kelas($id_jadwal) {
        $data = $this->db->query("  SELECT *
                                    FROM kelas AS k , asisten AS a, list_mata_kuliah AS list_mk, user_ AS dosen
                                    WHERE a.a_nrp = k.k_nrp_asisten && list_mk.lmk_id = k.k_matkul && dosen.u_nip = k.k_id_dosen");
        return $data;
    }

    public function oprec_terpilih($id_jadwal) {
        $data = $this->db->query("select * from jadwal where j_id = '$id_jadwal'");
        return $data;
    }

    public function list_asisten($id_kelas) {
        $sql = "select * from asisten_daftar where ad_id_kelas = '$id_kelas'";
        $data = $this->db->query($sql);
        return $data;
    }

    public function kelas($id_kelas) {
        $sql = "SELECT *
                FROM kelas AS k , asisten AS a, list_mata_kuliah AS list_mk, user_ AS dosen
                WHERE a.a_nrp = k.k_nrp_asisten && list_mk.lmk_id = k.k_matkul && dosen.u_nip = k.k_id_dosen && k.k_id_kelas = '$id_kelas'";
        $data = $this->db->query($sql);
        return $data;
    }
}
    
?>