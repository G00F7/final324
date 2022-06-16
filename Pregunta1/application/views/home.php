<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="signupSection">
        <form action="<?= base_url()?>Home/validar" method="POST"class="signupForm">
            <h2>Flujo de Inscripcion</h2>
            <h2>Inicio de Sesion</h2>
            <ul class="noBullet">
                <li>
                    <label for="sigla del frente"></label>
                    <input type="text" class="inputFields" name="nombre" placeholder="Nombre" value="" required/>
                </li>
                <li>
                    <label for="codigo"></label>
                    <input type="password" class="inputFields" name="codigo" placeholder="Codigo" value="" required/>
                </li>
                <li>
                    <input type="submit" id="join-btn" name="enviar" value="Ingresar">
                </li>
            </ul>
        </form>
        <div class="info">
            <h2>Inscripcion de Alumnos</h2>
<!--             <?php
            /* connexion */
            include "conexion.php";
            $sql = "select * from frentes.frente f, flujoprocesoseguimiento fl where f.sigla = fl.usuario and fl.proceso = 'P8' ";
            $resultado = mysqli_query($con, $sql);
            ?>
            <table>
                <tr>
                <td>Nombre</td>
                <td>Sigla</td>
                </tr>
                <?php
                while($fila = mysqli_fetch_array($resultado)){
                    echo "<tr>";
                    echo "<td>".$fila["nombre"]."</td>";
                    echo "<td>".$fila["sigla"]."</td>";
                    echo "</tr>";
                }
                ?>    
            </table> -->
            <h2>Nuevos</h2>
            <i class="fas fa-users fa-10x"></i>
            <p></p>
            <a href="<?= base_url()?>registro" style="color:#FFFFFF">Registrarse</a>
            <p>INF-324</p>
        </div>
    </div>
    
</body>
</html>

<br><br>

