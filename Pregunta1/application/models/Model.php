<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {
    public function insertar_Alumno($dataA){
        $this->db->query("ALTER TABLE alumno");
        $this->db->insert("alumno", $dataA);
    }
    public function login($xcod){
        $this->db->select("*");
        $this->db->from("alumno");
        $this->db->where("cod",$xcod);
        $resultado = $this->db->get();
        return $resultado->row();
    }
}