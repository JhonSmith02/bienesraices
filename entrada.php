<?php
    include './includes/templates/header.php';
?>

    <main class="contenedor seccion contenido-centrado">
      <h1>Titulo Pagina1</h1>

      
      <picture>
        <source srcset="build/img/destacada2.webp" type="image/webp" />
        <source srcset="build/img/destacada2.jpg" type="image/jpeg" />
        <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen" />
      </picture>

      <p class="informacion-meta">Escrito el: <span>27/03/2023</span> Por <span>Admin</span></p>

      <div class="resumen-propiedad">
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores id
          totam alias praesentium non mollitia optio dolorem qui iusto tempore.
          Natus et officia dolore commodi sunt minus, totam numquam accusantium!
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere vero
          in odit, dolor, atque quos fugit similique cum et neque minima dolore
          sint. Velit minima dignissimos, earum eum incidunt quas!
        </p>
      </div>
    </main>

    <?php incluirTemplate('footer'); ?>