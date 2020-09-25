<?php get_header(); ?>

<!-- Banner -->
<?php get_template_part('/snippet/banner-simples'); ?>

<?php if (have_posts()) : ?>

    <div class="container pt-5">
        <div class="row">
            <div class="col-md-8">
                <h1 class="title">Blog/Artigos</h1>
                <div class="row">
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="col-md-11 py-3 page-blog">
                            <div class="row">
                                <div class="col-md-5 px-2 py-2">
                                    <?php if (has_post_thumbnail($post->ID)) : ?>
                                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-medium'); ?>
                                        <figure>
                                            <img class="img-fluid" src="<?php echo $image[0]; ?>">
                                        </figure>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-7 py-2">
                                    <h3><?php the_title(); ?></h3>
                                    <?php echo get_excerpt(280); ?>
                                    <div class="text-right">
                                        <a class="btn-saiba-mais mr-0" href="<?php the_permalink() ?>">leia mais</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
                <div class="row justify-content-center">
                    <nav class="pagination">
                        <?php pagination_bar(); ?>
                    </nav>
                </div>
            </div>
            <div class="col-md-4">
                <?php get_template_part('snippet/sidebar') ?>
                <?php get_sidebar('sidebar'); ?>
            </div>
        </div>
    </div>
<?php else : ?>
    <p><?php _e('Desculpe, não há posts a exibir.'); ?></p>
<?php endif; ?>

<!-- WHATSAPPP -->
<?php get_template_part('snippet/whatsapp') ?>

<?php get_footer(); ?>