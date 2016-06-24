<?php if ( ! defined('BASEPATH')) exit('Acceso Directo no Permitido');

class Inicio extends CI_Controller {

	public function index()
	{
		$this->_view();
	}
	
	private function _view($view = 'inicio', $data = NULL, $layout = TRUE)
	{
		$data['mensaje'] = $this->session->flashdata('mensaje');
		$data['mensaje_clase'] = $this->session->flashdata('mensaje_clase');
		if ( $layout)
		{
			$this->load->view('header');
			$this->load->view('inicio/bienvenido', $data);
			$this->load->view('footer');
		}
		else
		{
			$this->load->view($view, $data);
		}		
	}
}