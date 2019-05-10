<?php

    $CI =& get_instance();

    $CI->load->helper('url');
    $CI->load->view('platillas/encabezado');

?>

<h3>Votos que hemos agregado:</h3>

<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Cedula</th>
			<th>Direccion</th>
			<th>Partido</th>
		</tr>
	</thead>
	<tbody>
		<?php
            $votos =core_sitio::cargarVotos();
            foreach ($votos as $keyVoto => $valueVoto) {
                $urlEditar = base_url("web/editar/{$valueVoto->ID}");
                $voto->$Apellido = htmlentities($voto->Apellido);
                echo "<tr>
					<td>{$valueVoto->ID}</td>
					<td>{$valueVoto->Nombre}</td>
					<td>{$valueVoto->Apellido}</td>
					<td>{$valueVoto->Cedula}</td>
					<td>{$valueVoto->Direccion}</td>
					<td>{$valueVoto->Partido}</td>
					<td><a href='$urlEditar'>Editar</a></td>
					</tr>
				";
            }
        ?>
	</tbody>
</table>

<?php $CI->load->view('platillas/pie');?>
