<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Form extends CI_Controller
{
	private $css;
	private $js;

	public function __construct()
	{
		parent::__construct();
		$this->load->library('escapes');

		// ini ga perlu kecuali website punya banyak bahasa lain selain indonesia
		$this->lang->load('form', 'indonesian');

		$this->css = array (
			base_url('assets/plugins/fontawesome-free/css/all.min.css'),
			base_url('assets/plugins/pace-progress/themes/blue/pace-theme-flat-top.css'),
			base_url('assets/plugins/daterangepicker/daterangepicker.css'),
			base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'),
			base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'),
			base_url('assets/plugins/select2/css/select2.min.css'),
			base_url('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css'),
			'https://cdn.jsdelivr.net/npm/@sweetalert2/theme-bootstrap-4@5.0.1/bootstrap-4.min.css',
			base_url('assets/dist/css/adminlte.min.css')
		);

		$this->js = array (
			base_url('assets/plugins/jquery/jquery.min.js'),
			base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js'),
			base_url('assets/plugins/select2/js/select2.full.min.js'),
			base_url('assets/plugins/moment/moment.min.js'),
			base_url('assets/plugins/daterangepicker/daterangepicker.js'),
			base_url('assets/plugins/datatables/jquery.dataTables.min.js'),
			base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'),
			base_url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js'),
			base_url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'),
			base_url('assets/plugins/pace-progress/pace.min.js'),
			'//cdn.jsdelivr.net/npm/sweetalert2@11',
			base_url('assets/dist/js/adminlte.min.js')
		);

		// Cek, apakah user sudah login atau belum
		if(!$this->session->userdata('status')) {
			$this->session->set_tempdata('warning', $this->lang->line('msg_belum_login'), 0);
			redirect('auth', 'refresh');
		}
	}

	public function satu()
	{
		$data = array (
			'title' => $this->lang->line('title'), // bisa dirubah langsung string
			'css' => $this->css,
			'js' => $this->js,
			'app' => base_url('assets/js/form_satu.js')
		);

		$this->load->view('admin_header', $data);
		$this->load->view('form', $data);
		$this->load->view('admin_footer', $data);
	}

	public function cariFormSkuy()
	{
		$this->load->model('auth_model');
		$result = $this->auth_model->cariDataSkuy();

		if (!is_null($result)) {
			echo json_encode(array(
				'Status'  => true,
				'data'    => $result,
				'Message' => 'Berhasil Mengambil Data',
			));
		} else {
			echo json_encode(array(
				'Status'  => false,
				'data'    => 'null',
				'Message' => 'Kesalahan Mengambil Data',
			));
		}
	}
}