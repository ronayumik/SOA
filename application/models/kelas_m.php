<?php
Class Kelas_m extends CI_Model{
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function list_kelas($id_jadwal) {
        $data = $this->db->query("  
                    SELECT *
                    FROM kelas AS k , asisten AS a, list_mata_kuliah 
                    AS list_mk, user_ AS dosen
                    WHERE a.a_nrp = k.k_nrp_asisten 
                            && list_mk.lmk_id = k.k_matkul 
                            && dosen.u_nip = k.k_id_dosen 
                            && k.k_id_jadwal = '$id_jadwal'");
        return $data;
    }

    public function simpan_kelas($id_kelas, $id_dosen, $kelas, $id_mk) {
        $data = $this->db->query("update kelas set k_id_dosen = '$id_dosen', k_kelas = '$kelas', k_matkul='$id_mk' where k_id_kelas = '$id_kelas'");
        return $data;
    }

    public function hapus_kelas($id_kelas) {
        $data = $this->db->query("DELETE from kelas where k_id_kelas = '$id_kelas'");
        return $data;
    }

    public function tambah_kelas($dataToUpdate) {
        
        return $this->db->insert('kelas', $dataToUpdate);
    }

}
    
?>