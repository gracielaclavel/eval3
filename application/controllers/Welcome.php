<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->helper('form');
    $this->load->model('form_model');  
  }

  public function index()
  {
    $this->load->view('formulario');
  }
    function validar()
  { 
    //echo "Hola<br>";
    //aqui  estoy creando una funcion  
    $name = $this->input->post('nombres');
    $lastname = $this->input->post('apellido1');
    $Email = $this->input->post('ingresatucorreo');
    echo "Nombre: ".$name."  Apellido: ".$lastname."correo" .$Email;
//aqui  estamos  trabajando
    $data = array('nombre' => $this->input->post('nombres'),'apellido' => $this->input->post('apellido1'), 'Email' => $this->input->post('ingresatucorreo') );
//aqui  se llama  la  funcion para  guardar   en la  bd
    $this->form_model->guardar($data);
  //}

  }
}
