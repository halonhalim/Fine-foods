<?php if (!defined('BASEPATH')) 	exit('Hacking Attempt : Get Out of the system ..!');

class Gallery_model extends CI_Model {

	var $table = 'gallery';

	public function get_all($album_id) {
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where('album_id', $album_id);
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function save($data) {
		$this->db->insert($this->table, $data);

		if ($this->db->affected_rows() == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function delete($id) {
		$this->db->delete($this->table, array('md5(id)' => $id));

		if ($this->db->affected_rows() == 1)
			return TRUE;
		else
			return FALSE;
	}

}
