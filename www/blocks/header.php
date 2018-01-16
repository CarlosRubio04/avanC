<header class="header">
	<div class="container">
		<div class="row">
			<div class="col s12 m6">
				<img src="img/logo.png" alt="Avance" class="headerLogo">
			</div>
			<div class="col s12 m6">
				<div class="headerInfo">
					<div class="cols u-divider">
						<ul>
							<li>
								<b>Teléfono:</b> 
								<a href="tel:+5714929696">+ 57 1 492 9696</a>
							</li>
							<li>
								<b>Celular:</b>
								<a href="tel:+573015192558">+ 57 301 519 2558</a>
							</li>
						</ul>
						<a href="tel" class="headerBtn">
							<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
						</a>
					</div>
					<div class="cols">
						<ul>
							<li>
								 Modelia - El Lago
							</li>
						</ul>
						<a href="tel" class="headerBtn">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>


<!-- Modal Structure -->
<div id="cta" class="modal">
	<div class="modal-content">
		<h4>Asesoría personalizada</h4>
		<form id="contacto2" class="col s12 form">
			<input type="hidden" name="campaignId" value="<?php echo $campaignId ?>">
			<input type="hidden" name="partnerId" value="<?php echo $partnerId ?>">
			<input type="hidden" name="type" value="<?php echo $type ?>">
			<div class="row">
				<div class="input-field col s12">
					<input id="nombre" name="nombre" type="text" class="validate" placeholder="*Nombre" required/>
				</div>
				<div class="input-field col s12">
					<input id="telefono" name="telefono" type="number" class="validate" placeholder="Telefono" required/>
				</div>
				<div class="input-field col s12">
					<input id="celular" name="celular" type="number" class="validate" placeholder="*Celular" required/>
				</div>
				<div class="input-field col s12">
					<select multiple name="objetivo" class="validate" required>
						<option value="" disabled selected>¿Qué necesito mejorar?</option>
						<option value="Comprensión">Comprensión</option>
						<option value="Velocidad">Velocidad</option>
						<option value="Análisis y síntesis">Análisis y síntesis</option>
						<option value="Memoria">Memoria</option>
					</select>
				</div>
				<div class="col s12">
					<p>
						<input type="checkbox" class="filled-in" id="tyc" value="true" checked="checked"/>
						<label for="tyc">
							He leído y acepto la política de tratamiento de datos.
						</label>
					</p>
				</div>
				<div class="col s12">
					<button class="waves-effect waves-light btn">
						Solicitar Asesoría
						<i class="fa fa-chevron-right" aria-hidden="true"></i>
					</button>
				</div>
			</div>
		</form>
	</div>
</div>