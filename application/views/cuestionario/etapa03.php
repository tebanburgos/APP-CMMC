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
								<form role="form" action="<?php echo site_url('cuestionario/ingresar_etapa03'); ?>" method="post" accept-charset="utf-8" id="formulario_etapa_3" name="formulario_etapa_3">
								<input type="hidden" name="usuario_id" value="<?php echo $this->uri->segment(3); ?>" />	
									<div class="row">
										<div class="row">
											<div class="col-md-12" align="center">
												<div class="form-group">
													<input type="hidden" name="etapa_id" value="3" />
													<label for="bajar_de_peso">¿Se ha sometido a algún tratamiento para bajar de peso?</label>
													<label class="radio-inline"><input type="radio" name="bajar_de_peso" id="check_si" onchange="javascript:showContent()" value="si" required>Sí</label>
													<label class="radio-inline"><input type="radio" name="bajar_de_peso" id="check_no" onchange="javascript:showContent()" value="no" required>No</label>
												</div>
											</div>
										</div>
										<div id="content_no" style="display: none;">
										
										</div>
										
										<div id="content_si" style="display: none;">
											<div class="col-md-12" align="center">
												<div class="form-group">
													<label for="tratamiento_bajar_de_peso">¿Qué tratamientos para bajar de peso ha intentado?</label>
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
																<td>Dietas con nutricionista o médico</td>
																<input type="hidden" value="no" name="dieta_nutricionista"/>
																<td><input type="checkbox" name="dieta_nutricionista" value="si"></td>
															</tr>
															<tr>
																<td>Programa médico multidisciplinario</td>
																<input type="hidden" value="no" name="programa_medico"/>
																<td><input type="checkbox" name="almuerzo" value="si"></td>
															</tr>
															<tr>
																<td>Fármacos</td>
																<input type="hidden" value="no" name="farmacos"/>
																<td><input type="checkbox" name="farmacos" value="si"></td>
															</tr>
															<tr>
																<td>Tratamiento psicológico</td>
																<input type="hidden" value="no" name="tratamiento_psicologico"/>
																<td><input type="checkbox" name="tratamiento_psicologico" value="si"></td>
															</tr>
															<tr>
																<td>Cirugía</td>
																<input type="hidden" value="no" name="cirugia"/>
																<td><input type="checkbox" name="cirugia" value="si"></td>
															</tr>
															<tr>
																<td>Otro</td>
																<input type="hidden" value="no" name="otro"/>
																<td><input type="checkbox" name="otro" value="si" id="check_otro_si" onchange="javascript:otroContent(this)"></td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
											
										
											<div id="content_otro_tramamiento" style="display: none;">										
												<div class="row">
													<div class="col-md-2 col-md-offset-5" align="center">
														<div class="form-group">
															<div>
																<label for="otro_tratamiento">Cuál(es)</label>
																<div class="form-group">
																	<input type="text" class="form-control" id="otro_tratamiento1" name="otro_tratamiento1" placeholder="Escribir aquí...">
																</div>
																<div class="form-group">
																	<input type="text" class="form-control" id="otro_tratamiento2" name="otro_tratamiento2" placeholder="Escribir aquí...">
																</div>
																<div class="form-group">
																	<input type="text" class="form-control" id="otro_tratamiento3" name="otro_tratamiento3" placeholder="Escribir aquí...">
																</div>
																<div class="form-group">
																	<input type="text" class="form-control" id="otro_tratamiento4" name="otro_tratamiento4" placeholder="Escribir aquí...">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12" align="center">
													<div class="form-group">
														<label for="ocaciones">¿En cuántas ocasiones ha intentado bajar de peso?</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-2 col-md-offset-5">
													<select class="form-control" id="ocaciones" name="ocaciones">
														<option>0</option>
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
														<option>Más de 5</option>
													</select>
												</div>
											</div>
											
											<div class="row">
												<div class="col-md-12" align="center">
													<div class="form-group">
														<label for="importancia">¿Qué nivel de importancia le atribuye usted a su necesidad de bajar de peso?</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-2 col-md-offset-5">
													<select class="form-control" id="importancia" name="importancia">
														<option>Nula</option>
														<option>Baja</option>
														<option>Media</option>
														<option>Alta</option>
														<option>Muy alta</option>
														<option>Urgencia</option>
													</select>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12" align="center">
													<div class="form-group">
														<label for="porque_necesita">¿Por qué razón cree necesitar el programa?</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6 col-md-offset-3">
													<textarea class="form-control" rows="3" id="porque_necesita" name="porque_necesita" placeholder="Escribir aquí..."></textarea>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12" align="center">
													<div class="form-group">
														<label for="que_cree">¿Qué cree usted que ocasiona su sobrepeso?</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6 col-md-offset-3">
													<textarea class="form-control" rows="3" id="que_cree" name="que_cree" placeholder="Escribir aquí..."></textarea>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12" align="center">
													<div class="form-group">
														<label for="que_le_molesta">Puntualmente, ¿qué le molesta de su peso?</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6 col-md-offset-3">
													<textarea class="form-control" rows="3" id="que_le_molesta" name="que_le_molesta" placeholder="Escribir aquí..."></textarea>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12" align="center">
													<div class="form-group">
														<label for="cuentenos_su_caso">Cuéntenos su caso </label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6 col-md-offset-3">
													<textarea class="form-control" rows="6" id="cuentenos_su_caso" name="cuentenos_su_caso" placeholder="Escribir aquí..."></textarea>
												</div>
											</div>
										
										</div>
								       
						  	</div>
			

				<script type="text/javascript">
					function showContent() {
						element_si = document.getElementById("content_si");
						element_no = document.getElementById("content_no");
						check_si = document.getElementById("check_si");
						check_fonasa = document.getElementById("check_no");
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
				
				<script type="text/javascript">
					function otroContent() {
						element_si = document.getElementById("content_otro_tramamiento");
						element_no = document.getElementById("content_no");
						check_si = document.getElementById("check_otro_si");
						check_fonasa = document.getElementById("check_no");
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
				
				
				<script type="text/javascript">
				function tratamiento(sel) {
					if (sel.value=="Otro"){
						divC = document.getElementById("content_otro_tramamiento");
						divC.style.display = "";
						
						divT = document.getElementById("nTargeta");
						divT.style.display = "none";
					}
					else{

						divC = document.getElementById("content_otro_tramamiento");
						divC.style.display="none";
					}
				}
				</script>
								
								
							</div>
								
								<button type="button" class="btn btn-default pull-left" id="boton_atras" onclick="history.back()" >Atrás</button>	
								<button type="submit" class="btn btn-primary pull-right">Siguiente</button>
								
								</form>
								  </div>
								  
								  
							</div>	
							</div>
							</div>
						</div>
					</div>