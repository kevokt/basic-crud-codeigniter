<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_welcome', 'model');
		$this->load->helper(['url', 'form']);
		$this->load->library(['session', 'form_validation']);
	}

	public function index($id = FALSE)
	{
		if ($id === FALSE) {
			$data['home_post'] = $this->model->read();
			$this->load->view('header');
			$this->load->view('home', $data);
			$this->load->view('footer');
		} else {
			$data['post'] = $this->model->read($id);
			$this->load->view('header');
			$this->load->view('post', $data);
			$this->load->view('footer');
		}
	}

	public function create()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('header');
			$this->load->view('create');
			$this->load->view('footer');
		} else {
			$id = uniqid('item_', true);

			$config['upload_path'] = './upload/post';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '1000000';
			$config['file_ext_tolower'] = TRUE;
			$config['file_name'] = str_replace('.', '_', $id);

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('image1')) {
				$this->session->set_flashdata('error', strip_tags($this->upload->display_errors()));
				redirect('welcome/create');
			} else {
				$filename = $this->upload->data('file_name');
				$this->model->create($id, $filename);
				$this->session->set_flashdata('success', 'Data berhasil dibuat!');
				redirect('welcome');
			}
		}
	}

	public function update($id)
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['post'] = $this->model->read($id);
			$this->load->view('header');
			$this->load->view('update', $data);
			$this->load->view('footer');
		} else {
			if (!empty($_FILES['image1']['name'])) {
				$post = $this->model->read($id);

				$config['upload_path'] = './upload/post';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = '1000000';
				$config['file_ext_tolower'] = TRUE;
				$config['overwrite'] = TRUE;
				$config['file_name'] = $post->filename;

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('image1')) {
					$this->session->set_flashdata('error', strip_tags($this->upload->display_errors()));
					redirect('welcome/update/' . $id);
				}
			}

			$this->model->update($id);
			$this->session->set_flashdata('success', 'Data berhasil diperbarui!');
			redirect('welcome');
		}
	}

	public function delete($id = FALSE)
	{
		$post = $this->model->read($id);
		if ($post) {
			$this->model->delete($id);
			@unlink('./upload/post/' . $post->filename);
			$this->session->set_flashdata('success', 'Data berhasil dihapus!');
		} else {
			$this->session->set_flashdata('error', 'Data tidak ditemukan.');
		}

		redirect('welcome');
	}

	public function deleteAll()
	{
		$this->model->deleteAll();

		$directory = './upload/post/';
		$files = glob($directory . '*');

		foreach ($files as $file) {
			if (is_file($file)) {
				unlink($file);
			}
		}

		$this->session->set_flashdata('success', 'Semua data berhasil dihapus!');
		redirect('welcome');
	}
}