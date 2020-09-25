<section id="calltoaction">
  <figure>
    <?php $imgcalltoaction = get_field('imagem_calltoaction'); ?>
    <img class="calltoaction-img" src="<?php echo esc_url($imgcalltoaction['url']); ?>" alt="<?php echo esc_attr($imgcalltoaction['alt']); ?>">
  </figure>
  <div class="container">
    <div class="callcontainer">
      <div class="calltele">
        <h4><?php the_field('texto_calltoaction') ?></h4>
      </div>
      <?php get_template_part('snippet/agende-agora') ?>
    </div>
  </div>
</section>