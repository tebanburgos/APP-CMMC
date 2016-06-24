<?php if ( ! defined('BASEPATH')) exit('Acceso Directo no Permitido');
class Registro extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('form'));
		$this->load->model(array('registro_model'));
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible fade in"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>','</div>');
		$this->load->helper(array('url'));
		$this->load->library(array('session'));
		$this->load->helper(array('imacom'));
		$this->load->helper('imacom');
	}

	public function borrar()
	{
		$this->load->view('header');
		$this->load->view('registro/borrar');
		$this->load->view('footer');
	}
	
	public function eliminar()
	{
	//	if ( $this->input->is_ajax_request())
	//	{
			if ( ! $this->registro_model->eliminar())
			{
				$this->session->set_flashdata('mensaje', 'Todos los registros se eliminaron exitosamente. La base de datos ahora está más liviana y procerará mejor nuevos datos. <br> Asegúrese de hacer este tipo de mantención regularmente.');
				$this->session->set_flashdata('mensaje_clase', 'alert alert-success');
				redirect('registro/borrar');
			//	echo json_encode(array('success' => true));
			}
			else
			{
				$this->session->set_flashdata('mensaje', 'Ocurrió un error al eliminar los datos. <br> Por favor, inténtelo nuevamente.');
				$this->session->set_flashdata('mensaje_clase', 'alert alert-danger');
				redirect('registro/borrar');
			//	echo json_encode(array('success' => false));
			}
	//	}
	}
}