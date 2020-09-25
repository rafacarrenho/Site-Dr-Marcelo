<section id="banner-simples">
  <figure class="bg-banner">
    <img src="
    <?php if (is_home()) {
      $img = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')), 'full');
      echo $img[0];
    } else {
      echo get_the_post_thumbnail_url();
    }; ?>" alt="<?php the_title(); ?>" class="banner-img">
  </figure>
  <div class="container">
    <div class="banner-text">
      <h1><?php echo get_field('titulo_principal'); ?></h1>
    </div>
  </div>
  <div class="efeito-banner" style="background: url(<?php echo get_template_directory_uri(); ?>/dist/img/banner/efeito-banner.png"></div>
</section>