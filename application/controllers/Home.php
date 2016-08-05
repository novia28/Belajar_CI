<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model("mahasiswa_model");
		$data['row'] = $this->mahasiswa_model->getData();
		$this->load->view("home_message", $data);
	}
	
	public function form_mhs(){
		$this->load->helper('url');
		if ($_SERVER['REQUEST_METHOD'] == 'GET')
		{
			$this->load->view('form_mahasiswa');
		}
		else
		{
			$this->load->database();
			$this->load->model("mahasiswa_model");
			if($this->mahasiswa_model->insertData() == true){
				redirect('/home/index');
			}else{
				echo "error!";
			}
		}
	}
	
	public function delete_mhs($id){
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
		
		//$del = "DELETE FROM tmhs WHERE nim='$id'";
		//$query = $this->db->query($del);
		$this->db->where('nim', $id);
		$query = $this->db->delete('tmhs');
		
		if($query == TRUE){
			$this->session->set_flashdata('Message', 'Data telah terhapus!');
			redirect('/home/index');
		}else{
			echo "error!";
		}
	}
	
	public function edit_mhs($id){
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
		
	}
}
