<?php if (!defined('BASEPATH')) 	exit('Hacking Attempt : Get Out of the system ..!');

class Album_model extends CI_Model {

	var $table = 'album';

	public function get_all($category) {
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where('category', $category);
		$this->db->order_by('id', 'ASC');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function get_by_id($id) {
		$query = $this->db->get_where($this->table, array('md5(id)' => $id));
		return $query->row();
	}
	
	public function save($data) {
		$this->db->insert($this->table, $data);

		if ($this->db->affected_rows() == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function update($data, $id) {
		$this->db->update($this->table, $data, array('md5(id)' => $id));

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
