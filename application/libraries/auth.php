<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

Class Auth {
	
	private $id;
	private $nombre;
	private $apellido_paterno;
	private $email;
	private $permiso;
	private $auth = FALSE;
	public $CI;
	
 	/* function __construct()
	{
		$this->CI =& get_instance();	
		if ( $this->CI->session->userdata('auth') )
		{
			$this->id					= $this->CI->session->userdata('id');
			$this->email				= $this->CI->session->userdata('email');
			$this->nombre 				= $this->CI->session->userdata('nombre');
			$this->apellido_paterno 	= $this->CI->session->userdata('apellido_paterno');
			$this->permiso 				= $this->CI->session->userdata('permiso');
			$this->auth					= TRUE;
		}
	} */
	
	  public function __construct()
    {
        if (!isset($this->CI))
        {
            $this->CI =& get_instance();
        }
        $this->CI->load->database();
    }
	
	function login( $email, $clave)
	{
		$row = $this->CI->db
				->from('admin')
				->where(array('email' => $email, 'activo' => 1, 'activo_admin' => 1))
				->get()->row();
		if (count($row) > 0)
		{
			if ( $row->clave == crypt($clave, $row->clave) )
			{
				$this->id					= $row->admin_id;
				$this->email				= $row->email;
				$this->nombre				= $row->nombres;
				$this->apellido_paterno		= $row->apellido_paterno;
				$this->permiso				= unserialize($row->permiso);
				$this->auth					= TRUE;
				$this->CI->session->set_userdata('id', $this->id);
				$this->CI->session->set_userdata('email', $this->email);
				$this->CI->session->set_userdata('permiso', $this->permiso);
				$this->CI->session->set_userdata('nombre', $this->nombre);
				$this->CI->session->set_userdata('apellido_paterno', $this->apellido_paterno);
				$this->CI->session->set_userdata('auth', TRUE);
				return true;
			}
			else
			{
				return false;
			}			
		}
		else
		{
			return false;
		}	
	}
	
	function check( $permiso = NULL )
	{
		if ( ! is_null($permiso) && $this->auth)
		{
			if ( is_array($this->permiso))
			{
				if ( in_array($permiso, $this->permiso)) return true;
				else return false;
			}			
			else return false;		
		}
		elseif ( $this->auth)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	function logout()
	{
		$this->auth = FALSE;
		$this->CI->session->sess_destroy();			
	}
	
	function recuperar( $email = null )
	{
		$admin = $this->CI->db->get_where('admin', array('email' => $email))->row();
		if ( count($admin) > 0 )
		{
			$token_recuperar_clave = sha1(uniqid(mt_rand(), true));
			$this->CI->db
				->where(array('email' => $email))
				->update('admin', array('token_recuperar_clave' => $token_recuperar_clave));
			$datos = array(
				'nombre' => $admin->nombres,
				'apellido_paterno' => $admin->apellido_paterno,
				'token_recuperar_clave' => $token_recuperar_clave
			);
			$this->CI->email->from('soporte@re-remate.s2.imacom.cl', 'Administración Proyectos Re-Remate');
			$this->CI->email->to($admin->email);
			$this->CI->email->subject('Recuperar Contraseña en re-remate.s2.imacom.cl');
			$plantilla = $this->CI->load->view('mail/recuperar_clave', $datos, true);
			$this->CI->email->message($plantilla);
			$this->CI->email->send();
			return true;			
		}
		else return false;
	}
	
	public function get_permiso()
	{
		return $this->permiso;
	}
	
	public function get_email()
	{
		return $this->email;
	}
	
	public function get_nombre()
	{
		return $this->nombre;
	}
	
	public function get_id()
	{
		return $this->id;
	}
	
	public function get_apellido()
	{
		return $this->apellido_paterno;
	}
}