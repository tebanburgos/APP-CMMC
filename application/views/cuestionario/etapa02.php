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
					<div class="row" id="contenedor-general">
						<div class="col-md-12">
							<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title"><i class="fa fa-calculator"></i> <?=$titulo?></h3>
							</div>
							<div class="panel-body">
							<?php echo validation_errors(); ?>	
							<div class="row">
							  <div class="col-md-12">	
								<form role="form" action="<?php echo site_url('cuestionario/ingresar_etapa02'); ?>" method="post" accept-charset="utf-8" id="formulario_etapa_2" name="formulario_etapa_2">
								<input type="hidden" name="usuario_id" value="<?php echo $this->uri->segment(3); ?>" />	
								<div class="row">
								<div class="col-md-6">
									<div class="form-group" id="estatura">
										<label for="estatura">Estatura</label>
										<input type="text" class="form-control" id="estatura" name="estatura" placeholder="Ej: 1,75 mts" required>
									</div>
									<div class="form-group">
										<label for="peso">Ultimo peso registrado (kgs)</label>
										<input type="text" class="form-control" id="peso" name="peso" placeholder="Ej: 75 kg" required>
									</div>
									<div class="form-group">
										<label for="abdomen">Cicunferencia abdominal </label>
										<input type="text" class="form-control" id="abdomen" name="abdomen" required>
									</div>
								      
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="indicaciones_c_abdominal">Indicaciones para medir circunferencia abdominal</label>
										<p>Referencia: Medir 1 cm sobre el ombligo</p>
										<img src="<?php echo base_url('uploads/pictures/circunferencia_abdominal.jpg'); ?>" width="100%" height="100%">
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
	
							</div>
								<button type="button" class="btn btn-default pull-left" id="boton_atras" onclick="history.back()" ><i class="fa fa-chevron-left"></i> Atrás</button>	
								<button type="submit" class="btn btn-primary pull-right">Siguiente <i class="fa fa-chevron-right"></i></button>
								</form>
								
								  </div>
							</div>	
							</div>
							</div>
						</div>
					</div>