<?php
require 'includes/funciones.php';
incluirTemplate('header', $inicio = true);
?>

<main class="contenedor seccion">
  <h1>Mas Sobre Nosotros</h1>

  <div class="iconos-nosotros">
    <div class="icono">
      <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy" />
      <h3>Seguridad</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci,
        consequuntur ipsa suscipit quis, iusto voluptatum corrupti
        laboriosam, aut atque tenetur a! Mollitia repudiandae, natus sed
        fugiat deleniti cupiditate consequuntur ex!
      </p>
    </div>

    <div class="icono">
      <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy" />
      <h3>Precio</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci,
        consequuntur ipsa suscipit quis, iusto voluptatum corrupti
        laboriosam, aut atque tenetur a! Mollitia repudiandae, natus sed
        fugiat deleniti cupiditate consequuntur ex!
      </p>
    </div>

    <div class="icono">
      <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy" />
      <h3>Tiempo</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci,
        consequuntur ipsa suscipit quis, iusto voluptatum corrupti
        laboriosam, aut atque tenetur a! Mollitia repudiandae, natus sed
        fugiat deleniti cupiditate consequuntur ex!
      </p>
    </div>
  </div>
</main>

<section class="seccion contenedor">
  <h2>Casas y departamentos en venta</h2>
  <?php
    $limite = 3;
    include 'includes/templates/anuncios.php';
  ?>

  <div class="alinear-derecha">
    <a href="anuncios.php" class="boton-verde">Ver Todas</a>
  </div>
</section>

<section class="imagen-contacto">
  <h2>Encuentra la casa de tus sueños</h2>
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni eligendi
    natus quia, quod aut deleniti quos, placeat animi eaque consectetur
    autem ratione vitae ad eius? Suscipit, quidem. Et, quam ducimus.
  </p>
  <a href="contacto.html" class="boton-amarillo">Contactanos</a>
</section>

<div class="contenedor seccion seccion-inferior">
  <section class="blog">
    <h3>Nuestro Blog</h3>
    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source srcset="build/img/blog1.webp" type="image/webp" />
          <source srcset="build/img/blog1.jpg" type="image/jpeg" />
          <img loading="lazy" src="build/img/blog1.jpg" alt="texto entrada blog" />
        </picture>
      </div>

      <div class="texto-entrada">
        <a href="entrada.html">
          <h4>Terraza en el techo de tu casa</h4>
          <p class="informacion-meta">
            Escrito el: <span>25/03/2023</span> por: <span>Admin</span>
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Maiores voluptas dignissimos officiis quae.
          </p>
        </a>
      </div>
    </article>

    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source srcset="build/img/blog2.webp" type="image/webp" />
          <source srcset="build/img/blog2.jpg" type="image/jpeg" />
          <img loading="lazy" src="build/img/blog1.jpg" alt="texto entrada blog" />
        </picture>
      </div>

      <div class="texto-entrada">
        <a href="entrada.html">
          <h4>Guia para decoracion en tu hogar</h4>
          <p class="informacion-meta">
            Escrito el: <span>25/03/2023</span> por: <span>Admin</span>
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Maiores voluptas dignissimos officiis quae.
          </p>
        </a>
      </div>
    </article>
  </section>

  <section class="testimoniales">
    <h3>Testimoniales</h3>

    <div class="testimonial">
      <blockquote>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A vero,
        nam debitis omnis dolores maxime doloremque.
      </blockquote>
      <p>- JhonSmith</p>
    </div>
  </section>
</div>

<?php incluirTemplate('footer'); ?>