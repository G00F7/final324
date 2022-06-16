<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MBandeja extends CI_Model {
   public function busqueda(){
        $this->db->select('*');
        $this->db->from('flujoprocesoseguimiento');
        $this->db->where('usuario',$_SESSION["correo"]);
        $this->db->where('HoraFin is null');
        $resultado = $this->db->get();
        return  $resultado->row();
   }
   public function busquedaF($flujo, $proceso){
        $fila = ['flujo'=>$flujo, 'proceso'=>$proceso];
        $this->load->view("flujo", $fila);
    }
}