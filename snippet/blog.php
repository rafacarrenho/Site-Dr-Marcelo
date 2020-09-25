<?php
$args_category = array(
  'posts_per_page' => 4,
  'post_type' => 'post',
  'order'                  => 'DESC',
  'orderby'                => 'ID',
);
$filters_query = new WP_Query($args_category);
if ($filters_query->have_posts()) : ?>
  <section id="blog">
    <div class="container">
      <h2 class="title">Novidades e Artigos</h2>
      <div class="row">
        <?php while ($filters_query->have_posts()) : $filters_query->the_post(); ?>
          <div class="col-md-3 py-3 blog-cards">
            <div class="img-blog-out mb-2">
              <a href="<?php the_permalink(); ?>" title="Ir para o Blog: <?php the_title(); ?>">
                <figure>
                  <?php the_post_thumbnail('thumbnail'); ?>
                </figure>
              </a>
            </div>
            <a href="<?php the_permalink(); ?>" title="Ir para o Blog: <?php the_title(); ?>">
              <h4><?php the_title(); ?></h4>
            </a>
            <p>
              <?php echo get_excerpt(100); ?>
            </p>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
<?php
  wp_reset_postdata();
endif; ?>