<?php /* Template Name: Template Agende sua */ ?>

<?php get_header(); ?>
<!-- Banner -->
<?php get_template_part('snippet/banner-simples'); ?>

<!-- Conteudo interno -->
<section id="conteudo-interno">
  <div class="container py-5">
    <h1 class="title"><?php the_title(); ?></h1>
    <?php the_content(); ?>
  </div>
</section>

<section id="paginas-internas-destaque">
  <div class="container py-4">

  </div>
</section>

<!-- Call to Action -->
<?php get_template_part('snippet/calltoaction'); ?>

<!-- Blog -->
<?php get_template_part('snippet/blog'); ?>

<!-- Modal -->
<?php get_template_part('snippet/whatsapp') ?>

<?php get_footer(); ?>