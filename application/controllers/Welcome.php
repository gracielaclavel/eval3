<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		// llamado a la funcion
	//	$this->load->model('form_model');  
		// Un formulario muy complicado

	}

	public function index()
	{
		$this->load->view('formulario');

     }
     function validar()
{  
   //vamos a trabajar con formulario eval3
	$name = $this->input->post('nombre');
		$lastname = $this->input->post('apellido');
		$name = $this->input->post('email');

		echo "Nombre: ".$name."  Apellido: ".$lastname .$name. "email";
		$data = array('nombre'=> $this->input->post('nombre1'),'apellido'=> $this->input->post('apellido1'),'email'=> $this->input->post('email1'));
$this->form_model->guardar($data);
	//}
}
}
