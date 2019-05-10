<?php

	class core_sitio
	{

		static function agregar($voto)
		{
			$CI =& get_instance();
			$CI->db->insert('votos', $voto);
		}

		static function cargarVotos(){
			$CI =& get_instance();
			$votos = $CI->db->get('votos');

			return $votos->result();
		}

		static function cargarVoto($id){
			$CI = & get_instance();
			$CI->db->where('ID', $id);
			$voto = $CI->db->get('votos');
			$voto = $voto->result();

			if (count($voto)>0) {
				return $voto[0];
			}
			return false;
		}

		static function actualizarVoto($id, $voto){
			$CI = & get_instance();
			$CI->db->where('ID', $id);
			$CI->db->update('votos', $voto);
		}
	}

	function asgInput($nombre, $label, $value='', $opts=[]) {

		$valor = '';
		if (is_object($value) && isset($value->$nombre)) {
			$valor = $value->$nombre;
		}

		$valor = htmlentities($valor);

		return <<<CODIGO
		<div class="form-group">
			<label>{$label}</label>
			<input value="{$valor}" class="form-control" type="text" name="{$nombre}" class="" required>
		</div>
		CODIGO;
	}