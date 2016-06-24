<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php
			header('Content-type: application/vnd.ms-excel');
			header("Content-Disposition: attachment; filename=cmmc_resultados.xls");
			header("Pragma: no-cache");
			header("Expires: 0");
		?>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<table>
					<thead>
						<tr>
							<th>Código del usuario</th>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Teléfono Fijo</th>
							<th>Celular</th>
							<th>Email</th>
							<th>Previsión</th>
							<th>Tipo o nombre de previsión</th>
							<th>Edad</th>
							<th>Género</th>
							<th>Región</th>
							<th>Comuna</th>
							<th>Ocupación</th>
							<th>Estatura</th>
							<th>Peso</th>
							<th>Abdomen</th>
							<th>¿Se ha sometido a tratamiento para bajar de peso?</th>
							<th>¿Dieta con nutricionista o médico?</th>
							<th>¿Programa médico?</th>
							<th>¿Fármacos?</th>
							<th>¿Tratamiento psicológico?</th>
							<th>¿Cirugía?</th>
							<th>¿Otro tratamiento?</th>
							<th>Otro tratamiento 01</th>
							<th>Otro tratamiento 02</th>
							<th>Otro tratamiento 03</th>
							<th>Otro tratamiento 04</th>
							<th>¿En cuántas ocasiones ha intentado bajar de peso?</th>
							<th>¿Qué nivel de importancia le atribuye usted a su necesidad de bajar de peso?</th>
							<th>¿Por qué razón cree necesitar el programa?</th>
							<th>¿Qué cree usted que ocasiona su sobrepeso?</th>
							<th>¿Puntualmente, que le molesta de su peso?</th>
							<th>Cuentenos su caso</th>
							<th>¿Diabetes?</th>
							<th>¿Resistencia a la insulina?</th>
							<th>¿Hipertensión arterial?</th>
							<th>¿Enfermedades cardiovasculares?</th>
							<th>¿Gota?</th>
							<th>¿Disfunción tiroidea?</th>
							<th>¿Apnea del sueño?</th>
							<th>¿Osteoartritis?</th>
							<th>¿Osteoporosis?</th>
							<th>¿Dolor de espalda?</th>
							<th>¿Asma?</th>
							<th>¿Depresión?</th>
							<th>¿Trastorno del ánimo / personalidad?</th>
							<th>¿Medicamentos?</th>
							<th>Nombre medicamentos 01</th>
							<th>Nombre medicamentos 02</th>
							<th>Nombre medicamentos 03</th>
							<th>Nombre medicamentos 04</th>
							<th>Nombre medicamentos 05</th>
							<th>Nombre medicamentos 06</th>
							<th>Nombre medicamentos 07</th>
							<th>¿Alérgico?</th>
							<th>Alergia 01</th>
							<th>Alergia 02</th>
							<th>Alergia 03</th>
							<th>Alergia 04</th>
							<th>¿Operado?</th>
							<th>Operaciones 01</th>
							<th>Operaciones 02</th>
							<th>Operaciones 03</th>
							<th>Operaciones 04</th>
							<th>Ansiedad</th>
							<th>Dificultad para dormir</th>
							<th>Somnolencia</th>
							<th>Irritabilidad</th>
							<th>Cansancio</th>
							<th>Sensación de depresión</th>
							<th>Dolor en el pecho</th>
							<th>Dificultad para respirar</th>
							<th>Constante necesidad de orinar</th>
							<th>Sed inusual</th>
							<th>Hambre extrema</th>
							<th>Dolor en la espalda</th>
							<th>Dolor en articulaciones</th>
							<th>Pérdida inusual de peso</th>
							<th>Aumento inusual de peso</th>
							<th>Desorden en la alimentación</th>
							<th>Dificultad para realizar actividad física</th>
							<th>¿Hijos?</th>
							<th>Cuántos Hijos</th>
							<th>¿Alguno de sus hijos pesó al nacer más de 4 kilogramos?</th>
							<th>¿Diabetes gestacional?</th>
							<th>¿Hipertención del embarazo?</th>
							<th>Su período menstrual</th>
							<th>Fuma</th>
							<th>¿Cuántos cigarros en promedio fuma al día?</th>
							<th>¿Alguna vez fumó?</th>
							<th>¿Cuándo dejó de fumar?</th>
							<th>Bebe</th>
							<th>¿Con qué frecuencia bebe alcohol?</th>
							<th>Vino</th>
							<th>Cerveza</th>
							<th>Destilados</th>
							<th>Drogas</th>
							<th>¿Marihuana?</th>
							<th>¿Cocaína?</th>
							<th>¿Alucinógenos?</th>
							<th>¿Pasta base?</th>
							<th>Ejercicio</th>
							<th>¿Cuánta veces come al día?</th>
							<th>¿Desayuno?</th>
							<th>¿Almuerzo?</th>
							<th>¿Onces?</th>
							<th>¿Comida?</th>
							<th>¿Cuántas veces come fuera de su casa durante la semana?</th>
							<th>¿Pan?</th>
							<th>¿Marraqueta?</th>
							<th>¿Hallula?</th>
							<th>¿Pan amasado?</th>
							<th>¿Pan especial (blanco)?</th>
							<th>¿Pan especial (integral)?</th>
							<th>¿Pan de molde blanco?</th>
							<th>¿Pan de molde integral?</th>
							<th>Porciones de pan</th>
							<th>Autoevaluación alimenticia</th>
						</tr>
					</thead>

				<tbody>
				<?php $listado_usuarios = $this->descargar_model->consultar_usuarios(); ?>
				<?php if ( $listado_usuarios): ?>
				<?php foreach ( $listado_usuarios->result() as $lu): ?>
					<tr>
						<td><?=$lu->usuario_id?></td>
						<td><?=$lu->usuario_nombres?></td>
						<td><?=$lu->usuario_apellidos?></td>
						<td><?=$lu->usuario_telefono_fijo?></td>
						<td><?=$lu->usuario_celular?></td>
						<td><?=$lu->usuario_email?></td>
						<td><?=$lu->usuario_prevision?></td>
						<td><?=$lu->usuario_prevision_tipo?></td>
						<td><?=$lu->usuario_edad?></td>
						<td><?=$lu->usuario_genero?></td>
						<td><?=$this->descargar_model->consultar_region_de_usuario($lu->usuario_id)?></td>
						<td><?=$lu->usuario_comuna?></td>
						<td><?=$lu->usuario_ocupacion?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'estatura')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'peso')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'abdomen')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'sometido a tratamiento de peso')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'dieta nutricionista')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'programa médico')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'fármacos')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'tratamiento psicológico')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'cirugía')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'otro')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'otro tratamiento 01')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'otro tratamiento 02')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'otro tratamiento 03')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'otro tratamiento 04')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'cuantas ocaciones ha intentado')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'nivel de importancia')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'por qué lo necesita')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'qué cree que lo ocaciona')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'qué le molesta')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'su caso')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'diabetes')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'resistencia a la insulina')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'hipertensión arterial')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'enfermedades cardiovasculares')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'gota')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'disfunción tiroidea')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'apnea')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'osteoartritis')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'osteoporosis')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'enfermedad dolor de espalda')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'asma')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'depresión')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'trastorno del ánimo o personalidad')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'toma medicamentos')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'nombre medicamento 01')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'nombre medicamento 02')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'nombre medicamento 03')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'nombre medicamento 04')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'nombre medicamento 05')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'nombre medicamento 06')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'nombre medicamento 07')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'es alérgico')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'alergia 01')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'alergia 02')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'alergia 03')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'alergia 04')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'ha sido operado')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'operación 01')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'operación 02')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'operación 03')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'operación 04')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'ansiedad')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'dificultad para dormir')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'somnolencia')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'irritabilidad')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'cansancio')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'sensación de depresión')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'dolor en el pecho')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'dificultad para respirar')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'necesidad de orinar')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'sed inusual')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'hambre extrema')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'dolor de espalda')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'dolor en articulaciones')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'pérdida de peso')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'aumento de peso')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'desorden alimenticio')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'dificultad para realizar actividad fisica')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'hijos')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'cuántos hijos')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'alguno pesó más de 4kg')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'tuvo diabetes gestacional')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'tuvo hipertensión en el embarazo')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'periodo menstrual')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'fuma')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'cuánto fuma')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'alguna vez fumó')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'cuando dejó de fumar')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'bebe')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'frecuencia de consumo de alcohol')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'vino')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'cerveza')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'destilados')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'drogas')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'marihuana')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'cocaína')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'alucinógenos')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'pasta base')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'ejercicio')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'cuanto veces come')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'desayuno')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'almuerzo')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'onces')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'comida')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'cuántas veces come afuera')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'pan')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'marraqueta')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'hallulla')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'pan amasado')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'pan especial blanco')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'pan especial integral')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'pan molde blanco')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'pan molde integral')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'porciones de pan')?></td>
						<td><?=$this->descargar_model->consultar_etapas_datos_por_usuario($lu->usuario_id, 'autoevaluacion alimenticia')?></td>
					</tr>
				<?php endforeach; ?>
				<?php else: ?>
				<div class="col-sm-6 col-md-2">
					<p class="alert alert-warning"> No hay usuarios en el sistema</p>
				</div>
				<?php endif; ?>				
				
				</tbody>	
				
				
				</table>
			</div> <!-- /.row -->
		</div> <!-- /. container-fluid -->
	</body>
</html>