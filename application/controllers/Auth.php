<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		// ini ga perlu kecuali website punya banyak bahasa lain selain indonesia
		$this->lang->load('auth', 'indonesian'); 
	}

	public function index()
	{
		$data = array (
			'title' => $this->lang->line('title') // bisa dirubah langsung string
		);
		$this->load->view('auth', $data);
	}

	public function signin()
	{
		try {
			$this->load->model('auth_model');

			$result = $this->auth_model->do_signin();

			if (isset($result)) {

				$session = array (
					'status' => true,
					'id' => (int)$result->uid,
					'name' => $result->ukode,
					'tipe' => (int)$result->utipe,
					'cabang_id' => (int)$result->ucabang,
				);

				$this->session->set_userdata($session);
				redirect('home', 'refresh');

			} else {

				// memberikan pesan error ketika salah password (bisa langsung di gunakan string)
				$this->session->set_tempdata('warning', $this->lang->line('wrong_username'), 0);
				redirect('auth', 'refresh');
			}

		} catch (Exception $e) {
			var_dump($e);
		}
	}

	public function signout()
	{
		$this->session->sess_destroy();
		$this->session->set_tempdata('warning', $this->lang->line('done_system'), 0);
		redirect('auth', 'refresh');
	}
}