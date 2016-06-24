<?php if ( ! defined('BASEPATH')) exit('Acceso directo no permitido');
class Descargar_model extends CI_Model
{
	private $ultimo_usuario;
	public function __construct()
	{
		parent::__construct();
	}

	public function consultar_usuarios()
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		
		$query =  $this->db->get();
		if ( $query->num_rows() > 0)
		{
			return $query;
		}
		else return false;
	}
	
	public function consultar_region_de_usuario($usuario_id)
	{
		$this->db->select('regiones.region_nombre');
		$this->db->from('regiones');
		$this->db->join('usuarios', 'regiones.region_id = usuarios.region_id');
		$this->db->where('usuarios.usuario_id', $usuario_id);
		
		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
			return $query->row()->region_nombre;
		}
		return false;
	}
	
	public function consultar_etapas_datos_por_usuario($usuario_id, $etapa_dato_nombre)
	{
		$this->db->select('etapa_dato_contenido');
		$this->db->from('etapas_datos');
		$this->db->where('usuario_id', $usuario_id);
		
		switch ($etapa_dato_nombre)
		{
			case 'estatura':
				$this->db->where('etapa_dato_nombre ', 'estatura');
			break;
			case 'peso':
				$this->db->where('etapa_dato_nombre ', 'peso');
			break;
			case 'abdomen':
				$this->db->where('etapa_dato_nombre ', 'abdomen');
			break;
			case 'sometido a tratamiento de peso':
				$this->db->where('etapa_dato_nombre ', 'sometido a tratamiento de peso');
			break;
			case 'dieta nutricionista':
				$this->db->where('etapa_dato_nombre ', 'dieta nutricionista');
			break;
			case 'programa médico':
				$this->db->where('etapa_dato_nombre ', 'programa médico');
			break;
			case 'fármacos':
				$this->db->where('etapa_dato_nombre ', 'fármacos');
			break;
			case 'tratamiento psicológico':
				$this->db->where('etapa_dato_nombre ', 'tratamiento psicológico');
			break;
			case 'cirugía':
				$this->db->where('etapa_dato_nombre ', 'cirugía');
			break;
			case 'otro':
				$this->db->where('etapa_dato_nombre ', 'otro');
			break;
			case 'otro tratamiento 01':
				$this->db->where('etapa_dato_nombre ', 'otro tratamiento 01');
			break;
			case 'otro tratamiento 02':
				$this->db->where('etapa_dato_nombre ', 'otro tratamiento 02');
			break;
			case 'otro tratamiento 03':
				$this->db->where('etapa_dato_nombre ', 'otro tratamiento 03');
			break;
			case 'otro tratamiento 04':
				$this->db->where('etapa_dato_nombre ', 'otro tratamiento 04');
			break;
			case 'cuantas ocaciones ha intentado':
				$this->db->where('etapa_dato_nombre ', 'cuantas ocaciones ha intentado');
			break;
			case 'nivel de importancia':
				$this->db->where('etapa_dato_nombre ', 'nivel de importancia');
			break;
			case 'por qué lo necesita':
				$this->db->where('etapa_dato_nombre ', 'por qué lo necesita');
			break;
			case 'qué cree que lo ocaciona':
				$this->db->where('etapa_dato_nombre ', 'qué cree que lo ocaciona');
			break;
			case 'qué le molesta':
				$this->db->where('etapa_dato_nombre ', 'qué le molesta');
			break;
			case 'su caso':
				$this->db->where('etapa_dato_nombre ', 'su caso');
			break;
			case 'diabetes':
				$this->db->where('etapa_dato_nombre ', 'diabetes');
			break;
			case 'resistencia a la insulina':
				$this->db->where('etapa_dato_nombre ', 'resistencia a la insulina');
			break;
			case 'hipertensión arterial':
				$this->db->where('etapa_dato_nombre ', 'hipertensión arterial');
			break;
			case 'enfermedades cardiovasculares':
				$this->db->where('etapa_dato_nombre ', 'enfermedades cardiovasculares');
			break;
			case 'gota':
				$this->db->where('etapa_dato_nombre ', 'gota');
			break;
			case 'disfunción tiroidea':
				$this->db->where('etapa_dato_nombre ', 'disfunción tiroidea');
			break;
			case 'apnea':
				$this->db->where('etapa_dato_nombre ', 'apnea');
			break;
			case 'osteoartritis':
				$this->db->where('etapa_dato_nombre ', 'osteoartritis');
			break;
			case 'osteoporosis':
				$this->db->where('etapa_dato_nombre ', 'osteoporosis');
			break;
			case 'enfermedad dolor de espalda':
				$this->db->where('etapa_dato_nombre ', 'enfermedad dolor de espalda');
			break;
			case 'asma':
				$this->db->where('etapa_dato_nombre ', 'asma');
			break;
			case 'depresión':
				$this->db->where('etapa_dato_nombre ', 'depresión');
			break;
			case 'trastorno del ánimo o personalidad':
				$this->db->where('etapa_dato_nombre ', 'trastorno del ánimo o personalidad');
			break;
			case 'toma medicamentos':
				$this->db->where('etapa_dato_nombre ', 'toma medicamentos');
			break;
			case 'nombre medicamento 01':
				$this->db->where('etapa_dato_nombre ', 'nombre medicamento 01');
			break;
			case 'nombre medicamento 02':
				$this->db->where('etapa_dato_nombre ', 'nombre medicamento 02');
			break;
			case 'nombre medicamento 03':
				$this->db->where('etapa_dato_nombre ', 'nombre medicamento 03');
			break;
			case 'nombre medicamento 04':
				$this->db->where('etapa_dato_nombre ', 'nombre medicamento 04');
			break;
			case 'nombre medicamento 05':
				$this->db->where('etapa_dato_nombre ', 'nombre medicamento 05');
			break;
			case 'nombre medicamento 06':
				$this->db->where('etapa_dato_nombre ', 'nombre medicamento 06');
			break;
			case 'nombre medicamento 07':
				$this->db->where('etapa_dato_nombre ', 'nombre medicamento 07');
			break;
			case 'es alérgico':
				$this->db->where('etapa_dato_nombre ', 'es alérgico');
			break;
			case 'alergia 01':
				$this->db->where('etapa_dato_nombre ', 'alergia 01');
			break;
			case 'alergia 02':
				$this->db->where('etapa_dato_nombre ', 'alergia 02');
			break;
			case 'alergia 03':
				$this->db->where('etapa_dato_nombre ', 'alergia 03');
			break;
			case 'alergia 04':
				$this->db->where('etapa_dato_nombre ', 'alergia 04');
			break;
			case 'ha sido operado':
				$this->db->where('etapa_dato_nombre ', 'ha sido operado');
			break;
			case 'operación 01':
				$this->db->where('etapa_dato_nombre ', 'operación 01');
			break;
			case 'operación 02':
				$this->db->where('etapa_dato_nombre ', 'operación 02');
			break;
			case 'operación 03':
				$this->db->where('etapa_dato_nombre ', 'operación 03');
			break;
			case 'operación 04':
				$this->db->where('etapa_dato_nombre ', 'operación 04');
			break;
			case 'ansiedad':
				$this->db->where('etapa_dato_nombre ', 'ansiedad');
			break;
			case 'dificultad para dormir':
				$this->db->where('etapa_dato_nombre ', 'dificultad para dormir');
			break;
			case 'somnolencia':
				$this->db->where('etapa_dato_nombre ', 'somnolencia');
			break;
			case 'irritabilidad':
				$this->db->where('etapa_dato_nombre ', 'irritabilidad');
			break;
			case 'cansancio':
				$this->db->where('etapa_dato_nombre ', 'cansancio');
			break;
			case 'sensación de depresión':
				$this->db->where('etapa_dato_nombre ', 'sensación de depresión');
			break;
			case 'dolor en el pecho':
				$this->db->where('etapa_dato_nombre ', 'dolor en el pecho');
			break;
			case 'dificultad para respirar':
				$this->db->where('etapa_dato_nombre ', 'dificultad para respirar');
			break;
			case 'necesidad de orinar':
				$this->db->where('etapa_dato_nombre ', 'necesidad de orinar');
			break;
			case 'sed inusual':
				$this->db->where('etapa_dato_nombre ', 'sed inusual');
			break;
			case 'hambre extrema':
				$this->db->where('etapa_dato_nombre ', 'hambre extrema');
			break;
			case 'dolor de espalda':
				$this->db->where('etapa_dato_nombre ', 'dolor de espalda');
			break;
			case 'dolor en articulaciones':
				$this->db->where('etapa_dato_nombre ', 'dolor en articulaciones');
			break;
			case 'pérdida de peso':
				$this->db->where('etapa_dato_nombre ', 'pérdida de peso');
			break;
			case 'aumento de peso':
				$this->db->where('etapa_dato_nombre ', 'aumento de peso');
			break;
			case 'desorden alimenticio':
				$this->db->where('etapa_dato_nombre ', 'desorden alimenticio');
			break;
			case 'dificultad para realizar actividad fisica':
				$this->db->where('etapa_dato_nombre ', 'dificultad para realizar actividad fisica');
			break;
			case 'hijos':
				$this->db->where('etapa_dato_nombre ', 'hijos');
			break;
			case 'cuántos hijos':
				$this->db->where('etapa_dato_nombre ', 'cuántos hijos');
			break;
			case 'alguno pesó más de 4kg':
				$this->db->where('etapa_dato_nombre ', 'alguno pesó más de 4kg');
			break;
			case 'tuvo diabetes gestacional':
				$this->db->where('etapa_dato_nombre ', 'tuvo diabetes gestacional');
			break;
			case 'tuvo hipertensión en el embarazo':
				$this->db->where('etapa_dato_nombre ', 'tuvo hipertensión en el embarazo');
			break;
			case 'periodo menstrual':
				$this->db->where('etapa_dato_nombre ', 'periodo menstrual');
			break;
			case 'fuma':
				$this->db->where('etapa_dato_nombre ', 'fuma');
			break;
			case 'cuánto fuma':
				$this->db->where('etapa_dato_nombre ', 'cuánto fuma');
			break;
			case 'alguna vez fumó':
				$this->db->where('etapa_dato_nombre ', 'alguna vez fumó');
			break;
			case 'cuando dejó de fumar':
				$this->db->where('etapa_dato_nombre ', 'cuando dejó de fumar');
			break;
			case 'bebe':
				$this->db->where('etapa_dato_nombre ', 'bebe');
			break;
			case 'frecuencia de consumo de alcohol':
				$this->db->where('etapa_dato_nombre ', 'frecuencia de consumo de alcohol');
			break;
			case 'vino':
				$this->db->where('etapa_dato_nombre ', 'vino');
			break;
			case 'cerveza':
				$this->db->where('etapa_dato_nombre ', 'cerveza');
			break;
			case 'destilados':
				$this->db->where('etapa_dato_nombre ', 'destilados');
			break;
			case 'drogas':
				$this->db->where('etapa_dato_nombre ', 'drogas');
			break;
			case 'marihuana':
				$this->db->where('etapa_dato_nombre ', 'marihuana');
			break;
			case 'cocaína':
				$this->db->where('etapa_dato_nombre ', 'cocaína');
			break;
			case 'alucinógenos':
				$this->db->where('etapa_dato_nombre ', 'alucinógenos');
			break;
			case 'pasta base':
				$this->db->where('etapa_dato_nombre ', 'pasta base');
			break;
			case 'ejercicio':
				$this->db->where('etapa_dato_nombre ', 'ejercicio');
			break;
			case 'cuanto veces come':
				$this->db->where('etapa_dato_nombre ', 'cuanto veces come');
			break;
			case 'desayuno':
				$this->db->where('etapa_dato_nombre ', 'desayuno');
			break;
			case 'almuerzo':
				$this->db->where('etapa_dato_nombre ', 'almuerzo');
			break;
			case 'onces':
				$this->db->where('etapa_dato_nombre ', 'onces');
			break;
			case 'comida':
				$this->db->where('etapa_dato_nombre ', 'comida');
			break;
			case 'cuántas veces come afuera':
				$this->db->where('etapa_dato_nombre ', 'cuántas veces come afuera');
			break;
			case 'pan':
				$this->db->where('etapa_dato_nombre ', 'pan');
			break;
			case 'marraqueta':
				$this->db->where('etapa_dato_nombre ', 'marraqueta');
			break;
			case 'hallulla':
				$this->db->where('etapa_dato_nombre ', 'hallulla');
			break;
			case 'pan amasado':
				$this->db->where('etapa_dato_nombre ', 'pan amasado');
			break;
			case 'pan especial blanco':
				$this->db->where('etapa_dato_nombre ', 'pan especial blanco');
			break;
			case 'pan especial integral':
				$this->db->where('etapa_dato_nombre ', 'pan especial integral');
			break;
			case 'pan molde blanco':
				$this->db->where('etapa_dato_nombre ', 'pan molde blanco');
			break;
			case 'pan molde integral':
				$this->db->where('etapa_dato_nombre ', 'pan molde integral');
			break;
			case 'porciones de pan':
				$this->db->where('etapa_dato_nombre ', 'porciones de pan');
			break;
			case 'autoevaluacion alimenticia':
				$this->db->where('etapa_dato_nombre ', 'autoevaluacion alimenticia');
			break;
			// case null:
				// $this->db->order_by('lote_fecha_cierre', 'ASC');
			// break;
		}
		
		$query =  $this->db->get();
		if ( $query->num_rows() > 0)
		{
			return $query->row()->etapa_dato_contenido;
		}
		else return false;
	}
	
	
}