<?php if ( ! defined('BASEPATH')) exit('Acceso Directo no Permitido');
class Descargar extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('form'));
		$this->load->model(array('descargar_model'));
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible fade in"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>','</div>');
		$this->load->helper(array('url'));
		$this->load->library(array('session'));
		$this->load->helper(array('imacom'));
		$this->load->helper('imacom');
	}

	public function excel()
	{
		$this->load->view('descargar/excel');
		
	}
}