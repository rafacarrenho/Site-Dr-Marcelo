<?php
$args_category = array(
  'posts_per_page' => 8,
  'post_type' => 'post',
  'order'                  => 'DESC',
  'orderby'                => 'ID',
);
$filters_query = new WP_Query($args_category);
if ($filters_query->have_posts()) : ?>
  <section id="blog-sidebar">
    <h2 class="title">Últimas postagens</h2>
    <?php while ($filters_query->have_posts()) : $filters_query->the_post(); ?>
      <div class="blog-sidebar-container">
        <div class="mb-2">
          <a href="<?php the_permalink(); ?>" title="Ir para o Blog: <?php the_title(); ?>">
            <figure class="blog-sidebar-figure">
              <?php the_post_thumbnail('thumbnail'); ?>
            </figure>
          </a>
        </div>
        <a href="<?php the_permalink(); ?>" title="Ir para o Blog: <?php the_title(); ?>">
          <h4><?php the_title(); ?></h4>
        </a>
        <p><?php echo get_the_date(); ?></p>
      </div>
    <?php endwhile; ?>
  </section>
<?php
  wp_reset_postdata();
endif; ?>