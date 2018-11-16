<?php 

class Mymodel extends CI_Model
{
     function __construct() 
	   {
			parent::__construct();
		    $this->load->database();
       }
	
	public function getdata($data)	
		{
			$this->db->set($data);
			$this->db->insert('demo');
		}
	public function selectdata()
		{
			$query = $this->db->get('demo');
			return $query->result();
		}
	public function modifydata($id)
		{
			$this->db->where('id', $id);
			$query = $this->db->get('demo');
			return $query->result();
		 }
	
	public function updatedata($data,$id)
		{	
			$this->db->where('id', $id);
		   $this->db->update('demo',$data); 
		}
	public function deletedata($id)
		{	
			$this->db->where('id', $id);
		   $this->db->delete('demo'); 
		}
}
?>