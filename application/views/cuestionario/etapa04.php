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
								<h3 class="panel-title"><i class="fa fa-user-md"></i> <?=$titulo?></h3>
							</div>
							<div class="panel-body">
							<?php echo validation_errors(); ?>	
								
													
							<div class="row">
							  <div class="col-md-12">
								<form role="form" action="<?php echo site_url('cuestionario/ingresar_etapa04'); ?>" method="post" accept-charset="utf-8" id="formulario_etapa_4" name="formulario_etapa_4">
								<input type="hidden" name="usuario_id" value="<?php echo $this->uri->segment(3); ?>" />	
									<div class="row">
										<input type="hidden" name="etapa_id" value="4" />
										<div class="row">
											<div class="col-md-12" align="center">
												<div class="form-group">
													<label for="enfermedad">¿Tiene o ha tenido alguna enfermedad? </label>
													<label>(Hospitalización/ Secuela / Tratamiento Crónico)</label>
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
																<td>Diabetes</td>
																<input type="hidden" value="no" name="diabetes"/>
																<td><input type="checkbox" name="diabetes" value="si"></td>
															</tr>
															<tr>
																<td>Resistencia a la insulina</td>
																<input type="hidden" value="no" name="resistencia_a_insulina"/>
																<td><input type="checkbox" name="resistencia_a_insulina" value="si"></td>
															</tr>
															<tr>
																<td>Hipertensión arterial</td>
																<input type="hidden" value="no" name="hipertension_arterial"/>
																<td><input type="checkbox" name="hipertension_arterial" value="si"></td>
															</tr>
															<tr>
																<td>Enfermedades cardiovasculares</td>
																<input type="hidden" value="no" name="enfermedades_cardiovasculares"/>
																<td><input type="checkbox" name="enfermedades_cardiovasculares" value="si"></td>
															</tr>
															<tr>
																<td>Gota</td>
																<input type="hidden" value="no" name="gota"/>
																<td><input type="checkbox" name="gota" value="si"></td>
															</tr>
															<tr>
																<td>Disfunción tiroidea</td>
																<input type="hidden" value="no" name="disfuncion_tiroidea"/>
																<td><input type="checkbox" name="disfuncion_tiroidea" value="si"></td>
															</tr>
															<tr>
																<td>Apnea del sueño</td>
																<input type="hidden" value="no" name="apnea"/>
																<td><input type="checkbox" name="apnea" value="si"></td>
															</tr>
															<tr>
																<td>Osteoartritis</td>
																<input type="hidden" value="no" name="osteoartritis"/>
																<td><input type="checkbox" name="osteoartritis" value="si"></td>
															</tr>
															<tr>
																<td>Osteoporosis</td>
																<input type="hidden" value="no" name="osteoporosis"/>
																<td><input type="checkbox" name="osteoporosis" value="si"></td>
															</tr>
															<tr>
																<td>Dolor de espalda</td>
																<input type="hidden" value="no" name="enfermedad_dolor_de_espalda"/>
																<td><input type="checkbox" name="gota" value="si"></td>
															</tr>
															<tr>
																<td>Asma</td>
																<input type="hidden" value="no" name="asma"/>
																<td><input type="checkbox" name="asma" value="si"></td>
															</tr>
															<tr>
																<td>Depresión</td>
																<input type="hidden" value="no" name="depresion"/>
																<td><input type="checkbox" name="depresion" value="si"></td>
															</tr>
															<tr>
																<td>Trastorno del ánimo / personalidad</td>
																<input type="hidden" value="no" name="transtorno_animo_personalidad"/>
																<td><input type="checkbox" name="transtorno_animo_personalidad" value="si"></td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
											
										<div class="row">
											<div class="col-md-12" align="center">
												<div class="form-group">
													<label for="prevision">¿Toma algún Medicamento todos los días? </label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4 col-md-offset-4" align="center">
												<div class="form-group">
												<label class="radio-inline"><input type="radio" name="algun_medicamento" id="check_medicamento_si" onchange="javascript:medicamentoContent()" value="si" required>Sí</label>
												<label class="radio-inline"><input type="radio" name="algun_medicamento" id="check_medicamento_no" onchange="javascript:medicamentoContent()" value="no" required>No</label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2 col-md-offset-5" align="center">
												<div id="content_medicamento_si" style="display: none;">
													<div class="form-group">
														<div>
															<label for="otro_tratamiento">Cuál o cuáles</label>
															<div class="form-group">
																<input type="text" class="form-control" id="medicamento1" name="medicamento1" placeholder="Escribir aquí...">
															</div>
															<div class="form-group">
																<input type="text" class="form-control" id="medicamento2" name="medicamento2" placeholder="Escribir aquí...">
															</div>
															<div class="form-group">
																<input type="text" class="form-control" id="medicamento3" name="medicamento3" placeholder="Escribir aquí...">
															</div>
															<div class="form-group">
																<input type="text" class="form-control" id="medicamento4" name="medicamento4" placeholder="Escribir aquí...">
															</div>
															<div class="form-group">
																<input type="text" class="form-control" id="medicamento5" name="medicamento5" placeholder="Escribir aquí...">
															</div>
															<div class="form-group">
																<input type="text" class="form-control" id="medicamento6" name="medicamento6" placeholder="Escribir aquí...">
															</div>
															<div class="form-group">
																<input type="text" class="form-control" id="medicamento7" name="medicamento7" placeholder="Escribir aquí...">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
											
										<div id="content_medicamento_no" style="display: none;">
											
										</div>
											
										<div class="row">
											<div class="col-md-12" align="center">
												<div class="form-group">
													<label for="alergia_a_algo">¿Es alérgico a algo?</label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4 col-md-offset-4" align="center">
												<div class="form-group">
													<label class="radio-inline"><input type="radio" name="alergico" id="check_alergico_si" onchange="javascript:alergiaContent()" value="si" required>Sí</label>
													<label class="radio-inline"><input type="radio" name="alergico" id="check_alergico_no" onchange="javascript:alergiaContent()" value="no" required>No</label>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-md-2 col-md-offset-5" align="center">
												<div id="content_alegico_si" style="display: none;">
													<div class="form-group">
														<div>
															<label for="a_que_alergia">¿A qué?</label>
															<div class="form-group">
																<input type="text" class="form-control" id="alergia1" name="alergia1" placeholder="Escribir aquí...">
															</div>
															<div class="form-group">
																<input type="text" class="form-control" id="alergia2" name="alergia2" placeholder="Escribir aquí...">
															</div>
															<div class="form-group">
																<input type="text" class="form-control" id="alergia3" name="alergia3" placeholder="Escribir aquí...">
															</div>
															<div class="form-group">
																<input type="text" class="form-control" id="alergia4" name="alergia4" placeholder="Escribir aquí...">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
											
										<div id="content_alergico_no" style="display: none;">
											
										</div>
										
										<div class="row">
											<div class="col-md-12" align="center">
												<div class="form-group">
													<label for="alguna_vez_operado">¿Alguna vez lo han operado?</label>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-md-4 col-md-offset-4" align="center">
												<div class="form-group">
													<label class="radio-inline"><input type="radio" name="operado" id="check_operado_si" onchange="javascript:operadoContent()" value="si" required>Sí</label>
													<label class="radio-inline"><input type="radio" name="operado" id="check_operado_no" onchange="javascript:operadoContent()" value="no" required>No</label>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-md-2 col-md-offset-5" align="center">
												<div id="content_operado_si" style="display: none;">
													<div class="form-group">
														<div>
															<label for="de_que_operado">¿De qué?</label>
															<div class="form-group">
																<input type="text" class="form-control" id="operacion1" name="operacion1" placeholder="Escribir aquí...">
															</div>
															<div class="form-group">
																<input type="text" class="form-control" id="operacion2" name="operacion2" placeholder="Escribir aquí...">
															</div>
															<div class="form-group">
																<input type="text" class="form-control" id="operacion3" name="operacion3" placeholder="Escribir aquí...">
															</div>
															<div class="form-group">
																<input type="text" class="form-control" id="operacion4" name="operacion4" placeholder="Escribir aquí...">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
											
										<div id="content_operado_no" style="display: none;">
											
										</div>
										
										<div class="row">
											<div class="col-md-12" align="center">
												<div class="form-group">
													<label for="alguna_vez_operado">¿Sufre (de manera frecuente) alguno de estos síntomas?</label>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-md-6 col-md-offset-3">
												
													<table class="table table-striped">
														<thead>
															<tr>
																<th>Sintoma</th>
																<th>&nbsp;</th>
																<th>&nbsp;</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>Ansiedad</td>
																<td><label class="radio-inline"><input type="radio" name="ansiedad" value="si" required>Sí</label></td>
																<td><label class="radio-inline"><input type="radio" name="ansiedad" value="no" required>No</label></td>
															</tr>
															<tr>
																<td>Dificultad para dormir</td>
																<td><label class="radio-inline"><input type="radio" name="dificultad_para_dormir" value="si" required>Sí</label></td>
																<td><label class="radio-inline"><input type="radio" name="dificultad_para_dormir" value="no" required>No</label></td>
															</tr>
															<tr>
																<td>Somnolencia</td>
																<td><label class="radio-inline"><input type="radio" name="somnolencia" value="si" required>Sí</label></td>
																<td><label class="radio-inline"><input type="radio" name="somnolencia" value="no" required>No</label></td>
															</tr>
															<tr>
																<td>Irritabilidad</td>
																<td><label class="radio-inline"><input type="radio" name="irritabilidad" value="si" required>Sí</label></td>
																<td><label class="radio-inline"><input type="radio" name="irritabilidad" value="no" required>No</label></td>
															</tr>
															<tr>
																<td>Cansancio</td>
																<td><label class="radio-inline"><input type="radio" name="cansancio" value="si" required>Sí</label></td>
																<td><label class="radio-inline"><input type="radio" name="cansancio" value="no" required>No</label></td>
															</tr>
															<tr>
																<td>Sensación de depresión</td>
																<td><label class="radio-inline"><input type="radio" name="sensacion_de_depresion" value="si" required>Sí</label></td>
																<td><label class="radio-inline"><input type="radio" name="sensacion_de_depresion" value="no" required>No</label></td>
															</tr>
															<tr>
																<td>Dolor en el pecho</td>
																<td><label class="radio-inline"><input type="radio" name="dolor_en_el_pecho" value="si" required>Sí</label></td>
																<td><label class="radio-inline"><input type="radio" name="dolor_en_el_pecho" value="no" required>No</label></td>
															</tr>
															<tr>
																<td>Dificultad para respirar</td>
																<td><label class="radio-inline"><input type="radio" name="dificultad_para_respirar" value="si" required>Sí</label></td>
																<td><label class="radio-inline"><input type="radio" name="dificultad_para_respirar" value="no" required>No</label></td>
															</tr>
															<tr>
																<td>Constante necesidad de orinar</td>
																<td><label class="radio-inline"><input type="radio" name="necesidad_de_orinar" value="si" required>Sí</label></td>
																<td><label class="radio-inline"><input type="radio" name="necesidad_de_orinar" value="no" required>No</label></td>
															</tr>
															<tr>
																<td>Sed inusual</td>
																<td><label class="radio-inline"><input type="radio" name="sed_inusual" value="si" required>Sí</label></td>
																<td><label class="radio-inline"><input type="radio" name="sed_inusual" value="no" required>No</label></td>
															</tr>
															<tr>
																<td>Hambre extrema</td>
																<td><label class="radio-inline"><input type="radio" name="hambre_extrema" value="si" required>Sí</label></td>
																<td><label class="radio-inline"><input type="radio" name="hambre_extrema" value="no" required>No</label></td>
															</tr>
															<tr>
																<td>Dolor en la espalda</td>
																<td><label class="radio-inline"><input type="radio" name="dolor_de_espalda" value="si" required>Sí</label></td>
																<td><label class="radio-inline"><input type="radio" name="dolor_de_espalda" value="no" required>No</label></td>
															</tr>
															<tr>
																<td>Dolor en articulaciones</td>
																<td><label class="radio-inline"><input type="radio" name="dolor_en_articulaciones" value="si" required>Sí</label></td>
																<td><label class="radio-inline"><input type="radio" name="dolor_en_articulaciones" value="no" required>No</label></td>
															</tr>
															<tr>
																<td>Pérdida inusual de peso</td>
																<td><label class="radio-inline"><input type="radio" name="perdida_de_peso" value="si" required>Sí</label></td>
																<td><label class="radio-inline"><input type="radio" name="perdida_de_peso" value="no" required>No</label></td>
															</tr>
															<tr>
																<td>Aumento inusual de peso</td>
																<td><label class="radio-inline"><input type="radio" name="aumento_de_peso" value="si" required>Sí</label></td>
																<td><label class="radio-inline"><input type="radio" name="aumento_de_peso" value="no" required>No</label></td>
															</tr>
															<tr>
																<td>Desorden en la alimentación</td>
																<td><label class="radio-inline"><input type="radio" name="desorden_alimenticio" value="si" required>Sí</label></td>
																<td><label class="radio-inline"><input type="radio" name="desorden_alimenticio" value="no" required>No</label></td>
															</tr>
															<tr>
																<td>Dificultad para realizar actividad física</td>
																<td><label class="radio-inline"><input type="radio" name="dificultad_fisica" value="si" required>Sí</label></td>
																<td><label class="radio-inline"><input type="radio" name="dificultad_fisica" value="no" required>No</label></td>
															</tr>
														</tbody>
													</table>
												
											</div>
										</div>
										
										<?php $genero = $this->cuestionario_model->consultar_genero($this->uri->segment(3)); ?>
										<input type="hidden" name="genero" value="<?php echo $genero; ?>" />
										<?php if ($genero == "F"){ ?>
										
										<div class="row">
											<div class="col-md-12" align="center">
												<div class="form-group">
													<label for="tiene_hijos">¿Tiene hijos?</label>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-md-4 col-md-offset-4" align="center">
												<div class="form-group">
													<label class="radio-inline"><input type="radio" name="hijos" id="check_hijos_si" onchange="javascript:hijosContent()" value="si">Sí</label>
													<label class="radio-inline"><input type="radio" name="hijos" id="check_hijos_no" onchange="javascript:hijosContent()" value="no">No</label>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div id="content_hijos_si" style="display: none;">
												<div class="col-md-2 col-md-offset-5" align="center">
													<div class="form-group">
														<div>
															<label for="a_que_alergia">¿Cuántos?</label>
															<div class="col-md-10 col-md-offset-2">
																<div class="form-group">
																	<select class="form-control" id="cuantos_hijos" name="cuantos_hijos">
																		<option>0</option>
																		<option>1</option>
																		<option>2</option>
																		<option>3</option>
																		<option>4</option>
																		<option>Más de 4</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
												</div>
													<div class="row">
														<div class="col-md-12" align="center">
															<div class="form-group">
																<label for="alguno_peso_hijos">¿Alguno de sus hijos pesó al nacer más de 4 kilogramos?</label>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-4 col-md-offset-4" align="center">
															<div class="form-group">
																<input type="hidden" value="no" name="hijo_mas_4k"/>
																<label class="radio-inline"><input type="radio" name="hijo_mas_4k" id="check_hijos_mas_4k_si" onchange="javascript:hijosMas4KContent()" value="si">Sí</label>
																<label class="radio-inline"><input type="radio" name="hijo_mas_4k" id="check_hijos_mas_4k_no" onchange="javascript:hijosMas4KContent()" value="no">No</label>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6 col-md-offset-3" align="center">
															<div id="content_hijos_mas_4k_si" style="display: none;">
																<div class="form-group">
																	<div>
																		<label for="durante_embarazo_1">Durante su embarazo sufrió de:</label>
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
																							<td>Diabetes gestacional</td>
																							<input type="hidden" value="no" name="diabetes_gestacional"/>
																							<td><input type="checkbox" name="diabetes_gestacional" value="si"></td>
																						</tr>
																						<tr>
																							<td>Hipertención del embarazo</td>
																							<input type="hidden" value="no" name="hipertension_embarazo"/>
																							<td><input type="checkbox" name="hipertension_embarazo" value="si"></td>
																						</tr>
																						
																					</tbody>
																				</table>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id="content_hijos_mas_4k_no" style="display: none;">
															
															</div>
															
															<div class="row">
																<div class="col-md-12" align="center">
																	<div class="form-group">
																		<label for="periodo_menstrual">Su período menstrual es:</label>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-4 col-md-offset-4">
																	<div class="form-group">
																		<select class="form-control" id="periodo_menstrual" name="periodo_menstrual">
																			<option>Regular</option>
																			<option>Irregular</option>
																			<option>Menopausia</option>
																		</select>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div id="content_hijos_no" style="display: none;">
												
												</div>
											</div>
										</div>
										
										<script type="text/javascript">
											function hijosContent() {
												element_si = document.getElementById("content_hijos_si");
												element_no = document.getElementById("content_hijos_no");
												check_si = document.getElementById("check_hijos_si");
												check_no = document.getElementById("check_hijos_no");
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
											function hijosMas4KContent() {
												element_si = document.getElementById("content_hijos_mas_4k_si");
												element_no = document.getElementById("content_hijos_mas_4k_no");
												check_si = document.getElementById("check_hijos_mas_4k_si");
												check_no = document.getElementById("check_hijos_mas_4k_no");
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
											
										<? } ?>
										
										<div class="row">
											<div class="col-md-12" align="center">
												<div class="form-group">
													<label for="ud_fuma">¿Usted Fuma?</label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4 col-md-offset-4" align="center">
												<div class="form-group">
												<label class="radio-inline"><input type="radio" name="fuma" id="check_fuma_si" onchange="javascript:fumaContent()" value="si" required>Sí</label>
												<label class="radio-inline"><input type="radio" name="fuma" id="check_fuma_no" onchange="javascript:fumaContent()" value="no" required>No</label>
												</div>
											</div>
										</div>
										
										<div id="content_fuma_si" style="display: none;">
											<div class="row">
												<div class="col-md-12" align="center">
													<div class="form-group">
														<label for="fuma_cuanto"> ¿Cuántos cigarros en promedio fuma al día?</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-4 col-md-offset-4">
													<div class="form-group">
														<select class="form-control" id="cuanto_fuma" name="cuanto_fuma">
															<option>Ninguno</option>
															<option>Menos de 1</option>
															<option>1</option>
															<option>2 a 5</option>
															<option>6 a 10</option>
															<option>11 a 20</option>
															<option>21 o más</option>
														</select>
													</div>
												</div>
											</div>
										</div>	
										<div id="content_fuma_no" style="display: none;">
											<div class="row">
												<div class="col-md-12" align="center">
													<div class="form-group">
														<label for="fumo_alguna_vez">¿Alguna vez fumó?</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-4 col-md-offset-4" align="center">
													<div class="form-group">
														<input type="hidden" value="si" name="alguna_vez_fumo"/>
														<label class="radio-inline"><input type="radio" name="alguna_vez_fumo" id="check_alguna_vez_fumo_si" onchange="javascript:algunaVezFumoContent()" value="si">Sí</label>
														<label class="radio-inline"><input type="radio" name="alguna_vez_fumo" id="check_alguna_vez_fumo_no" onchange="javascript:algunaVezFumoContent()" value="no">No</label>
													</div>
												</div>
											</div>
											<div id="content_alguna_vez_fumo_si" style="display: none;">
												<div class="row">
													<div class="col-md-12" align="center">
														<div class="form-group">
															<label for="cuando_tiempo">¿Hace cuánto tiempo lo dejó? </label>
														</div>
													</div>
												</div>
												
												<div class="row">
													<div class="col-md-4 col-md-offset-4">
														<div class="form-group">
															<select class="form-control" id="cuando_lo_dejo" name="cuando_lo_dejo">
																<option>Nunca fumé</option>
																<option>Menos de 1 año</option>
																<option>Entre 1 y 5 años</option>
																<option>Entre 6 y 10 años</option>
																<option>Más de 10 años</option>
															</select>
														</div>
													</div>
												</div>
												
											</div>
											<div id="content_alguna_vez_fumo_no" style="display: none;">
											
											</div>
										</div>
										
										<div class="row">
											<div class="col-md-12" align="center">
												<div class="form-group">
													<label for="ud_bebe">¿Bebe alcohol?</label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4 col-md-offset-4" align="center">
												<div class="form-group">
												<label class="radio-inline"><input type="radio" name="bebe" id="check_bebe_si" onchange="javascript:bebeContent()" value="si" required>Sí</label>
												<label class="radio-inline"><input type="radio" name="bebe" id="check_bebe_no" onchange="javascript:bebeContent()" value="no" required>No</label>
												</div>
											</div>
										</div>
										
										<div id="content_bebe_si" style="display: none;">
											<div class="row">
												<div class="col-md-12" align="center">
													<div class="form-group">
														<label for="frecuencia_alcohol">Durante los últimos 12 meses, ¿Con qué frecuencia ha consumido alcohol?</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-4 col-md-offset-4">
													<div class="form-group">
														<select class="form-control" id="frecuencia_de_alcohol" name="frecuencia_de_alcohol">
															<option>Nunca</option>
															<option>Casi nunca</option>
															<option>Ocacionalmente</option>
															<option>Una vez al mes o menos</option>
															<option>Varias veces al mes</option>
															<option>Varias veces a la semana</option>
															<option>Todos los días</option>
															<option>Más de una vez al día</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12" align="center">
													<div class="form-group">
														<label for="frecuencia_alcohol">¿Cuánto bebe?</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12" align="center">
													<div class="col-md-4">
														<div class="form-group">
															<label for="lbl_vino">Vino</label>
														</div>
														<div class="form-group">
															<select class="form-control" id="vino" name="vino">
																<option>Nunca</option>
																<option>Menos de 1 copa</option>
																<option>1 copa (150 ml)</option>
																<option>2 copas</option>
																<option>3 copas</option>
																<option>4 copas</option>
																<option>1 Botella</option>
																<option>Más de 1 botella</option>
															</select>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label for="lbl_cerveza">Cerveza</label>
														</div>
														<div class="form-group">
															<select class="form-control" id="cerveza" name="cerveza">
																<option>Nunca</option>
																<option>Menos de 1 botella o lata</option>
																<option>1 botella o lata (330 cc)</option>
																<option>2 botellas o latas</option>
																<option>3 botellas o latas</option>
																<option>4 botellas o latas</option>
																<option>Más de 4 botellas o latas</option>
															</select>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label for="lbl_destilados">Destilados</label>
														</div>
														<div class="form-group">
															<select class="form-control" id="destilados" name="destilados">
																<option>Nunca</option>
																<option>Menos de 1 vaso (35 ml)</option>
																<option>1 vaso (35ml)</option>
																<option>2 Vasos</option>
																<option>3 Vasos</option>
																<option>4 Vasos</option>
																<option>Mas de 4 vasos</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											
										</div>
										<div id="content_bebe_no" style="display: none;">
											
										</div>
										
										<div class="row">
											<div class="col-md-12" align="center">
												<div class="form-group">
													<label for="consume_drogas">¿Consume o ha consumido drogas?</label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4 col-md-offset-4" align="center">
												<div class="form-group">
												<label class="radio-inline"><input type="radio" name="drogas" id="check_drogas_si" onchange="javascript:drogasContent()" value="si" required>Sí</label>
												<label class="radio-inline"><input type="radio" name="drogas" id="check_drogas_no" onchange="javascript:drogasContent()" value="no" required>No</label>
												</div>
											</div>
										</div>
										
										<div id="content_drogas_si" style="display: none;">
											<div class="row">
												<div class="col-md-12" align="center">
													<div class="form-group">
														<label for="cuales_drogras">¿Cuál o cuáles?</label>
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
																<td>Marihuana</td>
																<input type="hidden" value="no" name="marihuana"/>
																<td><input type="checkbox" name="marihuana" value="si"></td>
															</tr>
															<tr>
																<td>Cocaína</td>
																<input type="hidden" value="no" name="cocaina"/>
																<td><input type="checkbox" name="cocaina" value="si"></td>
															</tr>
															<tr>
																<td>Alucinógenos</td>
																<input type="hidden" value="no" name="alucinogenos"/>
																<td><input type="checkbox" name="alucinogenos" value="si"></td>
															</tr>
															<tr>
																<td>Pasta Base</td>
																<input type="hidden" value="no" name="pasta_base"/>
																<td><input type="checkbox" name="pasta_base" value="si"></td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
											
										</div>
										<div id="content_drogas_no" style="display: none;">
											
										</div>
										
										<div class="row">
											<div class="col-md-12" align="center">
												<div class="form-group">
													<label for="frecuencia_ejercicio">¿Con qué frecuencia realiza ejercicio físico?</label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4 col-md-offset-4">
												<div class="form-group">
													<select class="form-control" id="ejercicio" name="ejercicio">
														<option>Nunca</option>
														<option>Ocacionalmente</option>
														<option>1 vez por semana</option>
														<option>2 veces por semana</option>
														<option>3 veces por semana</option>
														<option>Mas de 3 veces por semana</option>
													</select>
												</div>
											</div>
										</div>
										
							<button type="button" class="btn btn-default pull-left" id="boton_atras" onclick="history.back()" ><i class="fa fa-chevron-left"></i> Atrás</button>	
								<button type="submit" class="btn btn-primary pull-right">Siguiente <i class="fa fa-chevron-right"></i></button>
								
								</form>
								  
			

						<script type="text/javascript">
							function medicamentoContent() {
								element_si = document.getElementById("content_medicamento_si");
								element_no = document.getElementById("content_medicamento_no");
								check_si = document.getElementById("check_medicamento_si");
								check_no = document.getElementById("check_medicamento_no");
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
							function alergiaContent() {
								element_si = document.getElementById("content_alegico_si");
								element_no = document.getElementById("content_alergico_no");
								check_si = document.getElementById("check_alergico_si");
								check_no = document.getElementById("check_alergico_no");
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
							function operadoContent() {
								element_si = document.getElementById("content_operado_si");
								element_no = document.getElementById("content_operado_no");
								check_si = document.getElementById("check_operado_si");
								check_no = document.getElementById("check_operado_no");
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
							function hijosContent() {
								element_si = document.getElementById("content_hijos_si");
								element_no = document.getElementById("content_hijos_no");
								check_si = document.getElementById("check_hijos_si");
								check_no = document.getElementById("check_hijos_no");
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
							function fumaContent() {
								element_si = document.getElementById("content_fuma_si");
								element_no = document.getElementById("content_fuma_no");
								check_si = document.getElementById("check_fuma_si");
								check_no = document.getElementById("check_fuma_no");
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
							function algunaVezFumoContent() {
								element_si = document.getElementById("content_alguna_vez_fumo_si");
								element_no = document.getElementById("content_alguna_vez_fumo_no");
								check_si = document.getElementById("check_alguna_vez_fumo_si");
								check_no = document.getElementById("check_alguna_vez_fumo_no");
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
							function bebeContent() {
								element_si = document.getElementById("content_bebe_si");
								element_no = document.getElementById("content_bebe_no");
								check_si = document.getElementById("check_bebe_si");
								check_no = document.getElementById("check_bebe_no");
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
							function drogasContent() {
								element_si = document.getElementById("content_drogas_si");
								element_no = document.getElementById("content_drogas_no");
								check_si = document.getElementById("check_drogas_si");
								check_no = document.getElementById("check_drogas_no");
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
					</div>