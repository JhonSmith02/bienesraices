<?php
//Importar la base de datos
include 'includes/config/database.php';
// include __DIR__ . '/../config/database.php';

$db = conectarDB();

//Consultar


$sql = "SELECT * FROM propiedades LIMIT {$limite}";

$sqlResult = mysqli_query($db, $sql);

?>


<div class="contendeor-anuncios">
    <?php while ($propiedad = mysqli_fetch_assoc($sqlResult)) : ?>
        <div class="anuncio">

            <img loading="lazy" src="imagenes/<?php echo $propiedad['imagen']; ?>" alt="anuncio" />
            <!-- <img loading="lazy" src="imagenes/1355e570be192fe8db75d1595e5a36a5.jpg" alt="anuncio" /> -->

            <div class="contendio-anuncio">
                <h3><?php echo $propiedad['titulo']; ?></h3>
                <p><?php echo $propiedad['descripcion']; ?></p>
                <p class="precio"><?php echo $propiedad['precio']; ?></p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc" />
                        <p><?php echo $propiedad['banos']; ?></p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" />
                        <p><?php echo $propiedad['capacidadPersonas']; ?></p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorios" />
                        <p><?php echo $propiedad['habitaciones']; ?></p>
                    </li>
                </ul>

                <a href="anuncio.php?id=<?php echo $propiedad['id']; ?>" class="boton-amarillo-block">Ver propiedad</a>
            </div>
        </div>
    <?php endwhile; ?>
</div>

<?php 
    //Cerrando la conexion sql
    mysqli_close($db);
?>