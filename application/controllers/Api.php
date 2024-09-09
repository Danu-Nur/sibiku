<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Codeigniter');
		$this->load->helper('url');
		$this->load->helper('file');
	}

	// Function to get all organ data
	public function get_organs()
	{
		$data = $this->M_Codeigniter->getAll('tb_organ_tubuh')->result();
		$path = 'uploads/videos/organ/';
		echo $this->format_response($path,$data);
		// echo json_encode($dataFormat);
	}

	// Function to get all ekspresi data
	public function get_ekspresi()
	{
		$data = $this->M_Codeigniter->getAll('tb_ekspresi')->result();
		$path = 'uploads/videos/ekspresi/';
		echo $this->format_response($path,$data);
	}

	// Function to get all kuis data
	public function get_kuis()
	{
		$data = $this->M_Codeigniter->getAll('tb_kuis')->result();
		$path = 'uploads/videos/kuis/';
		echo $this->format_response($path,$data);
	}

	// Function to get counts of all tables
	public function get_counts()
	{
		$counts = $this->M_Codeigniter->count_all_records();
		echo json_encode($counts);
	}

	// Helper function to format response
	private function format_response($path,$data)
	{
		foreach ($data as $item) {
			// Append full path to link_video assuming it's stored in 'uploads/videos/ekspresi/'
			$item->video = $path . $item->video;
			// $item->link_video = $path . $item->link_video;
		}
		return json_encode($data, JSON_UNESCAPED_SLASHES);
	}
}
