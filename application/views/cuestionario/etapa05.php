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
								<h3 class="panel-title"><i class="fa fa-cutlery"></i> <?=$titulo?></h3>
							</div>
							<div class="panel-body">
							<?php echo validation_errors(); ?>	
								
													
							<div class="row">
							  <div class="col-md-12">
								<form role="form" action="<?php echo site_url('cuestionario/ingresar_etapa05'); ?>" method="post" accept-charset="utf-8" id="formulario_etapa_5" name="formulario_etapa_5">
								<input type="hidden" name="usuario_id" value="<?php echo $this->uri->segment(3); ?>" />	
									<div class="row">
										<input type="hidden" name="etapa_id" value="5" />
										<div class="row">
											<div class="col-md-12" align="center">
												<div class="form-group">
													<label for="cuentas_veces">¿Cuántas veces come al dia?</label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4 col-md-offset-4">
												<div class="form-group">
													<select class="form-control" id="cuanto_come" name="cuanto_come" required>
														<option>Ninguna</option>
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
														<option>Más de 5</option>
													</select>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-md-12" align="center">
												<div class="form-group">
													<label for="que_comida_1">¿Qué comidas come usualmente?</label>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-md-6 col-md-offset-3">
												<table class="table table-striped">
													<thead>
														<tr>
															<th>&nbsp;</th>
															<th>&nbsp;</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Desayuno</td>
															<input type="hidden" value="no" name="desayuno"/>
															<td><input type="checkbox" name="desayuno" value="si"></td>
														</tr>
														<tr>
															<td>Almuerzo</td>
															<input type="hidden" value="no" name="almuerzo"/>
															<td><input type="checkbox" name="almuerzo" value="si"></td>
														</tr>
														<tr>
															<td>Onces</td>
															<input type="hidden" value="no" name="onces"/>
															<td><input type="checkbox" name="onces" value="si"></td>
														</tr>
														<tr>
															<td>Comida</td>
															<input type="hidden" value="no" name="comida"/>
															<td><input type="checkbox" name="comida" value="si"></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										
										<div class="row">
											<div class="col-md-12" align="center">
												<div class="form-group">
													<label for="cuentas_veces_afuera">¿Cuántas veces come fuera de su casa durante la semana? </label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4 col-md-offset-4">
												<div class="form-group">
													<select class="form-control" id="cuanto_come_afuera" name="cuanto_come_afuera" required>
                                                        <option>Ninguna</option>
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
														<option>Más de 5</option>
													</select>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-md-12" align="center">
												<div class="form-group">
													<label for="consume_pan">¿Consume Pan?</label>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-md-4 col-md-offset-4" align="center">
												<div class="form-group">
												<label class="radio-inline"><input type="radio" name="pan" id="check_pan_si" onchange="javascript:panContent()" value="si" required>Sí</label>
												<label class="radio-inline"><input type="radio" name="pan" id="check_pan_no" onchange="javascript:panContent()" value="no" required>No</label>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div id="content_pan_si" style="display: none;">
												<div class="row">
													<div class="col-md-12" align="center">
														<div class="form-group">
															<label for="tipo_pan_1">¿Qué tipo de pan consume regularmente?</label>
															<br>
															<label for="tipo_pan_2">(seleccionar más de una alternativa si es necesario)</label>
														</div>
													</div>
												</div>
										
												<div class="row">
													<div class="col-md-6 col-md-offset-3">
														<table class="table table-striped">
															<thead>
																<tr>
																	<th>&nbsp;</th>
																	<th>&nbsp;</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>Marraqueta</td>
																	<input type="hidden" value="no" name="marraqueta"/>
																	<td><input type="checkbox" name="marraqueta" value="si"></td>
																</tr>
																<tr>
																	<td>Hallulla</td>
																	<input type="hidden" value="no" name="hallulla"/>
																	<td><input type="checkbox" name="hallulla" value="si"></td>
																</tr>
																<tr>
																	<td>Pan amasado</td>
																	<input type="hidden" value="no" name="pan_amasado"/>
																	<td><input type="checkbox" name="pan_amasado" value="si"></td>
																</tr>
																<tr>
																	<td>Pan especial (blanco)</td>
																	<input type="hidden" value="no" name="pan_especial_blanco"/>
																	<td><input type="checkbox" name="pan_especial_blanco" value="si"></td>
																</tr>
																<tr>
																	<td>Pan especial (integral)</td>
																	<input type="hidden" value="no" name="pan_especial_integral"/>
																	<td><input type="checkbox" name="pan_especial_integral" value="si"></td>
																</tr>
																<tr>
																	<td>Pan de molde blanco</td>
																	<input type="hidden" value="no" name="pan_molde_blanco"/>
																	<td><input type="checkbox" name="pan_molde_blanco" value="si"></td>
																</tr>
																<tr>
																	<td>Pan de molde integral</td>
																	<input type="hidden" value="no" name="pan_molde_integral"/>
																	<td><input type="checkbox" name="pan_molde_integral" value="si"></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												
												<div class="row">
													<div class="col-md-12" align="center">
														<div class="form-group">
															<label for="cuantas_porciones">¿Cuántas porciones de pan consume diariamente?</label>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-3 col-md-offset-2">
														<div class="form-group">
															<select class="form-control" id="porciones_de_pan" name="porciones_de_pan">
																<option>Ninguna</option>
																<option>1 porción</option>
																<option>2 porciones</option>
																<option>3 porciones</option>
																<option>4 porciones</option>
																<option>5 porciones</option>
																<option>6 porciones</option>
																<option>Más de 6 porciones</option>
															</select>
														</div>
													</div>
													<div class="col-md-4 col-md-offset-1">
														<div class="form-group">
															<p>1 porción de pan = 1/2 hallulla o 1/2 marraqueta o 3 rebanadas de pan molde o 1 1/2 unidad de pan integral</p>
														</div>
													</div>
												</div>	
												
											</div>
										</div>
											
										<div id="content_pan_no" style="display: none;">
											
										</div>
											
										<div class="row">
											<div class="col-md-12" align="center">
												<div class="form-group">
													<label for="evaluacion_alimentacion">Si tuviera que evaluar la "calidad de su alimentación", ¿Con qué nota lo haría?</label>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-md-4 col-md-offset-4">
												<div class="form-group">
													<select class="form-control" id="evaluacion_calidad_alimentacion" name="evaluacion_calidad_alimentacion" required>
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
														<option>6</option>
														<option>7</option>
													</select>
												</div>
											</div>
										</div>
										
							<button type="button" class="btn btn-default pull-left" id="boton_atras" onclick="history.back()" ><i class="fa fa-chevron-left"></i> Atrás</button>	
								<button type="submit" class="btn btn-primary pull-right">Siguiente <i class="fa fa-chevron-right"></i></button>
								</div>
								</form>
								  
			

						<script type="text/javascript">
							function panContent() {
								element_si = document.getElementById("content_pan_si");
								element_no = document.getElementById("content_pan_no");
								check_si = document.getElementById("check_pan_si");
								check_no = document.getElementById("check_pan_no");
								if (check_si.checked) {
									element_si.style.display='block';
									element_no.style.display='none';
								}
								else
								{
									if (check_no.checked) {
										element_no.style.display='block';
										element_si.style.display='none';
									}
									else {
										element_si.style.display='none';
										element_no.style.display='none';
									}
								}
							}
						</script>
				
							</div>
								
								  </div>
								  
								  
							</div>	
							</div>
							</div>
						</div>