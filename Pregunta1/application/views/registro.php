<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Inscripcion Frente</title>
</head>
<body>
    <div class="signupSection">
        <form action="<?= base_url()?>Registro/agregar" method="POST" class="signupForm">
            <h2>Registro</h2>
            <ul class="noBullet">
                <li>
                    <label for="nombre del frente"></label>
                    <input type="text" class="inputFields" name="nombre" placeholder="Nombre" value=""/>
                </li>
                <li>
                    <label for="sigla del frente"></label>
                    <input type="email" class="inputFields" name="correo" placeholder="Correo Electornico" value=""/>
                </li>
                <li>
                    <label for="codigo del frente"></label>
                    <input type="password" class="inputFields" name="codigo" placeholder="Contrasenia" value=""/>
                </li>
                <li>
                    <input type="submit" id="join-btn" name="enviar" value="Inscribirse"/>
                </li>
            </ul>
        </form>
        <div class="info">
            <h2>Incripcion de Alumnos</h2>
            <h2>Nuevos</h2>
            <i class="fas fa-users fa-10x"></i>
            <p>INF-324</p>
        </div>
    </div>

</body>
</html>