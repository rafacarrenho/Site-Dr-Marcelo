<?php
$phone = '5511941648586';
$message = '?text=Ol%C3%A1%2C%20Vi%20seu%20site%20e%20gostaria%20de%20informa%C3%A7%C3%B5es%20sobre%20a%20consulta.';
$whatsapi = 'https://wa.me/';

if (is_page('wpp')) { ?>
    <script>
        window.onload = function() {
            window.setTimeout(function() {
                location.href = "<?php echo $whatsapi . $phone . $message ?>";
            }, 3000);
        };
    </script>
<?php } ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="page-central">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    <?php endwhile;
else : ?>
    <p><?php _e('Desculpe, não há posts a exibir.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>