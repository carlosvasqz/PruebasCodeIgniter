
<form method="post" action="">

	<?= asgInput('Nombre', 'Nombre', $voto);?>
	<?= asgInput('Apellido', 'Apellido', $voto);?>
	<?= asgInput('Cedula', 'Cedula', $voto);?>
	<?= asgInput('Direccion', 'Direccion', $voto);?>
	<?= asgInput('Partido', 'Partido', $voto);?>

	<div class="text-center">
		<button type="submit" class="btn btn-primary">Submit</button>
		<a class="btn btn-danger" href="<?= base_url(); ?>">Cancelar</a>
	</div>

</form>