<?php
    $ci = &get_instance();
    $ci->load->model("MPresentar");
    $fila = $ci->MPresentar->pres();
?>
<p>Presentar Documentos</p>
<?php
echo "<p>Nombre : ".$_SESSION["nombre"]."</p>";
echo "<p>Correo : ".$_SESSION["correo"]."</p>";
echo "<p>Certificado Nacimiento : ".$fila->cnacimiento."</p>";
echo "<p>                    CI : ".$fila->ci."</p>";
?>

