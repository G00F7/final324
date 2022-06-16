<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MRecepcion extends CI_Model {
   public function rec(){
        $this->db->select('*');
        $this->db->from('alumno');
        $this->db->where('nombre',$_SESSION["nombre"]);
        $resultado = $this->db->get();
        return  $resultado->row();
   }
}