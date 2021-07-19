<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cabang extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->library('escapes');
		$this->load->model('Cabang_model', 'api');
	}

	public function select()
	{
		$query = $this->input->get('search');
		$result = $this->api->getBranchs($query);
		$this->escapes->throwFeed($result, 200);
	}

	public function name($id)
	{
		$result = $this->api->getNameBranch($id);
		$this->escapes->throwFeed($result, 200);
	}
}
