<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
	private $css;
	private $js;

	public function __construct()
	{
		parent::__construct();
		$this->lang->load('home', 'indonesian');

		$this->css = array (
			base_url('assets/plugins/fontawesome-free/css/all.min.css'),
			base_url('assets/plugins/pace-progress/themes/blue/pace-theme-flat-top.css'),
			base_url('assets/dist/css/adminlte.min.css')
		);

		$this->js = array (
			base_url('assets/plugins/jquery/jquery.min.js'),
			base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js'),
			base_url('assets/plugins/pace-progress/pace.min.js'),
			base_url('assets/dist/js/adminlte.min.js'),
			base_url('assets/dist/js/demo.js')
		);

		if(!$this->session->userdata('status')) {
			$this->session->set_tempdata('warning', $this->lang->line('msg_belum_login'), 0);
			redirect('auth', 'refresh');
		}
	}

	public function index()
	{
		$data = array (
			'title' => $this->lang->line('title'),
			'css' => $this->css,
			'js' => $this->js,
			'app' => null
		);

		$this->load->view('admin_header', $data);
		$this->load->view('home', $data);
		$this->load->view('admin_footer', $data);
	}
}