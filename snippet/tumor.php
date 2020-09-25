<section id="tumor">
  <div class="container">
    <div class="row">
      <div class="col-md-6 p-4  tumor-container">
        <h2 class="title">Tipos de tumor</h2>
        <?php the_content(); ?>
        <!-- Icones -->
        <?php get_template_part('snippet/icones'); ?>
      </div>
      <div class="col-md-6 p-4 vertical-center">
        <div>
          <figure class="img-tumor">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/generico/tipos_tumor.png" alt="Tipos de Tumor">
          </figure>
        </div>
      </div>
    </div>
  </div>
</section>