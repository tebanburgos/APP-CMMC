<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
	
		<div class="container-fluid" align="center">
			<div class="row" id="contenedor" align="left">
				<?php if ( $mensaje): ?>
				<?php mostrar_mensaje($mensaje, $mensaje_clase); ?>
				<?php endif; ?>
                <div class="bg-primary titlereg">
					<i class="fa fa-stethoscope"></i> Cuestionario de Evaluación Médica
					</div> 
                <div class="col-md-4" id="imagen-principal"><img src="<?php echo base_url('/assets/img/doctor.jpg'); ?>"></img></div>
				<div class="col-md-8" id="contenedor-bienvenido">
					
                   					<form class="form-horizontal">
						<ul>
							<div class="form-group form-group-sm">
								<br>
                                <span class="destacados"><strong>Estimado paciente:</strong></span>
								<br>
								<br>
								Lo invitamos a completar el siguiente cuestionario médico. La mayor parte de los campos <strong>no son obligatorios.</strong> Sin embargo, en la media que usted nos entregue mayor cantidad de información podremos enviarle un diagnóstico más específico de su situación clínica. Le recordamos que este diagnóstico es <strong>gratuito.</strong> 
								<br>
								<br>
								<ul>
									<strong><li>Consideraciones generales de la evaluación:</li></strong>
										<ul>
											<li>No reemplaza una atención médica presencial </li>
											<li>Su uso es referencial</li>
										</ul>
									<br>
									
									<strong><li>Procedimiento</li></strong>
										<ul>
											<li>ETAPA 1: El paciente debe completar el cuestionario de evaluación médica y enviarlo vía web.</li>
											<li>ETAPA 2: Se enviará el resultado de la evaluación a través de correo electrónico (en un plazo no superior a 5 horas hábiles) junto con los antecedentes del tratamiento de manejo de Sobrepeso y Obesidad de Clínica CMMC.</li>
										</ul>
									<br>
									
									<strong><li>Confidencialidad</li></strong>
										<ul>
											<li>La información enviada por el paciente a Clínica CMMC es confidencial, según la <strong>Ley N°20.584 que regula los derechos y deberes de las personas en relación con acciones vinculadas a su atención de salud.</strong> </li>
										</ul>
								</ul>
								<br>
								<br>
							</div>
						</ul>
					<div class="row" align="center">
								<a href="<?php echo site_url('/cuestionario/etapa01'); ?>"><button type="button" class="btn btn-primary btn-lg"><i class="fa fa-check-square-o"></i> Comenzar</button></a>
					</div>
					</form>
					
				</div>
				
				
				
			</div> <!-- /.row -->
		</div> <!-- /. container-fluid -->
	</body>
</html>