<!-- Include Bootstrap Datepicker -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

<script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
<script>
  webshims.setOptions('waitReady', false);
  webshims.setOptions('forms-ext', {types: 'date'});
  webshims.polyfill('forms forms-ext');
</script>


<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<style type="text/css">
/**
 * Override feedback icon position
 * See http://formvalidation.io/examples/adjusting-feedback-icon-position/
 */
#dateRangeForm .form-control-feedback {
    top: 0;
    right: -15px;
}
</style>
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title"><i class="fa fa-building-o"></i> <?=$titulo?></h3>
							</div>
							<div class="panel-body">
							<?php echo validation_errors(); ?>	
								
													
							<div class="row">
							  <div class="col-md-12">	
								<form role="form" action="<?php echo site_url('cuestionario/ingresar_etapa01'); ?>" method="post" accept-charset="utf-8" id="formulario_etapa_1" name="formulario_etapa_1">
								<div class="row">
								<div class="col-md-4">
								  <div class="form-group">
									<input type="hidden" name="etapa_id" value="1" />
								    <label for="nombres">Nombres</label>
									<input type="text" class="form-control" id="nombres" name="nombres" placeholder="Escribir aquí..." required>
								  </div>
								  <div class="form-group">
									<label for="apellidos">Apellidos</label>
									<input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Escribir aquí..." required>
								  </div>
								  <div class="form-group">
									<label for="telefono_fijo">Teléfono fijo</label>
									<input type="text" class="form-control" id="telefono_fijo" name="telefono_fijo" onkeypress="javascript:return validarNro(event)" placeholder="Ej: 22553344">
								  </div>
								  <div class="form-group">
									<label for="celular">Celular</label>
									<input type="text" class="form-control" id="celular" name="celular" onkeypress="javascript:return validarNro(event)" placeholder="Ej: 99887766"required>
								  </div>
								  
								  <div class="form-group">
									 <label for="email">Email</label>
									 <input type="email" class="form-control" id="email" name="email" placeholder="Ej: correo@dominio.cl"required>
								 </div>       
						  	</div>
								
								
								
								<div class="col-md-4">
								   <div class="form-group">
									<label for="prevision">Previsión</label>
									<label class="radio-inline"><input type="radio" name="prevision" id="check_isapre" onchange="javascript:showContent()" value="isapre" required>Isapre</label>
									<label class="radio-inline"><input type="radio" name="prevision" id="check_fonasa" onchange="javascript:showContent()" value="fonasa" required>FONASA</label>
								  </div>
								  
								   <div class="form-group" id="content_isapre" style="display: none;">
									<label for="tipo_isapre">Nombre de Isapre</label>
									<input type="text" class="form-control" id="tipo_isapre" name="tipo_isapre">
								  </div>

									<div class="form-group" id="content_fonasa" style="display: none;">
										<label for="tipo_fonasa">Tipo de afiliación</label>
										<select class="form-control" id="tipo_fonasa" name="tipo_fonasa">
											<option>Nivel A</option>
											<option>Nivel B</option>
											<option>Nivel C</option>
											<option>Nivel D</option>
										</select>
									</div>
								</div>
								
								<div class="col-md-4">  
								  <div class="form-group">
									<label for="telefono">Edad</label>
									<input type="number" class="form-control" id="edad" name="edad" min="1" max="120" onkeypress="javascript:return validarNro(event)" required>
								  </div>
								  <div class="form-group">
										<label for="genero">Género</label>
										<select class="form-control" id="genero" name="genero" required>
											<option>M</option>
											<option>F</option>
										</select>
									</div>
									
									
								<div class="form-group">
									<label for="comuna">Región</label>
									<select class="form-control" id="region" name="region" required>
										<option value="">Seleccione una región</option>
										<?php $listado_regiones = $this->cuestionario_model->consultar_regiones(); ?>
										<?php foreach ( $listado_regiones->result() as $lr): ?>
										<option value="<?php echo $lr->region_id; ?>"><?php echo $lr->region_nombre; ?></option>
										<?php endforeach; ?>
									</select>
								</div>
								
								<div class="form-group">
									<label for="ocupacion">Comuna</label>
									<input type="text" class="form-control" id="comuna" name="comuna" placeholder="Escribir aquí..." required>
								</div>
									
								  <div class="form-group">
									<label for="ocupacion">Ocupación</label>
									<input type="text" class="form-control" id="ocupacion" name="ocupacion" placeholder="Escribir aquí..." required>
								  </div>

								  
								  
								</div>
								
								
					<script language="javascript">

					function validarNro(e) {
						var key;
						if(window.event) // IE
							{
								key = e.keyCode;
							}
							else if(e.which) // Netscape/Firefox/Opera
							{
								key = e.which;
							}
							if (key < 48 || key > 57)
							{
								if(key == 32 || key == 8 || key == 45 ) // Detectar espacio, y backspace (retroceso) y - (guión)
									{ return true; }
								else 
									{ return false; }
							}
						return true;

					}

					</script>

					<script type="text/javascript">
					function showContent() {
						element_isapre = document.getElementById("content_isapre");
						element_fonasa = document.getElementById("content_fonasa");
						check_isapre = document.getElementById("check_isapre");
						check_fonasa = document.getElementById("check_fonasa");
						if (check_isapre.checked) {
							element_isapre.style.display='block';
							element_fonasa.style.display='none';
						}
						else
						{
							if (check_fonasa.checked) {
								element_fonasa.style.display='block';
								element_isapre.style.display='none';
							}
							else {
								element_isapre.style.display='none';
								element_fonasa.style.display='none';
							}
						}
					}
				</script>
	
							</div>
								
								<button type="submit" class="btn btn-primary pull-right">Siguiente</button>
								
								</form>
								  </div>
								  
								  
							</div>	
							</div>
							</div>
						</div>
					</div>