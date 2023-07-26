<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Contacto</h1>


        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen">
        </picture>

        <h2>Por favor ingrese los datos de contacto</h2>

        <form class="formulario">
            <fieldset>
                <legend>Informacion Personal</legend>
                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu Nombre" id="nombre">

                <label for="email">E-mail</label>
                <input type="email" placeholder="Tu Email" id="email">

                <label for="telefono">Telefono</label>
                <input type="tel" placeholder="Tu Numero" id="telefono">

                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje"></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion Sobre El Barco</legend>
                <label for="opciones">Seleccione el barco</label>
                <select name="" id="opciones">
                    <option value="" disabled selected>-- Selecciones --</option>
                    <option value="faro">Faro</option>
                    <option value="serenita">Serenita</option>
                </select>

                <label for="dias">Cantidad de dias</label>
                <input type="number" placeholder="Dias" id="dias" min="0">

                <label for="personas">Cantidad de personas</label>
                <input type="number" placeholder="Numero de personas" id="personas" min="0">
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>
                <P>Como desea que lo contactemos</P>
                <div class="forma-contacto">
                    <label for="contactar-telefono">WhatsApp</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

                    <label for="contactar-email">E-mail</label>
                    <input name="contacto" type="radio" value="email">
                </div>

                <p>Ingrese la fecha y hora para ponernos en contacto</p>

                <label for="fecha">Fecha</label>
                <input type="date" id="fecha">

                <label for="hora">Hora</label>
                <input type="time" id="hora" min="">
            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>
    

    <?php incluirTemplate('footer'); ?>