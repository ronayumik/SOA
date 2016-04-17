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
}
    
?>