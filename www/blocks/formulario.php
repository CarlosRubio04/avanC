<form id="contacto" class="col s12 form">
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