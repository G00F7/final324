<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    function __construct(){
        parent::__construct();
		$this->load->model("Model");
    }
	public function index()
	{
		$this->load->view('home');
	}
	public function validar(){
		$xcod = $this->input->post("codigo");
        $xnombre = $this->input->post("nombre");
		$resultado = $this->Model->login($xcod);
		if($resultado->correo != null){
			$dataA = array("cod"=>$xcod, "nombre"=>$xnombre, "correo"=>$resultado->correo, "cnacimiento"=>$resultado->nacimiento, "ci"=>$resultado->ci);
        	$this->session->set_userdata($dataA);
			redirect(base_url()."bandeja"); 
		}else{
			redirect(base_url()."registro"); 
		}		
	}
}
