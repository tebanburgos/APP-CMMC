<?php if ( ! defined('BASEPATH')) exit('Acceso directo no permitido');
class Registro_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function eliminar()
	{
		$this->db->empty_table('usuarios'); 
		$this->db->empty_table('etapas_datos'); 
	//	$this->db->delete('categorias', array('categoria_id' => $categoria_id));
	//	return $this->db->affected_rows();
	}
	
}