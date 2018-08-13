<?php if (!defined('BASEPATH')) 	exit('Hacking Attempt : Get Out of the system ..!');

class Banners_model extends CI_Model {

	public function index () {
		$this->db->select('*');
		$this->db->from('banners');
		$this->db->order_by('id', 'ASC');
		return $this->db->get()->result();		
	}
	
	public function get_by_id($id) {
		$query = $this->db->get_where('banners', array('id' => $id));
		return $query->row();
	}

	public function save($data) {
		$this->db->insert('banners', $data);

		if ($this->db->affected_rows() == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function update($data, $id) {
		$this->db->update('banners', $data, array('id' => $id));

		if ($this->db->affected_rows() == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function delete($id) {
		$this->db->delete('banners', array('id' => $id));

		if ($this->db->affected_rows() == 1)
			return TRUE;
		else
			return FALSE;
	}

}
