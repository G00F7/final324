<?php  
  $this->db->select('*');
  $this->db->from('flujoproceso');
  $this->db->where('Flujo',$flujo);
  $this->db->where('Proceso',$proceso);
  $resultado = $this->db->get();
  $fila = $resultado->row();

  if($fila->Tipo != "F"){
    $pantalla=$fila->Pantalla;           
    $procesoanterior=$proceso;
    $proceso = $fila->ProcesoSiguiente;
  }else {
    redirect(base_url()."bandeja"); 
  }
  $fila = ["pantalla"=>$pantalla, "flujo"=>$flujo, "proceso"=>$proceso, "procesoanterior"=>$procesoanterior];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
  <title>Flujo</title>
</head>
<style>
  .signupForm1 {
    width: 100%;
    padding: 5px 0;
    background: rgba(20, 40, 40, .8);
    transition: .2s;
    h2 {
      font-weight: 300;
    }
  }
</style>
<body>
    <div class="signupSection">
      <form action="<?= base_url()?>flujo/motor" method="POST" class="signupForm1">
        <h2>Contenido</h2>
        <input type="hidden" name="flujo" value="<?php echo $flujo;?>"/>
        <input type="hidden" name="proceso" value="<?php echo $proceso;?>"/>
        <input type="hidden" name="procesoanterior" value="<?php echo $procesoanterior;?>"/>
        <?php
            $this->load->view($fila["pantalla"]);
        ?>
        <input type="submit" id="join-btn" name="Anterior" value="Anterior"/>
        <input type="submit" id="join-btn" name="Siguiente" value="Siguiente"/>
      </form>
    </div>
</body>
</html>
