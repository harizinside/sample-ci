<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model
{
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function do_signin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->db->select('uid, ukode, ucabang, utipe');
		$this->db->from('auserweb');
		$this->db->where('unama', $username);
		$this->db->where('upassword', md5($password));
		return $this->db->get()->row();
	}

	public function cariDataSkuy()
	{
		$this->db->select('ukode, utipe, GKODE, ucreated, umodifd');
		$this->db->from('auserweb');
		$this->db->join('bgudang', 'ucabang=GID', 'left');

		if ($this->input->get('cabang')) {
			$this->db->where('GID', $this->input->get('cabang'));
		}

		if ($this->input->get('startdates')) {
			$this->db->where('order_date >=', $this->input->get('startdates'));
			$this->db->where('order_date <=', $this->input->get('enddates'));
		}

		$rows = $this->db->get('bkontak')->result_array();
		
		$i = 0; foreach ($rows as $row) 
		{
			$rows[$i]['no'] = $i;
			$i++;
		}

		return $rows;
	}
}