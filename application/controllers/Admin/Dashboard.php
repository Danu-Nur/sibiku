<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_codeigniter');
		$this->load->library('form_validation');

		if ($this->session->userdata('status') != 'ADMIN') {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
		        Anda Belum Login !!!
		        </div>');
			redirect('Welcome');
		}
	}

	public function index()
	{
		$mdl = $this->m_codeigniter;
		$data = array(
			'organ' => $mdl->count_records('tb_organ_tubuh'),
			'ekspresi' => $mdl->count_records('tb_ekspresi'),
			'kuis' => $mdl->count_records('tb_kuis'),
			'user' => $mdl->count_records('tb_user'),
			'contents' => 'admin/v_dashboard/index'
		);
		$this->load->view('templates/index', $data);
	}
}

/* End of file Dashboard.php */
