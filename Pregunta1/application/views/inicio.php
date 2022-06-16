<?php
    $ci = &get_instance();
    $ci->load->model("MInicio");
    $nombre = $ci->MInicio->nombre();
    if($nombre == null)
        $nombre = "";
?>
<p>Inicio Flujo</p>
</p>Introduzcan el nombre</p>
<input type="text" class="inputFields" name="nombre" value="<?php echo $nombre;?>"><br>