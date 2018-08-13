<?php if (!defined('BASEPATH')) 	exit('Hacking Attempt : Get Out of the system ..!');

class Article_model extends CI_Model {

	public function index () {
		$this->db->select('*');
		$this->db->from('article');
		$this->db->order_by('id', 'ASC');
		return $this->db->get()->result();		
	}
	
	public function get_by_id($id) {
		$query = $this->db->get_where('article', array('id' => $id));
		return $query->row();
	}

	public function save($data) {
		$this->db->insert('article', $data);

		if ($this->db->affected_rows() == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function update($data, $id) {
		$this->db->update('article', $data, array('id' => $id));

		if ($this->db->affected_rows() == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function delete($id) {
		$this->db->delete('article', array('id' => $id));

		if ($this->db->affected_rows() == 1)
			return TRUE;
		else
			return FALSE;
	}
        
        
        public function latest_about() {
		$this->db->select('*');  
		$this->db->from('article');
		$this->db->order_by('id', 'DESC');
		$this->db->limit(1);
		return $this->db->get()->result();
	}
}
