<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
      <h1>Nosotros</h1>
      <div class="contenido-nosotros">
        <div class="imagen">
          <picture>
            <source srcset="build/img/nosotros.webp" type="image/webp" />
            <source srcset="build/img/nosotros.jpg" type="image/jpeg" />
            <img
              loading="lazy"
              src="build/img/nosotros.jpg"
              alt="Sobre nosotros"
            />
          </picture>
        </div>

        <div class="texto-nosotros">
          <blockquote>25 anos de esperiencia</blockquote>

          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos libero
            aliquam culpa asperiores ea fugiat eveniet quidem minus a!
            Asperiores quidem amet sunt quam sed mollitia quisquam natus saepe
            esse. Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Dolor fugit consectetur aspernatur reiciendis ipsa facilis impedit
            aliquid! Quod laudantium similique labore cumque ipsa distinctio
            exercitationem provident odit aperiam, nobis itaque.
          </p>
        </div>
      </div>
    </main>

    <section class="contenedor seccion">
        <h1>Mas Sobre Nosotros</h1>
  
        <div class="iconos-nosotros">
          <div class="icono">
            <img
              src="build/img/icono1.svg"
              alt="Icono seguridad"
              loading="lazy"
            />
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
    </section>

    <?php incluirTemplate('footer'); ?>
