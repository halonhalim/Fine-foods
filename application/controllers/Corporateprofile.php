
<?php if (!defined('BASEPATH')) 	exit('Hacking Attempt: Get out of the system ..!');

class Corporateprofile extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		if ($this->session->userdata('isLogin') == FALSE) { // Check user session
			goodbye(); // It's active when hacking attempt.
		}
		checkAccess(); // Check User Access Permission
	}

	public function index() {
		$data['breadcrumb'] = "Corporate Profile ";
		$data['results'] = $this->corporateprofile_model->index();

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/corporateprofile/index');
		$this->load->view('admin/templates/footer');
	}

	public function add() {
		$data['breadcrumb'] = "Corporate Profile";

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/corporateprofile/add');
		$this->load->view('admin/templates/footer');
	}
	
	public function save() {
		// field name, error message, validation rules
		$this->form_validation->set_rules('category', 'category', 'trim|required|xss_clean');
		$this->form_validation->set_rules('name', 'name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('designation', 'designation', 'trim|required');

		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_tempdata("msg", "<span class='error'>" . exception() . "</span>", 5);
		} else {
			
			$data = array(
				
				'slug' => slug($this->input->post('category')),
				'category' => $this->input->post('category'),
				'name' => $this->input->post('name'),
                                'designation' => $this->input->post('designation')
				
			);

			if ($this->corporateprofile_model->save($data)) {
				$this->form_validation->resetForm();
				$this->session->set_tempdata("msg", "<span class='success'>" . saved_success() . "</span>", 5);
			} else {
				$this->session->set_tempdata("msg", "<span class='error'>" . exception() . "</span>", 5);
			}
		}
		$this->add();
	}

	public function edit($id) {
		$data['breadcrumb'] = "Corporate Profile";
		$data['edit'] = $this->corporateprofile_model->get_by_id($id);

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/corporateprofile/edit');
		$this->load->view('admin/templates/footer');
	}

	public function update() {
		$id = $this->input->post('id');
		// field name, error message, validation rules
		$this->form_validation->set_rules('category', 'category', 'trim|required|xss_clean');
		$this->form_validation->set_rules('name', 'name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('designation', 'designation', 'trim|required');

		$this->form_validation->set_error_delimiters('<span class="red">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_tempdata("msg", "<span class='error'>" . exception() . "</span>", 5);
			$this->edit();
		} else {
			
			$data = array(
				
				'slug' => slug($this->input->post('category')),
				'category' => $this->input->post('category'),
                                'name' => $this->input->post('name'),
				'designation' => $this->input->post('designation'),
				
			);

			if ($this->corporateprofile_model->update($data, $id)) {
				$this->form_validation->resetForm();
				$this->session->set_tempdata("msg", "<span class='success'>" . updated_success() . "</span>", 5);
			} else {
				$this->session->set_tempdata("msg", "<span class='error'>" . exception() . "</span>", 5);
			}
			redirect('corporateprofile');
		}
	}

	public function delete($id, $file_name=NULL) {
		if ($this->corporateprofile_model->delete($id) == FALSE) {
			$this->session->set_tempdata("msg", "<span class='error'>" . exception() . "</span>", 5);
		} else {
			$this->master_model->delete_file('corporateprofile', $file_name);
			$this->session->set_tempdata("msg", "<span class='success'>" . deleted_success() . "</span>", 5);
		}		
		redirect('corporateprofile');
	}
}
