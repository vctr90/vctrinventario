<section id="">
	<form novalidate name="form">
		<span>Nombre del material: </span>
		<input type='text' id="Nombre_material" placeholder="Inserte el nombre de su material" ng-change="validate('number');validate('not_null')" ng-model="f.nm" required>
		<span class="error" id="nmerror"></span>
		<span>Codigo del material: </span>
		<input type='text' id="Codigo_material" placeholder="Inserte el codigo de su material" ng-change="validate('not_repeat');validate('not_null')" ng-model="f.cm" required>
		<span class="error" id="cmerror"></span>
		<button ng-click="sendData()" ng-disabled="form.$invalid">Aceptar</button>
	</form>
</section>