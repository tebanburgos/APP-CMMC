<?php if ( ! defined('BASEPATH')) exit('Acceso Directo no Permitido');
class Cuestionario extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('form'));
		$this->load->model(array('cuestionario_model'));
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible fade in"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>','</div>');
		$this->load->helper(array('url'));
		$this->load->library(array('session'));
		$this->load->helper(array('imacom'));
		$this->load->helper('imacom');
	}

	//etapa 1
	public function etapa01()
	{

		$data['titulo'] = "Antecedentes Personales";

		$this->load->view('header');
		$this->load->view('cuestionario/etapa01', $data);
		$this->load->view('footer');
		
	}
	
	public function ingresar_etapa01()
	{
		if ($_POST)
		{
			$insert_data = $this->cuestionario_model->insert_datos_usuario($_POST['region'], $_POST['comuna'], $_POST['nombres'], $_POST['apellidos'], $_POST['telefono_fijo'], $_POST['celular'], $_POST['email'], $_POST['prevision'], $_POST['tipo_isapre'], $_POST['tipo_fonasa'], $_POST['edad'], $_POST['genero'], $_POST['ocupacion']);															
			
			if(is_numeric($insert_data))
 			
				{
					$this->cuestionario_model->insert_datos_cuestionario_01( '1' , $insert_data, $_POST['nombres'], $_POST['apellidos']);
					redirect('/cuestionario/etapa02/'.$insert_data);
				}
			else
				{
					$this->load->view('header');
					$this->load->view('cuestionario/etapa01');
					$this->load->view('footer');
				} 
		}
	}
	
	//etapa 2
		public function etapa02()
	{
		$data['titulo'] = "Parámetros Antrométricos";

		$this->load->view('header');
		$this->load->view('cuestionario/etapa02', $data);
		$this->load->view('footer');
	}
	
		public function ingresar_etapa02()
	{
		if ($_POST)
		{
			$insert_data = $this->cuestionario_model->insert_datos_cuestionario_02( '2' , $_POST['usuario_id'], $_POST['estatura'], $_POST['peso'], $_POST['abdomen']);
		
			if (! $insert_data)
				{
					redirect('/cuestionario/etapa03/'.$_POST['usuario_id']);
				}
				else
				{
			
					$this->load->view('header');
					$this->load->view('cuestionario/etapa02');
					$this->load->view('footer');
				}
		}
		
	}
	//etapa 3
	
	public function etapa03()
	{
		$data['titulo'] = "Experiencia y tratamientos anteriores";

		$this->load->view('header');
		$this->load->view('cuestionario/etapa03', $data);
		$this->load->view('footer');
	}
	
		public function ingresar_etapa03()
	{
		if ($_POST)
		{
			$insert_data = $this->cuestionario_model->insert_datos_cuestionario_03( '3' , $_POST['usuario_id'], $_POST['bajar_de_peso'], $_POST['dieta_nutricionista'], $_POST['programa_medico'], $_POST['farmacos'], $_POST['tratamiento_psicologico'], $_POST['cirugia'], $_POST['otro'], $_POST['otro_tratamiento1'], $_POST['otro_tratamiento2'], $_POST['otro_tratamiento3'], $_POST['otro_tratamiento4'], $_POST['ocaciones'], $_POST['importancia'], $_POST['porque_necesita'], $_POST['que_cree'], $_POST['que_le_molesta'], $_POST['cuentenos_su_caso']);
		
			if (! $insert_data)
				{
					redirect('/cuestionario/etapa04/'.$_POST['usuario_id']);
				}
				else
				{
			
					$this->load->view('header');
					$this->load->view('cuestionario/etapa03');
					$this->load->view('footer');
				}
		}
	}
	
	//etapa 4
	
		public function etapa04()
	{
		$data['titulo'] = "Cuestionario Médico";

		$this->load->view('header');
		$this->load->view('cuestionario/etapa04', $data);
		$this->load->view('footer');
		
	}
	
	public function ingresar_etapa04()
	{
		if ($_POST)
		{
			if($_POST['genero']=='F')
			{
			$insert_data = $this->cuestionario_model->insert_datos_cuestionario_04_F( '4' , $_POST['usuario_id'], $_POST['diabetes'], $_POST['resistencia_a_insulina'], $_POST['hipertension_arterial'], $_POST['enfermedades_cardiovasculares'], $_POST['gota'], $_POST['disfuncion_tiroidea'], $_POST['apnea'], $_POST['osteoartritis'], $_POST['osteoporosis'], $_POST['enfermedad_dolor_de_espalda'],  $_POST['asma'], $_POST['depresion'], $_POST['transtorno_animo_personalidad'], $_POST['algun_medicamento'], $_POST['medicamento1'], $_POST['medicamento2'], $_POST['medicamento3'], $_POST['medicamento4'], $_POST['medicamento5'], $_POST['medicamento6'], $_POST['medicamento7'], $_POST['alergico'], $_POST['alergia1'], $_POST['alergia2'], $_POST['alergia3'], $_POST['alergia4'], $_POST['operado'], $_POST['operacion1'], $_POST['operacion2'], $_POST['operacion3'], $_POST['operacion4'], $_POST['ansiedad'], $_POST['dificultad_para_dormir'], $_POST['somnolencia'], $_POST['irritabilidad'], $_POST['cansancio'], $_POST['sensacion_de_depresion'], $_POST['dolor_en_el_pecho'], $_POST['dificultad_para_respirar'], $_POST['necesidad_de_orinar'], $_POST['sed_inusual'], $_POST['hambre_extrema'], $_POST['dolor_de_espalda'], $_POST['dolor_en_articulaciones'], $_POST['perdida_de_peso'], $_POST['aumento_de_peso'], $_POST['desorden_alimenticio'], $_POST['dificultad_fisica'], $_POST['hijos'], $_POST['cuantos_hijos'], $_POST['hijo_mas_4k'], $_POST['diabetes_gestacional'], $_POST['hipertension_embarazo'], $_POST['periodo_menstrual'], $_POST['fuma'], $_POST['cuanto_fuma'], $_POST['alguna_vez_fumo'], $_POST['cuando_lo_dejo'], $_POST['bebe'], $_POST['frecuencia_de_alcohol'], $_POST['vino'], $_POST['cerveza'], $_POST['destilados'], $_POST['drogas'], $_POST['marihuana'], $_POST['cocaina'], $_POST['alucinogenos'], $_POST['pasta_base'], $_POST['ejercicio']);
			}
			else
			{
			$insert_data = $this->cuestionario_model->insert_datos_cuestionario_04_M( '4' , $_POST['usuario_id'], $_POST['diabetes'], $_POST['resistencia_a_insulina'], $_POST['hipertension_arterial'], $_POST['enfermedades_cardiovasculares'], $_POST['gota'], $_POST['disfuncion_tiroidea'], $_POST['apnea'], $_POST['osteoartritis'], $_POST['osteoporosis'], $_POST['enfermedad_dolor_de_espalda'],  $_POST['asma'], $_POST['depresion'], $_POST['transtorno_animo_personalidad'], $_POST['algun_medicamento'], $_POST['medicamento1'], $_POST['medicamento2'], $_POST['medicamento3'], $_POST['medicamento4'], $_POST['medicamento5'], $_POST['medicamento6'], $_POST['medicamento7'], $_POST['alergico'], $_POST['alergia1'], $_POST['alergia2'], $_POST['alergia3'], $_POST['alergia4'], $_POST['operado'], $_POST['operacion1'], $_POST['operacion2'], $_POST['operacion3'], $_POST['operacion4'], $_POST['ansiedad'], $_POST['dificultad_para_dormir'], $_POST['somnolencia'], $_POST['irritabilidad'], $_POST['cansancio'], $_POST['sensacion_de_depresion'], $_POST['dolor_en_el_pecho'], $_POST['dificultad_para_respirar'], $_POST['necesidad_de_orinar'], $_POST['sed_inusual'], $_POST['hambre_extrema'], $_POST['dolor_de_espalda'], $_POST['dolor_en_articulaciones'], $_POST['perdida_de_peso'], $_POST['aumento_de_peso'], $_POST['desorden_alimenticio'], $_POST['dificultad_fisica'], $_POST['fuma'], $_POST['cuanto_fuma'], $_POST['alguna_vez_fumo'], $_POST['cuando_lo_dejo'], $_POST['bebe'], $_POST['frecuencia_de_alcohol'], $_POST['vino'], $_POST['cerveza'], $_POST['destilados'], $_POST['drogas'], $_POST['marihuana'], $_POST['cocaina'], $_POST['alucinogenos'], $_POST['pasta_base'], $_POST['ejercicio']);
			}
			if (! $insert_data)
				{
					redirect('/cuestionario/etapa05/'.$_POST['usuario_id']);
				}
				else
				{
			
					$this->load->view('header');
					$this->load->view('cuestionario/etapa04');
					$this->load->view('footer');
				}
		}
	}
	
	//etapa 5
	
	public function etapa05()
	{
		$data['titulo'] = "Cuestionario nutricional";

		$this->load->view('header');
		$this->load->view('cuestionario/etapa05', $data);
		$this->load->view('footer');
		
	}
	
	public function ingresar_etapa05()
	{
		if ($_POST)
		{
			$insert_data = $this->cuestionario_model->insert_datos_cuestionario_05( '5' , $_POST['usuario_id'], $_POST['cuanto_come'], $_POST['desayuno'], $_POST['almuerzo'], $_POST['onces'], $_POST['comida'], $_POST['cuanto_come_afuera'], $_POST['pan'], $_POST['marraqueta'], $_POST['hallulla'], $_POST['pan_amasado'], $_POST['pan_especial_blanco'], $_POST['pan_especial_integral'], $_POST['pan_molde_blanco'], $_POST['pan_molde_integral'], $_POST['porciones_de_pan'], $_POST['evaluacion_calidad_alimentacion']);
		
			if (! $insert_data)
				{
					redirect('/cuestionario/gracias/');
				}
				else
				{
					$this->load->view('header');
					$this->load->view('cuestionario/etapa05');
					$this->load->view('footer');
				}
		}
	}
	
	public function gracias()
	{
		$this->load->view('header');
		$this->load->view('cuestionario/gracias');
		$this->load->view('footer');
		
	}
	
}