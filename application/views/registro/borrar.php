<?php
if(!isset($_SERVER['PHP_AUTH_USER'])||($_SERVER['PHP_AUTH_USER']!="admin"||$_SERVER['PHP_AUTH_PW']!="cmmc28!")){
header('WWW-Authenticate: Basic realm="Acceso restringido"');
header('HTTP/1.0 401 Unauthorized');
echo "no autorizado";
exit;}
?>
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
				<h3 class="panel-title"><i class="fa fa-eraser"></i> Borrado de datos de los usuarios </h3>
			</div>
			<div class="panel-body">
				<div class="col-md-12">
					<div class='<?=$this->session->flashdata('mensaje_clase'); ?>'> <?=$this->session->flashdata('mensaje'); ?> </div>
				</div>
				<?php echo validation_errors(); ?>	
									
				<div class="row">
					<div class="col-md-12" align="center">
						<div class="row">
							<p>Este apartado es para borrar <strong style="color: red;"> todos </strong> los datos de los clientes y así dejar la aplicación más ligera de contenido.</p>
							<p>Antes de hacer esto, asegúrese de haber descargado los datos de esta aplicación, ya una vez realizado esto no se puede volver atrás</p>
						</div>
					</div>
					<div class="col-md-12" align="center">
						<div class="row">
							<div class="col-md-6">
								<a href="<?php echo site_url('descargar/excel/'); ?>"><button class="btn btn-lg btn-primary"><i class="fa fa-download"></i> Descargar</button></a>
							</div>
							<div class="col-md-6">
								<a href="#" onclick="eliminar();"><button class="btn btn-lg btn-danger"><i class="fa fa-trash"></i> Eliminar</button></a>		
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>

<script>
function eliminar()
{
	
       if (confirm('¿Está seguro de eliminar? Si lo hace, todos los datos de los usuarios se borrarán. Luego de esto, no podrá volver atrás.')) {
           window.location.href = '<?php echo site_url("registro/eliminar"); ?>';
       } else {
           return false;
       }

}
</script>