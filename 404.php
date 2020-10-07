<?php get_header(); ?>
<section id="banner-simples">
    <figure class="bg-banner">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/generico/404.jpg" alt="<?php the_title(); ?>" class="banner-img">
    </figure>
    <div class="container">
        <div class="banner-text">
            <h1><?php echo get_field('titulo_principal'); ?></h1>
        </div>
    </div>
    <div class="efeito-banner" style="background: url(<?php echo get_template_directory_uri(); ?>/dist/img/banner/efeito-banner.png"></div>
</section>
<div class="container not-found p-5">
    <div class="row justify-content-center p-md-5">
        <div class="col-md-10 text-center">
            <h1 class="font-weight-bold"> 404 </h1>
            <p class="text-center">A página que você tentou acessar não existe, se você acredita que isso seja um erro, por favor contate-nos</p>
            <a href="<?php echo site_url(); ?>" class="wp-block-button__link" title="Voltar a página anterior">Voltar</a>
        </div>
    </div>
</div>
<?php get_footer(); ?>