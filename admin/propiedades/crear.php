<?php
require '../../includes/funciones.php';
$auth = estaAutenticado();
if(!$auth){
    header('Location: /www/bienesraices_inicio');
}


//Base de datos
require '../../includes/config/database.php';
$db = conectarDB();

//consultar para optener los vendedores
$sql = "SELECT * FROM vendedores";

$resultado = mysqli_query($db, $sql);

//Arreglo con los errores del formulario.
$errores = [];

$titulo = '';
$valor = '';
$descripcion = '';
$habitaciones = '';
$banos = '';
$estacionamiento = '';
$vendedorId = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";

    // echo "<pre>";
    // var_dump($_FILES);
    // echo "</pre>";

    //Guardar los datos del formulario en variables
    $titulo = mysqli_real_escape_string( $db, $_POST['titulo']);
    $valor = mysqli_real_escape_string( $db, $_POST['valor']);
    $descripcion = mysqli_real_escape_string( $db, $_POST['descripcion']);
    $habitaciones = mysqli_real_escape_string( $db, $_POST['habitaciones']);
    $banos = mysqli_real_escape_string( $db, $_POST['banos']);
    $estacionamiento = mysqli_real_escape_string( $db, $_POST['estacionamiento']);
    $vendedorId = mysqli_real_escape_string( $db, $_POST['vendedor']);
    $creado = date('Y/m/d');

    //Asignar files a una variable
    $imagen = $_FILES['imagen'];


    if (!$titulo) {
        $errores[] = 'Ingrese un titulo';
    }

    if (!$valor) {
        $errores[] = 'Debe ingresar un valor';
    }

    if (!$descripcion) {
        $errores[] = 'Debe ingresar una descripcion';
    }

    if (!$habitaciones) {
        $errores[] = 'Debe ingresar las habitacones';
    }

    if (!$banos) {
        $errores[] = 'Debe ingresar los banos';
    }

    if (!$estacionamiento) {
        $errores[] = 'Debe ingresar los estacionamientos';
    }

    if (!$vendedorId) {
        $errores[] = 'Debe ingresar el vendedor';
    }

    if(!$imagen['name']){
        $errores[] = 'Debe ingresar una imagen';
    }




    //Revisar que el arreglo de errores este vacio
    if (empty($errores)) {

        /*Subida de archivos */

        //Crear una carpeta
        $carpetaImagenes = '../../imagenes/';

        if(!is_dir($carpetaImagenes)){
            mkdir($carpetaImagenes);
        }

        //Generar nombre unico para imagenes
        $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";

        //Subir la imagen
        move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);
        

        //Insertar a la base de datos
        $sql = "INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, banos, capacidadPersonas, creado, vendedores_id)
        VALUES ('$titulo', '$valor', '$nombreImagen', '$descripcion', '$habitaciones', '$banos', '$estacionamiento', '$creado', '$vendedorId')";

        $resultado = mysqli_query($db, $sql);

        if ($resultado) {
            //Redireccionar al usuario para que no ingrese datos duplicados.
            header('Location: /www/bienesraices_inicio/admin?resultado=1');
        }
    }
}


incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Registrar</h1>

    <a href="/www/bienesraices_inicio/admin" class="boton boton-verde">voler</a>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form method="POST" enctype="multipart/form-data" action="/www/bienesraices_inicio/admin/propiedades/crear.php" class="formulario">
        <fieldset>
            <legend>Informacion General</legend>

            <label for="titulo ">Titulo de la casa</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo de la casa" value="<?php echo $titulo; ?>">

            <label for="valor ">Valor de alquiler o venta</label>
            <input type="number" id="valor" name="valor" placeholder="valor" min="0" value="<?php echo $valor; ?>">

            <label for="imagen">Imagen</label>
            <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripcion</label>
            <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>
        </fieldset>

        <fieldset>
            <legend>Informaicon De La propiedad</legend>

            <label for="habitaciones">Habitaciones</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="habitaciones" min="1" max="10" value="<?php echo $habitaciones; ?>">

            <label for="banos">Baños</label>
            <input type="number" id="banos" name="banos" placeholder="Baños" min="1" max="10" value="<?php echo $banos; ?>">

            <label for="estacionamiento">Estacionamiento</label>
            <input type="number" id="estacionamiento" name="estacionamiento" placeholder="estacionamiento" min="1" max="10" value="<?php echo $estacionamiento; ?>">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedor">
                <option value="" disabled selected>-- Selecciones --</option>
                <?php while($vendedor = mysqli_fetch_assoc($resultado)): ?>
                    <option <?php echo $vendedorId === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id']; ?>"><?php echo $vendedor['nombre']. " " . $vendedor['apellido']; ?></option>
                <?php endwhile; ?>
            </select>
        </fieldset>

        <input type="submit" value="Crear" class="boton boton-verde">
    </form>
</main>


<?php incluirTemplate('footer'); ?>