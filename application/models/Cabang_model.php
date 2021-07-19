<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Cabang_model extends CI_Model 
{

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getBranchs($query)
	{
		$this->db->select('GID AS id, GNAMA AS text');
		$this->db->group_start();
		$this->db->like('GNAMA', $query);
		$this->db->group_end();
		$this->db->from('bgudang');
		$this->db->limit(7);
		$result = $this->db->get()->result();

		$result_array = array();
		foreach ($result as $row)
		{
			$result_array[] = array('id' => $row->id, 'text' => $row->text);
		}
		return $result_array;
	}

	public function getNameBranch($id)
	{
		$result = $this->db->select('GNAMA')->from('bgudang')->where('GID', $id)->get()->row()->GNAMA;
		return $result;
	}
}