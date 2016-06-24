<?php if ( ! defined('BASEPATH')) exit('Acceso directo no permitido');
class Cuestionario_model extends CI_Model
{
	private $ultimo_usuario;
	public function __construct()
	{
		parent::__construct();
	}
	
	public function consultar_regiones()
	{
		$this->db->select('*');
		$this->db->from('regiones');
		$this->db->order_by('region_id', 'ASC');
		
		$query =  $this->db->get();
		if ( $query->num_rows() > 0)
		{
			return $query;
		}
		else return false;
	}
	
	public function consultar_genero($usuario_id)
	{
		$this->db->select('usuario_genero');
		$this->db->from('usuarios');
		$this->db->where('usuario_id', $usuario_id);
		
		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
			return $query->row()->usuario_genero;
		}
		return false;
	}
	
	public function insert_datos_usuario($region, $comuna, $nombres, $apellidos, $telefono_fijo, $celular, $email, $prevision, $tipo_isapre, $tipo_fonasa, $edad, $genero, $ocupacion)
	{
		if ($prevision == "isapre")
		{
			$this->db->insert('usuarios', array('region_id'=>$region, 'usuario_comuna'=>$comuna, 'usuario_nombres'=>$nombres, 'usuario_apellidos'=>$apellidos, 'usuario_telefono_fijo'=>$telefono_fijo, 'usuario_celular'=>$celular, 'usuario_email'=>$email, 'usuario_prevision'=>$prevision, 'usuario_prevision_tipo'=>$tipo_isapre, 'usuario_edad'=>$edad, 'usuario_genero '=>$genero, 'usuario_ocupacion'=> $ocupacion));
			return $this->db->insert_id();
		}
		elseif ($prevision == "fonasa")
		{
			$this->db->insert('usuarios', array('region_id'=>$region, 'usuario_comuna'=>$comuna, 'usuario_nombres'=>$nombres, 'usuario_apellidos'=>$apellidos, 'usuario_telefono_fijo'=>$telefono_fijo, 'usuario_celular'=>$celular, 'usuario_email'=>$email, 'usuario_prevision'=>$prevision, 'usuario_prevision_tipo'=>$tipo_fonasa, 'usuario_edad'=>$edad, 'usuario_genero '=>$genero, 'usuario_ocupacion'=> $ocupacion));
			return $this->db->insert_id();
		}
	}
	
	public function insert_datos_cuestionario_01($etapa_id, $usuario_id, $nombres, $apellidos)
	{
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'antecedentes personales', 'etapa_dato_contenido'=>$nombres.' '.$apellidos));
	}
	
	
	public function insert_datos_cuestionario_02($etapa_id, $usuario_id, $estatura, $peso,$abdomen)
	{
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'estatura', 'etapa_dato_contenido'=>$estatura));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'peso', 'etapa_dato_contenido'=>$peso));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'abdomen', 'etapa_dato_contenido'=>$abdomen));
	}
	
	public function insert_datos_cuestionario_03($etapa_id, $usuario_id, $bajar_de_peso, $dieta_nutricionista, $programa_medico, $farmacos, $tratamiento_psicologico, $cirugia, $otro, $otro_tratamiento1, $otro_tratamiento2, $otro_tratamiento3, $otro_tratamiento4, $ocaciones, $importancia, $porque_necesita, $que_cree, $que_le_molesta, $cuentenos_su_caso)
	{
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'sometido a tratamiento de peso', 'etapa_dato_contenido'=>$bajar_de_peso));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'dieta nutricionista', 'etapa_dato_contenido'=>$dieta_nutricionista));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'programa médico', 'etapa_dato_contenido'=>$programa_medico));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'fármacos', 'etapa_dato_contenido'=>$farmacos));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'tratamiento psicológico', 'etapa_dato_contenido'=>$tratamiento_psicologico));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'cirugía', 'etapa_dato_contenido'=>$cirugia));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'otro', 'etapa_dato_contenido'=>$otro));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'otro tratamiento 01', 'etapa_dato_contenido'=>$otro_tratamiento1));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'otro tratamiento 02', 'etapa_dato_contenido'=>$otro_tratamiento2));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'otro tratamiento 03', 'etapa_dato_contenido'=>$otro_tratamiento3));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'otro tratamiento 04', 'etapa_dato_contenido'=>$otro_tratamiento4));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'cuantas ocaciones ha intentado', 'etapa_dato_contenido'=>$ocaciones));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'nivel de importancia', 'etapa_dato_contenido'=>$importancia));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'por qué lo necesita', 'etapa_dato_contenido'=>$porque_necesita));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'qué cree que lo ocaciona', 'etapa_dato_contenido'=>$que_cree));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'qué le molesta', 'etapa_dato_contenido'=>$que_le_molesta));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'su caso', 'etapa_dato_contenido'=>$cuentenos_su_caso));
	}
	
		public function insert_datos_cuestionario_04_F($etapa_id, $usuario_id, $diabetes, $resistencia_a_insulina, $hipertension_arterial, $enfermedades_cardiovasculares, $gota, $disfuncion_tiroidea, $apnea, $osteoartritis, $osteoporosis, $enfermedad_dolor_de_espalda, $asma, $depresion, $transtorno_animo_personalidad, $algun_medicamento, $medicamento1, $medicamento2, $medicamento3, $medicamento4, $medicamento5, $medicamento6, $medicamento7, $alergico, $alergia1, $alergia2, $alergia3, $alergia4, $operado, $operacion1, $operacion2, $operacion3, $operacion4, $ansiedad, $dificultad_para_dormir, $somnolencia, $irritabilidad, $cansancio, $sensacion_de_depresion, $dolor_en_el_pecho, $dificultad_para_respirar, $necesidad_de_orinar, $sed_inusual, $hambre_extrema, $dolor_de_espalda, $dolor_en_articulaciones, $perdida_de_peso, $aumento_de_peso, $desorden_alimenticio, $dificultad_fisica, $hijos, $cuantos_hijos, $hijo_mas_4k, $diabetes_gestacional, $hipertension_embarazo, $periodo_menstrual, $fuma, $cuanto_fuma, $alguna_vez_fumo, $cuando_lo_dejo, $bebe, $frecuencia_de_alcohol, $vino, $cerveza, $destilados, $drogas, $marihuana, $cocaina, $alucinogenos, $pasta_base, $ejercicio)
	{
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'diabetes', 'etapa_dato_contenido'=>$diabetes));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'esistencia a la insulina', 'etapa_dato_contenido'=>$resistencia_a_insulina));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'hipertensión arterial', 'etapa_dato_contenido'=>$hipertension_arterial));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'enfermedades cardiovasculares', 'etapa_dato_contenido'=>$enfermedades_cardiovasculares));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'gota', 'etapa_dato_contenido'=>$gota));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'disfunción tiroidea', 'etapa_dato_contenido'=>$disfuncion_tiroidea));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'apnea', 'etapa_dato_contenido'=>$apnea));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'osteoartritis', 'etapa_dato_contenido'=>$osteoartritis));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'osteoporosis', 'etapa_dato_contenido'=>$osteoporosis));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'enfermedad dolor de espalda', 'etapa_dato_contenido'=>$enfermedad_dolor_de_espalda));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'asma', 'etapa_dato_contenido'=>$asma));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'depresión', 'etapa_dato_contenido'=>$depresion));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'trastorno del ánimo o personalidad', 'etapa_dato_contenido'=>$transtorno_animo_personalidad));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'toma medicamentos', 'etapa_dato_contenido'=>$algun_medicamento));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'nombre medicamento 01', 'etapa_dato_contenido'=>$medicamento1));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'nombre medicamento 02', 'etapa_dato_contenido'=>$medicamento2));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'nombre medicamento 03', 'etapa_dato_contenido'=>$medicamento3));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'nombre medicamento 04', 'etapa_dato_contenido'=>$medicamento4));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'nombre medicamento 05', 'etapa_dato_contenido'=>$medicamento5));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'nombre medicamento 06', 'etapa_dato_contenido'=>$medicamento6));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'nombre medicamento 07', 'etapa_dato_contenido'=>$medicamento7));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'es alérgico', 'etapa_dato_contenido'=>$alergico));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'alergia 01', 'etapa_dato_contenido'=>$alergia1));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'alergia 02', 'etapa_dato_contenido'=>$alergia2));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'alergia 03', 'etapa_dato_contenido'=>$alergia3));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'alergia 04', 'etapa_dato_contenido'=>$alergia4));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'ha sido operado', 'etapa_dato_contenido'=>$operado));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'operación 01', 'etapa_dato_contenido'=>$operacion1));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'operación 02', 'etapa_dato_contenido'=>$operacion2));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'operación 03', 'etapa_dato_contenido'=>$operacion3));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'operación 04', 'etapa_dato_contenido'=>$operacion4));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'ansiedad', 'etapa_dato_contenido'=>$ansiedad));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'dificultad para dormir', 'etapa_dato_contenido'=>$dificultad_para_dormir));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'somnolencia', 'etapa_dato_contenido'=>$somnolencia));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'irritabilidad', 'etapa_dato_contenido'=>$irritabilidad));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'cansancio', 'etapa_dato_contenido'=>$cansancio));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'sensación de depresión', 'etapa_dato_contenido'=>$sensacion_de_depresion));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'dolor en el pecho', 'etapa_dato_contenido'=>$dolor_en_el_pecho));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'dificultad para respirar', 'etapa_dato_contenido'=>$dificultad_para_respirar));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'necesidad de orinar', 'etapa_dato_contenido'=>$necesidad_de_orinar));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'sed inusual', 'etapa_dato_contenido'=>$sed_inusual));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'hambre extrema', 'etapa_dato_contenido'=>$hambre_extrema));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'dolor de espalda', 'etapa_dato_contenido'=>$dolor_de_espalda));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'dolor en articulaciones', 'etapa_dato_contenido'=>$dolor_en_articulaciones));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'pérdida de peso', 'etapa_dato_contenido'=>$perdida_de_peso));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'aumento de peso', 'etapa_dato_contenido'=>$aumento_de_peso));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'desorden alimenticio', 'etapa_dato_contenido'=>$desorden_alimenticio));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'dificultad para realizar actividad fisica', 'etapa_dato_contenido'=>$dificultad_fisica));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'hijos', 'etapa_dato_contenido'=>$hijos));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'cuántos hijos', 'etapa_dato_contenido'=>$cuantos_hijos));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'alguno pesó más de 4kg', 'etapa_dato_contenido'=>$hijo_mas_4k));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'tuvo diabetes gestacional', 'etapa_dato_contenido'=>$diabetes_gestacional));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'tuvo hipertensión en el embarazo', 'etapa_dato_contenido'=>$hipertension_embarazo));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'periodo menstrual', 'etapa_dato_contenido'=>$periodo_menstrual));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'fuma', 'etapa_dato_contenido'=>$fuma));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'cuánto fuma', 'etapa_dato_contenido'=>$cuanto_fuma));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'alguna vez fumó', 'etapa_dato_contenido'=>$alguna_vez_fumo));
		if ($alguna_vez_fumo == 'si' && $fuma == 'si')
		{
			$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'cuando dejó de fumar', 'etapa_dato_contenido'=>'no lo he dejado'));
		}
		else
		{
			$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'cuando dejó de fumar', 'etapa_dato_contenido'=>$cuando_lo_dejo));
		}
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'bebe', 'etapa_dato_contenido'=>$bebe));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'frecuencia de consumo de alcohol', 'etapa_dato_contenido'=>$frecuencia_de_alcohol));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'vino', 'etapa_dato_contenido'=>$vino));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'cerveza', 'etapa_dato_contenido'=>$cerveza));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'destilados', 'etapa_dato_contenido'=>$destilados));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'drogas', 'etapa_dato_contenido'=>$drogas));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'marihuana', 'etapa_dato_contenido'=>$marihuana));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'cocaína', 'etapa_dato_contenido'=>$cocaina));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'alucinógenos', 'etapa_dato_contenido'=>$alucinogenos));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'pasta base', 'etapa_dato_contenido'=>$pasta_base));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'ejercicio', 'etapa_dato_contenido'=>$ejercicio));
		
	}

		public function insert_datos_cuestionario_04_M($etapa_id, $usuario_id, $diabetes, $resistencia_a_insulina, $hipertension_arterial, $enfermedades_cardiovasculares, $gota, $disfuncion_tiroidea, $apnea, $osteoartritis, $osteoporosis, $enfermedad_dolor_de_espalda, $asma, $depresion, $transtorno_animo_personalidad, $algun_medicamento, $medicamento1, $medicamento2, $medicamento3, $medicamento4, $medicamento5, $medicamento6, $medicamento7, $alergico, $alergia1, $alergia2, $alergia3, $alergia4, $operado, $operacion1, $operacion2, $operacion3, $operacion4, $ansiedad, $dificultad_para_dormir, $somnolencia, $irritabilidad, $cansancio, $sensacion_de_depresion, $dolor_en_el_pecho, $dificultad_para_respirar, $necesidad_de_orinar, $sed_inusual, $hambre_extrema, $dolor_de_espalda, $dolor_en_articulaciones, $perdida_de_peso, $aumento_de_peso, $desorden_alimenticio, $dificultad_fisica, $fuma, $cuanto_fuma, $alguna_vez_fumo, $cuando_lo_dejo, $bebe, $frecuencia_de_alcohol, $vino, $cerveza, $destilados, $drogas, $marihuana, $cocaina, $alucinogenos, $pasta_base, $ejercicio)
	{
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'diabetes', 'etapa_dato_contenido'=>$diabetes));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'resistencia a la insulina', 'etapa_dato_contenido'=>$resistencia_a_insulina));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'hipertensión arterial', 'etapa_dato_contenido'=>$hipertension_arterial));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'enfermedades cardiovasculares', 'etapa_dato_contenido'=>$enfermedades_cardiovasculares));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'gota', 'etapa_dato_contenido'=>$gota));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'disfunción tiroidea', 'etapa_dato_contenido'=>$disfuncion_tiroidea));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'apnea', 'etapa_dato_contenido'=>$apnea));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'osteoartritis', 'etapa_dato_contenido'=>$osteoartritis));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'osteoporosis', 'etapa_dato_contenido'=>$osteoporosis));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'enfermedad dolor de espalda', 'etapa_dato_contenido'=>$enfermedad_dolor_de_espalda));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'asma', 'etapa_dato_contenido'=>$asma));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'depresión', 'etapa_dato_contenido'=>$depresion));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'trastorno del ánimo o personalidad', 'etapa_dato_contenido'=>$transtorno_animo_personalidad));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'toma medicamentos', 'etapa_dato_contenido'=>$algun_medicamento));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'nombre medicamento 01', 'etapa_dato_contenido'=>$medicamento1));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'nombre medicamento 02', 'etapa_dato_contenido'=>$medicamento2));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'nombre medicamento 03', 'etapa_dato_contenido'=>$medicamento3));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'nombre medicamento 04', 'etapa_dato_contenido'=>$medicamento4));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'nombre medicamento 05', 'etapa_dato_contenido'=>$medicamento5));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'nombre medicamento 06', 'etapa_dato_contenido'=>$medicamento6));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'nombre medicamento 07', 'etapa_dato_contenido'=>$medicamento7));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'es alérgico', 'etapa_dato_contenido'=>$alergico));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'alergia 01', 'etapa_dato_contenido'=>$alergia1));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'alergia 02', 'etapa_dato_contenido'=>$alergia2));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'alergia 03', 'etapa_dato_contenido'=>$alergia3));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'alergia 04', 'etapa_dato_contenido'=>$alergia4));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'ha sido operado', 'etapa_dato_contenido'=>$operado));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'operación 01', 'etapa_dato_contenido'=>$operacion1));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'operación 02', 'etapa_dato_contenido'=>$operacion2));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'operación 03', 'etapa_dato_contenido'=>$operacion3));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'operación 04', 'etapa_dato_contenido'=>$operacion4));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'ansiedad', 'etapa_dato_contenido'=>$ansiedad));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'dificultad para dormir', 'etapa_dato_contenido'=>$dificultad_para_dormir));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'somnolencia', 'etapa_dato_contenido'=>$somnolencia));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'irritabilidad', 'etapa_dato_contenido'=>$irritabilidad));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'cansancio', 'etapa_dato_contenido'=>$cansancio));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'sensación de depresión', 'etapa_dato_contenido'=>$sensacion_de_depresion));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'dolor en el pecho', 'etapa_dato_contenido'=>$dolor_en_el_pecho));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'dificultad para respirar', 'etapa_dato_contenido'=>$dificultad_para_respirar));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'necesidad de orinar', 'etapa_dato_contenido'=>$necesidad_de_orinar));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'sed inusual', 'etapa_dato_contenido'=>$sed_inusual));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'hambre extrema', 'etapa_dato_contenido'=>$hambre_extrema));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'dolor de espalda', 'etapa_dato_contenido'=>$dolor_de_espalda));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'dolor en articulaciones', 'etapa_dato_contenido'=>$dolor_en_articulaciones));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'pérdida de peso', 'etapa_dato_contenido'=>$perdida_de_peso));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'aumento de peso', 'etapa_dato_contenido'=>$aumento_de_peso));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'desorden alimenticio', 'etapa_dato_contenido'=>$desorden_alimenticio));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'dificultad para realizar actividad fisica', 'etapa_dato_contenido'=>$dificultad_fisica));
		
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'hijos', 'etapa_dato_contenido'=>'pregunta de carácter femenino'));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'cuántos hijos', 'etapa_dato_contenido'=>'pregunta de carácter femenino'));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'alguno pesó más de 4kg', 'etapa_dato_contenido'=>'pregunta de carácter femenino'));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'tuvo diabetes gestacional', 'etapa_dato_contenido'=>'pregunta de carácter femenino'));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'tuvo hipertensión en el embarazo', 'etapa_dato_contenido'=>'pregunta de carácter femenino'));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'periodo menstrual', 'etapa_dato_contenido'=>'pregunta de carácter femenino'));
		
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'fuma', 'etapa_dato_contenido'=>$fuma));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'cuánto fuma', 'etapa_dato_contenido'=>$cuanto_fuma));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'alguna vez fumó', 'etapa_dato_contenido'=>$alguna_vez_fumo));
		if ($alguna_vez_fumo == 'si' && $fuma == 'si')
		{
			$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'cuando dejó de fumar', 'etapa_dato_contenido'=>'no lo he dejado'));
		}
		else
		{
			$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'cuando dejó de fumar', 'etapa_dato_contenido'=>$cuando_lo_dejo));
		}
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'bebe', 'etapa_dato_contenido'=>$bebe));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'frecuencia de consumo de alcohol', 'etapa_dato_contenido'=>$frecuencia_de_alcohol));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'vino', 'etapa_dato_contenido'=>$vino));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'cerveza', 'etapa_dato_contenido'=>$cerveza));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'destilados', 'etapa_dato_contenido'=>$destilados));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'drogas', 'etapa_dato_contenido'=>$drogas));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'marihuana', 'etapa_dato_contenido'=>$marihuana));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'cocaína', 'etapa_dato_contenido'=>$cocaina));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'alucinógenos', 'etapa_dato_contenido'=>$alucinogenos));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'pasta base', 'etapa_dato_contenido'=>$pasta_base));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'ejercicio', 'etapa_dato_contenido'=>$ejercicio));
	}
	
	public function insert_datos_cuestionario_05($etapa_id, $usuario_id, $cuanto_come, $desayuno, $almuerzo, $onces, $comida, $cuanto_come_afuera, $pan, $marraqueta, $hallulla, $pan_amasado, $pan_especial_blanco, $pan_especial_integral, $pan_molde_blanco, $pan_molde_integral, $porciones_de_pan, $evaluacion_calidad_alimentacion)
	{
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'cuanto veces come', 'etapa_dato_contenido'=>$cuanto_come));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'desayuno', 'etapa_dato_contenido'=>$desayuno));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'almuerzo', 'etapa_dato_contenido'=>$almuerzo));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'onces', 'etapa_dato_contenido'=>$onces));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'comida', 'etapa_dato_contenido'=>$comida));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'cuántas veces come afuera', 'etapa_dato_contenido'=>$cuanto_come_afuera));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'pan', 'etapa_dato_contenido'=>$pan));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'marraqueta', 'etapa_dato_contenido'=>$marraqueta));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'hallulla', 'etapa_dato_contenido'=>$hallulla));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'pan amasado', 'etapa_dato_contenido'=>$pan_amasado));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'pan especial blanco', 'etapa_dato_contenido'=>$pan_especial_blanco));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'pan especial integral', 'etapa_dato_contenido'=>$pan_especial_integral));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'pan molde blanco', 'etapa_dato_contenido'=>$pan_molde_blanco));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'pan molde integral', 'etapa_dato_contenido'=>$pan_molde_integral));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'porciones de pan', 'etapa_dato_contenido'=>$porciones_de_pan));
		$query = $this->db->insert('etapas_datos', array('etapa_id'=>$etapa_id, 'usuario_id'=>$usuario_id, 'etapa_dato_nombre'=>'autoevaluacion alimenticia', 'etapa_dato_contenido'=>$evaluacion_calidad_alimentacion));
	}
	
	public function terminar_proyecto($proyecto_id)
	{
		
		if ($proyecto_id > 0){

			
			$data = array('proyecto_terminado' => 1);

			$this->db->where('proyecto_id', $proyecto_id);
			$this->db->update('proyectos', $data); 
		}
	}
	
}