<?php 
  

  if(!isset($_SESSION)){
    session_start();
  }


  $auth = $_SESSION['login'] ?? false;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/www/bienesraices_inicio/build/css/app.css" />
  </head>

  <body>
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
      <div class="contenedor contenido-header">
        <div class="barra">
          <a href="/www/bienesraices_inicio/index.php">
            <img src="/www/bienesraices_inicio/build/img/logo.svg" alt="logotipo" />
          </a>

          <div class="mobile-menu">
            <img src="/www/bienesraices_inicio/build/img/barras.svg" alt="Icono menu" />
          </div>

          <div class="derecha">
            <img class="dark-mode-boton" src="/www/bienesraices_inicio/build/img/dark-mode.svg" alt="" />
            <nav class="navegacion">
              <a href="/www/bienesraices_inicio/nosotros.php">Nosotros</a>
              <a href="/www/bienesraices_inicio/anuncios.php">Anuncios</a>
              <a href="/www/bienesraices_inicio/blog.php">Blog</a>
              <a href="/www/bienesraices_inicio/contacto.php">Contacto</a>
              <?php if($auth): ?>
                <a href="/www/bienesraices_inicio/cerrar-session.php">Cerrar session</a>
              <?php endif; ?>
            </nav>
          </div>
        </div>
      <?php 
        if($inicio){
          echo "<h1>Alquiler y venta de casas en Medellin</h1>";
        }
      ?>
      </div>
    </header>