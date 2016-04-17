<?php
Class Tu_m extends CI_Model{
    
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

    public function list_mk() {
        $data = $this->db->query("select * from list_mata_kuliah where lmk_id != 0");
        return $data;
    }

    public function list_dosen() {
        $data = $this->db->query("select * from user_ where u_hak_akses = 'DOSEN'");
        return $data;   
    }
}
    
?>