<?php if (!defined('BASEPATH')) 	exit('Hacking Attempt: Get out of the system ..!');

class Halfyearly  extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		if ($this->session->userdata('isLogin') == FALSE) { // Check user session
			goodbye(); // It's active when hacking attempt.
		}
		checkAccess(); // Check User Access Permission
	}

	public function index() {
		$data['breadcrumb'] = "Half Yearly ";
		$data['results'] = $this->halfyearly_model->index();

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/halfyearly/index');
		$this->load->view('admin/templates/footer');
	}

	public function add() {
		$data['breadcrumb'] = "Half Yearly";

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/halfyearly/add');
		$this->load->view('admin/templates/footer');
	}
	
	public function save() {
		// field name, error message, validation rules
		
		$this->form_validation->set_rules('tittle', 'tittle', 'trim|xss_clean');
		

		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_tempdata("msg", "<span class='error'>" . exception() . "</span>", 5);
		} else {
			

			$this->master_model->do_upload('halfyearly', time()); // Call file upload function

			if ($this->master_model->upload->do_upload('userfile')) {
				$file_name = $this->upload->data('file_name');
				$this->master_model->img_resize('halfyearly', $file_name, 2210, 3017); // Resize image after upload
			} else {
				$file_name = '';
			}

			$data = array(
				
				
				'tittle' => $this->input->post('tittle'),
				'file_name' => $file_name
			);

			if ($this->halfyearly_model->save($data)) {
				$this->form_validation->resetForm();
				$this->session->set_tempdata("msg", "<span class='success'>" . uploaded_success() . "</span>", 5);
			} else {
				$this->session->set_tempdata("msg", "<span class='error'>" . exception() . "</span>", 5);
			}
		}
		$this->add();
	}

	public function edit($id) {
		$data['breadcrumb'] = "Half Yearly";
		$data['edit'] = $this->halfyearly_model->get_by_id($id);

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/halfyearly/edit');
		$this->load->view('admin/templates/footer');
	}

	public function update() {
		$id = $this->input->post('id');
		// field name, error message, validation rules
		
		$this->form_validation->set_rules('tittle', 'stittle', 'trim|xss_clean');

		$this->form_validation->set_error_delimiters('<span class="red">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_tempdata("msg", "<span class='error'>" . exception() . "</span>", 5);
			$this->edit($id);
		} else {
			

			$this->master_model->do_upload('halfyearly', time()); // Call file upload function

			if ($this->master_model->upload->do_upload('userfile')) {
				$file_name = $this->upload->data('file_name');
				$this->master_model->img_resize('halfyearly', $file_name, 2210, 3017); // Resize image after upload				
				$this->master_model->delete_file('halfyearly', $this->input->post('old_file'));
			} else {
				$file_name = $this->input->post('old_file');
			}

			$data = array(
				
				'tittle' => $this->input->post('tittle'),
				'file_name' => $file_name
			);

			if ($this->halfyearly_model->update($data, $id)) {
				$this->form_validation->resetForm();
				$this->session->set_tempdata("msg", "<span class='success'>" . updated_success() . "</span>", 5);
			} else {
				$this->session->set_tempdata("msg", "<span class='error'>" . exception() . "</span>", 5);
			}
			redirect('halfyearly');
		}
	}

	public function delete($id, $file_name=NULL) {
		if ($this->halfyearly_model->delete($id) == FALSE) {
			$this->session->set_tempdata("msg", "<span class='error'>" . exception() . "</span>", 5);
		} else {
			$this->master_model->delete_file('halfyearly', $file_name);
			$this->session->set_tempdata("msg", "<span class='success'>" . deleted_success() . "</span>", 5);
		}		
		redirect('halfyearly');
	}
}
