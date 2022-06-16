<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model("Model");
    }
	public function index()
	{
		$this->load->view('registro');
	}
    public function agregar(){
        $xcod = $this->input->post("codigo");
        $xnombre = $this->input->post("nombre");
        $xcorreo = $this->input->post("correo");
        $dataA = array("cod"=>$xcod, "nombre"=>$xnombre, "correo"=>$xcorreo);
        
        $this->session->set_userdata($dataA);
        $this->Model->insertar_Alumno($dataA);
        redirect(base_url()."bandeja"); 
    }
}
