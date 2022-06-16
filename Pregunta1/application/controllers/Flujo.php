<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flujo extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model("MFlujo");
    }
	public function index()
	{
        $data = $this->session->flashdata('fila');
        $this->load->view('flujo', $data);
		
	}
    public function motor(){

        $flujo = $this->input->post("flujo");
        $procesosiguiente = $this->input->post("proceso");
        $proceso = $this->input->post("procesoanterior");

        $this->db->select('*');
        $this->db->from('flujoproceso');
        $this->db->where('flujo',$flujo);
        $this->db->where('proceso',$proceso);
        $resultado = $this->db->get();
        $fila = $resultado->row();

        $pantalla = $fila->Pantalla;
        
        if($this->input->post("Anterior") != null){
            $this->db->select('*');
            $this->db->from('flujoproceso');
            $this->db->where('flujo',$flujo);
            $this->db->where('procesosiguiente',$proceso);
            $resultado1 = $this->db->get();
            $fila1 = $resultado1->row();
            $procesosiguiente = $fila1->Proceso; 
        }

        $data = ["pantalla"=>$pantalla, "flujo"=>$flujo, "proceso"=>$procesosiguiente];
        $this->load->view("flujo", $data);
    }
}