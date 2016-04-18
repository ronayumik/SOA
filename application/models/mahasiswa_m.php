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
        $query = $this->db->query("select * from pengumuman");
        return $query;
    }

}
    
?>