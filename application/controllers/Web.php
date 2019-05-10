<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function index()
	{
		$this->load->view('listado');
	}

	public function agregar(){

		if ($_POST) {
			core_sitio::agregar($_POST);
			redirect('');
		}

		$this->load->view('platillas/encabezado');
		$this->load->view('editar', ['voto' => false]);
		$this->load->view('platillas/pie');
	}

	public function editar($id=0){

		if ($_POST) {
			core_sitio::actualizarVoto($id, $_POST);
			redirect('');
		}

		if ($id==0) {
			redirect('');
		}

		$voto = core_sitio::cargarVoto($id);

		$this->load->view('platillas/encabezado');
		$this->load->view('editar', ['voto'=>$voto]);
		$this->load->view('platillas/pie');
	}
}

/* End of file Web.php */
/* Location: ./application/controllers/Web.php */