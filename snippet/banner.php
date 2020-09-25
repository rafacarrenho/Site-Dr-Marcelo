<section id="banner">
  <figure>
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="banner-img">
  </figure>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="banner-text">
          <h1><?php echo get_field('titulo_principal'); ?></h1>
          <h2><?php echo get_field('titulo_secundario'); ?></p>
        </div>
        <!-- <h5 class="btn-agende-agora">Agende agora</h5> -->
      </div>
      <div class="col-md-4 form-container">
        <?php echo do_shortcode('[contact-form-7 id="6" title="Contato Banner"]'); ?>
      </div>
    </div>
  </div>
</section>