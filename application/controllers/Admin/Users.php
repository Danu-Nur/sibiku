<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

	private $_table = 'tb_user';
	private $idm = 'id_user';

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
			'judul' => 'USERS',
			'tampil' => $mdl->getAll($this->_table)->result(),
			'contents' => 'admin/v_user/index'
		);

		$this->load->view('templates/index', $data);
	}

	public function profile($id = NULL)
	{

		if (!isset($id)) {
			$id = $this->input->post($this->idm);
		}
		if (!isset($id)) redirect('admin/Users');

		$mdl = $this->m_codeigniter;
		$user = $mdl->getById($this->_table, $this->idm, $id);

		if (!$user) {
			show_404();
		}

		$data = array(
			'judul' => 'Profile User',
			'user' => $user,
			'contents' => 'admin/v_user/edit_profil'
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
				'judul' => 'Tambah User',
				'contents' => 'admin/v_user/add'
			);
			$this->load->view('templates/index', $data);
		} else {
			$data = array(
				'nama' => $post['nama'],
				'username_user' => $post['username_user'],
				'password_user' => $post['password_user'],
				'status' => $post['status'],
				'foto' => $post['foto'],
			);

			if (!empty($_FILES['foto']['name'])) {
				$config['upload_path'] = './uploads/profile/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['max_size'] = 2048; // 2MB
				$config['encrypt_name'] = TRUE;

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('foto')) {
					// Delete old photo if exists
					if (file_exists('./uploads/profile/' . $existing_data['foto']) && !empty($existing_data['foto'])) {
						unlink('./uploads/profile/' . $existing_data['foto']);
					}

					$upload_data = $this->upload->data();
					$data['foto'] = $upload_data['file_name'];
				} else {
					$this->session->set_flashdata('error', $this->upload->display_errors());
					redirect('admin/Users/add');
				}
			} else {
				// If no new photo is uploaded, keep the existing photo
				$data['foto'] = $existing_data['foto'];
			}

			$mdl->add($this->_table, $data);
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			redirect('admin/Users');
		}
	}

	public function edit($id = NULL)
	{
		if (!isset($id)) {
			$id = $this->input->post($this->idm);
		}
		if (!isset($id)) redirect('admin/Users');

		$mdl = $this->m_codeigniter;
		$user = $mdl->getById($this->_table, $this->idm, $id);

		if (!$user) {
			show_404();
		}

		$data = array(
			'judul' => 'Edit User',
			'user' => $user,
			'contents' => 'admin/v_user/edit'
		);

		$this->load->view('templates/index', $data);
	}

	public function update()
	{
		$mdl = $this->m_codeigniter;
		$validation = $this->form_validation;
		$post = $this->input->post();

		$validation->set_rules($this->rules());
		// die;
		$id = $post[$this->idm];
		if ($validation->run()) {
			$existing_data = $mdl->getById($this->_table, $this->idm, $id);

			$data = array(
				$this->idm => $post[$this->idm],
				'nama' => $post['nama'],
				'username_user' => $post['username_user'],
				'password_user' => $post['password_user'],
				'status' => $post['status']
			);

			// Check if a new photo is being uploaded
			if (!empty($_FILES['foto']['name'])) {
				$config['upload_path'] = './uploads/profile/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['max_size'] = 2048; // 2MB
				$config['encrypt_name'] = TRUE;

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('foto')) {
					// Delete old photo if exists
					if (file_exists('./uploads/profile/' . $existing_data['foto']) && !empty($existing_data['foto'])) {
						unlink('./uploads/profile/' . $existing_data['foto']);
					}

					$upload_data = $this->upload->data();
					$data['foto'] = $upload_data['file_name'];
				} else {
					$this->session->set_flashdata('error', $this->upload->display_errors());
					if ($post['page'] == 'profile') {
						redirect('admin/Users/profile/' . $id);
					} else {
						redirect('admin/Users/edit/' . $id);
					}
				}
			} else {
				// If no new photo is uploaded, keep the existing photo
				$data['foto'] = $existing_data['foto'];
			}

			$mdl->edit($this->_table, $this->idm, $data);
			$this->session->set_flashdata('success', 'Berhasil diupdate');

			// Determine redirection based on the profile data

		} else {
			$this->session->set_flashdata('error', 'Gagal memperbarui data');
			// redirect('admin/Users/edit/' . $id);
		}

		if ($post['page'] == 'profile') {
			redirect('admin/Users/profile/' . $id);
		} else {
			redirect('admin/Users/edit/' . $id);
		}
	}



	private function rules()
	{
		return array(
			array(
				'field' => 'nama',
				'label' => 'Nama',
				'rules' => 'required'
			),
			array(
				'field' => 'username_user',
				'label' => 'Username',
				'rules' => 'required'
			),
			array(
				'field' => 'password_user',
				'label' => 'Password',
				'rules' => 'required'
			)
		);
	}

	public function delete($id = NULL)
	{
		if (!isset($id)) show_404();

		$mdl = $this->m_codeigniter;
		$data_table = $mdl->getById($this->_table, $this->idm, $id);
		$video_path = './uploads/profile/' . $data_table['foto'];
		if ($mdl->delete($this->_table, $this->idm, $id)) {
			if (!empty($data_table['foto']) && file_exists($video_path)) {
				unlink($video_path);
			}
			$this->session->set_flashdata('success', 'Berhasil Dihapus');
		} else {
			$this->session->set_flashdata('error', 'Gagal menghapus data');
		}

		redirect('admin/Users');
	}
}

/* End of file Users.php */
