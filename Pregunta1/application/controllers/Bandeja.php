<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bandeja extends CI_Controller {
    function __construct(){
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('bandeja');
	}
	public function cerrarSesion(){
		$this->session->sess_destroy();
		redirect(base_url()."home"); 
	}
	public function flujo($flujo, $proceso){
		print("controlador bandeja");
		$data = ['flujo'=> $flujo, 'proceso'=>$proceso];
		$this->session->set_flashdata('fila', $data);
		redirect('flujo',$data);
	}
}