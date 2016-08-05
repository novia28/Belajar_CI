<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model{
	private $nim;
	private $nama;
	
	public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }
	
	public function getData(){
		$query = $this->db->query("SELECT * FROM tmhs");
		return $query->result();
	}
	
	public function insertData(){
		$data = array(
			'nim' => $this->input->post('nim'),
			'nama' => $this->input->post('nama')
		);

		return $this->db->insert('tmhs', $data);
	}
	
	public function deleteData($id){
		$this->db->where('nim', $id);
		return $this->db->delete('tmhs');
	}
	
	public function showEditData($id){
		$this->db->select('*');
		$this->db->from('tmhs');
		$this->db->where('nim', $id);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	
	public function updateData($id){
		$data = array(
			'nama' => $this->input->post('nama')
		);
		
		$this->db->where('nim', $id);
		return $this->db->update('tmhs', $data);
	}
	
}