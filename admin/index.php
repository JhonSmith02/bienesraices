<?php

require '../includes/funciones.php';
$auth = estaAutenticado();
if (!$auth) {
    header('location: /www/bienesraices_inicio');
}


//Importar la conexion
require '../includes/config/database.php';
$db = conectarDB();

//Escribir el Query

// $sql = "SELECT * FROM propiedades";
$sql = "SELECT id, titulo, imagen, FORMAT(precio, 0) AS precio FROM propiedades";

//Consultar la BD

$resultadoConsulta = mysqli_query($db, $sql);


//Muestra el mensaje de guardado
$resultado = $_GET['resultado'] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idEliminar = $_POST['idEliminar'];
    $idEliminar = filter_var($idEliminar, FILTER_VALIDATE_INT);

    if ($idEliminar) { //si hay un id eso significa el if con solo una condicion
        //Elimina el archivo
        $sql = "SELECT imagen FROM propiedades WHERE id = {$idEliminar}";

        $sqlResult = mysqli_query($db, $sql);
        $propiedad = mysqli_fetch_assoc($sqlResult);

        unlink('../imagenes/' . $propiedad['imagen']);

        //Elimina la propiedad
        $sql = "DELETE FROM propiedades WHERE id = {$idEliminar}";
        $sqlResult = mysqli_query($db, $sql);

        if ($sqlResult) {
            header('location: /www/bienesraices_inicio/admin?resultado=3');
        }
    }
}

incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Administrador de Bienes Raices</h1>

    <?php if ($resultado == 1) : ?>
        <p class="alerta exito">Anuncio Creado Correctamente</p>
    <?php elseif ($resultado == 2) : ?>
        <p class="alerta exito">Anuncio Actualizado Correctamente</p>
    <?php elseif ($resultado == 3) : ?>
        <p class="alerta exito">Anuncio Eliminado Correctamente</p>
    <?php endif; ?>

    <a href="/www/bienesraices_inicio/admin/propiedades/crear.php" class="boton boton-verde">Registrar nueva casa</a>

    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <!-- mostrar los resultados -->
        <tbody>
            <?php while ($propiedad = mysqli_fetch_assoc($resultadoConsulta)) : ?>
                <tr>
                    <td><?php echo $propiedad['id']; ?></td>
                    <td><?php echo $propiedad['titulo']; ?></td>
                    <td> <img src="../imagenes/<?php echo $propiedad['imagen']; ?>" class="imagen-tabla"></td>
                    <td><?php echo $propiedad['precio']; ?></td>
                    <td>
                        <form method="POST" class="W-100">
                            <input type="hidden" name="idEliminar" value="<?php echo $propiedad['id']; ?>">
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        <a href="/www/bienesraices_inicio/admin/propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
            <?php endwhile ?>
        </tbody>
    </table>
</main>

<!-- cerrar la base de datos -->
<?php mysqli_close($db); ?>


<?php incluirTemplate('footer'); ?>