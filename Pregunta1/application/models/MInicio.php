<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MInicio extends CI_Model {
   public function nombre(){
        $this->db->select('nombre');
        $this->db->from('alumno');
        $this->db->where('nombre',$_SESSION["nombre"]);
        $resultado = $this->db->get();
        $fila = $resultado->row();
        return $fila->nombre;
   }
}