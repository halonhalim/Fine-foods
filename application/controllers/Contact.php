<?php if (!defined('BASEPATH')) 	exit('Hacking Attempt: Get out of the system ..!');

class Contact extends CI_Controller {

	var $dir = 'admin/contact/';
	var $breadcrumb = 'Contact';

	public function __construct() {
		parent:: __construct();
		if ($this->session->userdata('isLogin') == FALSE) { // Check user session
			goodbye(); // It's active when hacking attempt.
		}
		checkAccess(); // Check User Access Permission
	}

	public function index() {
		$data['breadcrumb'] = $this->breadcrumb;
		$data['edit'] = $this->contact_model->index();

		$this->load->view('admin/templates/header', $data);
		$this->load->view($this->dir . 'information');
		$this->load->view('admin/templates/footer');
	}

	public function save($id = NULL) {
		$this->master_model->do_upload('', 'logo'); // Call file upload function

		if ($this->master_model->upload->do_upload('userfile')) {
			$file_name = $this->upload->data('file_name');
			$this->master_model->img_resize('', $file_name, 450, 84); // Resize image after upload	
			$this->master_model->delete_file('', $this->input->post('old_logo')); // Delete file from directory
		} else {
			$file_name = $this->input->post('old_logo');
		}

		$data = array(
			'company_name' => $this->input->post('company_name'),
			'mobile_no' => $this->input->post('mobile_no'),
			'phone_no' => $this->input->post('phone_no'),
			'email' => $this->input->post('email'),
                        'village' => $this->input->post('village'),
                        'union' => $this->input->post('union'),
                        'post_office' => $this->input->post('post_office'),
                        'post' => $this->input->post('post'),
                        'distict' => $this->input->post('distict'),
                        'r_mobile' => $this->input->post('r_mobile'),
			'm_address' => $this->input->post('m_address'),
                        'f_address' => $this->input->post('f_address'),
                        'hotline' => $this->input->post('hotline'),
                        'tell' => $this->input->post('tell'),
                        'fax' => $this->input->post('fax'),
			'facebook' => $this->input->post('facebook'),
			'twitter' => $this->input->post('twitter'),
			'googleplus' => $this->input->post('googleplus'),
			
			'google_map' => $this->input->post('google_map'),
			'logo' => $file_name
		);
		if ($this->contact_model->save($data, $id)) {
			$this->session->set_tempdata("msg", "<span class='success'>" . saved_success() . "</span>", 5);
		} else {
			$this->session->set_tempdata("msg", "<span class='error'>" . exception() . "</span>", 5);
		}
		redirect('contact');
	}

}
