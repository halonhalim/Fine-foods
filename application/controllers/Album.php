<?php if (!defined('BASEPATH')) 	exit('Hacking Attempt: Get out of the system ..!');

class Album extends CI_Controller {

	var $dir = 'admin/album/';
	var $file_path = 'gallery';
	var $breadcrumb = 'Gallery';

	public function __construct() {
		parent:: __construct();
		if ($this->session->userdata('isLogin') == FALSE) { // Check user session
			goodbye(); // It's active when hacking attempt.
		}
		checkAccess(); // Check User Access Permission
	}
	
	public function get_all($category = NULL) {
		$data['breadcrumb'] = $this->breadcrumb;
		$data['results'] = $this->album_model->get_all($category);

		$this->load->view('admin/templates/header', $data);
		$this->load->view($this->dir . 'view');
		$this->load->view('admin/templates/footer');
	}
	
	public function add() {
		$data['breadcrumb'] = $this->breadcrumb;

		$this->load->view('admin/templates/header', $data);
		$this->load->view($this->dir . 'add');
		$this->load->view('admin/templates/footer');
	}
	
	public function save() {
		// field name, error message, validation rules
		$this->form_validation->set_rules('album_name', 'album name', 'trim|required|xss_clean');

		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_tempdata("msg", "<span class='error'>" . exception() . "</span>", 5);
		} else {
			$makeId = make_id('tbl_album', 'id', 'ALB');
			$this->master_model->do_upload($this->file_path, $makeId); // Call file upload function

			if ($this->master_model->upload->do_upload('userfile')) {
				$album_cover = $this->upload->data('file_name');
				//$this->master_model->img_resize($this->file_path, $album_cover, 1024, 768); // Resize image after upload
			} else {
				$album_cover = '';
			}

			$data = array(
				'id' => $makeId,
				'category' => $this->input->post('category'),
				'album_name' => $this->input->post('album_name'),
				'album_cover' => $album_cover
			);

			if ($this->album_model->save($data)) {
				$this->form_validation->resetForm();
				$this->session->set_tempdata("msg", "<span class='success'>" . saved_success() . "</span>", 5);
			} else {
				$this->session->set_tempdata("msg", "<span class='error'>" . exception() . "</span>", 5);
			}
		}
		$this->add();
	}
	
	public function edit($id) {
		$data['breadcrumb'] = $this->breadcrumb;
		$data['edit'] = $this->album_model->get_by_id($id);

		$this->load->view('admin/templates/header', $data);
		$this->load->view($this->dir . 'edit');
		$this->load->view('admin/templates/footer');
	}
	
	public function update($id, $category = NULL) {
		// field name, error message, validation rules
		$this->form_validation->set_rules('album_name', 'album name', 'trim|required|xss_clean');

		$this->form_validation->set_error_delimiters('<span class="red">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_tempdata("msg", "<span class='error'>" . exception() . "</span>", 5);
			$this->edit($id);
		} else {
			$this->master_model->do_upload($this->file_path, $this->input->post('id')); // Call file upload function

			if ($this->master_model->upload->do_upload('userfile')) {
				$album_cover = $this->upload->data('file_name');
				$this->master_model->img_resize($this->file_path, $album_cover, 1024, 768); // Resize image after upload
				// Delete file from directory
				$this->master_model->delete_file($this->file_path, $this->input->post('old_file'));
			} else {
				$album_cover = $this->input->post('old_file');
			}

			$data = array(
				'album_name' => $this->input->post('album_name'),
				'album_cover' => $album_cover
			);

			if ($this->album_model->update($data, $id)) {
				$this->form_validation->resetForm();
				$this->session->set_tempdata("msg", "<span class='success'>" . updated_success() . "</span>", 5);
			} else {
				$this->session->set_tempdata("msg", "<span class='error'>" . exception() . "</span>", 5);
			}
			redirect('album/get_all/' . $category);
		}
	}
	
	public function delete($id, $category = NULL, $file_name = NULL) {
		$roles = $this->session->userdata('roles');

		if ($roles == 'SuperAdmin' || $roles == 'Admin') {
			if ($this->album_model->delete($id) == FALSE) {
				$this->session->set_tempdata("msg", "<span class='error'>" . exception() . "</span>", 5);
			} else {
				// Delete file from directory
				$this->master_model->delete_file($this->file_path, $file_name);

				// Delete gallery image
				$query = $this->db->query("SELECT * FROM tbl_gallery WHERE md5(album_id)='" . $id . "' ");
				foreach ($query->result() as $row) {
					$this->db->query("DELETE FROM tbl_gallery WHERE id='" . $row->id . "' ");
					$this->master_model->delete_file($this->file_path, $row->file_name);
				}
				$this->session->set_tempdata("msg", "<span class='success'>" . deleted_success() . "</span>", 5);
			}
		} else {
			$this->session->set_tempdata("msg", "<span class='error'>" . unauthorized() . "</span>", 5);
		}
		redirect('album/get_all/' . $category);
	}

}
