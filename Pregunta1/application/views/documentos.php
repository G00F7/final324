<?php
    $ci = &get_instance();
    $ci->load->model("MDocumentos");
    $fila = $ci->MDocumentos->doc();
?>
<p>Preparacion de Documentos </p>
<?php
echo "<p>Alumno : ".$_SESSION["nombre"]."</p>";
echo "<p>Correo : ".$_SESSION["correo"]."</p>";
?>
<ul class="noBullet">
    <li>
Certificado Nacimiento: <input type="text" class="inputFields" name="cnacimiento" value="<?php echo $fila->cnacimiento;?>">
    </li>
    <li>
CI: <input type="text" class="inputFields" name="ci" value="<?php echo $fila->ci;?>">
    </li>
</ul>



