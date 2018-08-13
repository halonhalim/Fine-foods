<?php if (!defined('BASEPATH')) 	exit('Hacking Attempt: Get out of the system ..!');

class News extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		if ($this->session->userdata('isLogin') == FALSE) { // Check user session
			goodbye(); // It's active when hacking attempt.
		}
		checkAccess(); // Check User Access Permission
	}

	public function index() {
		$data['breadcrumb'] = "News";
		$data['results'] = $this->news_model->index();

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/news/index');
		$this->load->view('admin/templates/footer');
	}

	public function add() {
		$data['breadcrumb'] = "News";

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/news/add');
		$this->load->view('admin/templates/footer');
	}

	public function save() {
		// field name, error message, validation rules
		$this->form_validation->set_rules('title', 'title', 'trim|required|xss_clean');
		$this->form_validation->set_rules('published_date', 'date', 'trim|required|xss_clean');
		$this->form_validation->set_rules('details', 'details', 'trim|required');

		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_tempdata("msg", "<span class='error'>" . exception() . "</span>", 5);
		} else {
			$this->master_model->do_upload('news', time()); // Call file upload function

			if ($this->master_model->upload->do_upload('userfile')) {
				$file_name = $this->upload->data('file_name');
			} else {
				$file_name = '';
			}

			$data = array(
				'published_date' => date('Y-m-d', strtotime($this->input->post('published_date'))),
				'slug' => slug($this->input->post('title')),
				'title' => $this->input->post('title'),
				'details' => $this->input->post('details'),
				'file_name' => $file_name
			);

			if ($this->news_model->save($data)) {
				$this->form_validation->resetForm();
				$this->session->set_tempdata("msg", "<span class='success'>" . saved_success() . "</span>", 5);
			} else {
				$this->session->set_tempdata("msg", "<span class='error'>" . exception() . "</span>", 5);
			}
		}
		$this->add();
	}

	public function edit($id) {
		$data['breadcrumb'] = "News";
		$data['edit'] = $this->news_model->get_by_id($id);

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/news/edit');
		$this->load->view('admin/templates/footer');
	}

	public function update() {
		$id = $this->input->post('id');
		// field name, error message, validation rules
		$this->form_validation->set_rules('title', 'title', 'trim|required|xss_clean');
		$this->form_validation->set_rules('published_date', 'date', 'trim|required|xss_clean');
		$this->form_validation->set_rules('details', 'details', 'trim|required');

		$this->form_validation->set_error_delimiters('<span class="red">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_tempdata("msg", "<span class='error'>" . exception() . "</span>", 5);
			$this->edit();
		} else {
			$this->master_model->do_upload('news', time()); // Call file upload function

			if ($this->master_model->upload->do_upload('userfile')) {
				$file_name = $this->upload->data('file_name');
				$this->master_model->delete_file('news', $this->input->post('old_file'));
			} else {
				$file_name = $this->input->post('old_file');
			}

			$data = array(
				'published_date' => date('Y-m-d', strtotime($this->input->post('published_date'))),
				'slug' => slug($this->input->post('title')),
				'title' => $this->input->post('title'),
				'details' => $this->input->post('details'),
				'file_name' => $file_name
			);

			if ($this->news_model->update($data, $id)) {
				$this->form_validation->resetForm();
				$this->session->set_tempdata("msg", "<span class='success'>" . updated_success() . "</span>", 5);
			} else {
				$this->session->set_tempdata("msg", "<span class='error'>" . exception() . "</span>", 5);
			}
			redirect('news');
		}
	}

	public function delete($id, $file_name=NULL) {
		if ($this->news_model->delete($id) == FALSE) {
			$this->session->set_tempdata("msg", "<span class='error'>" . exception() . "</span>", 5);
		} else {
			$this->master_model->delete_file('news', $file_name);
			$this->session->set_tempdata("msg", "<span class='success'>" . deleted_success() . "</span>", 5);
		}
		redirect('news');
	}

}
