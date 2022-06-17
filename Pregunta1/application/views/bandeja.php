
<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Bandeja</title>
  <meta name="description" content="Blvck - Personal vCard & Resume Template">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon.png">

  <!-- STYLESHEETS -->
  <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css" type="text/css" media="all">
  <link rel="stylesheet" href="./assets/css/owl.carousel.css" type="text/css" media="all">
  <link rel="stylesheet" href="./assets/css/owl.theme.css" type="text/css" media="all">
  <link rel="stylesheet" href="./assets/css/font-awesome.min.css" type="text/css" media="all">
  <link rel="stylesheet" href="./assets/css/magnific-popup.css" type="text/css" media="all">
  <link rel="stylesheet" href="./assets/css/style.css" type="text/css" media="all">

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
</head>

<body>
<!-- Preloader -->
<div class="preloader-outer">
  <div class="preloader">
    <div class="lines">
      <div class="line line-1"></div>
      <div class="line line-2"></div>
      <div class="line line-3"></div>
    </div>
    <div class="loading-text"> INF 324 </div>
  </div>
</div>
<!-- Preloader end -->
<!-- Main Wrapper -->
<main class="wrapper">
  <!-- Header -->
  <header class="header pull-left">
    <!-- Mobile menu -->
    <div class="mobile-bar visible-sm visible-xs">
      <div class="hamburger-menu">
          <div class="bar"></div> 
      </div>
    </div>
    <!-- Mobile menu end -->
    <div >
      <img src="assets/images/user.png">
    </div>
    <div class="name">
      <h1><?php echo $_SESSION["nombre"]; ?></h1>
      <span><?php echo $_SESSION["correo"]; ?></span>
    </div>
    <!-- Navigation bar -->
    <nav class="main-nav">
      <ul class="navigation">
        <li><a href="#about">Flujo Proceso Seguimiento</a></li>
        <li><a href="#experience">Flujo Proceso Concluido Para la Inscripcion</a></li>
        <?php $flujo = 'F1'; $proceso = "P1";?> 
        <li><a href="<?= base_url().'bandeja/flujo/'.$flujo.'/'.$proceso;?>">Nuevo Flujo</a></li>
        <li><a href="<?= base_url()?>Bandeja/cerrarSesion">Cerrar Sesion</a></li>
      </ul>
    </nav>
    <!-- Navigation bar end -->
    <!-- Footer Copyright -->
    <div class="copyright">
      <span>INF-324 1/2022</span>
    </div>
    <!-- Footer Copyright end -->
  </header>
  <!-- Header end -->
  <!-- Main Content -->
  <div class="main-content pull-right">
    <!-- Section About -->
    <section id="about" class="about">
      <div class="section-header">
        <h2>Flujo Proceso Seguimiento</h2>
      </div>
      <?php
      $ci = &get_instance();
      $ci->load->model("MBandeja");
      $fila = $ci->MBandeja->busqueda();
      ?>
      <table>
        <tr>
          <td>Flujo</td>
          <td>Proceso</td>
          <td>Nro Tramite</td>
          <td>Operacion</td>
        </tr>
        <?php
          if (!empty($fila)){
              echo "<tr>";
              echo "<td>".$fila->Flujo."</td>";
              echo "<td>".$fila->Proceso."</td>";
              echo "<td>".$fila->NumeroTramite."</td>";  
        ?>
            <td><a href='<?= base_url().'bandeja/flujo/'.$fila->Flujo.'/'.$fila->Proceso;?>'>Editar</a></td>
        <?php
            echo "</tr>";
          }else{
            echo "Usted no tiene ningun tramite pendiente";
          }

        ?>
      </table>
    </section>
    <!-- Section About end -->
    <!-- Section Resume -->
    <section id="experience" class="resume">
      <div class="section-header">
        <h2>Flujo Proceso Concluido Para la Inscripcion</h2>
      </div> 
      <?php
      $ci = &get_instance();
      $ci->load->model("MBandeja");
      $fila = $ci->MBandeja->busqueda1();
      ?>
              <table>
              <tr>
                <td>Flujo</td>
                <td>Proceso</td>
                <td>Nro Tramite</td>
              </tr>
              <?php
               foreach($fila as $dato){
                echo "<tr>";
                $cont = 1;
                foreach($dato as $valores){
                  if ($cont == 1){
                    echo "<td>".$valores."</td>";
                  }elseif($cont == 2){
                    echo "<td>".$valores."</td>";
                  }elseif($cont == 3){
                    echo "<td>".$valores."</td>";
                  }
                  if ($cont > 3)
                    break;
                  else
                    $cont = $cont + 1;
                }
                 echo "</tr>";
               }
              ?>
              </table>
    </section>
    <!-- Section Resume end -->
  </div>
  <!-- Main Content end -->
</main>
<!-- Main Wrapper end -->
<!-- SCRIPTS -->
<script type="text/javascript" src="./assets/js/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="./assets/js/jquery.onepage-scroll.min.js"></script>
<script type="text/javascript" src="./assets/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="./assets/js/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="./assets/js/jquery.filterizr.js"></script>
<script type="text/javascript" src="./assets/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="./assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="./assets/js/custom.js"></script>
<script type="text/javascript" src="./assets/js/smoothscroll.min.js"></script>
</body>
</html>
