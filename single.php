<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!-- Banner -->
        <?php get_template_part('/snippet/banner-simples'); ?>
        <section id="banner-interno" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"></section>
        <section class="py-5">
            <article class="container">
                <div class="row justify-content-between">
                    <div class="col-md-8">
                        <h1 class="title"><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </div>
                    <div class="col-md-4">
                        <?php get_template_part('snippet/sidebar') ?>
                        <?php if (is_active_sidebar('sidebar-primary')) : ?>
                            <?php get_sidebar('sidebar'); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </article>
        </section>
    <?php endwhile; ?>

    <?php get_template_part('/snippet/paginacao'); ?>

<?php else : ?>
    <p><?php _e('Desculpe, não há posts a exibir.'); ?></p>
<?php endif; ?>

<?php get_template_part('/snippet/whatsapp'); ?>

<?php get_footer(); ?>