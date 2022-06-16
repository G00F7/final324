<?php
    $ci = &get_instance();
    $ci->load->model("MRecepcion");
    $fila = $ci->MRecepcion->rec();
?>
<p>Recepcion de Documentos </p>
<?php
echo "<p>Nombre : ".$_SESSION["nombre"]."</p>";
echo "<p>Correo : ".$_SESSION["correo"]."</p>";
?>
<table style="margin: 0 auto;">
    <tr>
        <td>Documentos</td>
        <td>Entregados</td>
    </tr>
<?php
echo "<tr>";
echo "<td>Certificado Nacimiento</td>";

if($fila->cnacimiento != "no"){
    echo "<td>Si</td>";
}else{
    echo "<td>No</td>";
}
echo "</tr>";
echo "<tr>";
echo "<td>Cedula de Identidad</td>";
if($fila->ci != "no"){
    echo "<td>Si</td>";
}else{
    echo "<td>No</td>";
}
echo "</tr>";
echo "<tr>";
?>
</table>