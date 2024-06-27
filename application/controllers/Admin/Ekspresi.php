<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Ekspresi extends CI_Controller
{
	private $_table = 'tb_ekspresi';
	private $idm = 'id';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_codeigniter');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url', 'file'));

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
			'judul' => 'Ekspresi',
			'tampil' => $mdl->getAll($this->_table)->result(),
			'contents' => 'admin/v_ekspresi/index'
		);

		$this->load->view('templates/index', $data);
	}

	public function add()
	{
		$mdl = $this->m_codeigniter;
		$validation = $this->form_validation;
		$post = $this->input->post();

		$validation->set_rules($this->rules());

		if ($validation->run() == FALSE) {
			$data = array(
				'judul' => 'Tambah Data',
				'contents' => 'admin/v_ekspresi/add'
			);
			$this->load->view('templates/index', $data);
		} else {
			$config['upload_path'] = './uploads/videos/ekspresi/';
			$config['allowed_types'] = 'mp4|avi|mov|flv|wmv';
			$config['max_size'] = 102400; // 100MB
			$config['encrypt_name'] = TRUE;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('link_video')) {
				$this->session->set_flashdata('error', $this->upload->display_errors());
				$data = array(
					'judul' => 'Tambah Data',
					'contents' => 'admin/v_ekspresi/add'
				);
				$this->load->view('templates/index', $data);
			} else {
				$upload_data = $this->upload->data();
				$data = array(
					'nama_ekspresi' => $post['nama_ekspresi'],
					'link_video' => $upload_data['file_name'],
				);
				$mdl->add($this->_table, $data);
				$this->session->set_flashdata('success', 'Berhasil disimpan');
				redirect('admin/Ekspresi');
			}
		}
	}

	public function edit($id = NULL)
	{
		if (!isset($id)) {
			$id = $this->input->post($this->idm);
		}
		if (!isset($id)) redirect('admin/Ekspresi');

		$mdl = $this->m_codeigniter;
		$data_table = $mdl->getById($this->_table, $this->idm, $id);

		if (!$data_table) {
			show_404();
		}

		$data = array(
			'judul' => 'Edit Data',
			'data' => $data_table,
			'contents' => 'admin/v_ekspresi/edit'
		);

		$this->load->view('templates/index', $data);
	}

	public function update()
	{
		$mdl = $this->m_codeigniter;
		$validation = $this->form_validation;
		$post = $this->input->post();

		$validation->set_rules($this->rules());

		if ($validation->run()) {
			$id = $post[$this->idm];
			$existing_data = $mdl->getById($this->_table, $this->idm, $id);
			$old_video_path = './uploads/videos/ekspresi/' . $existing_data['link_video'];
			
			$config['upload_path'] = './uploads/videos/ekspresi/';
			$config['allowed_types'] = 'mp4|avi|mov|flv|wmv';
			$config['max_size'] = 102400; // 100MB
			$config['encrypt_name'] = TRUE;

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('link_video')) {
				$upload_data = $this->upload->data();
				if (!empty($existing_data['link_video']) && file_exists($old_video_path)) {
					unlink($old_video_path);
				}
				$data = array(
					$this->idm => $id,
					'nama_ekspresi' => $post['nama_ekspresi'],
					'link_video' => $upload_data['file_name'],
				);
			} else {
				if ($this->upload->display_errors() != '<p>Anda belum memilih file untuk diupload.</p>') {
					$this->session->set_flashdata('error', $this->upload->display_errors());
					redirect('admin/Ekspresi/edit/' . $id);
				} else {
					$data = array(
						$this->idm => $id,
						'nama_ekspresi' => $post['nama_ekspresi'],
						'link_video' => $existing_data['link_video'],
					);
				}
			}
			
			$mdl->edit($this->_table, $this->idm, $data);

			$this->session->set_flashdata('success', 'Berhasil diupdate');
		} else {
			$this->session->set_flashdata('error', 'Gagal memperbarui data');
		}
		redirect('admin/Ekspresi');
	}

	private function rules()
	{
		return array(
			array(
				'field' => 'nama_ekspresi',
				'label' => 'Nama',
				'rules' => 'required'
			)
		);
	}

	public function delete($id = NULL)
	{
		if (!isset($id)) show_404();

		$mdl = $this->m_codeigniter;
		$data_table = $mdl->getById($this->_table, $this->idm, $id);
		$video_path = './uploads/videos/ekspresi/' . $data_table['link_video'];
		if ($mdl->delete($this->_table, $this->idm, $id)) {
			if (!empty($data_table['link_video']) && file_exists($video_path)) {
				unlink($video_path);
			}
			$this->session->set_flashdata('success', 'Berhasil Dihapus');
		} else {
			$this->session->set_flashdata('error', 'Gagal menghapus data');
		}

		redirect('admin/Ekspresi');
	}
}

/* End of file Ekspresi.php */
