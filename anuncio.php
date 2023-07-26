<?php
//Validar el id que viene de anuncios a la hora de dar en ver propiedad
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
  header('Location: /www/bienesraices_inicio/index.php');
}

require 'includes/config/database.php';
$db = conectarDB();
$sql = "SELECT * FROM propiedades WHERE id = {$id}";

$sqlResult = mysqli_query($db, $sql);

if($sqlResult->num_rows === 0){
  header('Location: /www/bienesraices_inicio/index.php');
}

$propiedad = mysqli_fetch_assoc($sqlResult);

require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
  <h1><?php echo $propiedad['titulo']; ?></h1>

  <img loading="lazy" src="imagenes/<?php echo $propiedad['imagen']; ?>" alt="Imagen" />

  <div class="resumen-propiedad">
    <p class="precio"><?php echo $propiedad['precio']; ?></p>
    <ul class="iconos-caracteristicas">
      <li>
        <img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc" />
        <p><?php echo $propiedad['banos']; ?></p>
      </li>
      <li>
        <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" />
        <p><?php echo $propiedad['capacidadPersonas']; ?></p>
      </li>
      <li>
        <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorios" />
        <p><?php echo $propiedad['habitaciones']; ?></p>
      </li>
    </ul>

    <p><?php echo $propiedad['descripcion']; ?></p>
  </div>
</main>

<?php
mysqli_close($db);
incluirTemplate('footer');
?>