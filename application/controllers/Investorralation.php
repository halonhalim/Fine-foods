
<?php if (!defined('BASEPATH')) 	exit('Hacking Attempt: Get out of the system ..!');

class Investorralation extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		if ($this->session->userdata('isLogin') == FALSE) { // Check user session
			goodbye(); // It's active when hacking attempt.
		}
		checkAccess(); // Check User Access Permission
	}

	public function index() {
		$data['breadcrumb'] = "Investor Ralation";
		$data['results'] = $this->investorralation_model->index();

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/investorralation/index');
		$this->load->view('admin/templates/footer');
	}

	public function add() {
		$data['breadcrumb'] = "Investor Ralation";

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/investorralation/add');
		$this->load->view('admin/templates/footer');
	}
	
	public function save() {
		// field name, error message, validation rules
		$this->form_validation->set_rules('year', 'year', 'trim|required|xss_clean');
		$this->form_validation->set_rules('authorizedcapital', 'authorizedcapital', 'trim|required');
                $this->form_validation->set_rules('paidupcapital', 'paidupcapital', 'trim|required');

		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_tempdata("msg", "<span class='error'>" . exception() . "</span>", 5);
		} else {
			$data = array(
				
				'year' => $this->input->post('year'),
				'authorizedcapital' => $this->input->post('authorizedcapital'),
                                'paidupcapital' => $this->input->post('paidupcapital')
			);

			if ($this->investorralation_model->save($data)) {
				$this->form_validation->resetForm();
				$this->session->set_tempdata("msg", "<span class='success'>" . saved_success() . "</span>", 5);
			} else {
				$this->session->set_tempdata("msg", "<span class='error'>" . exception() . "</span>", 5);
			}
		}
		$this->add();
	}

	public function edit($id=NULL) {
		$data['breadcrumb'] = "Investor Ralation";
		$data['edit'] = $this->investorralation_model->get_by_id($id);

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/investorralation/edit');
		$this->load->view('admin/templates/footer');
	}

	public function update() {
		$id = $this->input->post('id');
		// field name, error message, validation rules
		$this->form_validation->set_rules('year', 'year', 'trim|required|xss_clean');
		$this->form_validation->set_rules('authorizedcapital', 'authorizedcapital', 'trim|required');
                $this->form_validation->set_rules('paidupcapital', 'paidupcapital', 'trim|required');

		$this->form_validation->set_error_delimiters('<span class="red">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_tempdata("msg", "<span class='error'>" . exception() . "</span>", 5);
			$this->edit($id);
		} else {
			$data = array(
				//'slug' => slug($this->input->post('title')), 
				'year' => $this->input->post('year'),
				'authorizedcapital' => $this->input->post('authorizedcapital'),
                                'paidupcapital' => $this->input->post('paidupcapital')
			);

			if ($this->investorralation_model->update($data, $id)) {
				$this->form_validation->resetForm();
				$this->session->set_tempdata("msg", "<span class='success'>" . updated_success() . "</span>", 5);
			} else {
				$this->session->set_tempdata("msg", "<span class='error'>" . exception() . "</span>", 5);
			}
			redirect('investorralation');
		}
	}

	public function delete($id=NULL) {
		if ($this->investorralation_model->delete($id) == FALSE) {
			$this->session->set_tempdata("msg", "<span class='error'>" . exception() . "</span>", 5);
		} else {
			$this->session->set_tempdata("msg", "<span class='success'>" . deleted_success() . "</span>", 5);
		}
		redirect('investorralation');
	}

}
