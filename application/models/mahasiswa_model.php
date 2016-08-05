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
}