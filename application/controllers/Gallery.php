<?php if (!defined('BASEPATH')) 	exit('Hacking Attempt: Get out of the system ..!');

class Gallery extends CI_Controller {

	var $dir = 'admin/gallery/';
	var $file_path = 'gallery';
	var $breadcrumb = 'Gallery';

	public function __construct() {
		parent:: __construct();
		if ($this->session->userdata('isLogin') == FALSE) { // Check user session
			goodbye(); // It's active when hacking attempt.
		}
		checkAccess(); // Check User Access Permission
	}

	public function add($album_id, $category) {
		$data['breadcrumb'] = $this->breadcrumb;
		$data['results'] = $this->gallery_model->get_all($album_id);

		$this->load->view('admin/templates/header', $data);
		if ($category == 'Photo') {
			$this->load->view($this->dir . 'photo');
		} else {
			$this->load->view($this->dir . 'video');
		}
		$this->load->view('admin/templates/footer');
	}

	public function save_photo($album_id, $category) {
		$this->master_model->do_upload_multi($this->file_path, date('YmdHis')); // Call file upload function
		if ($this->upload->do_upload('userfiles')) {
			if (sizeof($this->upload->data('file_name')) > 1) {
				foreach ($this->upload->data('file_name') as $key => $value) {
					$data = array(
						'id' => make_id('tbl_gallery', 'id', 'GLR'),
						'album_id' => $album_id,
						'title' => $this->input->post('title'),
						'file_name' => $value['file_name']
					);
					$this->gallery_model->save($data);
				}
			} else {
				$data = array(
					'id' => make_id('tbl_gallery', 'id', 'GLR'),
					'album_id' => $album_id,
					'title' => $this->input->post('title'),
					'file_name' => $this->upload->data('file_name')
				);
				$this->gallery_model->save($data);
			}
			$this->form_validation->resetForm();
			$this->session->set_tempdata("msg", "<span class='success'>" . uploaded_success() . "</span>", 5);
		} else {
			$this->session->set_tempdata("msg", "<span class='error'>" . exception() . "</span>", 5);
		}
		redirect('gallery/add/' . $album_id . '/' . $category);
	}

	public function save_video($album_id, $category) {
		$data = array(
			'id' => make_id('tbl_gallery', 'id', 'GLR'),
			'album_id' => $album_id,
			'title' => $this->input->post('title'),
			'file_name' => youtube_video($this->input->post('youtube_link'))
		);

		if ($this->gallery_model->save($data)) {
			$this->form_validation->resetForm();
			$this->session->set_tempdata("msg", "<span class='success'>" . saved_success() . "</span>", 5);
		} else {
			$this->session->set_tempdata("msg", "<span class='error'>" . exception() . "</span>", 5);
		}
		redirect('gallery/add/' . $album_id . '/' . $category);
	}

	public function delete($album_id, $category, $id, $file_name = NULL) {
		$roles = $this->session->userdata('roles');

		if ($roles == 'SuperAdmin' || $roles == 'Admin') {
			if ($this->gallery_model->delete($id) == FALSE) {
				$this->session->set_tempdata("msg", "<span class='error'>" . exception() . "</span>", 5);
			} else {
				// Delete file from directory
				$this->master_model->delete_file($this->file_path, $file_name);
				$this->session->set_tempdata("msg", "<span class='success'>" . deleted_success() . "</span>", 5);
			}
		} else {
			$this->session->set_tempdata("msg", "<span class='error'>" . exception() . "</span>", 5);
		}
		redirect('gallery/add/' . $album_id . '/' . $category);
	}

}
