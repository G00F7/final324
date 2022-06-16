<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MFlujo extends CI_Model {
    public function flujo($flujo, $proceso){
        $this->db->select('*');
        $this->db->from('flujoproceso');
        $this->db->where('flujo',$flujo);
        $this->db->where('proceso',$proceso);
        $resultado = $this->db->get();
        $fila = $resultado->row();
        echo $proceso." m";
        echo "<br>";
        $pantalla=$fila->Pantalla;           
        $procesoanterior=$proceso;
        $proceso = $fila->ProcesoSiguiente;
        echo $proceso." m";
        echo "<br>";
        $data = ["pantalla"=>$pantalla, "flujo"=>$flujo, "proceso"=>$proceso, "procesoanterior"=>$procesoanterior];
        return $data;
    }
}